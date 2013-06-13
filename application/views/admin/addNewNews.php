<div id="left_content">
<p class="title">
Following news has been added:
</p>
<p class="mycontent">
<?php echo $navTab;?>
<table class="mycontent" >
   <tr>
     <td>Title</td>
     <td><?php echo $this->input->post('title'); ?></td>
   </tr>
   <tr>
     <td>Type</td>
     <td><?php echo $this->input->post('itemcode'); ?></td>
   </tr>
   <tr>
     <td>Image(if any):</td>
     <td><?php echo $this->input->post('image'); ?></td>
   </tr>
   <tr>
     <td>Link(facebook album link from handicraft nepal's account is most suitable)</td>
     <td><?php echo $this->input->post('link'); ?></td>
   </tr>
   <tr>
     <td>Author</td>
     <td><?php echo $author; ?></td>
   </tr>
   <tr>
     <td colspan="2">Description:</br><?php echo $this->input->post('description'); ?></td></tr>
   
 </table>
 </b>
</p>
</div>