<?php
require_once 'Michelf/Markdown.php';
require_once 'lib.php';
require_once 'css/fonts.php';

$CFG = new stdClass();
$CFG->wwwroot = 'http://clue/bmbr/bootmark';
$CFG->sitename = 'BootMark';
$CFG->font = 'Roboto';
//$CFG->font = 'OpenSans';
//$CFG->font = 'NewsCycle';
$CFG->background = 'images/scenegreen.jpg';

$CFG->pages = array('index.php'=>'Home',
                    'example.php'=>'Example',
                    'readme.php'=>'Readme');


