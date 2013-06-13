<?php

function render_navbar() {
    global $CFG;
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
        $content .= '<li>
                        <a href="./'.$url.'">'.$name.'</a>
                      </li>';
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
          $content .= '<li><a href='.$url.'></i>'.$name.'</a></li>';
    }
    $content .=  '</ul>';
    return $content;
}