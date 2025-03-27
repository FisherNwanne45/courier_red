<?php include 'header.php'; ?>
<section class="page-title wrapper clearfix" style="background-image: url(images/about-page-bg.jpg);">
	<div class="container">
		<div class="row">
			<div class="title-wrap wow fadeIn" data-wow-delay="1s">
				<h1>Track & Trace Shipment</h1>
				<div class="breadcrumbs">
					<p>You Are Here :
						<span><a href="index">Home</a></span>
						<span class="arrow"><i class="icon icon-arrow-right"></i></span>
						<span>Track & Trace Shipment</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="content" class="clearfix">

	<div class="single-services wrapper bg-color000">
		<div class="container">
			<div class="row">
				<div class="single-services-wrap row">
					<div class="single-content col-md-5">

						<h3 class="title">Track & Trace </h3>
						<div class="content-text">
							<p>Here’s the fastest way to check the status of your shipment.
								No need to call Customer Service – our online results give you real-time,
								detailed progress as your shipment speeds through the
								<strong><?php echo $row['name']; ?></strong> network.
							</p>
							<form action="resources/track-result" method="post" name="form" id="form"
								class="form-horizontal form-style">
								<div class="form-group">
									<div class="col-md-7">
										<input required style="background: #eee;" type="text" name="search" id="search"
											class="form-control" placeholder="Tracking Number" value="">

										<input value="cid" type="hidden" name="dropdown">
									</div>
									<div class="col-md-5">
										<button type="submit" name="Submit" class="btn btn-primary">Track
											Shipment!</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="sidebar col-md-7">
						<img class="full-width0" style="max-width: 400px;" src="images/tracking.jpg" alt="Img">
					</div>
				</div>
			</div>
		</div>
	</div>

</section>


<?php include 'footer.php'; ?>