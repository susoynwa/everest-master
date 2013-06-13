<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->config->base_url('assets/css/images/favicon.ico'); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rainbow Handicraft-giving training and employment oppurtunities to women |in association with Rainbow Children Home</title>
<link href="<?php echo $this->config->base_url('assets/css/css/style.css'); ?>" type="text/css" rel="stylesheet" media="all"/>
</head>

<body>
<div id="top_header">
	<?php
	$session_data=$this->session->all_userdata();
	if(isset($session_data['logged_in'])){

		if($session_data['logged_in']==TRUE){
			echo"Welcome  ";
			echo $session_data['username'];
			$url=$this->config->base_url('admin/logout');
			echo'<a href="'.$url.'">Log Out</a>';
		}
		else
		{
			echo" In association with Rainbow Children Home Nepal";
		}
	}
	else{
		echo" In association with Rainbow Children Home Nepal";	
	}
			
	?>
   
</div>
<!-- end of top header-->
<div id="container">

		<div id="header">
  				
                <div id="left_logo">
    			</div>
   				
                 <div id="logo">
      	 					<h1>Rainbow Handicraft Nepal</h1>	
        					 <h2>Lakeside Pokhara 06 Nepal</h2>
         					<h3>Email- rhn@gmail.com</h3>
  				 </div>
 
    
    			<div id="right_logo">
 				</div>
     
     			<div id="right_logo2">
 				</div>
    
     			<div id="right_logo3">
 				</div>
 		</div>   

<!--end of header-->
    
		<div id="wrapper">

    			<div id="menu">
    	
       					

   <div id="tabs">
  
<ul>
    <li></li>
<?php  echo $navigation;?>
  
      </ul>
      </div>
  




   

				</div><!--end of menu-->
                
                <div id="main_content">
                <div id="leftbar">
	<?php echo $leftbar; ?>
                        </div><!--end of left bar-->
					<div id="rightbar">
                   <?php echo $rightbar;?>
                    
                    </div><!--end of right bar-->
                    
                    
                    
                    
                    
                    
		</div><!--end of wrapper-->
        

     <div class="push"></div>
 </div><!--end of container-->
         <div id="footer">
         		
                <div id="footer_main">
               Rainbow Handicraft Nepal</br>
  			  Po Box 210,Dihikopatan, Lakeside ,Pokhara-6,Nepal</br>
               © Copyrights 2010 All rights Reserved. </br>Designed by: <span class="sagaritabd"><i><b>sagaritabd</b></i></span>
         		</div>
         </div><!--end of footer-->


</body>
</html>
