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
 </b>
  
  
 <p class="mycontent"></p>
</div><!--end of left content-->

 <?php
 foreach($item_list as $mylist) {
	$image='assets/items/'.$mylist->image;
	$image_url=$this->config->base_url($image);
	$my_url='items/myitem/'.$mylist->id;
	$url=$this->config->base_url($my_url);

	echo'<div id="left_contentbag"><p class="title">'.$mylist->name.'</p>';
		echo "<a href=$url><img src=$image_url  /></a></div>";
	
 }
	    ?>
 
 Click on item to get detail

                
			