<?php

/**
 * This file is part of LEPTON Core, released under the GNU GPL
 * Please see LICENSE and COPYING files in your package for details, specially for terms and warranties.
 * 
 * NOTICE:LEPTON CMS Package has several different licenses.
 * Please see the individual license in the header of each single file or info.php of modules and templates.
 *
 * @author          Website Baker Project, LEPTON Project
 * @copyright       2004-2010, Website Baker Project
 * @copyright       2010-2011, LEPTON Project
 * @link            http://www.LEPTON-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see LICENSE and COPYING files in your package
 * @version         $Id: class.database.php 1666 2012-01-22 06:18:20Z phpmanufaktur $
 *
 */


// include class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {	
	include(WB_PATH.'/framework/class.secure.php'); 
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) { 
		include($root.'/framework/class.secure.php'); 
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php



require_once(WB_PATH.'/framework/functions.php');
	
global $database;
	
class database {
	
	private $error = '';
	private $connected = false;     
	private	$db_handle = false;
	private	$prompt_on_error = false;
	private	$override_session_check = false;
	
	/**
	 * Constructor of the class database
	 */
	public function __construct() {
		$this->connect();
	} // __construct()
	
	/**
	 * Destructor of the class database
	 */
	public function __destruct() {
		
	} // __desctruct()
	
	/**
	 * Set error
	 * @param string
	 */
	protected function set_error($error = '') {
		$this->error = $error;
	} // set_error()
	
	/**
	 * Return the last error
	 * @return string
	 */
	public function get_error() {
	    return $this->error;
	} // get_error()
	
	/**
	 * Check if there occured any error
	 * @return boolean
	 */
	public function is_error() {
		return (!empty($this->error)) ? true : false;
	} // is_error()
	
	/**
	 * Set the MySQL DB handle
	 * 
	 * @param resource $db_handle
	 */
	protected function set_db_handle($db_handle) {
	    $this->db_handle = $db_handle;
	} // set_db_handle()
	
	/**
	 * Get the MySQL DB handle
	 * 
	 * @return resource or boolean false if no connection is established
	 */
	protected function get_db_handle() {
	    return $this->db_handle;
	} // get_db_handle()
	
	/**
	 * Set the connection state
	 * 
	 * @param boolean $connected
	 */
	protected function set_connected($connected) {
	    $this->connected = $connected;
	} // set_connected()
	
	/**
	 * Check if the connection is established
	 * 
	 * @return boolean
	 */
	protected function is_connected() {
	    return $this->connected;
	} // is_connected()
	
	/**
	 * Establish the connection to the desired database defined in /config.php
	 * 
	 * This function does not connect multiple times, if the connection is
	 * already established the existing database handle will be used.
	 * 
	 * @return boolean
	 */
	final function connect() {
		// use DB_PORT only if it differ from the standard port 3306
		$host = (DB_PORT !== '3306') ? DB_HOST.':'.DB_PORT : DB_HOST;
		if (false !== ($db_handle = mysql_connect($host, DB_USERNAME, DB_PASSWORD))) {
			// database connection is established
			$this->set_db_handle($db_handle);
			if (!mysql_select_db(DB_NAME, $this->get_db_handle())) {
				// error, can't select the Lepton DB
				$this->set_error(sprintf("[MySQL Error] Retrieved a valid handle (<b>%s</b>) but can't select the Lepton database (<b>%s</b>)!", $this->get_db_handle(), DB_NAME));
				trigger_error($this->get_error(), E_USER_ERROR);
			}
			else {
				$this->set_connected(true);
			}
		}
		else {
			// error, got no handle - beware, password may be empty!
			$this->set_db_handle(false);
			$pass = DB_PASSWORD;
			$pass = (empty($pass)) ? '- not set -' : DB_PASSWORD;
			$this->set_error(sprintf('[MySQL Error] Got no handle for database connection! Please check DB_HOST <b>%s</b>, DB_PORT <b>%s</b>, DB_USERNAME <b>%s</b> and DB_PASSWORD <b>%s</b>!', DB_HOST, DB_PORT, DB_USERNAME, $pass));$this->set_error(sprintf('[MySQL Error] Got no handle for database connection! Please check DB_HOST <b>%s</b>, DB_PORT <b>%s</b>, DB_USERNAME <b>%s</b> and DB_PASSWORD <b>%s</b>!', DB_HOST, DB_PORT, DB_USERNAME, $pass));
			trigger_error($this->get_error(), E_USER_ERROR);
		}
		return $this->is_connected();
	} // connect()
	
	/**
	 * Disconnect the established database connection.
	 * 
	 * Normally it is not neccessary to call this function, the database
	 * connection will be automatically closed by server.
	 * @return BOOL
	 */
	final protected function disconnect() {
		if ($this->is_connected()) {
			if (!mysql_close($this->get_db_handle())) {
				$this->set_error(sprintf('[MySQL Error #%d] %s', mysql_errno($this->get_db_handle()), mysql_error($this->get_db_handle())));
				return false;
			}
		}
		return true;
	} // disconnect()
	
	/**
	 * Switch prompting of errors on or off
	 * If $switch=true the database will trigger each error.
	 * 
	 * @param boolean $switch
	 */
	public function prompt_on_error($switch=true) {
		$this->prompt_on_error = $switch;
	} // prompt_on_error()
	
	/**
	 * Exec a SQL query and return a handle to queryMySQL
	 * @param STR $SQL - the query string to execute
	 * @return RESOURCE or NULL for error
	 */
	public function query($SQL) {
		if (!isset($_SESSION['LEPTON_SESSION']) && !$this->override_session_check) $this->__initSession();
		$query = new queryMySQL();
		if (false !== $query->query($SQL, $this->get_db_handle())) {
			// proper execution of the query
			return $query;
		}
		else {
			$caller = debug_backtrace();
			$this->set_error(sprintf(	'MySQL Query executed from file <b>%s</b> in line <b>%s</b>:<br />[MySQL Error #%d] %s<br /><b>Executed Query:</b><br /><i>%s</i><br />', 
										$caller[0]['file'], 
										$caller[0]['line'], 
										mysql_errno($this->get_db_handle()), 
										mysql_error($this->get_db_handle()), 
										$SQL));
			if (true === $this->prompt_on_error) {
				trigger_error($this->get_error(), E_USER_ERROR);
			}
			return null;
		}
	} // query()
	
	/**
	 *	Execute a SQL query and return the first row of the result array
	 *
	 *	@param	string	Any SQL-Query or statement
	 *	@param	const	Type for the fetchRow-method for the return-array.
	 *					Could be one of the following constants:
	 *					MYSQL_ASSOC, MYSQL_NUM or MYSQL_BOTH (default).
	 *					Any other value will result in MYSQL_BOTH.
	 *
	 *	@return	mixed 	Value of the table-field or NULL for error
	 */
	public function get_one($SQL, $type=MYSQL_BOTH) {
		$query = $this->query($SQL);
		if (($query !== null) && ($query->numRows() > 0)) {
			
			switch( $type ) {				
				case MYSQL_BOTH:
				case MYSQL_NUM:
				case MYSQL_ASSOC:
					break;			
				default:
					$type = MYSQL_BOTH;
			}
			
			$rows = $query->fetchRow($type);
			
			if ($type === MYSQL_ASSOC) {
				$temp = array_values($rows);
				return $temp[0];
			} else {
				return $rows[0];
			}
		}	
		return null;
	} // get_one()
	
	/**
	 * Read GUID from database
	 * Don't use the LEPTON_GUID because GUID may change while runtime!
	 * @return STR GUID
	 */
	private function getLeptonGUID() {
		if (defined("LEPTON_INSTALL")) return "E610A7F2-5E4A-4571-9391-C947152FDFB0";
		$this->override_session_check = true;
		$SQL = sprintf("SELECT value FROM %ssettings WHERE name='lepton_guid'", TABLE_PREFIX);
		$result = $this->get_one($SQL);
		$this->override_session_check = false;
		return $result;
	} // getLeptonGUID()
	
	/**
	 * Check the Lepton GUID
	 * 
	 * The Lepton GUID is splitted in two parts: the primary GUID which identify _this_
	 * installation and is unique in all Lepton installations worldwide and the second
	 * part of the GUID string (the last 12 digits) which contains informations about the
	 * installation, i.e. if the installation is registered. 
	 * @return BOOL
	 */
	private function __checkGUID() {
		$lepton_guid = $this->getLeptonGUID();
		if ((strlen($lepton_guid) < 37) || (substr_count($lepton_guid, '-') !== 4)) {
			// invalid GUID - create a new one!
			return false;
		}
		return true;
	} // __checkGUID()
	
	private function __initSession() {
		if (defined('SESSION_STARTED') && !isset($_SESSION['LEPTON_SESSION'])) {
			// $_SESSION for class.database.php
			$this->__checkGUID();
			$_SESSION['LEPTON_SESSION'] = true;
		}
	} // __initSession()
	
} // class database

final class queryMySQL {
	
	private $query_result = false;
	
	/**
	 * Execute a MySQL query statement and return the resource or false on error
	 * 
	 * @param string $SQL query
	 * @param resource $db_handle - a valid link identifier
	 * 
	 * @return resource
	 */
	public function query($SQL, $db_handle) {
		$this->query_result = mysql_query($SQL, $db_handle);
		return $this->query_result;
	} // query()
	
	/**
	 * Return the number of rows of the query result
	 * @return INT
	 */
	public function numRows() {
		return mysql_num_rows($this->query_result);
	} // numRows()
	
	/**
	 * Fetch a Row from the result array
	 * 
	 * Specify $array_type you want to get back: MYSQL_BOTH, MYSQL_NUM or MYSQL_ASSOC
	 * this function return FALSE if there is no further row.
	 * @param INT $array_type
	 * @return ARRAY
	 */
	public function fetchRow($array_type = MYSQL_BOTH) {
		return mysql_fetch_array($this->query_result, $array_type);
	} // fetchRow()
	
} // class queryMySQL
?>