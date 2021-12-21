<!DOCTYPE html>
<html>
<head>
	<?php include 'layouts/headerindex.php'; ?>
</head>
<body>
<?php include 'layouts/loading.php'; ?>
<?php include 'layouts/headerpage.php'; ?>
<?php include 'layouts/colums_left.php'; ?>
<?php include 'layouts/datatable.php'; ?>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="invoice-wrap">
					<div class="invoice-box">
						<div class="invoice-header">
							<div class="logo text-center">
								<img src="vendors/images/deskapp-logo.png" alt="">
							</div>
						</div>
						<h4 class="text-center mb-30 weight-600">Chi Tiết</h4>
						<div class="row pb-30">
							<div class="col-md-6">
								<h5 class="mb-15">Frog 1</h5>
								<p class="font-14 mb-5">Ngày tham gia: <strong class="weight-600">19 Jul 2021</strong></p>
								<p class="font-14 mb-5">Email: <strong class="weight-600">Frog@yahoo.com</strong></p>
							</div>
						</div>
						<div class="invoice-desc pb-30">
							<div class="invoice-desc-head clearfix">
								<div class="invoice-sub">Bộ phận</div>
								<div class="invoice-rate">Lương</div>
								<div class="invoice-hours">Hours</div>
								<div class="invoice-subtotal">Subtotal</div>
							</div>
							<div class="invoice-desc-body">
								<ul>

									<li class="clearfix">
										<div class="invoice-sub">Bán Hàng</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal"><span class="weight-600">$2000</span></div>
									</li>
						
								</ul>
							</div>
							<div class="invoice-desc-footer">
								<div class="invoice-desc-head clearfix">
									<div class="invoice-sub">Bank Info</div>
									<div class="invoice-rate">Due By</div>
									<div class="invoice-subtotal">Total Due</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">
												<p class="font-14 mb-5">Account No: <strong class="weight-600">123 456 789</strong></p>
												<p class="font-14 mb-5">Code: <strong class="weight-600">4556</strong></p>
											</div>
											<div class="invoice-rate font-20 weight-600">10 Jan 2018</div>
											<div class="invoice-subtotal"><span class="weight-600 font-24 text-danger">$8000</span></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h4 class="text-center pb-20">Thank You!!</h4>
					</div>
				</div>
			</div>
			<?php include 'layouts/footer.php'; ?>
		</div>
	</div>
	<!-- js -->
<?php include 'layouts/script.php'; ?>
</body>
</html>