<div id="left_content">
	<p class="title">Login </p>
    <p id="mycontent" class="form">
    <?php
	$username=array(
					'name'	=>	'username',
					'type'	=>	'text',
					'size'	=>	'20',
					'class'	=>	'input',
				//	'value'	=>	$this->input->post('username'),
					);
	$password=array(
					'name'	=>	'passsword',
					'type'	=>	'password',
					'size'	=>	'20',
					'class'	=>	'input',
				//	'value'	=>	$this->input->post('password'),
					);
	$url=$this->config->base_url('admin/login');
	$attributes=array(
					'method'	=>	'post'
						
						);
						
	echo form_open($url,$attributes);
	echo"<table align='center'><tr><td>Username:</td><td>";
	echo form_input($username);
	echo"</td></tr><tr><td>Password:</td><td>";
	echo form_input($password);
	echo'</td></tr><tr><td colspan="2">';
	echo form_submit('submit','Login');
	echo"</td></tr></table>";

    ?>
    </p>
</div>