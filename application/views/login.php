	<head>
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	</head>
<!------  HEAD tag ---------->
 <section class="section-75 section-bottom-60 section-md-100 bg-default bg-image" style="background-image: url(<?php echo base_url() ?>assets/image/bg3.jpg);">
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
			
			<form action = "<?php echo base_url();?>unique/checklogin" method="post" style="margin:0; padding-top:0px">
            <fieldset>
			<legend><h4>Login</h4></legend>
            <input type="text" id="userName" name="name" class="form-control input-sm chat-input" placeholder="username" required/>
            </br>
            <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="password" required/>
            </br>
            <div class="wrapper">
            <span class="group-btn">     
			<button class="fa fa-sign-in" type="submit" name="btn_login" class="login">Login</button> 
            </span>
            </div>
            </div>
			</form>
			</fieldset>
        </div>
    </div
	<div class="clear"> </div>
	</div>
	
</div>
</section>
