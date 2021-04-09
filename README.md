# CV Assignment 
## Image Gallery
### By Erikas Blidnyj for Adveitas

FEATURES:

* __2 Column Layout__ made using `__Bootstrap 5__` grid layout.
* __Image Sorting__ and fetching using `PHP` and `SQL` database
* Infinite Scroll made using `Intersection Observer` in `JavaScript`
* Images can be added from any website where you can get the raw image link by simply using :

>INSERT INTO `images`(
>    `img_name`,
>    `img_author`,
>    `img_path`
>)
>VALUES(
>    `inp_name`,
>    `inp_author`,
>    `inp_path`
>)

BUGS:
* Layout sometimes breaks on screens smaller than 425px - this occurs when author name is longer than image containter.
* I'm 90% sure that loading can break if someone scrolls too fast. Since that's why i'm using observer. When using onscroll triggers it loaded several times instead of 1.
* When adding images using SQLAdmin the autoincrement on the id column sometimes doesn't work

NOTES:
* Using `|` to split queries sounds like a bad idea, but that's the best i got

All test images taken from Pixabay