<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- font awasome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header section start-->
    <section class="header">

        <a href="home.php" class="logo"> Orca</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section end-->
    <div class="heading" style="background:url(../images/footer1.jpg)no-repeat">
        <h1>Book Now</h1>
    </div>

    <!-- booking section start-->
    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" name="name" id="" placeholder="enter your name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" id="" placeholder="enter your email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" name="phone" id="" placeholder="enter your phone number">
                </div>
                <div class="inputBox">
                    <span>adress :</span>
                    <input type="text" name="adress" id="" placeholder="enter your adress">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" name="location" id="" placeholder="trip you want to go">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" name="persons" id="" placeholder="number of persons">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals" id="" >
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving" id="" >
                </div>
            </div>
            <input type="submit" value="submit" name="send" class="btn">
        </form>
    </section>
    <!-- booking section end-->

    <!-- footer section start-->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask Question</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i>+201115143187</a>
                <a href="#"><i class="fas fa-envelope"></i>omerfathey40@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>hurghada, Egypt</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="https://instagram.com/orca_trips_hurghada?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i>instagram</a>
                <a href="https://www.facebook.com/profile.php?id=100089972817837&mibextid=ZbWKwL"><i class="fab fa-facebook"></i>facebook</a>
            </div>

        </div>
        <div class="credit"> Created By <span>Omar Fathy</span> | all rights reserved!</div>
    </section>

<!-- footer section start-->


    <!-- swiper css link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link-->
    <script src="js/script.js"></script>
</body>
</html>