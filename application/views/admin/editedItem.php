<?php echo $navTab;?>
<div id="left_content">
<p class="title">
Following item has been edited with given details:
</p>
<p class="mycontent">
 <?php $image='assets/items/'.$item1->image;
 		$image_url=$this->config->base_url($image);
  ?>
    <img src="<?php echo $image_url;?>">
<table class="mycontent" >
   <tr>
     <td>Name:</td>
     <td><?php echo $this->input->post('name'); ?></td>
   </tr>
   <tr>
     <td>Itemcode:</td>
     <td><?php echo $this->input->post('itemcode'); ?></td>
   </tr>
   <tr>
     <td>Size:</td>
     <td><?php echo $this->input->post('sizes'); ?></td>
   </tr>
   <tr>
     <td>Weight:</td>
     <td><?php echo $this->input->post('weight'); ?></td>
   </tr>
   <tr>
     <td>Price:</td>
     <td><?php echo $this->input->post('price'); ?></td>
   </tr>
   <tr>
     <td colspan="2">Description:</br><?php echo $this->input->post('description'); ?></td></tr>
   
 </table>
 </b>
</p>
</div>