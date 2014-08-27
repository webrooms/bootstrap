<?php
if ( !defined( 'MEDIAWIKI' ) ) die();

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'BootStrapSkinSidebar',
	'author' => array(
		'[http://www.entgaming.net]',
	),
	'descriptionmsg' => 'sidebar-desc',
	'url' => 'http://www.entgaming.net',
);

$wgExtensionMessagesFiles['BootStrapSkinSidebar'] = __DIR__ . '/BootStrapSkinSidebar.i18n.php';

$wgResourceModules['ext.BootStrapSkinSidebar'] = array(
        'styles' => array(
                ''			
	           ),
        'scripts' => array(
	             'modules/ext.classie.js',
		     'modules/ext.gnmenu.js',
		     'modules/ext.modernizr.js',
                     'modules/ext.sidebar.js',
	            ),
 
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'BootStrapSkinSidebar',
	
);
