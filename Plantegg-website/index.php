<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
       .log {
            display: flex;
            align-items: center; /* Center items vertically */
            gap: 20px;
        }
        .log a {
            text-decoration: none; /* Remove underline */
            color: inherit; /* Inherit text color */
            margin-right: 10px; /* Add some spacing between links */

        }
        .sign {
            position: absolute;
            top: 10px; /* Adjust top position as needed */
            right: 10px; /* Adjust right position as needed */
        }
        .sign a {
            text-decoration: none; /* Remove underline */
            color: inherit; /* Inherit text color */
            margin-left: 10px; /* Add some spacing between links */
        }
          .background {
            margin-top: 0; /* Adjust the value as needed */
        }
        
        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Adjust alignment and spacing */
            padding: 10px; /* Optional padding for better spacing */
            gap:20px;
        }
        
        .nav img {
            height: 90px;
        }
        
        .list {
            margin-top: 20px;
            display: flex;
            list-style-type: none;
            gap: 40px; /* Adjust gap between items */
        }

        .list a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="log">
        <i class="fa fa-envelope"></i>
        <a href="mailto:pavithras@drngpit.ac.in">pavithras@drngpit.ac.in</a>
        <i class="fa fa-phone"></i>
        <a href="tel:1123444432">1123444432</a>
        <i class="fa fa-facebook"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-twitter"> </i>
        <i class="fa fa-linkedin"></i>
        <div class="sign">
        <a href="#">Login</a>
        <a href="#">Signup</a>
    </div>
    </div>
    <div class="background">
        <div class="nav">
            <img src="newlogowhite.png" alt="logo">
            <ul class="list">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="plantegg.php">Products</a></li>
                <li><a href="nutrition.php">Nutrition Chart</a></li>
                <li><a href="recips.php">Recipes</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="bg2.jpg" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption">
                        <h1>A Complete Atternate For Egg<span style="display: block; margin-right: 27px;" >Nutrition</h1>
                        <h5>We Speak The Good Food Language</h5>
                        <div class="a">
							<a href="#" >Read More</a>
						</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="bg1.jpg" class="d-block w-100" alt="Slide 2">
                     <div class="carousel-caption">
                        <h1>Deliciousness Jumping Into<br>The Mouth</h1>
                        <h5>Let Enjoy The Rhym Of Plantegg Dishes</h5>
                        <div class="a">
							<a href="#" >Read More</a>
						</div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="story">
    	<img src="home-about.jpg">
    	<h1>Our Story</h1>
    	<h5>THE BEST ALTERNATE FOR EGG NUTRITION</h5>
    	<p>Plantegg was born not to replace eggs. It’s a alternative for healthy protein and micronutritents. In a attractive format called plantegg. Its not about veganism, its about a healthy living of body and mental fitness.</p>
    </div>
     <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                	<img src="newlogowhite.png"><br><br>
                    <p>A huge opportunity- having hundreds of plant based protein alternatives but only few products that gives you a pure virgin natural protein product. That’s where Plantegg comes in! Our hope is that Planteggs can satisfy a part of protein and micronutrient need.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                	<h1>Contact Us</h1><br><br>
                    <h5>Office Address</h5>
                    <p>coimbatore</p>
                    <h5>Phone Number</h5>
                    <a href="tel:1123444432">1123444432</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                	<h1>Legal Link</h1><br><br>
                    <p>Cookie Policy</p>
                    <p>Disclaimer</p>
                    <p>Genaral Terms</p>
                    <p>Privacy Policy</p>
                    <p>Shipping Policy</p>
                    <p>Return And Refund Policy</p>
                  </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h1>Road Map</h1><br><br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15664.214870365355!2d77.005239093561!3d11.03459668645098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85824c7646fcb%3A0x3cbee12a8c82fcb9!2sPeelamedu%2C%20Maheshwari%20Nagar%2C%20Coimbatore%2C%20Tamil%20Nadu%20641004!5e0!3m2!1sen!2sin!4v1719760550106!5m2!1sen!2sin" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
