<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .background {
            background: url("3.avif") no-repeat center center;
            background-size: cover; /* This will make the background cover the entire div */
            height: 615px;
        }
        /* Custom CSS to remove underline from links */
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
        .contact-info {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
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
            <h1>CONTACT US</h1>
            <p>Let us know if you have any concern about our menu, service or other information you want to have</p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Contact Form</h4>
                    </div>
                    <div class="card-body">
                     <form action="contact_process.php" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <h4>OFFICE ADDRESS</h4>
                    <p>5-1-26a, raj nagar 1st street, vilangudi, Madurai, Tamil Nadu, 625018</p>
                    <h4>UNIT ADDRESS</h4>
                    <p>Plot no 3&4, Theekathir Nagar, Milakaranai Bus Stop, Madurai- 625018</p>
                    <h4>PHONE NUMBER</h4>
                    <p>1234556786</p>
                    <p>7494639794</p>
                    <h4>MAIL</h4>
                    <p>pavithras2drngpit.ac.in</p>
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
