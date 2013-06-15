<?php

function bootmark_header(){
    global $CFG;
    $fontcss = bootmark_get_font();
    $content = '
    <!DOCTYPE html>
        <html>
            <head>
                <title>'.$CFG->sitename.'</title>
                 <style>'. $fontcss.'</style>
                 <link href="'.$CFG->wwwroot.'/css/bootstrap.css" rel="stylesheet">
                 <link href="'.$CFG->wwwroot.'/css/bootmark-sidenav.css" rel="stylesheet">
                 <link href="'.$CFG->wwwroot.'/css/custom.css" rel="stylesheet">
                 <script src="'.$CFG->wwwroot.'/javascript/jquery.js"></script>
                 <script src="'.$CFG->wwwroot.'/javascript/bootstrap.min.js"></script>
            </head>
   ';
    return $content;
}


function bootmark_body(){
    global $CFG, $page;
    $content = '
            <body data-spy="scroll" data-target=".bootmark-sidebar" class="'.$page.'">
                <div class="bootmark-wrapper">
                    <div class="fixedbackground"></div>
   ';
    return $content;
}

function bootmark_heading() {
    global $CFG,$page;
    $content = '<header class="bootmark-heading">
                  <div class="container bootmark-title">
                  <h1 >'.$CFG->sitename.'</h1>
               </header>';
    return $content;
}

function bootmark_param($parname) {

    if (isset($_POST[$parname])) {       // POST has precedence
        $param = $_POST[$parname];
    } else if (isset($_GET[$parname])) {
        $param = $_GET[$parname];
    } else {
        return 'index';
    }

    if (is_array($param)) {
        return '';
    }
    return $param;
}


function render_navbar() {
    global $CFG, $page;
    $navbaritems = $CFG->pages;
    $content = '';
    $content .= '
                <div class="navbar navbar-fixed-top">
                  <div class="navbar-inner">
                    <div class="container-fluid">
                      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                         <div class="nav-collapse collapse  center">
                         <ul class="nav">';
    foreach ($navbaritems as $url => $name) {
        $current = '';
        if ($url == $page) {
            $current = 'current';
        }
        $content .= '<li>
                        <a href="./index.php?page='.$url.'" class="'.$current.'">'.$name.'</a>
                      </li>
                      ';
    }
    $content .= '</ul>
              </div>
            </div>
          </div>
       </div>';
    return $content;
}

function render_subnav($subnavitems) {
    global $CFG;
    $content = '';
    $content .= '<ul class="nav nav-list bootmark-sidenav">';
    foreach ($subnavitems as $url => $name) {
        $content .= '<li><a href='.$url.'></i><span class="bootmarkmenuitem">'.$name.'<span></a></li>';
    }
    $content .=  '</ul>';
    return $content;
}