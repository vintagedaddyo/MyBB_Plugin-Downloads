<?php
/*
 * MyBB: Downloads
 *
 * File: downloads_config.lang.php
 * 
 * Authors: Vintagedaddyo, Edson Ordaz
 *
 * MyBB Version: 1.8
 *
 * Plugin Version: 2.0.3
 * 
 */

// plugin_info

$l['downloads_plugin_Name'] = 'Downloads';
$l['downloads_plugin_Desc'] = 'File Downloads.';
$l['downloads_plugin_Web'] = 'http://community.mybb.com/user-6029.html';
$l['downloads_plugin_Auth'] = 'Edson Ordaz & updated by Vintagedaddyo';
$l['downloads_plugin_AuthSite'] = 'http://community.mybb.com/user-6029.html';
$l['downloads_plugin_Ver'] = '2.0.3';
$l['downloads_plugin_GUID'] = '';
$l['downloads_plugin_Compat'] = '18*';
 
$l['downloads_plugin'] = "Downloads";
$l['downloads_plugin_des'] = "File Downloads.";

$l['settingsdownloads'] = "Configuration";

//general
$l['general'] = "General";
$l['activedownloads'] = "Enable Downloads";
$l['activedownloadsdes'] = "Select whether the plugin will be active in order to display the downloads.";
$l['createdownsusers'] = "Users can create downloads";
$l['createdownsusersdes'] = "Select whether users can create downloads.";
$l['validatedownloads'] = "Validate downloads";
$l['validatedownloadsdes'] = "Choose whether to validate the user-created downloads or showing up automatically";
$l['groupssenddowns'] = "Groups can create downloads";
$l['groupssenddownsdes'] = "Select groups of users that if they can create downloads. (only if enabled).";
$l['paginationcategorys'] = "Categories per page";
$l['paginationcategorysdes'] = "Enter the number of categories to display per page.";
$l['paginationarchive'] = "Files per page";
$l['paginationarchivedes'] = "Enter the number of files to show per page in the categories.";

//comments
$l['canhtmlcomments'] = "Allow HTML";
$l['canhtmlcommentsdes'] = "They can enter html in comments";
$l['canbbcodecomments'] = "Allow BBCode";
$l['canbbcodecommentsdes'] = "They can enter Bbcode in comments";
$l['cansmiliescomments'] = "Allow Smilies";
$l['cansmiliescommentsdes'] = "They can enter smilies in comments";
$l['canimgcomments'] = "Allow Images";
$l['canimgcommentsdes'] = "They can enter images in comments";
$l['canbadwordcomments'] = "Allow bad words";
$l['canbadwordcommentsdes'] = "They can enter bad words (To set sees bad word go <a href='index.php?module=config-badwords' />Word Filter</a>)";
$l['showbbcodeeditor'] = "Show BBCode editor";
$l['showbbcodeeditordes'] = "Show the editor buttons for BBCode";

//extras
$l['extras'] = "Extras";
$l['counbyt'] = "Count as topics and posts";
$l['counbytdes'] = "Enable this option to set up downloads join the counter of threads and posts.";
$l['downspermitid'] = "Downloads created allowed";
$l['downspermitiddes'] = "Enter the number of downloads allowed to create.";
$l['threadsrequer'] = "Required threads";
$l['threadsrequerdes'] = "Enter the number of threads required to create downloads.";
$l['postrequest'] = "Required posts";
$l['postrequestdes'] = "Enter the number of posts needed to create Download.";
$l['reputationrequest'] = "Reputation required";
$l['reputationrequestdes'] = "Enter the number of reputation required to create downloads.";
$l['timeonlinerequest'] = "Uptime required";
$l['timeonlinerequestdes'] = "Enter the time line needed to create Download.";

//images
$l['showportadaincategory'] = "Show the title page in the download list";
$l['showportadaincategorydes'] = "Choose whether to display the cover image to download the list of downloads.";
$l['maxsizeportadacategory'] = "Size categories title page";
$l['maxsizeportadacategorydes'] = "Enter the size of the title page images in category ONLY if it is enabled to show category-list cover (separate them with an X).";
$l['sizeportada'] = "Maximum size of the title page";
$l['sizeportadades'] = "Enter the maximum size you should have the title page to see the download. If the size is automatically resized older (separate them with an X).";
$l['sizeimages'] = "Maximum size of the images";
$l['sizeimagesdes'] = "enter the maximum size that should have pictures of any discharge (if any). If the image is automatically resized older (separate them with an X).";

//save settings and errors
$l['successsavesettings'] = "You have successfully saved the settings.";
$l['notpaginationcat'] = "You can leave blank the number of paging the category.";
$l['notpaginationarchive'] = "You can leave blank the number of paging files.";
?>