
<!------ Include the above in your HEAD tag ---------->
 <link rel="Stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
<div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Choose your plan</h2>
            </div>
            <div class="col-md-12" style="margin-top: 20px;">
								<?php
			foreach($bandwidthlist->result_array() as $bandwidth):
					?>
					
                <div class="pricing-table">
                    <div class="panel panel-primary" style="border: none;">
                        <div class="controle-header panel-heading panel-heading-landing">
                            <h1 class="panel-title panel-title-landing">
                                <?php echo $bandwidth['bandwidthtype'];?>
                            </h1>
                        </div>
                        <div class="controle-panel-heading panel-heading panel-heading-landing-box">
                            Free Installation
                        </div>
                        <div class="panel-body panel-body-landing">
                            <table class="table">
                                <tr>
                                    <td width="50px"><i class="fa fa-check"></i></td>
                                    <td><?php echo $bandwidth['bandwidth'];?> Mbps</td>
                                </tr>
                                <tr>
                                    <td width="50px"><i class="fa fa-check"></i></td>
                                    <td>Rs.<?php echo $bandwidth['price'];?> per month</td>
                                </tr>
                                <tr>
                                    <td width="50px"><i class="fa fa-check"></i></td>
                                    <td>2 month bonus on annual Subscription </td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer panel-footer-landing">
                            <a href="<?php echo base_url() ?>unique/order?name=<?php echo $bandwidth['bandwidthtype']." ".$bandwidth['bandwidth']; ?>" class="btn btn-price btn-success btn-lg">SELECT</a>
                        </div>
                    </div>
                </div>
									<?php
				endforeach;
						?>
               
                </div>
            </div>
			
        </div>
