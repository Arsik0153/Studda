<?php
return array(

	'news/([0-9]+)' => 'news/view/$1',
	'news' => 'news/index',
	'frontend/([0-9]+)' => 'frontend/view/$1',
	'frontend' => 'frontend/index',
	'admin/list/([0-9]+)' => 'admin/view/$1',
	'admin/list' => 'admin/index',
	'admin/edit/([0-9]+)' => 'admin/edit/$1',
	'' => 'index/index'
	);