BASICS
======

To generate the badges, you need to execute the createBadges.py file

The script will take the template badge in badge_template.png and the list of name,company pairs (separated by tabs) in people.csv and will generate badges for each person. The script will create a directory called "people" and put the final badge images there.

The script requires

* Python 2.4 or higher - http://www.python.org
* Python imaging library - http://www.pythonware.com/products/pil/

To understand the script, look at how the main code uses the classes and methods.

OPTIONS
=======

* By default, the script will read from people.csv and put the output into people/ directory. To read from another file, pass the name (without the .csv) on the command line. The script will read from that file and output the badges to a directory with that name. You can pass multiple such files on the command line.

* By default, the script will create a double sided badge. This is two badge images that can be folded down the center to make it two sided. The reason for this is that even if the badge twists around when worn, it would still be readable. To generate a single sided badge, set the doubleSided parameter to False when calling the save() method.

* By default, the script will convert the company name into Title Case. If you do not want this to happen, prepend a * to the company name.

* The badge template file is passed as a parameter to the constructor of the BadgeImage class

* Font names, sizes, colours and locations are hardcoded at the moment. A future version will parametrise them. For now, you'll need to delve into the code to change these values. Here are some pointers:
    * Trebucbd.ttf is MS Trebuchet Bold. Change this if you want some other font. If you are using a non-truetype font, you'll need to change the ImageFont.truetype call. PIL supports various font formats. See http://www.pythonware.com/library/pil/handbook/imagefont.htm for help on how to use other font formats.
    * The default font size for person name is 45. This is passed as the first parameter to the getFitSize function. If you want some other font size, change this parameter. Note that the script will automatically scale down the font size if the text does not fit on the badge.
    * The default font size for company name is 26. Again look for the first parameter to the getFitSize function
    * The text colour is passed as a parameter to the drawCenteredText function. This is the second element of the (font, colour) tuple parameter.
    * The location for writing the text is stored in variable "pos" for the company name and in "linepos", "linepos1" and "linepos2" for the person name. linepos is used if the whole name fits on one line. If the name is split between two lines, linepos1 and linepos2 are used.

