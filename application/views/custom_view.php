<head>
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	</head>	

					
			
<div class="col-md-offset-5 col-md-3">
<div class="form-login" >
<?php
echo $error;
?>
<?php
echo form_open_multipart('add/do_upload');
?>
<label><h2>Upload Photo</h2></label>
<?php
echo "<input type='file' name='userfile' size='20'/>";
?>
<?php
echo "<input type='submit' name='submit' value='upload'/>";
?>
<?php
echo "</form>";
?>
</div>
</div>
</div>
</div>
</div>
</section>