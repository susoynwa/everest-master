           <?php echo $navTab; ?>
<div id="left_content">

	<p class="title">Add new Item </p>
    <p id="mycontent" class="form">
    <?php
		$url=$this->config->base_url('admin/addNewItem');
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
				//	'value'	=>	$this->input->post('username'),
					);
	$description=array(
					'name'	=>	'description',
					'type'	=>	'textarea',
					'size'	=>	'40',
					'class'	=>	'',
				//	'value'	=>	$this->input->post('username'),
					);
				
	$sizes=array(
					'name'	=>	'sizes',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
				//	'value'	=>	$this->input->post('username'),
					);
				
	$weight=array(
					'name'	=>	'weight',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
				//	'value'	=>	$this->input->post('username'),
					);
				
	$price=array(
					'name'	=>	'price',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
				//	'value'	=>	$this->input->post('username'),
					);
					
	$itemcode=array(
					'name'	=>	'itemcode',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
				//	'value'	=>	$this->input->post('username'),
					);
				
	$file=array(
					'name'	=>	'myfile',
					'type'	=>	'file',
					'size'	=>	'2000',
					'class'	=>	'input',
				//	'value'	=>	$this->input->post('username'),
					);

				?>
                 <b>
      
 <table class="mycontent" >
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
     <td colspan="2"><?php	echo form_input($description);?></td>
   </tr>
   
 </table>
 <?php echo form_submit('submit', 'Add');?>
 </b>
 
    
    
    </p>
</div>