<?php
function bootmark_get_font() {
    GLOBAL $CFG;

    $newscycle = "
        @font-face {
        font-family: 'NewsCycle-Regular';
        src: url('".$CFG->wwwroot."/fonts/NewsCycle-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        }
        @font-face {
        font-family: 'NewsCycle-Bold';
        src: url('".$CFG->wwwroot."/fonts/NewsCycle-Bold.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        }
    ";

    $roboto = "
        @font-face {
        font-family: 'Roboto-Regular';
        src: url('".$CFG->wwwroot."/fonts/Roboto-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        }
        @font-face {
        font-family: 'Roboto-Bold';
        src: url('".$CFG->wwwroot."/fonts/Roboto-Bold.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        }
    ";

    $opensans = "
        @font-face {
        font-family: 'OpenSans-Regular';
        src: url('".$CFG->wwwroot."/fonts/OpenSans-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        }
        @font-face {
        font-family: 'OpenSans-Bold';
        src: url('".$CFG->wwwroot."/fonts/OpenSans-Bold.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        }
    ";


    $fonts = '';

    if (!empty($CFG->font)) {
        if ($CFG->font == "NewsCycle") {
            $fonts .= $newscycle;
        }
        if ($CFG->font == "OpenSans") {
            $fonts .= $opensans;
        }
        if ($CFG->font == "Roboto") {
            $fonts .= $roboto;
        }
        $fonts .= '
        body,
        .navbar-search .search-query,
        input,
        button,
        select,
        textarea  {
            font-family: "'.$CFG->font.'-Regular",Helvetica, Arial, sans-serif !important;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: "'.$CFG->font.'-Bold",Helvetica, Arial, sans-serif;
        }';
    }

    return $fonts;
}