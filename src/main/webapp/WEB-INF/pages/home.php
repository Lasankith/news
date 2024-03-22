<?php session_start();
if (!isset($_SESSION["email"]))
{
	header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge TV News</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/ss.css">

</head>
<body>
	<div class="fullscreen-bg">
    <video loop muted autoplay  class="fullscreen-bg__video">
       
        <source src= "images/video.mp4" type="video/mp4">
        
    </video>
</div>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
        
    </a>

    <nav class="navbar">
        <a href="/news/src/main/webapp/WEB-INF/pages/login.php">Login</a>
		<a href="/news/src/main/webapp/WEB-INF/pages/updateUser.php">Edit My profile</a>
		<a href="/news/src/main/webapp/WEB-INF/pages/deleteUser.php">Delete my profile</a>
         <a href="#menu">menu</a>
         <a href="#about">about</a> 
        <a href="#review">review</a>
      
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
       
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>



</header>

<section class="home" id="home">

    <div class="content">
        <h3>GLOBAL NEWS PODCAST</h3>
        <p>Around the world in 99 seconds | See the full story</p>
        <a href="/news/src/main/webapp/WEB-INF/pages/viewAll.php" class="btn">view news now</a>
    </div>

</section>

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/news.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Global News</a>
                <span>By Knowledge TV</span>
                <p>Around the world in 99 second</p>
                <a href="/news/src/main/webapp/WEB-INF/pages/viewAll.php" class="btn">View</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/er.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Information & entertainment</a>
                <span>By Knoeledge TV</span>
                <p>Check local & Global information and entertainment</p>
                <a href="/news/src/main/webapp/WEB-INF/pages/viewAllInfo.php" class="btn">View</a>
            </div>
        </div>



    </div>

</section>


<section class="menu" id="menu">

    <h1 class="heading"> our <span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/mi.png" alt="">
            <h3>View My News</h3>
            <div class="price">what's today?</div>
            <a href="/news/src/main/webapp/WEB-INF/pages/mypage.php" class="btn">View</a>
        </div>

        <div class="box">
            <img src="images/info.jpg" alt="">
            <h3>View My information</h3>
            <div class="price">Explore my info</div>
            <a href="/news/src/main/webapp/WEB-INF/pages/viewmyInfo.php" class="btn">View</a>
        </div>

        <div class="box">
            <img src="images/art.jpg" alt="">
            <h3>View My Arts</h3>
            <div class="price">My kids Page </div>
            <a href="/news/src/main/webapp/WEB-INF/pages/viewMyArt.php" class="btn">View</a>
        </div>

        <div class="box">
            <img src="images/add.png" alt="">
            <h3>Add News</h3>
            <div class="price">Add your favourite news here</div>
            <a href="/news/src/main/webapp/WEB-INF/pages/addNews.php" class="btn">Add News</a>
        </div>
        
                <div class="box">
            <img src="images/add.png" alt="">
            <h3>Add Information</h3>
            <div class="price">Add entertainment posts</div>
            <a href="/news/src/main/webapp/WEB-INF/pages/addInfo.php" class="btn">Add Information</a>
        </div>
        
                <div class="box">
            <img src="images/add.png" alt="">
            <h3>Add Arts</h3>
            <div class="price">Add your beautiful art here</div>
            <a href="/news/src/main/webapp/WEB-INF/pages/addArt.php" class="btn">Add Art</a>
        </div>
        
                <div class="box">
            <img src="images/add.png" alt="">
            <h3>Add Feedback</h3>
            <div class="price">Add your Valuble Feedback</div>
            <a href="/news/src/main/webapp/WEB-INF/pages/comment/index.php" class="btn">Add Feedback</a>
        </div>

    </div>

</section>

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/logo.png" alt="">
        </div>

        <div class="content">
            <h3>what makes our News special?</h3>
            <p>As world's technology is rapidly growing we has fast
connection and network to instantly connect to other person.
Day to day use in mobile, tablets and laptop is increasing, most
of the people already have this facilities. In this fast and
information oriented world we need to stay updated with every
incidents and news too.</p>
            <p> This News app is Web
application where user have access to latest news from  all around the
world. The main focus of this
application is to connect news repoters from all around the
world and deliver it to user as fast as possible in best visualize
way.</p>
			
			
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Originally formed as a digital magazine, knowledge tv makes news gathering more about topics than individual headlines. It emphasizes community curation to create mini magazine issues customized for you about certain places, categories, or events.

For the dedicated news reader you can customize the app to fit best with your interests and preferred publications.</p>
            <img src="images/pic-1.jpg" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>this app tries to localize news based on cities and metropolitan areas that you care about. So instead of big news from the recent Sri lanka building collapse you can find local news headlines from your city or hometown. </p>
            <img src="images/pic-1.jpg" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>we can know about day to day news in the world </p>
            <img src="images/pic-1.jpg" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>
<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">Login</a>
		<a href="#re">Register</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </div>

    <div class="credit">created by <span>Team Incognito</span> | all rights reserved</div>

</section>
<script src="js/script.js"></script>


</body>
</html>