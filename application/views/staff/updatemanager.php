<head>
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	</head>
<section class="section-75 section-bottom-60 section-md-100 bg-default bg-image" style="background-image: url(<?php echo base_url() ?>assets/image/bg3.jpg);">
<div class="container">
    <div class="row">
            <div class="form-login" >                                               
<form action = "<?php echo base_url();?>add/staff" method="post" style="margin:0; padding-top:0px">
     <fieldset>
     <legend>Add Staff</legend>
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
	<button class="fa fa-sign-in" type="submit" name="btn_register" class="registerpass">Add</button> 
       </span>
     
      </div>   
    </fieldset>
	</form>
	 </div>
  <div class="form-login">                                               
<form action = "<?php echo base_url();?>update/users" method="post" style="margin:0; padding-top:0px">
     <fieldset>
     <legend>Update Staff</legend>
	 	  <p><label>Staff Username</label>
	 	  <select name="usern" >
	  						<?php
			foreach($userlist->result_array() as $users):
					?>
	  <option  value="<?php echo $users['username'];?>"><?php echo $users['username'];?></Option>
	 		<?php
				endforeach;
						?>
	</select>
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
	<p><label>Password</label>
    <input type="password" placeholder="Enter Password" name="password" class="form-control input-sm chat-input" required></p>
	<div class="wrapper">
     <span class="group-btn">   
	<button class="fa fa-sign-in" type="submit" name="btn_update" class="registerpass">Update</button> 
       </span>
      </div> 
    </fieldset>
	</form>
	 </div>
            <div class="form-login">                                               
<form action = "<?php echo base_url();?>delete/user" method="post" style="margin:0; padding-top:0px">
     <fieldset>
     <legend>Delete Staff</legend>
 <p><label>Staff Username</label>
	 	  <select name="usern">
	  						<?php
			foreach($userlist->result_array() as $users):
					?>
	  <option value="<?php echo $users['username'];?>"><?php echo $users['username'];?></Option>
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
	
	 <div class="form-login">                                               
<form  action = "<?php echo base_url();?>view/password" method="post" style="margin:0; padding-top:0px">
     <fieldset>
     <legend>View Staff Password</legend>
 <p><label>Staff Username</label>
	  <select name="usern" >
	  						<?php
			foreach($userlist->result_array() as $users):
					?>
	  <option value="<?php echo $users['username'];?>"><?php echo $users['username'];?></Option>
	 		<?php
				endforeach;
						?>
	</select>
<div class="wrapper">
     <span class="group-btn">     
	<button class="fa fa-sign-in" type="submit" name="btn_view" class="registerpass">View</button> 
       </span>
      </div>  	
    </fieldset>
	</form>
	</div> 
	</div>
	</div>
	</div>
	</section>