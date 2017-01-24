# groupcloud
Build a tag cloud using form summited words from a group of people


# Quick Setup

Place all these files in a directory served by your favourite web server (apache, nginx...). PHP is required!

Tell everybody to open the public url corresponding to this directory, and to write a word in the form.

Finally, open cloud.html in another browser and wait 5 seconds for the cloud image to come up.

You can tweak many parameters in cloud.html if you want to adjust colors, speed, animation... Please, visit http://www.goat1000.com/tagcanvas-options.php 
(the original TagCanvas author) and check the available options.

Words are stored in /tmp/groupcloud.txt. Delete this file if you want to restart the cloud, or open the included reset.php in your browser.

