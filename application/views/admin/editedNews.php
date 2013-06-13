<?php echo $navTab;?>
<div id="left_content">
<p class="title">
Following news has been edited with given details:
</p>
<p class="mycontent">
 <?php $image='assets/news/'.$news1->image;
 		$image_url=$this->config->base_url($image);
  ?>
    <img src="<?php echo $image_url;?>">
<table class="mycontent" >
   <tr>
     <td>Title:</td>
     <td><?php echo $this->input->post('title'); ?></td>
   </tr>
   <tr>
     <td>Type:</td>
     <td><?php echo $this->input->post('type'); ?></td>
   </tr>
   <tr>
     <td>Link:</td>
     <td><?php echo $this->input->post('link'); ?></td>
   </tr>
   
   <tr>
     <td colspan="2">Description:</br><?php echo $this->input->post('description'); ?></td></tr>
   
 </table>
 </b>
</p>
</div>