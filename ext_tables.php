<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


t3lib_extMgm::addPlugin(array('LLL:EXT:murmur/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY.'_pi1'),'list_type');


t3lib_extMgm::addStaticFile($_EXTKEY,"pi1/static/","Murmur status");


if (TYPO3_MODE == 'BE')	{
		
	t3lib_extMgm::addModule('tools','txmurmurM1','',t3lib_extMgm::extPath($_EXTKEY).'mod1/');
}
?>