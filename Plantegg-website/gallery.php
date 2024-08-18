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
        .background {
            background: url("3.avif") no-repeat center center;
            background-size: cover; /* This will make the background cover the entire div */
            height: 615px;
        }
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
        .head {
            color: white;
            text-align: center;
            margin-top: 200px;
        }
        .product {
            padding: 50px 0;
            text-align: center;
        }
        .product h1 {
            margin-bottom: 40px;
        }
        .gallery {
            margin: 5px;
            border: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .gallery:hover {
            border: 1px solid #777;
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
        .desc {
            padding: 15px;
            text-align: center;
        }
        .footer {
            background-color: black;
            padding: 40px 0;
            text-align: center;
            color: white;
        }
        .footer img {
            height: 100px;
        }
        .footer .col {
            margin-bottom: 20px;
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
        <i class="fa fa-twitter"></i>
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
        <div class="head">
            <h1>GALLERY</h1>
            <p>All information and stories from our gallery will help you have the best meal for your day</p>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="gallery">
                    <a target="_blank" href="img_5terre.jpg">
                        <img src="3.avif" alt="Cinque Terre" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="gallery">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="aboutus.jpg" alt="Forest" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="gallery">
                    <a target="_blank" href="img_lights.jpg">
                        <img src="one.avif" alt="Northern Lights" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="gallery">
                    <a target="_blank" href="img_mountains.jpg">
                        <img src="p2.jpg" alt="Mountains" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="gallery">
                    <a target="_blank" href="img_mountains.jpg">
                        <img src="packet.png" alt="Mountains" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
            </div>
        </div>
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
