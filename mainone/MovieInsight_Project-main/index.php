<?php require_once 'connect.php';
$product_array = $db_handle->runQuery("SELECT * FROM movies ORDER BY id ASC"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Insight</title>
    <link rel="stylesheet" href="admin/templates/css/styles.css">
    <link rel="shorcut icon" href="admin/templates/img/icons8-movie-30.png">
    <!--font-poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="admin/templates/fonts/Awesome/css/all.css" rel="stylesheet" >
    <!--CSS SWIPPER-------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css">
</head>
<body>
    <!--logo---------------------------------------------->
    <header>
        
        <a href="index.php" class="logo">
            <img src="admin/templates/img/icons8-movie-30.png">
            <p>Movies<br>Insight</p>
        </a>
        <!--Nav-------------------------->  
        <nav class="navigation">

            <!--menu-button--------------------------------------->
            <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon">
                <span class="nav-icon"></span>
            </label>
            
            <a class="menu-tag">Menu</a>

            <!--menu---------------------------------------------->
            <ul class="menu">
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV Shows</a></li>
                <li><a href="#">Celebs</a></li>
                <li><a href="#">Commmunity</a></li>
                <li><a href="#">Awards & Events</a></li>
            </ul>

            <!--search box-->
            <form action="" class="search-box">

                <!--input-->
                <div class="search-container">
                    <img src="admin/templates/img/search.png" class="search-icon">
                    <input type="text" name="search" class="search-input" placeholder="Search Movie Insight" id="searchInput">
                    <img src="admin/templates/img/cross.png" class="clear-icon" id="clearIcon"></i>
                </div>
            </form>

            <!--News----------------------------------->
            <button id="news-btn">News</button>

            <!--sign in button------------------------->
            <button id="login-btn">Login</button>

            <!--sign up button------------------------->
            <button id="sign-up-btn">Sign up</button>
        </nav>
    </header>


    <section id="main-slider">
     <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!--box------------------------------------->
                    <div class="main-slider-box">
                        
                        <!--img--------------------------------->
                        <!--1---------------------------------------------->

<?php
$product_array = $db_handle->runQuery("SELECT * FROM swiss_collection ORDER BY id ASC");
if (!empty($product_array)) { 
    foreach($product_array as $key => $value) {
?>
    <div class="swiper-slide">
        <div class="main-slider-box">
            <div class="main-slider-img">
                <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                    <img src="<?php echo $product_array[$key]["product_image"]; ?>" alt="Poster Venom3">
                </form>
            </div>
            <div class="main-slider-text">
                <div class="movie-name">
                    <span>2024</span>
                    <strong><?php echo $value["product_name"];  ?> </strong>
                    <p><?php echo $value["product_desc"]; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php
    }
}
?>

    </section>

    <!--buttons------------------------------------------------------->
    <div class="slider-btns">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <!--names Section------------------------------------------------>
    <section class="movie"> 
        
    <h2 class="movie-category">Movies</h2>
<button class="pre-btn"> < </button>
<button class="nxt-btn"> > </button>

<div class="movie-container">
    <?php
    // Assume $movies is an array with movie details fetched from a database
    foreach ($movies as $movie) {
    ?>
        <div class="movie-card">
            <div class="movie-image">
                <img src="<?php echo $movie['product_image']; ?>" class="movie-thumb" alt="<?php echo $movie['product_name']; ?>">
                <button class="card-btn">Add to watchlist</button>
            </div>
            <div class="movie-info">
                <h2 class="movie-name"><?php echo $movie['product_name']; ?></h2>
                <p class="movie-short-description"><?php echo $movie['product_desc']; ?></p>
                <span class="actual-price">★</span> <!-- You can add a dynamic rating here -->
            </div>
        </div>
    <?php
    }
    ?>
</div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 50,
            },
          },
        });
      </script>
      
    <script src="admin/templates/js/script.js"></script>
</body>
</html>