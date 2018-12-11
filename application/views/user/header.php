<html>
        <head>
                <title>Unique ISP</title>
			   <link rel="Stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
				<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/script.jquery"></script>
		</head>
        <body>           
<body>
<div >
	<p class="top">Head Office, Trikuti Colony, Batisputali,Kathmandu, Nepal</br>
	Mob:9817091760,  Email:info@uniqueisp.com.np<p/>
<h1 class="main" > <img src="<?php echo base_url() ?>assets/image/logo.jpg" alt="Logo" class=""></img>
 Unique ISP</h1>
 <div class="clear"></div>
</div>           
<body>
<h1 class="main" > Unique ISP</h1>
<div class="head">
<nav>
<ul>
<li><a href="<?php echo base_url() ?>customer/profile">Home</a></li>
<li><a href="<?php echo base_url() ?>customer/updateprofile">Update Profile</a></li>
<li><a href="<?php echo base_url() ?>customer/updatebandwidth">Update Bandwidth</a></li>
<li><a href="<?php echo base_url() ?>unique/logout">Logout</a></li>
</ul>
</nav>
</div>
<?php if($this->session->flashdata('message')) echo $this->session->flashdata('message');?>
