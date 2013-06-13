  <?php echo $navTab; ?>
<div id="left_content">

	<p class="title">Edit Item </p>
    <p id="mycontent" class="form">
    <?php
		$url=$this->config->base_url('admin/editedItem/'.$item1->id);
		
	$attributes=array(
					'method'	=>	'post',
					'enctype'	=>	'multipart/form-data',	
						);
						
	echo form_open($url,$attributes);
	$name=array(
					'name'	=>	'name',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
					'value'	=>	$item1->name,
					);
	$description=array(
					'name'	=>	'description',
					
					'rows'	=>	'35',
					'cols'	=>	'50',
					'class'	=>	'',
					'value'	=>	$item1->description,
					);
				
	$sizes=array(
					'name'	=>	'sizes',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
					'value'	=>	$item1->sizes,
					);
				
	$weight=array(
					'name'	=>	'weight',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
					'value'	=>	$item1->weight,
					);
				
	$price=array(
					'name'	=>	'price',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
					'value'	=>	$item1->price,
					);
					
	$itemcode=array(
					'name'	=>	'itemcode',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
					'value'	=>	$item1->itemcode,
					);
				
	$file=array(
					'name'	=>	'myfile',
					'type'	=>	'file',
					'size'	=>	'2000',
					'class'	=>	'input',
					'value'	=>	'click to change image',
					);

				?>
                 <b>
                 
                 <?php $image='assets/items/'.$item1->image;
 		$image_url=$this->config->base_url($image);
  ?>
    <img src="<?php echo $image_url;?>">
      
 <table class="mycontent" border='1'>
   <tr>
     <td>Name:</td>
     <td><?php	echo form_input($name);?></td>
   </tr>
   <tr>
     <td>Itemcode:</td>
     <td><?php	echo form_input($itemcode);?></td>
   </tr>
   <tr>
     <td>Size:</td>
     <td><?php	echo form_input($sizes);?></td>
   </tr>
   <tr>
     <td>Weight:</td>
     <td><?php	echo form_input($weight);?></td>
   </tr>
   <tr>
     <td>Price:</td>
     <td><?php	echo form_input($price);?></td>
   </tr>
    <tr>
     <td>Image:</td>
     <td><?php	echo form_input($file);?></td>
   </tr>
   <tr>
     <td colspan="2">Description:</br></td>
   </tr>
   <tr>
     <td colspan="2"><?php	echo form_textarea($description);?></td>
   </tr>
   
 </table>
 <?php echo form_submit('submit', 'Save');?>
 </b>
 
    
    </p>
</div>













