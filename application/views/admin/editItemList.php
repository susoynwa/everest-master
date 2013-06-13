<?php echo $navTab;?>
<p class="mycontent"></p>

 <?php
 foreach($item_list as $mylist) {
	$image='assets/items/'.$mylist->image;
	$image_url=$this->config->base_url($image);
	$my_url='admin/editItem/'.$mylist->id;
	$url=$this->config->base_url($my_url);

	echo'<div id="left_contentbag"><p class="title">'.$mylist->name.'</p>';
		echo "<a href=$url><img src=$image_url  /></a></div>";
	
 }