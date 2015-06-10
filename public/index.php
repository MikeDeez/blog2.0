<?php

# This file is a controller
# It handles what we do on any page

# First we load the libraries we will need
require '../libraries/config.lib.php';
require '../libraries/database.lib.php';
require '../libraries/xss.lib.php';

# Here we do any loading from the database,
# or putting into the database
$db = new Database(Config::$database);

$posts = $db
		->select('*')
		->from('posts')
		->where('deleted', 0)
		->get();

# Lastly we load the views we will need
include '../views/header.php';
include '../views/postlist.php';
include '../views/footer.php';