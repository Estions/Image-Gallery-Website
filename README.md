# CV Assignment 
## Image Gallery
### By Erikas Blidnyj for Adveitas

FEATURES:

* 2 column layout made using bootstrap 5 grid layout.
* Image sorting and fetching using php and SQL database
* Infinite Scroll made using Intersection Observer in JavaScript
* Images can be added from any website where you can get the raw image link by simply using :

>INSERT INTO `images`(
>    `img_name`,
>    `img_author`,
>    `img_path`
>)
>VALUES(
>    `inputName`,
>    `inputAuthor`,
>    `input-Path`
>)

BUGS:
* Layout sometimes breaks on screens smaller than 425px - this occurs when author name is longer than image containter.
* I'm 90% sure that loading can break if someone scrolls too fast. Since that's why i'm using observer. When using onscroll triggers it loaded several times instead of 1.

All test images taken from Pixabay