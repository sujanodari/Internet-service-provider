<head>
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	</head>
 <section class="section-75 section-bottom-60 section-md-100 bg-default bg-image" style="background-image: url(<?php echo base_url() ?>assets/image/bg1.jpg);">
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">                                               
<form action = "<?php echo base_url();?>add/customer" method="post" style="margin:0; padding-top:0px">
     <fieldset>
     <legend>Join Us</legend>
	 	 	  <p><label>Bandwidth</label>
	  	 	  <select name="bandwidth" >		  
	  						<?php
				if(isset($_GET['name']))
				{
					?>
<option  value="<?php echo $_GET['name'];?>"><?php echo $_GET['name']."Mbps"; ?></Option>					
				<?php }
				else
				{
			foreach($bandwidthlist->result_array() as $bandwidth):
					?>
	  <option  value="<?php echo $bandwidth['bandwidthtype']." ".$bandwidth['bandwidth'];?>"><?php echo $bandwidth['bandwidthtype']."  ".$bandwidth['bandwidth']."Mbps"; ?></Option>
	 		<?php
				endforeach;
				}
						?>
	</select>
	<p>
	<label>Duration</label>
	<select name="month" >
	<option value="1">1 month</option>
	<option value="3">3 months</option>
	<option value="6">6 months</option>
	<option value="12">12 months</option>
	</select>
	</p>
     <p><label>Full Name</label>
    <input type="text" placeholder="Enter name"  class="form-control input-sm chat-input" name="name" required></p>
	<p><label>Gender</label>
	 <input type="radio" name="gender" value="male"><label>Male</label>
	 <input type="radio" name="gender" value="female"><label>Female</label></p>
	 <p><label>DOB</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="date" placeholder="date" name="dob" class="form-control input-sm chat-input" required></p>
	
    <p><label>Address</label>
    <input type="text" placeholder="Enter Address" name="address" class="form-control input-sm chat-input" required></p>
    
    <p><label>Contact No</label>
    <input type="text" placeholder="+977-9817091757" name="number" class="form-control input-sm chat-input" required></p> 
	 <p><label>Citizenship No</label>
    <input type="text" placeholder="04-04-000023" name="citizen" class="form-control input-sm chat-input" required></p> 
	<div class="wrapper">
     <span class="group-btn">     
	<button class="fa fa-sign-in" type="submit" name="btn_register" class="registerpass">Submit</button> 
       </span>
      </div>
      </div>
	 </form>    
    </fieldset>
	</form>
	</div>
	</div>
	</div>
	</div>
	</section>