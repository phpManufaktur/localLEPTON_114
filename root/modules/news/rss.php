<?php

/**
 *  @module         news
 *  @version        see info.php of this module
 *  @author         Ryan Djurovich, Rob Smith, Dietrich Roland Pehlke, Christian M. Stefan (Stefek), Jurgen Nijhuis (Argos)
 *  @copyright      2004-2011, Ryan Djurovich, Rob Smith, Dietrich Roland Pehlke, Christian M. Stefan (Stefek), Jurgen Nijhuis (Argos) 
 *  @license        GNU General Public License
 *  @license terms  see info.php of this module
 *  @platform       see info.php of this module
 *  @requirements   PHP 5.2.x and higher
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

// Check that GET values have been supplied
if(isset($_GET['page_id']) AND is_numeric($_GET['page_id'])) {
	$page_id = $_GET['page_id'];
} else {
	header('Location: /');
	exit(0);
}

if (isset($_GET['group_id']) AND is_numeric($_GET['group_id'])) {
	$group_id = (int)$_GET['group_id'];
} else {
	$group_id = -1;	// Keep in mind, that $group_id could be 0 (no group)
}
define('GROUP_ID', $group_id);

// Include WB files
// require_once('../../config.php'); /* can be removed as long as class.secure is included
require_once(WB_PATH.'/framework/class.frontend.php');
$database = new database();
$wb = new frontend();
$wb->page_id = $page_id;
$wb->get_page_details();
$wb->get_website_settings();

//checkout if a charset is defined otherwise use UTF-8
if(defined('DEFAULT_CHARSET')) {
	$charset=DEFAULT_CHARSET;
} else {
	$charset='utf-8';
}

// Sending XML header
header("Content-type: text/xml; charset=$charset" );

// Header info
// Required by CSS 2.0
echo '<?xml version="1.0" encoding="'.$charset.'"?>';
?> 
<rss version="2.0">
	<channel>
		<title><?php echo PAGE_TITLE; ?></title>
		<link>http://<?php echo $_SERVER['SERVER_NAME']; ?></link>
		<description> <?php echo PAGE_DESCRIPTION; ?></description>
<?php
// Optional header info 
?>
		<language><?php echo strtolower(DEFAULT_LANGUAGE); ?></language>
		<copyright><?php $thedate = date('Y'); $websitetitle = WEBSITE_TITLE; echo "Copyright {$thedate}, {$websitetitle}"; ?></copyright>
		<managingEditor><?php echo SERVER_EMAIL; ?></managingEditor>
		<webMaster><?php echo SERVER_EMAIL; ?></webMaster>
		<category><?php echo WEBSITE_TITLE; ?></category>
		<generator>LEPTON CMS</generator>
<?php
// Get news items from database
$t = TIME();
$time_check_str= "(published_when = '0' OR published_when <= ".$t.") AND (published_until = 0 OR published_until >= ".$t.")";

//	Query
if ( $group_id > -1 ) {
	$query = "SELECT * FROM ".TABLE_PREFIX."mod_news_posts WHERE group_id=".$group_id." AND page_id = ".$page_id." AND active=1 AND ".$time_check_str." ORDER BY posted_when DESC";
} else {
	$query = "SELECT * FROM ".TABLE_PREFIX."mod_news_posts WHERE page_id=".$page_id." AND active=1 AND ".$time_check_str." ORDER BY posted_when DESC";	
}
$result = $database->query($query);

// Generating the news items
while($item = $result->fetchRow( MYSQL_ASSOC )){ ?>
		<item>
			<title><![CDATA[<?php echo htmlentities( stripslashes($item["title"])); ?>]]></title>
			<description><![CDATA[<?php echo htmlentities( stripslashes( $item["content_short"] ) ); ?>]]></description>
			<guid><?php echo WB_URL.PAGES_DIRECTORY.$item["link"].PAGE_EXTENSION; ?></guid>
			<link><?php echo WB_URL.PAGES_DIRECTORY.$item["link"].PAGE_EXTENSION; ?></link>
			<pubDate><?php echo date('D, d M Y - H:i:s O',$item["published_when"]); ?></pubDate>
			<lastBuildDate><?php echo date('D, d M Y - H:i:s O',$item["posted_when"]); ?></lastBuildDate>
		</item>
<?php } ?>
	</channel>
</rss>