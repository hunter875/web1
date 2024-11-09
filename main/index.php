<?php include_once('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Insight</title>
    <link rel="stylesheet" href="admin/templates/css/styles.css">
    <link rel="shortcut icon" href="admin/templates/img/icons8-movie-30.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="admin/templates/fonts/Awesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css">
</head>
<body>
    <header>
        <a href="index.php" class="logo">
            <img src="admin/templates/img/icons8-movie-30.png" alt="Movie Insight Logo">
            <p>Movies<br>Insight</p>
        </a>
        <nav class="navigation">
            <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon">
                <span class="nav-icon"></span>
            </label>
            <a class="menu-tag">Menu</a>
            <ul class="menu">
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV Shows</a></li>
                <li><a href="#">Celebs</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Awards & Events</a></li>
            </ul>
            <form action="" class="search-box">
                <div class="search-container">
                    <img src="admin/templates/img/search.png" class="search-icon" alt="Search Icon">
                    <input type="text" name="search" class="search-input" placeholder="Search Movie Insight" id="searchInput">
                    <img src="admin/templates/img/cross.png" class="clear-icon" id="clearIcon" alt="Clear Icon">
                </div>
            </form>
            <button id="news-btn">News</button>
            <button id="login-btn">Login</button>
            <button id="sign-up-btn">Sign up</button>
        </nav>
    </header>

    <section id="main-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                // Fetch products from the database
                $result = $db_handle->query("SELECT * FROM product");
                $product_array = [];
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        $product_array[] = $row;
                    }
                }

                // Loop through the products to display them
                foreach ($product_array as $value) {
                    ?>
                    <div class="swiper-slide">
                        <div class="main-slider-box">
                            <div class="main-slider-img">
                                <form action="" method="post">
                                    <img src="<?php echo $value['product_image']; ?>" alt="<?php echo $value['product_name']; ?>">
                                </form>
                            </div>
                            <div class="main-slider-text">
                                <div class="movie-name">
                                    <span>2024</span>
                                    <strong><?php echo $value['product_name']; ?></strong>
                                    <p><?php echo $value['product_desc']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <div class="slider-btns">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <section class="movie"> 
    <h2 class="movie-category">Movies</h2>
    <button class="pre-btn"> < </button>
    <button class="nxt-btn"> > </button>
    <div class="movie-container">
        <?php
        // Fetch products from the database
        $result = $db_handle->query("SELECT * FROM product");
        $product_array = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $product_array[] = $row;
            }
        }

        // Loop through the products to display them
        foreach ($product_array as $value) {
            ?>
       <div class="movie-card">
                <div class="movie-image">
                    <img src="<?php echo htmlspecialchars($value['product_image']); ?>" class="movie-thumb" alt="<?php echo htmlspecialchars($value['product_name']); ?>">
                    <button class="card-btn">Add to watchlist</button>
                </div>
                <div class="movie-info">
                    <h2 class="movie-name"><?php echo htmlspecialchars($value['product_name']); ?></h2>
                    <p class="movie-short-description"><?php echo htmlspecialchars($value['product_desc']); ?></p>
                    <span class="actual-price">★</span>
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
            640: { slidesPerView: 2, spaceBetween: 20 },
            768: { slidesPerView: 2, spaceBetween: 30 },
            1024: { slidesPerView: 3, spaceBetween: 50 },
          },
        });
    </script>
    <script src="admin/templates/js/script.js"></script>
</body>
</html>
