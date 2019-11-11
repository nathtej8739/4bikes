<?php 
	require_once "Layout/header.php"
?>



<section class="container-fluid">
			<div class="bgimg">
				<h4> ROAD</h4> 
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
</section>

		<section>
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
