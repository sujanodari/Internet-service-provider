<head>
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	</head>
<section class="section-75 section-bottom-60 section-md-100 bg-default bg-image" style="background-image: url(<?php echo base_url() ?>assets/image/bg2.jpg);">
<div class="container">
    <div class="row">
            <div class="form-login">                                               
<form action = "<?php echo base_url();?>add/bandwidth" method="post" style="margin:0; padding-top:0px">
     <fieldset>
     <legend>Add Bandwidth</legend>
     <p><label> Bandwidth</label>
    <input type="text" placeholder="Bandwidth" class="form-control input-sm chat-input" name="bandwidth" name="name" required></p>
	<p><label>Bandwidth_Type</label></br>
	 <input type="radio" name="bandwidthType" value="Home"><label>Home</label>
	 <input type="radio" name="bandwidthType" value="Business"><label>Business</label></p>	
    <p><label>Price</label>
    <input type="text" placeholder="Price" name="price" class="form-control input-sm chat-input" required></p>    
 	<div class="wrapper">
     <span class="group-btn">     
	<button class="fa fa-sign-in" type="submit" name="btn_add" class="registerpass">ADD</button> 
       </span>
      </div>
        
    </fieldset>
	</form>
	</div> 
  <div class="form-login">                                               
<form action = "<?php echo base_url();?>update/bandwidth" method="post" style="margin:0; padding-top:0px">
     <fieldset>
     <legend>Update Bandwidth</legend>
	 	  <p><label>Bandwidth</label>
	  <select name="bandwidth" >
	  						<?php
			foreach($bandwidthlist->result_array() as $bandwidth):
					?>
	  <option  value="<?php echo $bandwidth['bandwidth']." ".$bandwidth['bandwidthtype'];?>"><?php echo $bandwidth['bandwidthtype']."  ".$bandwidth['bandwidth']."Mbps"; ?></Option>
	 		<?php
				endforeach;
						?>
	</select>
    <p><label>Price</label>
    <input type="text" placeholder="Price" name="price" class="form-control input-sm chat-input" required></p>    
 	<div class="wrapper">
     <span class="group-btn">     
	<button class="fa fa-sign-in" type="submit" name="btn_update" class="registerpass">Update</button> 
       </span>
      </div>
      
  
    </fieldset>
	</form>
	</div>
			<div class="form-login">                                               
<form action = "<?php echo base_url();?>delete/bandwidth" method="post" style="margin:0; padding-top:0px">
     <fieldset>
     <legend>Delete Bandwidth</legend>
	 	  <p><label>Bandwidth</label>
	  <select name="bandwidth" >
	  						<?php
			foreach($bandwidthlist->result_array() as $bandwidth):
					?>
	   <option  value="<?php echo $bandwidth['bandwidth']." ".$bandwidth['bandwidthtype'];?>"><?php echo $bandwidth['bandwidthtype']."  ".$bandwidth['bandwidth']."Mbps"; ?></Option>
	 		<?php
				endforeach;
						?>
	</select>	    
 	<div class="wrapper">
     <span class="group-btn">     
	<button class="fa fa-sign-in" type="submit" name="btn_Delete" class="registerpass">Delete</button> 
       </span>
      </div> 
    </fieldset> 
	</form>
	</div>
	</div>
	</div>
	</section>