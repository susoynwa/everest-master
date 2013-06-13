  <?php echo $navTab; ?>
<div id="left_content">

	<p class="title">Edit News </p>
    <p id="mycontent" class="form">
    <?php
		$url=$this->config->base_url('admin/editedNews/'.$news1->id);
		
	$attributes=array(
					'method'	=>	'post',
					'enctype'	=>	'multipart/form-data',	
						);
						
	echo form_open($url,$attributes);
	$title=array(
					'name'	=>	'title',
					'type'	=>	'text',
					'size'	=>	'100',
					'class'	=>	'input',
					'value'	=>	$news1->title,
					);
	$description=array(
					'name'	=>	'description',
					
					'rows'	=>	'35',
					'cols'	=>	'50',
					'class'	=>	'',
					'value'	=>	$news1->description,
					);
				
	$type=array(
					'name'	=>	'sizes',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
					'value'	=>	$news1->type,
					);
				
	$link=array(
					'name'	=>	'weight',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
					'value'	=>	$news1->link,
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
     <td>Title:</td>
     <td><?php	echo form_input($name);?></td>
   </tr>
   <tr>
     <td>Type:</td>
     <td><?php	echo form_input($itemcode);?></td>
   </tr>
   <tr>
     <td>Link:</td>
     <td><?php	echo form_input($sizes);?></td>
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













