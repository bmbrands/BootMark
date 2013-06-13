<?php

require_once('config.php');

/*
 * Here you specify the markdown file
 */
$text = file_get_contents('example.md');
$html = MarkdownExtra::defaultTransform($text);

/*
 * The header should be included on all pages, it load
 * the Bootstrap navigation menu, page title, css and JavaScript
 */
include('header.php');

/*
 * The HTML below creates the Page (scrollspy) menu and inserts the
 * Markdown into the HTML document
 */

$subnavitems = array('#headers'=>'Headers',
                     '#links'=>'Links',
                     '#images'=>'Images',
                     '#lists'=>'Lists',
                     '#tables'=>'Tables');

?>
  <div class="container bootmark-content">
   <div class="row">
      <div class="span3 bootmark-sidebar">
          <?php echo render_subnav($subnavitems);?>
      </div>
      <div class="span9">
        <div class="design">
        <?php
            # Put HTML content in the document
            echo $html;
        ?>
        </div>
        </div>
        </div>
    </body>
</html>
