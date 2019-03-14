

<?php include "header.php" ?>

<!DOCOTYPE HTML>
<html>
<body>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/1.jpg" style="width:100%" height="400">
  <div class="text" style="color:#101010"><h2 class="text-center">WE MAKE NEW WEBSITE</h2></div>
</div>

<div class="mySlides fade">
  <img src="img/images.jpg" style="width:100%" height="400">
  <div class="text" style="color:#101010"> <h2>WE ARE WEBSITE DEVELOPER
</h2></div>
</div>

<div class="mySlides fade">
  <img src="img/images.png" style="width:100%" height="400">

  <div class="text" style="color:#101010"> <h2> MORE 100+ PROJECT COMPLETED BY US
</h2></div>
</div>

	

<a class="prev" onClick="plusSlides(-1)">&#10094;</a>
<a class="next" onClick="plusSlides(1)">&#10095;</a>

</div>

<div style="text-align:center">
  <span class="dot" onClick="currentSlide(1)"></span>
  <span class="dot" onClick="currentSlide(2)"></span>
  <span class="dot" onClick="currentSlide(3)"></span>
</div>
<div class="below-slideshow" style="background-color:#01a2a6">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1 style="text-align:center; font-size:40px; font-family:'Times New Roman', Times, serif; color:#FFFFFF"> INTRODUCTION </h1>
						<h3 style="color:#FFFFFF; font-family:'Courier New', Courier, monospace"> HILLOFF COMPUTERS </h3>
						<P style="color:#FFFFFF">was set up in 2005 to provide complete IT solutions to its clients. In its one year of operation, the company has built up an enviable reputation for quality in all spheres of its activity related to information technology. The company has its head office and works at Kolkata. The present installed base is approximately a five hundred computers/peripherals which include JDB ITCARE integrated computer systems as well as MNC products like IBM, HP, Compaq, Acer amongst others. The company prime focus is on providing quality and efficient products, solutions and support services to its varied clientele, through its well trained and highly experienced team of skilled and certified engineers and technicians. It is because of the stringent focus to ensure efficient quality control across all spheres of its </P>
				</div>
			</div>
		</div>
	</div>


</body>
</html>



<?php include "footer.php" ?>
<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>