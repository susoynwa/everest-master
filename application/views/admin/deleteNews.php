<?php echo $navTab ;?>
<div id="left_content">
                       
                        <p class="title">News</p>

<?php $image='assets/news/'.$news1->image;
	$image_url=$this->config->base_url($image);
	echo "<img src=$image_url  />";
	?>
 <b>
 <table class="mycontent" >
   <tr>
     <td>Title:</td>
     <td><?php echo $news1->name; ?></td>
   </tr>
   <tr>
     <td>Type</td>
     <td><?php echo $news1->type ?></td>
   </tr>
   <tr>
     <td>Link</td>
     <td><?php echo $news1->link; ?></td>
   </tr>
   
 </table>
 
 <?php
 
 $delete='admin/confirmDeleteNews/'.$news1->id;
 $delete_url=$this->config->base_url($delete);
 ?>
 <h1>Are You Sure You Want To Delete This News???
 <a href="<?php echo $delete_url; ?>">Yes</a>
 </h1>
 </b>