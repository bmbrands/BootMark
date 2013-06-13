<section markdown="1" id="markdown" class="first">

#MARKDOWN

Markdown is a way of formatting Text. This framework uses Micelf's librarys to transfrom your Markdown into HTML and format it using Bootstrap!

> Awesome!!

</section>

<section markdown="1" id="headers">

#HEADERS

You can write your own Markdown headers using the `#` character. Just add one or more of these hashes to create a heading in your Markdown file

# Heading 1

Markdown:

    # Heading 1

## Heading 2

Markdown:

    ## Heading 2

### Heading 3

Markdown:

    ### Heading 3


</section>

<section markdown="1" id="links">

#LINKS

You can add links to internal pages and extranal sites easily. You can even add id's and classes to it.

[Bas Brands . nl](http://www.basbrands.nl){#id .class}

[Sonsbeek Media](http://www.sonsbeekmedia.nl)

[BootMark Home](http://bootmark.github.com)

Markdown :

    [Bas Brands . nl](http://www.basbrands.nl){#id .class}

    [Sonsbeek Media](http://www.sonsbeekmedia.nl)

    [BootMark Home](http://bootmark.github.com)


</section>

<section markdown="1" id="images">

#IMAGES

Images are very similar to links. The difference is the exclamation mark before the Markdown Syntax.

![Dummy](images/male_dummy_64.png){#id .class}

![Astronaut](images/astronaut_64.png){.img-polaroid}

![Aphrodite](images/aphrodite_64.png)

Markdown:

    ![Dummy](images/male_dummy_64.png){#id .class}

    ![Astronaut](images/astronaut_64.png){.img-polaroid}

    ![Aprodite](images/aphrodite_64.png)

</section>

<section markdown="1" id="lists">


#LISTS

Lists both nested and numbered are easily added.

1. List item 1
2. List item 2

Markdown:
~~~~~~~~~~~~~~~~~~~
    1. List item 1
    2. List item 2
~~~~~~~~~~~~~~~~~~~

* Apples
* Oranges
* Blues
    * Country
    * R & D

Markdown:
~~~~~~~~~~~~~~~~~~~
    * Apples
    * Oranges
    * Blues
        * Country
        * R & D
~~~~~~~~~~~~~~~~~~~



</section>

<section markdown="1" id="tables">

#TABLES

Tables only require a bit of Ascii-Art. Draw a table with `--` and `|` and you have a HTML table

First Header  | Second Header
------------- | -------------
Content Cell  | Content Cell
Content Cell  | Content Cell

Markdown:


    First Header  | Second Header
    ------------- | -------------
    Content Cell  | Content Cell
    Content Cell  | Content Cell

</section>
