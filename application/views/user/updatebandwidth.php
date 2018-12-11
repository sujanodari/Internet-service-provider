	 
	 <head>
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	</head>
<section class="section-75 section-bottom-60 section-md-100 bg-default bg-image" style="background-image: url(<?php echo base_url() ?>assets/image/bg2.jpg);">
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">                                               
<form action = "<?php echo base_url();?>update/usersBandwidth" method="post" style="margin:0; padding-top:0px">
     <fieldset>
     <p><label>Bandwidth</label>
	  	 	  <select name="bandwidth" >
	  						<?php
			foreach($bandwidthlist->result_array() as $bandwidth):
					?>
	  <option  value="<?php echo $bandwidth['bandwidthtype']." ".$bandwidth['bandwidth'];?>"><?php echo $bandwidth['bandwidthtype']."  ".$bandwidth['bandwidth']."Mbps"; ?></Option>
	 		<?php
				endforeach;
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
	<div class="wrapper">
     <span class="group-btn">     
	<button class="fa fa-sign-in" type="submit" name="btn_update" class="form-control input-sm chat-input">Update</button> 
       </span>
      </div>
      </div>
	 </form>    
    </fieldset>
	</form>
	</div>
	</div>
	</div>
	</section>