<?php
function bootmark_get_font($css) {
    GLOBAL $CFG;

    $fontawsome = "
    @font-face {
          font-family: 'FontAwesome';
          src:url('".$CFG->wwwroot."/fonts/fontawesome-webfont.eot?v=3.0.1');
          src: url('".$CFG->wwwroot."/fonts/fontawesome-webfont.eot?v=3.0.1#iefix&v=3.0.1') format('embedded-opentype'),
               url('".$CFG->wwwroot."/fonts/fontawesome-webfont.woff?v=3.0.1') format('woff'),
               url('".$CFG->wwwroot."/fonts/fontawesome-webfont.ttf?v=3.0.1')  format('truetype');
          font-weight:normal;
          font-style:normal
    }";

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

    $fonts = $fontawsome;

    if (!empty($CFG->font)) {
        if ($CFG->font == "NewsCycle") {
            $fonts .= $newscycle;
            $css = str_replace("NewsCycle",$CFG->font,$css);
        }

        if ($CFG->font == "OpenSans") {
            $fonts .= $opensans;
            $css = str_replace("NewsCycle",$CFG->font,$css);
        }
        if ($CFG->font == "Roboto") {
            $fonts .= $roboto;
            $css = str_replace("NewsCycle",$CFG->font,$css);
        }
        if ($CFG->font == "Arial") {
            $css = str_replace("NewsCycle-Regular",$CFG->font,$css);
            $css = str_replace("NewsCycle-Bold",$CFG->font,$css);
        }
        if ($CFG->font == "Helvetica") {
            $css = str_replace("NewsCycle-Regular",$CFG->font,$css);
            $css = str_replace("NewsCycle-Bold",$CFG->font,$css);
        }
    } else {
        $fonts .= $newscycle;
    }

    $css .= $fonts;

    return $css;
}