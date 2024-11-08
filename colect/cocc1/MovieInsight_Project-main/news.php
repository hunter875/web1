<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Tức Phim</title>
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="admin/templates/css/styles.css">
    <link rel="shorcut icon" href="admin/templates/img/icons8-movie-30.png">
    <!--font-poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="admin/templates/fonts/Awesome/css/all.css" rel="stylesheet" >
    <link rel="stylesheet" href="/path/to/your/styles.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css">
</head>
<body>
    <header>
    <header>
        <a href="index.php" class="logo">
            <img src="admin/templates/img/icons8-movie-30.png">
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
                    <img src="admin/templates/img/search.png" class="search-icon">
                    <input type="text" name="search" class="search-input" placeholder="Search Movie Insight" id="searchInput">
                    <img src="admin/templates/img/cross.png" class="clear-icon" id="clearIcon">
                </div>
            </form>
            <a href="news.php" id="news-btn">News</a>
            <button id="login-btn">Login</button>
            <button id="sign-up-btn">Sign up</button>
        </nav>
    </header>

    <!-- Login Form Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('loginModal')">&times;</span>
            <h2>Login</h2>
            <form>
                <label for="login-email">Email:</label>
                <input type="email" id="login-email" required>
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- Sign Up Form Modal -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('signupModal')">&times;</span>
            <h2>Sign Up</h2>
            <form>
                <label for="signup-name">Name:</label>
                <input type="text" id="signup-name" required>
                <label for="signup-email">Email:</label>
                <input type="email" id="signup-email" required>
                <label for="signup-password">Password:</label>
                <input type="password" id="signup-password" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <!-- Swiper Section -->
    <section id="main-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slides go here -->
            </div>
        </div>
    </section>

    <!-- Movie Section -->
    <section class="movie"> 
        <h2 class="movie-category">Movies</h2>
        <div class="movie-container">
            <!-- Movie cards go here -->
        </div>
    </section>

    <!-- Swiper JS -->
   
    
    <script src="admin/templates/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: { el: ".swiper-pagination", clickable: true },
            autoplay: { delay: 5000, disableOnInteraction: false },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 20 },
                768: { slidesPerView: 2, spaceBetween: 30 },
                1024: { slidesPerView: 3, spaceBetween: 50 }
            }
        });

        // Modal handling
        document.getElementById("login-btn").addEventListener("click", function() {
            openModal('loginModal');
        });
        
        document.getElementById("sign-up-btn").addEventListener("click", function() {
            openModal('signupModal');
        });

        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target.classList.contains("modal")) {
                event.target.style.display = "none";
            }
        }
    </script> 
    </header>
    <main>
        <article class="news-item">
            <img src="image1.jpg" alt="Tin tức phim 1" class="news-image">
            <div class="news-content">
                <h2 class="news-title">Phim Mới Nhất Đang Chiếu Tại Rạp</h2>
                <p class="news-description">Khám phá những bộ phim mới nhất đang chiếu tại các rạp phim trong tháng này.</p>
                <p class="news-date">Ngày đăng: November 4, 2024</p>
            </div>
        </article>
        
        <article class="news-item">
            <img src="image2.jpg" alt="Tin tức phim 2" class="news-image">
            <div class="news-content">
                <h2 class="news-title">Top 10 Bộ Phim Đáng Xem Năm 2024</h2>
                <p class="news-description">Danh sách những bộ phim nổi bật nhất năm 2024 mà bạn không thể bỏ lỡ.</p>
                <p class="news-date">Ngày đăng: November 3, 2024</p>
            </div>
        </article>

        <article class="news-item">
            <img src="image3.jpg" alt="Tin tức phim 3" class="news-image">
            <div class="news-content">
                <h2 class="news-title">Sự Trở Lại Của Các Siêu Anh Hùng</h2>
                <p class="news-description">Những thông tin mới nhất về các bộ phim siêu anh hùng sắp ra mắt.</p>
                <p class="news-date">Ngày đăng: November 2, 2024</p>
            </div>
        </article>
    </main>
    <footer>
        <p>&copy; 2024 Tin Tức Phim. Tất cả quyền được bảo lưu.</p>
    </footer>
</body>
</html>
