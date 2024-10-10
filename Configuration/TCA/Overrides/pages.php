<?php

defined('TYPO3') or die();
// Register typeicon (the icon itself is registered in ext_tables.php)
$GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-news'] = 'tcarecords-pages-contains-news';
// add folder icon
$GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-tt_news'] = 'apps-pagetree-folder-contains-news';
$GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [0 => 'LLL:EXT:tt_news/Resources/Private/Language/locallang_tca.xlf:tt_news', 1 => 'tt_news', 2 => 'apps-pagetree-folder-contains-news'];
