<?php echo $navTab ;?>
<div id="left_content">
                       
                        <p class="title">Item</p>

<?php $image='assets/items/'.$item1->image;
	$image_url=$this->config->base_url($image);
	echo "<img src=$image_url  />";
	?>
 <b>
 <table class="mycontent" >
   <tr>
     <td>Name:</td>
     <td><?php echo $item1->name; ?></td>
   </tr>
   <tr>
     <td>Itemcode:</td>
     <td><?php echo $item1->itemcode; ?></td>
   </tr>
   <tr>
     <td>Size:</td>
     <td><?php echo $item1->sizes; ?></td>
   </tr>
   <tr>
     <td>Weight:</td>
     <td><?php echo $item1->weight; ?></td>
   </tr>
   <tr>
     <td>Price:</td>
     <td><?php echo $item1->price; ?></td>
   </tr>
   <tr>
     <td colspan="2">Description:</br><?php echo $item1->description; ?></td></tr>
   
 </table>
 
 <?php
 
 $delete='admin/confirmDelete/'.$item1->id;
 $delete_url=$this->config->base_url($delete);
 ?>
 <h1>Are You Sure You Want To Delete This Item???
 <a href="<?php echo $delete_url; ?>">Yes</a>
 </h1>
 </b>