<?php 
	require_once "Layout/header.php"
?>

<div class="container-fluid ">
		
	
			<div class="row bg-dark mr-0 ml-0" >
				<div class="col-lg-2 col-md-2 col-sm-1 col-1  "></div>
				<div class="col-lg-8 col-md-8 col-sm-10 col-10 ">
					<div class="row menutext" >
						<div class="col-lg-2 col-md-4 col-sm-4 col-4  text-white ">
							<img class="img-responsive im p-2" src="Images/menu1.jpg">
								<h6 class="text-center text-white">ROAD</h6>
								<p class="text-center text-white">Performance <br> Adventure & gravels <br>Frames</p>
							</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-4 text-white">
							<img class="img-responsive im p-2" src="Images/mount.jpg">
								<h6 class="text-center text-white">MOUNTAIN</h6>
								<p class="text-center text-white">Cross Country <br> Trail <br>Downhill
								</p>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-4 text-white">
							<img class="img-responsive im p-2" src="Images/mount1.jpg">
								<h6 class="text-center text-white">ELEKTRISCH</h6>
								<p class="text-center text-white"> Mountain <br> City</p>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-6 text-white">
							<img class="img-responsive im p-2" src="Images/mount2.jpg">
								<h6 class="text-center text-white">FITNESS</h6>
								
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-6 text-white">
							<img class="img-responsive im p-2" src="Images/menu2.jpg">
								<h6 class="text-center text-white">KINDEREN</h6>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-1 col-1"></div>
			</div>
			
		

	</div>

<section class="container-fluid">
			<div class="bgimg">
				<h4> ROAD</h4> 
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
</section>

		<section class="conatiner-fluid">
			<div class="row mr-0 ml-0" style="margin-right: 0px !important;">
				<div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 " >
					<div class="mount">
						<h4 class="text-white">MOUNTAIN</h4>
						<P class="text-white">Lorem ipsum dolor sit, consectetur adipisicing,<br>
							tempor incididunt ut labore et dolore aliqua. 
						</P>
					</div>
				</div>

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" >
					<div class="mt-4 mount1">
						<h4 class="text-white">ELEKTRISCH</h4>
						<P class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>
							tempor incididunt ut labore et dolore magna aliqua. 
						</P>
					</div>
					
					<div class=" mt-4 mount2">
						<h4 class="text-white">FITNESS</h4>
						<P class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>
							tempor incididunt ut labore et dolore magna aliqua. 
						</P>
					</div>
				
				</div>

			</div>
		</section>

		<div class="owl-carousel owl-theme">
		    <div class="item"><img src="Images/bike1.jpg"></div>
		    <div class="item"><img src="Images/bike2.jpg"></div>
		    <div class="item"><img src="Images/bike3.jpg"></div>
		    <div class="item"><img src="Images/bike1.jpg"></div>
		    <div class="item"><img src="Images/bike2.jpg"></div>
		    <div class="item"><img src="Images/bike3.jpg"></div>
		</div>
		
		<?php require_once "Layout/footer.php";?>

	</body>
	<script type="text/javascript" src="JS/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="JS/owl.carousel.min.js"></script>
	<script>
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:3
	        }
    }
})
</script>
</html>