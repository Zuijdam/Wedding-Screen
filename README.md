# WeddingWall
A way guests can post messages on a website and the venue can present the messages on the tv's in a great way.

# Installation
- Host files on your own webserver.
- Create a config.php (see below) and save it in the root.
- Weddingwall will use a local sql Database. Create a empty database with the name provided in config.php and weddingwall will create the tables needed for weddingwall!
- Create a user in the database with the credentials provided in your config.php
- Change the text in include/translations.php for your own wedding!
- Go party go!

# Demo
Demo here: [http://geensnor.nl/ww/](http://geensnor.nl/ww/)

# Config file
Create config.php with:
|Variable|Usage|Example|
|--------|-----|-------|
|$QRLink |URL used in QR code|https://www.weddingwall.com|
|$deleteKey|Key to use delete function|MySuperSecretKey|
|$database|database name|WeddingWall|
|$user|database username|WeddingWallUser|
|$password|database password|password1|

# WeddingWall uses
- **RedBeanPHP** to easily talk to our database. Check it out here [https://www.redbeanphp.com/index.php](https://www.redbeanphp.com/index.php)


