<?php
 /**
 * This file is part of LEPTON Core, released under the GNU GPL
 * Please see LICENSE and COPYING files in your package for details, specially for terms and warranties.
 * 
 * NOTICE:LEPTON CMS Package has several different licenses.
 * Please see the individual license in the header of each single file or info.php of modules and templates.
 *
 * @author          Frank Heyne for the LEPTON Project 
 * @copyright       2011, Frank Heyne, LEPTON Project
 * @link            http://www.LEPTON-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see LICENSE and COPYING files in your package
 * @version         $Id: class.securecms.php 1738 2012-02-02 06:26:12Z phpmanufaktur $
 *
 */

 /* //leptoken debug file
if (!function_exists('t_debug')) {
function t_debug($s) {
	$fp = fopen(WB_PATH.'/framework/_debug_token.txt', 'a');
	fwrite($fp, date('r') ." $s\r\n");
	fclose($fp);
}}
*/

class SecureCMS {
	var $_salt   = '';
	var $_reftoken = '';

	function SecureCMS()
	{
		$this->_salt = $this->_generate_salt();
	}

	function _generate_salt()
	{
		// server depending values
 		$salt  = ( isset($_SERVER['SERVER_SIGNATURE']) ) ? $_SERVER['SERVER_SIGNATURE'] : 'L';
		$salt .= ( isset($_SERVER['SERVER_SOFTWARE']) ) ? $_SERVER['SERVER_SOFTWARE'] : 'E';
		$salt .= ( isset($_SERVER['SERVER_NAME']) ) ? $_SERVER['SERVER_NAME'] : 'P';
		$salt .= ( isset($_SERVER['SERVER_ADDR']) ) ? $_SERVER['SERVER_ADDR'] : 'T';
		$salt .= ( isset($_SERVER['SERVER_PORT']) ) ? $_SERVER['SERVER_PORT'] : 'ON';
		$salt .= PHP_VERSION;
		$salt .= time();
		return $salt;
	}

/*
 * creates Tokens for CSRF protection
 * @access public
 * @return string
 *
 * requirements: an active session must be available
 * should be called only once for a page!
 */
	function getToken()
	{
		if (function_exists('microtime')) {
			list($usec, $sec) = explode(" ", microtime());
			$time = (string)((float)$usec + (float)$sec);
		} else {
			$time = (string)time();
		}
		$token = substr(md5($time . $this->_salt), 0, 21) . "z" . substr($time, 0, 10);
		(isset($_SESSION['Tokens'])) ? $_SESSION['Tokens'][] = $token : $_SESSION['Tokens'] = array($token);
//		t_debug("ref in getToken: ".$this->_reftoken);
		(isset($_SESSION['Tokens'])) ? $_SESSION['Tokens'][$token] = $this->_reftoken : $_SESSION['Tokens'] = array($token => $this->_reftoken);
		return $token;
	}

/*
 * checks received token against session-stored tokens
 * @access public
 * @return bool:    true if numbers matches against one of the stored tokens
 *
 * requirements: an active session must be available
 * this check will prevent from multiple sending a form. history.back() also will never work
 */
	function checkToken()
	{
		if (!LEPTOKEN_LIFETIME) return true;
		
		$timelimit = (string) (time() - LEPTOKEN_LIFETIME);  
		$retval = false;
		$href = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
		
		if (isset($_GET['leptoken'])) {
			$tok = $_GET['leptoken'];
		} elseif (isset($_GET['amp;leptoken'])) {
			$tok = $_GET['amp;leptoken'];
		} else {
			return $retval;
		}
		
		
		if (isset($_SESSION['Tokens'])) 
		{
			// delete dated tokens, except the last one
			foreach ($_SESSION['Tokens'] as $token) {
				if (($timelimit > substr($token, -10)) and (count($_SESSION['Tokens']) > 1)) {
					unset($_SESSION['Tokens'][$token]);
				}
			}

			$tokens = $_SESSION['Tokens'];
			foreach ($tokens as $token => $ref) {
				$retval = (($tok == $token) && (($ref == '') || (strpos($href, $ref) > 1)));
				if ($retval) {
//					$this->_reftoken = $tok;
//					t_debug("old ref: $ref  old href: $href  new ref in checkToken: ".$this->_reftoken);
					break;
				}
			}
		}
		
		return $retval;
	}
}

?>