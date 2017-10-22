<?php 
	ob_start();
	session_start();
	ini_set("display_errors",0);
	
	require_once("../include/clsInclude.php");
	
	$oPDF_DA = new clsPDF_DA(); 
	$oPDF_CDO = new clsPDF_CDO();
	
	if(!isset($_REQUEST['b']) && !isset($_REQUEST['c'])){ 
		// Invalid request
		echo "Your request is not valid.";
		exit;
	}
	
	$billID = $_REQUEST['b'];
	$companyID = $_REQUEST['c'];
	
	$bill = $oPDF_DA->Bill_Details($billID, $companyID);
	
	

?>

<!DOCTYPE html>

<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Invoice</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="../assets/plugins/animate.css/animate.min.css">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
		<link rel="stylesheet" href="../assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="../assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="../assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" href="../assets/plugins/summernote/dist/summernote.css">
		<link rel="stylesheet" href="../assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
		<link rel="stylesheet" href="../assets/plugins/toastr/toastr.min.css">
		<link rel="stylesheet" href="../assets/plugins/bootstrap-select/bootstrap-select.min.css">
		<link rel="stylesheet" href="../assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" href="../assets/plugins/DataTables/media/css/DT_bootstrap.css">
		<link rel="stylesheet" href="../assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="../assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE CSS -->
		<link rel="stylesheet" href="../assets/css/styles.css">
		<link rel="stylesheet" href="../assets/css/styles-responsive.css">
		<link rel="stylesheet" href="../assets/css/plugins.css">
		<link rel="stylesheet" href="../assets/css/themes/theme-default.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="../assets/css/print.css" type="text/css" media="print"/>
		<!-- end: CORE CSS -->
		<link rel="shortcut icon" href="favicon.ico" />
		<style>
			
			.table-bordered>tbody>tr>td {
				border: 0px !important;
				border-right: 1px solid #ddd !important;
				padding:5px;
			}
			
			.panel-body {
			padding: 5px;
			}
			h1{
			margin: 20px 0px;
			}
			body, .panel-white , h1, h2, h3, h4, h5, h6, .table thead tr{
			color:#000000 !important;
			}
			table.customer{
			margin-bottom:0px !important;
			border-bottom:0px;
			}
			h4{
			font-weight:500;
			margin-top:0px;
			}
			table {
			width:100% !important;
			}
			h3{
			margin-top:10px;
			}
			address{
			margin-bottom:0px;
			}
			@media print {
				a[href]:after {
					content: none !important;
				}	
			}
			
			
		</style>
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: SLIDING BAR (SB) -->
		
		<!-- end: SLIDING BAR -->
		<div class="main-wrapper">
			
			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner" style=" margin-top: 0px !important; margin-left: 0px; ">
				<!-- start: PAGE -->
				<div class="main-content">
					
					<div class="container">
						
						
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
								
								<!-- start: RESPONSIVE TABLE PANEL -->
								<div class="panel panel-white">
									
									<div class="panel-body">
										<div class="table-responsive">
											<div class="row">
												<div class="col-sm-12 center">
													<h3 style="margin-bottom:0px;">RETAIL INVOICE</h3>
													<h6 style="margin-top:5px;">(ISSUE OF INVOICE UNDER RULE 11 OF CENTRAL EXCISE RULE 2002)</h6>
												</div>
											</div>
											
											<table class="table table-bordered customer" >
												<tr style="border-bottom: 1px solid #ddd !important;">
													<td style="border:0;" width="50%">
														<h4>Customer</h4>
														<address>
															<strong>Name :</strong>
															<?php echo $bill['Dealer']['Dealer_Name']; ?>
															<br>
															<strong>Comapany Name :</strong>
															<?php echo $bill['Dealer']['Dealer_CompanyName']; ?>
															<br>
															<strong>GST No :</strong>
															<?php if($bill['Dealer']['Dealer_VatNo']!=''){echo $bill['Dealer']['Dealer_VatNo'];} else {echo 'NA';} ?>
															<br>
															
															<strong>Address :</strong>
															<?php echo $bill['Dealer']['Dealer_CompanyAddress'].', '.ucfirst($bill['Dealer']['Dealer_CityName']).' - '.$bill['Dealer']['Dealer_Pincode'].'.'; ?>
															<br>
															<strong>Phone :</strong>
															<?php echo $bill['Dealer']['Dealer_MobileNo']; ?>
															<br>
															<strong>E-mail :</strong>
															
															<a href="mailto:<?php echo $bill['Dealer']['Dealer_Email']; ?>">
																<?php echo $bill['Dealer']['Dealer_Email']; ?>
															</a>
														</address>
													</td>
													<td style="border:0;" width="50%" >
														<h4>Company's Details: </h4>
														<address>
															<?php //echo $bill['Company']['Company_Name']; ?>
															<strong>Sankalp Recreation Pvt. Ltd. Factory Division</strong>
															<br>
															
															<strong>TIN No :</strong>
																24074300873
															<br>
															<strong>GSTIN No :</strong>
																24AAGCS6661J3Z0
															<br>
															
															<strong>CIN No :</strong>
																U92219GJ1995PTC028272
															<br>
															
															<strong>E-mail :</strong>
															<a href="mailto:<?php echo $bill['Company']['Company_Email']; ?>">
																<?php echo $bill['Company']['Company_Email']; ?>
															</a>
															<br>
															<!--<?php echo $bill['Company']['Company_Address']; ?>-->
															<br>
															<strong>Order ID :</strong>
															<?php echo $billID; ?>
															<br>
															<!--<strong>Invoice No. :</strong>
															<?php echo $bill['Invoice'];  ?>
															<br>-->
															<strong>Date :</strong>
															<?php echo date("d-M-Y", strtotime($bill['Bill']['Order_Date'])); ?>
															
														</address>
													</td>
												</tr>
												
												
												
												<tr>
													<td style="border:0px !important;" width="50%">
														<h4>Company's Bank Details: </h4>
														<address>
															<strong>Bank Name :</strong>
															&nbsp HDFC Bank Ltd.
															<br>
															<strong>A/c No. &nbsp &nbsp &nbsp :</strong>
															&nbsp 00692560011840
															
														</address>
													</td>
													<td style="border:0px !important;" width="50%" >
														<h4>&nbsp </h4>
														<address>
															<strong>Branch &nbsp &nbsp &nbsp :</strong>
															&nbsp Ashram Road
															<br>
															<strong>IFS Code  &nbsp&nbsp :</strong>
															&nbsp HDFC0000069
															
														</address>
													</td>
												</tr>
												
											</table>
											
											
											<table class="table table-bordered " id="sample-table-1">
												<thead>
													<tr >
														<?php if($_REQUEST['c']=='5'){?>
														<th class="center" width="5%"> No.</th>
														<th class="center" width="30%">Product Name</th>
														<th class="center" width="10%">Tarrif/HSN <br> Classification</th>
														<th class="center" width="10%">GST Rate</th>
														<th class="center" width="10%">Qty</th>
														<th class="center" width="15%">Rate</th>
														<th class="center" width="15%">Amount</th>
														<?php } else { ?> 
														<th class="center" width="5%"> No.</th>
														<th class="center" width="40%">Product Name</th>
														<th class="center" width="10%">GST Rate</th>
														<th class="center" width="10%">Qty</th>
														<th class="center" width="15%">Rate</th>
														<th class="center" width="15%">Amount</th>
														<?php } ?>
														
													</tr>
												</thead>
												<tbody>
													<?php 
														$amount = $subtotal = 0;
														$item = $bill['Items']['Item'];
														for($i=0;$i<count($item);$i++){
															$amount = $item[$i]['I_ItemQty']*$item[$i]['I_ItemPrice'];
															$subtotal += $amount;
														?>
														<tr >
															<td class="center"><?php echo $i+1; ?></td>
															<td> <?php echo $item[$i]['Item_Name']; ?> </td>
															<?php if($_REQUEST['c']=='5'){?> <td class="center"><?php echo $item[$i]['Item_HSN']; ?></td> <?php }?>
															<td align="right"> <?php echo number_format($item[$i]['Item_GST'],2).' %'; ?> </td>
															<td align="right"> <?php echo $item[$i]['I_ItemQty']; ?> </td>
															<td align="right"><?php echo $item[$i]['I_ItemPrice']; ?>  </td>
															
															<td align="right"> <?php echo number_format($amount,2); ?> </td>
														</tr>
														
													<?php } ?>
													
													<?php 
														$tax = $bill['Items'];
														$excise = $tax['Total_Excise'];
														$vat = $tax['Total_VAT'];
														$addVat = $tax['Total_AdditionalVAT'];
														//$cst = $tax['Total_CST'];
														//$wocst = $tax['Total_WOCST'];
														$pfc = $tax['Total_PFCharge'];
														$weight = $tax['Total_Weight'];
														$total = $subtotal + $excise + $vat + $addVat + $pfc;
														
													?>
													<tr >
														<td colspan="<?php if($_REQUEST['c']=='5'){ echo '6';} else { echo '5';}?>" align="right" style="border-top:1px solid #ddd !important;">Sub Total</td>
														<td align="right" style="border-top:1px solid #ddd !important;"> <?php echo number_format($subtotal,2); ?> </td>
													</tr>
													<tr >
														<td colspan="<?php if($_REQUEST['c']=='5'){ echo '6';} else { echo '5';}?>" align="right" >Packing Forwarding (GST)</td>
														<td align="right" > <?php echo number_format($pfc,2); ?> </td>
													</tr>
													
													<?php if($bill['Dealer']['Dealer_StateID']=='7'){ ?>
														<tr >
															<td colspan="<?php if($_REQUEST['c']=='5'){ echo '6';} else { echo '5';}?>" align="right" > SGST </td>
															<td align="right" > <?php echo number_format($excise,2); ?> </td>
														</tr>
														<tr >
															<td colspan="<?php if($_REQUEST['c']=='5'){ echo '6';} else { echo '5';}?>" align="right" > CGST </td>
															<td align="right" > <?php echo number_format($vat,2); ?> </td>
														</tr>
														
														<?php } else {?> 
														<tr >
															<td colspan="<?php if($_REQUEST['c']=='5'){ echo '6';} else { echo '5';}?>" align="right" > IGST </td>
															<td align="right" > <?php echo number_format($addVat,2); ?> </td>
														</tr>
														<!--
														<tr >
															<td colspan="<?php if($_REQUEST['c']=='5'){ echo '6';} else { echo '5';}?>" align="right" >CST Tax</td>
															<td align="right" > <?php echo number_format($cst,2); ?> </td>
														</tr>
														<tr >
															<td colspan="<?php if($_REQUEST['c']=='5'){ echo '6';} else { echo '5';}?>" align="right" >W/O CST Tax</td>
															<td align="right" > <?php echo number_format($wocst,2); ?> </td>
														</tr>-->
													<?php } ?>
													
													<tr style="border-top: 1px solid #ddd !important;">
														<td colspan="<?php if($_REQUEST['c']=='5'){ echo '6';} else { echo '5';}?>" align="right" style="border-top:1px solid #ddd;"><b>TOTAL</b></td>
														<td align="right" style="border-top:1px solid #ddd;"> <b>₹ <?php echo number_format($total,2); ?></b> </td>
													</tr>
													<tr style="border-top: 1px solid #ddd !important;">
														<td align="right" colspan="<?php if($_REQUEST['c']=='5'){ echo '7';} else { echo '6';}?>">Total weight is <b> <?php echo number_format($weight,2);?> </b> Kgs.</td>
													</tr>
													
													
												</tbody>
											</table>
											<table class="table table-bordered" >
												<tr>	
													<td >
														<b>Declration</b> : Certified that the particulars given above are true and correct amount identical represents the price actually charged and that there is no flow additional consideration directly or indirectly from the buyer.
													</td>
												</tr>
												
												<tr>	
													<td >
														<b>Note</b> : This order is valid for 15 days.
													</td>
												</tr>
											</table>
											<div class="row">
												<div class="col-sm-12 center">
													<h6 style="margin-top:5px;">This is computer generated invoice.</h6>
												</div>
											</div>
											</div>
										</div>
									</div>
									<!-- end: RESPONSIVE TABLE PANEL -->
								</div>
							</div>
							<!-- end: PAGE CONTENT-->
						</div>
						
					</div>
					<!-- end: PAGE -->
				</div>
				<!-- end: MAIN CONTAINER -->
				
			</div>
			<!-- start: MAIN JAVASCRIPTS -->
			
			<!--[if gte IE 9]><!-->
			<script src="../assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
			<!--<![endif]-->
			<script src="../assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
			<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
			<script src="../assets/plugins/blockUI/jquery.blockUI.js"></script>
			<script src="../assets/plugins/iCheck/jquery.icheck.min.js"></script>
			<script src="../assets/plugins/moment/min/moment.min.js"></script>
			<script src="../assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
			<script src="../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
			<script src="../assets/plugins/bootbox/bootbox.min.js"></script>
			<script src="../assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
			<script src="../assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
			<script src="../assets/plugins/jquery.appear/jquery.appear.js"></script>
			<script src="../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
			<script src="../assets/plugins/velocity/jquery.velocity.min.js"></script>
			<!-- end: MAIN JAVASCRIPTS -->
			<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
			<script src="../assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
			<script src="../assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
			<script src="../assets/plugins/toastr/toastr.js"></script>
			<script src="../assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
			<script src="../assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
			<script src="../assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
			<script src="../assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
			<script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
			<script src="../assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
			<script src="../assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
			<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
			<script src="../assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
			<script src="../assets/plugins/truncate/jquery.truncate.js"></script>
			<script src="../assets/plugins/summernote/dist/summernote.min.js"></script>
			<script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
			<script src="../assets/js/subview.js"></script>
			<script src="../assets/js/subview-examples.js"></script>
			<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
			
			<!-- start: CORE JAVASCRIPTS  -->
			<script src="../assets/js/main.js"></script>
			<!-- end: CORE JAVASCRIPTS  -->
			<script>
				jQuery(document).ready(function() {
					Main.init();
					SVExamples.init();
				});
			</script>
			
		</body>
		<!-- end: BODY -->
		</html>
	
	<script>
		window.print();
	</script>			