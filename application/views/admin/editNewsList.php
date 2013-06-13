<?php echo $navTab;?>
<p class="mycontent"></p>

 <?php
 foreach($news_list as $mylist) {
	$image='assets/news/'.$mylist->image;
	$image_url=$this->config->base_url($image);
	$my_url='admin/editNews/'.$mylist->id;
	$url=$this->config->base_url($my_url);

	echo'<p>'.$mylist->title.'</p>';

	
 }