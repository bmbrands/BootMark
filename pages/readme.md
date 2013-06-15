# BootMark framework {#bootmark .bootmark-section .first}

Author: Bas Brands

Url: [www.basbrands.nl](www.basbrands.nl)

This file is part of BootMark

BootMark is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

BootMark is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with BootMark.  If not, see <http://www.gnu.org/licenses/>.

### About BootMark {#about .bootmark-section}

This framework is build from Bootstrap and the Michelf Markdown
Interpretor.

#### Bootstrap:

a CSS / JavaScript framework that is use to create cool,
mobile friendly and feature rich websites.

#### Michelf Markdown:

A tool to change plain text files into HTML, quickly and
cleanly

> BootMark allows you to create websites easily an quickly. It is simple to learn
and should be a lot of fun.

### CONFIGURATION {#config .bootmark-section}

This is a sampe configuration file:

    <?php
    require_once 'Michelf/Markdown.php';
    require_once 'lib.php';
    require_once 'css/fonts.php';

    $CFG = new stdClass();
    $CFG->wwwroot = 'http://www.basbrands.nl/bootmark';
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

All you need to change is

* the URL of your page
* the Site Name
* the font
* the background images

Available fonts are:

* News Cycle
* Roboto
* Open Sans
* Arial
* Helvetica

### CREATING NEW PAGES {#newpages .bootmark-section}

To work with this framework you will need some basic HTML knowledge.

To add a new page:

    1. Edit the $CFG->pages. Add pagename
    2. Add a markdown file to the pages folder



### USING MARKDOWN INSTEAD OF HTML {#markdownusage .bootmark-section}

Markdown is a very very simple programming language, designed for
non programmers. Markdown does not do anything by itself. It is simply
a way of writing text that makes tranforming it into HTML easy and quick.


Open the file example.md in your editor.

Play with the syntax, it is all very simple.


### CREATING PAGE SECTIONS {#sections .bootmark-section}


    <section markdown="1" id="groningen">

    ####Groningen

    ![Provincie afbeelding](images/provincie2.png "Provincie1")

    </section>


#### EXPLANATION OF:

    <section markdown="1" id="groningen">

`<section `
Paragraph of the page

`markdown="1" `
The markdown = 1 bit tells markdown not to touch this HTML, you can
add bits of html when you add "markdown = 1 inside the tag

`id="groningen"`
The id="groningen" creates the link target for this element.
you can now create links that look like this: <a href="#groningen">Groningen</a>



#### EXPLANATION OF:

    ![Provincie afbeelding](images/provincie2.png "Provincie1")

`!` : Here comes an image

`[Provincie afbeelding]` : This is the image name

`(images/provincie2.png` : this is the image location

`"Provincie1"` : This is the image alt tag when you hover over it

