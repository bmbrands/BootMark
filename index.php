<?php

require_once('config.php');

/*
 * Here you specify the markdown file
 */

$page = bootmark_param('page');

$text = file_get_contents('pages/'.$page . '.md');
$html = MarkdownExtra::defaultTransform($text);

/*
 * This loads the standard Bookmark Header,
 * It contains the links to CSS and JavaScript
 */
echo bootmark_header();

/*
 * This loads the start of the Bootmark Body
 */
echo bootmark_body();
/*
 * Render the top menu navigation
 */
echo render_navbar();

echo bootmark_heading();

$pagemenu = $page . '_subnavitems';

/*
 * The HTML below creates the Page (scrollspy) menu and inserts the
 * Markdown into the HTML document
 */

if (isset(${$pagemenu}) && !empty(${$pagemenu})) { ?>
        <div class="container bootmark-content">
               <div class="row">
                <div class="span3 bootmark-sidebar">
                  <?php echo render_subnav(${$pagemenu});?>
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
          </div>
          </div>
    </body>
</html>
<?php } else { ?>
          <div class="container bootmark-content">
               <div class="row">
              <div class="span12">
                <?php
                    # Put HTML content in the document
                    echo $html;
                ?>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
<?php }?>
