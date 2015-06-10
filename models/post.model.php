<?php 

# post.model.php

# load the model library if it hasn't already been done
require_once '../libs/model.lib.php';

class Post extends Model{

	# Tell the page model what table it belongs to
	protected $table = 'posts';
}