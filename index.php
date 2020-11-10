<?php 

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	 <!-- slideshow-container -->
	 <div class="content">
            <div class="slideshow-container">

                <div class="mySlides fade">
                  <img src="images/slide1.jpg" style="width:100%">
                </div>
                
                <div class="mySlides fade">
                  <img src="images/slide2.jpg" style="width:100%">
                </div>
                
                <div class="mySlides fade">
                  <img src="images/slide3.jpg" style="width:100%">
                </div>
              
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
         
            </div>
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
        </div>
    <!-- ENd of slideshow-container -->
    
    <!-- START HOME -->
    <section class="main-cont">
      <div class="Mcontent">
        <a href="#">
          <div class="Abanar">
            <span>MANAGER</span>
          </div>
          </a>
      </div>

      <div class="Acontent">
        <a href="#">
        <div class="Abanar">
          <span>ACADEMY</span>
        </div>
        </a>
      </div>
    </section>
    <script src='js/script.js'></script>
    <br>
    <!-- END HOME -->

	<?php include('templates/footer.php'); ?>

</html>