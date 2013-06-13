
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA3wJVbksMY6xshTlJ1ZheU3Fg3gDCS7OU&sensor=false"></script>
<script  src="<?php echo $this->config->base_url('assets/jquery/script.js');?>"></script>

                    <div id="left_content">
                       
                        <p class="title">CONTACT</p>
 <p class="mycontent">          
    <img src="<?php echo $this->config->base_url('assets/images/DSC07275.jpg'); ?> "  />             
<b>RAINBOW HANDICRAFT NEPAL</b></br>
Post Box No. 210</br>
Dihiko Patan, Lakeside</br>
Pokhara 6, Kaski, Nepal. </br> </br>

00977-61-462089, Mobile: 9856027599  </br> 

URL: www.handicraftnepal.org  </br>

E-mail: rhu@gmail.com  </br> </br>

<b>BANK DETAILS:</b> </br> 
Standard Chartered Bank Ltd. Nepal </br>
Beneficiary's Name - Rainbow Handicraft Udyog  </br>
Account Number: 18-2201321-01 (Savings Account) </br>
Swift Code - SCBLNPKA </br>

website of bank: www.standardchartered.com.</p>
						</div><!--end of left content-->
    
    
    
    
                        
<div id="left_content">
                       
                        <p class="title">Location</p>
                        <div id="mapcanvas"> </div>
<script type="text/javascript"  >
	
 $(document).ready(function() {
	
function initialize(){
	var myLatlng1= new google.maps.LatLng(28.214340, 83.960052);//rch

	var myOptions = {
    zoom: 15,
    center: myLatlng1,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  
  var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);   
  	var marker = new google.maps.Marker({
      	position: myLatlng1,
      	map: map,
      	title: "Rainbow Handicraft Nepal"
	});
	
	var image1='<img src="<?php echo $this->config->base_url('assets/images/rhn.jpg');?>"/>';

var infowindow1 = new google.maps.InfoWindow({
    content: image1
});

google.maps.event.addListener(marker, 'click', function() {
  infowindow1.open(map,marker);
});


	


 

var myLatlng2= new google.maps.LatLng(28.215550, 83.962047 );//weaving centre
	var marker = new google.maps.Marker({
     	 position: myLatlng2,
     	 map: map,
         title: "Rainbow Handicraft Nepal's weaving centre"
	 });
	 
	 var image2='<img src="<?php echo $this->config->base_url('assets/images/rhn2.jpg');?>"/>';

var infowindow2 = new google.maps.InfoWindow({
    content: image2
});

google.maps.event.addListener(marker, 'click', function() {
  infowindow2.open(map,marker);
});
	 
}


initialize(); 




 });
</script>
                       
                     
</div>