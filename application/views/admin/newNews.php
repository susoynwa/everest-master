   <?php echo $navTab; ?>
<div id="left_content">

	<p class="title">Add new News </p>
    <p id="mycontent" class="form">
    <?php
		$url=$this->config->base_url('admin/addNewNews');
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
				//	'value'	=>	$this->input->post('username'),
					);
	$description=array(
					'name'	=>	'description',
					'rows'	=>	'10',
					'cols'	=>	'50',
					'class'	=>	'',
				//	'value'	=>	$this->input->post('username'),
					);
				
	$type=array(
					'name'	=>	'type',
					'type'	=>	'text',
					'size'	=>	'50',
					'class'	=>	'input',
				//	'value'	=>	$this->input->post('username'),
					);
					
	$link=array(
					'name'	=>	'link',
					'type'	=>	'text',
					'size'	=>	'50',
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
     <td>Title:</td>
     <td><?php	echo form_input($title);?></td>
   </tr>
   <tr>
     <td>Type:</td>
     <td><?php	echo form_input($type);?></td>
   </tr>
   <tr>
     <td>Link:</td>
     <td><?php	echo form_input($link);?></td>
   </tr>
  
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
 <?php echo form_submit('submit', 'Add');?>
 </b>
 
    
    
    </p>
</div>