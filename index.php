<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shoppe | Home</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&family=Work+Sans:wght@300;400;500&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section class="header-section">
      <div class="navigation">
        <nav
          class="navbar navbar-dark bg-transparent navbar-expand-md text-white"
        >
          <div class="container">
            <a href="#" class="navbar-brand text-uppercase font-weight-bold"
              >Shoppe</a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#CollapseNav"
            >
              <span class="text-white"
                ><img src="img/fmenu.svg" width="30px" height="30px" alt="menu"
              /></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="CollapseNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="#all-products" class="nav-link text-white text-uppercase">products</a>
                </li>
                <li class="nav-item">
                	<a href="#about" class="nav-link text-white text-uppercase">about</a>
                </li>
				<li class="nav-item">
					<a href="#contact" class="nav-link text-white text-uppercase">contact</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link text-white text-uppercase">login</a>
				</li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
	  <div id="carouselControls" class="carousel slide " data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="https://picsum.photos/id/139/1366/400" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://picsum.photos/id/140/1366/400" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://picsum.photos/id/152/1366/400" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
	 </div>
	<div class="trending-products-main ">
		<h2 class="trending-products-heading">trending products</h2>
		<hr class="mx-auto w-25">
		<div class="trending-products">
			<div class="trending-items text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/amlawithhoney.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">amla with honey<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="trending-items text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/moringa.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">moringa<br><span>&#8377 899</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="trending-items text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/nonipremium.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">noni premium plus<br><span>&#8377 1899</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="trending-items text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/ironfolic.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">iron & folic acid<br><span>&#8377 749</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="trending-items text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/nonikokuum.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">noni kokum plus<br><span>&#8377 1499</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="all-products" id="all-products">
	<h2 class="all-products-heading">all products</h2>
	<hr class="w-25 mx-auto">
	<div class="health-products">
		<div class="product-header" onclick="healthToggler()">
			<h2 class="hw-heading">health and wellness </h2>
			<img src="img/arrowDown.svg" height="30px" width="30px" alt="show all" class="mt-auto">
		</div>
	
		<div class="health-product-container" id="health-product-container">
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/aloeverawithhoney.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">aloeVera with honey<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/amlawithhoney.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">amla with honey<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/nonigoldhalf.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">noni gold(500ml)<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/nonikokuum.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">noni kokum plus(1L)<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/nonigold.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">noni gold(1L)<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/nonikokumhalf.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">noni kokum plus(500ml)<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/nonipremiumhalf.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">noni premium plus(500ml)<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/nonipremium.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">noni premium plus(1L)<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/proteinpowder.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">protein powder(500gm)<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/proteinpowderhalf.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">protein powder(200gm)<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/prorichbs.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">protien rich butter scotch<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/prorichcho.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">protien rich chocolate<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/energyrushbs.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">energy rush butter scotch<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/energyrushcho.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">energy rush chocoloate<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/amlachcandy.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">amla chatpata candy<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/omega3fatty.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">omega 3 fatty acid<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/multivitamin.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">multivitamin<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/calcium.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">calcium<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/ironfolic.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">iron & folic acid<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/moringa.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">moringa<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/spirulina.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">spirulina<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/greencoffee.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">green coffee extract<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/jointcare.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">joint care<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/painoil.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">pain oil<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="health-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/health/amlaswcandy.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">amla sweet candy<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
		</div>
	</div>
	<div class="personal-care-products">
		<div class="product-header" onclick="personalcareToggler()">
			<h2 class="hw-heading">personal care </h2>
			<img src="img/arrowDown.svg" height="30px" width="30px" alt="show all" class="mt-auto">
		</div>
		
			<div class="personalcare-product-container" id="personalcare-product-container">
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/almondscrub.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">apricot almond scrub<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/avsoap.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">aloeVera soap<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/farenesscream.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">fairness cream<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/handwash.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">hand wash<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/lipbalm.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">strawberry lip balm<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/aygelpaste.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">ayurvedic gel toothpaste<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/greenapple.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">green apple shampoo<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/antidandruff.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">anti dandruff shampoo<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/hairconditioner.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">hair conditioner(220ml)<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/hairtonic.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">herbal hair tonic oil(100ml)<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/mahabhingraj.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">maha bhringraj hair oil<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/moistlotion.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">moisturising lotion with SPF15<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/neemavfacewash.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">neem & aloeVera face wash<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/wgmoist.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">whear germ moisturising lotion<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			<div class="personalcare-item text-center">
				<div class="product-img img-fluid"><img src="img/allProducts/personalcare/shavingbrush.jpg" alt=""></div>
				<div class="product-details">
					<p class="product-text ">smart shave shaving brush<br><span>&#8377 249</span></p>
					<button class="product-view-button">view</button>
				</div>
			</div>
			
		</div>
	</div>
	<div class="agriculture-products">
		<div class="product-header" onclick="agriToggler()">
			<h2 class="hw-heading">agriculture </h2>
			<img src="img/arrowDown.svg" height="30px" width="30px" alt="show all" class="mt-auto">
		</div>
		
			<div class="agriculture-container" id="agriculture-container">
				<div class="agriculture-item text-center">
					<div class="product-img img-fluid"><img src="img/allProducts/agriculture/agroveera.jpg" alt=""></div>
					<div class="product-details">
						<p class="product-text ">agroveera plus<br><span>&#8377 249</span></p>
						<button class="product-view-button">view</button>
					</div>
				</div>
				<div class="agriculture-item text-center">
					<div class="product-img img-fluid"><img src="img/allProducts/agriculture/agrolizer.jpg" alt=""></div>
					<div class="product-details">
						<p class="product-text ">agrolizer 82<br><span>&#8377 249</span></p>
						<button class="product-view-button">view</button>
					</div>
				</div>
		   </div>
	</div>
</section>
<section class="about" id="about">
	<h2 class="about-heading">about us</h2>
	<hr class="w-25 mx-auto">
	<div class="container">
		<p class="about-content">
			Shoppe online is an initiative taken for accessing and providing a wide range of exclusive products of the smart shoppe to a larger community easily and quickly. however, we are not violating any guidelines of the direct selling authority. we are just providing the ease of access to a larger audience for knowing our products without any barrier.
		</p>
	</div>
</section>
<section class="contact" id="contact">
	<h2 class="contact-heading">contact us</h2>
	<hr class="w-25 mx-auto">
	<div class="container">
		<form action="contact_us.php" method="POST">
			<div class="contact-form">
				<input type="text" placeholder="Name" class="contact-input text-capitalize" name="name">
				<input type="email" placeholder="Email" class="contact-input" name="email" required>
				<textarea name="comments" id="" cols="20" rows="5" placeholder="Comments" class="contact-input" name="comments">
					
				</textarea>
				<input type="submit" class="submitbtn" name="submit" value="Submit">
			</div>
		</form>
	</div>
</section>
<section class="footer">
	<div class="container footer-container">
		<div class="contact-info-box">
			<div class="contact-link">
				<img src="img/address.svg" alt="">
				<p class="text-capitalize"> dhenkanal meet point, near sasan chowk, dhenkanal, odisha (759001)</p>
			</div>
			<div class="contact-link">
				<img src="img/email.svg" alt="">
				<p>aarogyasmartshoppe@gmail.com</p>
			</div>
			<div class="contact-link">
				<img src="img/phone.svg" alt="">
				<p> +91-8327766058</p>
			</div>
		</div>
		<div class="important-link-box">
			<ul>
				<li><a href="#">product guide pdf</a></li>
				<li><a href="#">products price list</a></li>
				<li><a href="#">registration form</a></li>
				<li><a href="#">achiever's clan</a></li>
				<hr class="w-50">
				<li><a href="https://predator2v0.github.io/myportfolio" target="_blank">developer contact</a></li>
			</ul>
		</div>
		<div class="copyright-info-box">
			<h3>shoppe online</h3>
			<p>&copy; 2020, all rights reserved</p>
		</div>
	</div>
</section>
<!-- javascript -->
<!-- script for toggle of the all product section -->
<script>
	function healthToggler(){
		var tog = document.getElementById("health-product-container").style.display ;
		if(tog == "flex"){
			document.getElementById("health-product-container").style.display = "none";
		} else {
			document.getElementById("health-product-container").style.display = "flex";
		}
	}
	function personalcareToggler(){
		var tog = document.getElementById("personalcare-product-container").style.display ;
		if(tog == "flex"){
			document.getElementById("personalcare-product-container").style.display = "none";
		} else {
			document.getElementById("personalcare-product-container").style.display = "flex";
		}
	}
	function agriToggler(){
		var tog = document.getElementById("agriculture-container").style.display ;
		if(tog == "flex"){
			document.getElementById("agriculture-container").style.display = "none";
		} else {
			document.getElementById("agriculture-container").style.display = "flex";
		}
	}
</script>
<!-- script ends for toggle products section -->
    <script
      src="https://kit.fontawesome.com/7a15be51b1.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
