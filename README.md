# CV Assignment 
## Image Gallery
### By Erikas Blidnyj for Adveitas

FEATURES:

* _2 Column Layout_ made using __`Bootstrap 5`__ grid layout.
* _Image Sorting_ and fetching using __`PHP`__ and __`SQL`__ database
* _Infinite Scroll_ made using _`Intersection Observer`_ in __`JavaScript`__
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
* Layout sometimes breaks on screens smaller than __425px__ - this occurs when author name is longer than image containter.
* I'm 90% sure that loading can break if someone scrolls too fast. Since that's why i'm using observer. When using onscroll triggers it loaded several times instead of 1.
* When adding images using SQLAdmin the autoincrement on the id column sometimes doesn't work

NOTES:
* Using `|` to split queries sounds like a bad idea, but that's the best I've got
* Code Specific notes are in code files
* Images aren't layed out in a reasonable way, but since that requires me to know image height - the whole code needs reformatting and I barely managed to make loading work at all

All test images taken from Pixabay