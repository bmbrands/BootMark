<?php
require_once 'Michelf/Markdown.php';
require_once 'lib.php';
require_once 'css/fonts.php';

$CFG = new stdClass();
$CFG->wwwroot = 'http://clue/bmbr/bootmark';
$CFG->sitename = 'BOOTMARK';
//$CFG->font = 'Roboto';
$CFG->font = 'OpenSans';
//$CFG->font = 'NewsCycle';
$CFG->background = 'images/background.png';

$CFG->pages = array(
                    'index'=>'Home',
                    'example'=>'Examples',
                    'readme'=>'Read Me!');


$example_subnavitems = array(
                    '#markdown'=>'Markdown',
                    '#headers'=>'Headers',
                    '#links'=>'Links',
                    '#images'=>'Images',
                    '#lists'=>'Lists',
                    '#tables'=>'Tables',
                    );

$readme_subnavitems = array(
                    '#about'=>'About',
                    '#config'=>'Config',
                    '#markdownusage'=>'Using Markdown',
                    '#sections'=>'Sections'
                    );

