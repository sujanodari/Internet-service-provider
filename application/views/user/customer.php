<head>
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	</head>	

<section class="section-75 section-bottom-60 section-md-100 bg-default bg-image" style="background-image: url(<?php echo base_url() ?>assets/image/bg3.jpg);">				
			<div class="container">
			<div class="form-login ">
			
			<?php
				foreach($picture->result_array() as $pictures):
					?>
					
			<img src="<?php echo base_url()."uploads/".$pictures['image_path'];?>" "></br><p align="center"><?php echo $_SESSION['name']; ?></p></img>
								<?php
				endforeach;
						?>
			</div>
				<div class="form-login ">
					<?php
				foreach($user->result_array() as $users):
					?>
					<h3> User Information</h3>
					<h5 class="form-control input-sm chat-output">Username=<?php echo $users['username'];?></h5>
					<ul class="list-unstyled quick-links" >
						<li class="form-control input-sm chat-output">Full Name=<?php echo $users['fullname'];?></li>
						<li class="form-control input-sm chat-output">Gender=<?php echo $users['gender'];?></li>
						<li class="form-control input-sm chat-output">DOB=<?php echo $users['dob'];?></li>
						<li class="form-control input-sm chat-output">Address=<?php echo $users['address'];?></li>
						<li class="form-control input-sm chat-output">Contact_Number=<?php echo $users['number'];?></li>
						<li class="form-control input-sm chat-output">Citizionship No=<?php echo $users['citizen'];?></li>
					</ul>
					<?php
				endforeach;
						?>
				</div>
				<?php if (isset($_SESSION['name']) and $_SESSION['type']=='user'){ ?>
				<div class="form-login ">
					<?php
				foreach($bandwidth->result_array() as $bandwidths):
					?>
					<h3>Bandwidth Subscription Information</h3>
					<h5 class="form-control input-sm chat-output">Type=<?php echo $bandwidths['bandwidthtype'];?></h5>
					<ul class="list-unstyled quick-links" >
						<li class="form-control input-sm chat-output">Bandwidth=<?php echo $bandwidths['bandwidth']."Mbps";?></li>
											<?php
				endforeach;
				
						?>
					<?php
				foreach($order->result_array() as $order):
					?>
					
						<li class="form-control input-sm chat-output">Subscribe Date=<?php echo $order['subscribedate'];?></li>
						<li class="form-control input-sm chat-output">Expiry Date=<?php echo $order['expirydate'];?></li>
						<li class="form-control input-sm chat-output">Payment Made=<?php echo "Rs.".$order['paymentmade'];?></li>						
					</ul>
					
					<?php
				endforeach;
					}
						?>	
					</div>

				</div>

		</section>