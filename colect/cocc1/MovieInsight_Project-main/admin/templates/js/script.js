const searchInput = document.getElementById('searchInput');
const clearIcon = document.getElementById('clearIcon');

// Show clear icon when typing
searchInput.addEventListener('input', function() {
    if (this.value.length > 0) {
        clearIcon.style.display = 'block';
    } else {
        clearIcon.style.display = 'none';
    }
});

// Clear phần tìm kiếm
clearIcon.addEventListener('click', function() {
    searchInput.value = '';
    clearIcon.style.display = 'none';
    searchInput.focus();
});
//Movies
const productContainers = [...document.querySelectorAll('.movie-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
document.getElementById("login-btn").onclick = function() {
    document.getElementById("loginModal").style.display = "block";
  };
  
  document.getElementById("sign-up-btn").onclick = function() {
    document.getElementById("signupModal").style.display = "block";
  };
  
  function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
  }
  
  // Close the modal if the user clicks outside the content area
  window.onclick = function(event) {
    if (event.target.classList.contains("modal")) {
      event.target.style.display = "none";
    }
  };
  document.getElementById("login-btn").onclick = function() {
    document.getElementById("loginModal").style.display = "block";
  };
  
  document.getElementById("sign-up-btn").onclick = function() {
    document.getElementById("signupModal").style.display = "block";
  };
  
  function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
  }
  
  // Close the modal if the user clicks outside the content area
  window.onclick = function(event) {
    if (event.target.classList.contains("modal")) {
      event.target.style.display = "none";
    }
  };
   // Function to open the modal
document.getElementById("news-btn").onclick = function () {
    document.getElementById("newsModal").style.display = "flex";
  };
  
  // Function to close the modal
  function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
  }
 
  document.getElementById("news-btn").addEventListener("click", function() {
      // Điều hướng đến trang news.php khi nhấn nút
      window.location.href = "/admin/modules/auth/news.php";
  });
