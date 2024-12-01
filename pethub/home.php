<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="general.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=bookmark" /> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bookmark icon -->
  <title>Home</title>
</head>



<body>
<div class="navbar">
  <div class="left-section">
    <div class="logo-icon">
      <img class="logo-image" src="/pethub/img/logo2.png">
    </div>
    <div class="infurrmation-hub">    
      <h1>INFURRMATION HUB</h1>
    </div>
  </div>
  <div class="middle-section">
    <!-- Main Dropdown for Exotic Pets -->
    <div class="dropdown">
      <button class="button-style" id="button-spacing">DOMESTIC PETS<div class="chevron-down"><i class="fa fa-chevron-down"></i></div></button>
      <div class="dropdown-content">
          <!-- Dogs Dropdown -->
          <div class="nested-dropdown">
              <a href="dogs.php#grooming">DOGS</a>
              <div class="nested-dropdown-content">
                  <a href="dogs.php#grooming">Grooming</a>
                  <a href="dogs.php#environment">Proper Environment/Caging</a>
                  <a href="dogs.php#nutrition">Nutrition</a>
                  <a href="dogs.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="dogs.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Cats Dropdown -->
          <div class="nested-dropdown">
              <a href="cats.php#grooming">CATS</a>
              <div class="nested-dropdown-content">
                  <a href="cats.php#grooming">Grooming</a>
                  <a href="cats.php#environment">Proper Environment/Caging</a>
                  <a href="cats.php#nutrition">Nutrition</a>
                  <a href="cats.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="cats.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Birds Dropdown -->
          <div class="nested-dropdown">
              <a href="birds.php#grooming">BIRDS</a>
              <div class="nested-dropdown-content">
                  <a href="birds.php#grooming">Grooming</a>
                  <a href="birds.php#environment">Proper Environment/Caging</a>
                  <a href="birds.php#nutrition">Nutrition</a>
                  <a href="birds.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="birds.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Fishes Dropdown -->
          <div class="nested-dropdown">
              <a href="fishes.php#grooming">FISHES</a>
              <div class="nested-dropdown-content">
                  <a href="fishes.php#grooming">Grooming</a>
                  <a href="fishes.php#environment">Proper Environment/Caging</a>
                  <a href="fishes.php#nutrition">Nutrition</a>
                  <a href="fishes.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="fishes.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Rabbit Dropdown -->
          <div class="nested-dropdown">
              <a href="rabbit.php#grooming">RABBIT</a>
              <div class="nested-dropdown-content">
                  <a href="rabbit.php#grooming">Grooming</a>
                  <a href="rabbit.php#environment">Proper Environment/Caging</a>
                  <a href="rabbit.php#nutrition">Nutrition</a>
                  <a href="rabbit.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="rabbit.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Rodents Dropdown -->
          <div class="nested-dropdown">
              <a href="rodents.php#grooming">RODENTS</a>
              <div class="nested-dropdown-content">
                  <a href="rodents.php#grooming">Grooming</a>
                  <a href="rodents.php#environment">Proper Environment/Caging</a>
                  <a href="rodents.php#nutrition">Nutrition</a>
                  <a href="rodents.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="rodents.php#products">Recommended Products</a>
              </div>
          </div>
      </div>
    </div>
    <!-- Main Dropdown for Exotic Pets -->
    <div class="dropdown">
      <button class="button-style">EXOTIC PETS <div class="chevron-down"><i class="fa fa-chevron-down"></i></div></button>
      <div class="dropdown-content">
          <!-- Ball Python Dropdown -->
          <div class="nested-dropdown">
              <a href="ballpython.php#grooming">Snake (Ball Python)</a>
              <div class="nested-dropdown-content">
                  <a href="ballpython.php#grooming">Grooming</a>
                  <a href="ballpython.php#environment">Proper Environment/Caging</a>
                  <a href="ballpython.php#nutrition">Nutrition</a>
                  <a href="ballpython.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="ballpython.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Tarantulas Dropdown -->
          <div class="nested-dropdown">
              <a href="tarantulas.php#grooming">Tarantulas</a>
              <div class="nested-dropdown-content">
                  <a href="tarantulas.php#grooming">Grooming</a>
                  <a href="tarantulas.php#environment">Proper Environment/Caging</a>
                  <a href="tarantulas.php#nutrition">Nutrition</a>
                  <a href="tarantulas.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="tarantulas.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Domestic Pig Dropdown -->
          <div class="nested-dropdown">
              <a href="domesticpig.php#grooming">Domestic Pig</a>
              <div class="nested-dropdown-content">
                  <a href="domesticpig.php#grooming">Grooming</a>
                  <a href="domesticpig.php#environment">Proper Environment/Caging</a>
                  <a href="domesticpig.php#nutrition">Nutrition</a>
                  <a href="domesticpig.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="domesticpig.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Turtle Dropdown -->
          <div class="nested-dropdown">
              <a href="turtle.php#grooming">Turtle</a>
              <div class="nested-dropdown-content">
                  <a href="turtle.php#grooming">Grooming</a>
                  <a href="turtle.php#environment">Proper Environment/Caging</a>
                  <a href="turtle.php#nutrition">Nutrition</a>
                  <a href="turtle.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="turtle.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Hedgehogs Dropdown -->
          <div class="nested-dropdown">
              <a href="hedgehogs.php#grooming">Hedgehogs</a>
              <div class="nested-dropdown-content">
                  <a href="hedgehogs.php#grooming">Grooming</a>
                  <a href="hedgehogs.php#environment">Proper Environment/Caging</a>
                  <a href="hedgehogs.php#nutrition">Nutrition</a>
                  <a href="hedgehogs.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="hedgehogs.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Bearded Dragons Dropdown -->
          <div class="nested-dropdown">
              <a href="bearded_dragons.php#grooming">Bearded Dragons</a>
              <div class="nested-dropdown-content">
                  <a href="bearded_dragons.php#grooming">Grooming</a>
                  <a href="bearded_dragons.php#environment">Proper Environment/Caging</a>
                  <a href="bearded_dragons.php#nutrition">Nutrition</a>
                  <a href="bearded_dragons.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="bearded_dragons.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Axolotl Dropdown -->
          <div class="nested-dropdown">
              <a href="axolotl.php#grooming">Axolotl</a>
              <div class="nested-dropdown-content">
                  <a href="axolotl.php#grooming">Grooming</a>
                  <a href="axolotl.php#environment">Proper Environment/Caging</a>
                  <a href="axolotl.php#nutrition">Nutrition</a>
                  <a href="axolotl.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="axolotl.php#products">Recommended Products</a>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="right-section">
    <div class="search-section">
      <input class="search-bar" type="text" name="search" placeholder="Search">
      <img class="search-icon" src="/pethub/img/search.png" alt="search-icon">
    </div>
    <div class="search-icon-section">
      
    </div>
    <div class="profile-section">
      <form method="POST" action="index.php">
        <div class="profile-picture-section">
          
        <a href="index.php"><img class="profile-img" src="profile-picture-dog.png"></a>
          
        </div>
      </form>
    </div>
  </div>
</div>



<div class="home-section">
<div class="home-top-text">
      <h1>FOR YOUR<br>INFURRMATION</h1>
    </div>
    <div class="home-bottom-text">
      <h2>This website will serve as an information hub for your pets.</h2>
    </div>
    <section class="container">
      <div class="slider-wrapper">
        <div class="slider">
          <img id="slide-1" src="img/image.png" alt="animal1" />
          <img id="slide-2" src="img/image1.png" alt="animal2" />
          <img id="slide-3" src="img/image2.png" alt="animel3" />
        </div>
        <div class="slider-nav">
          <a href="#slide-1"></a>
          <a href="#slide-2"></a>
          <a href="#slide-3"></a>
        </div>
      </div>
      <script src="scroll.js"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
          const slider = document.querySelector(".slider");
          const slides = slider.children;
          let currentIndex = 0;

          function showNextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            const offset = currentIndex * window.innerWidth;
            slider.scrollTo({
              left: offset,
              behavior: "smooth"
            });
          }

          // Change slide every 5 seconds
          setInterval(showNextSlide, 3000);
        });
        </script>
    </section>
  <div class="about-page"> 
  HELLO
  </div>
</div>






<!-- <div>
  <?php
  // if (isset($_POST['profile_click'])) {
  //     header("Location: index.php"); // Redirect to index.php
  //     exit();
  // }
  ?>
</div> -->

<script>
let lastScrollTop = 0; // Tracks the last scroll position
const navbar = document.querySelector(".navbar"); // Selects the navbar element

// Throttle function for better performance
const throttle = (callback, delay) => {
  let timeout = false;
  return () => {
    if (!timeout) {
      callback();
      timeout = true;
      setTimeout(() => (timeout = false), delay);
    }
  };
};
</script>
</body>
</html>

<!-- 
<div class="container">
  <?php
  // Fetch data grouped by a specific column (e.g., pet_housing)
  $fetch_data = mysqli_query($conn, "SELECT * FROM pet_data ORDER BY pet_housing");
  if (mysqli_num_rows($fetch_data) > 0) {
      while ($fetch_row = mysqli_fetch_assoc($fetch_data)) {
          echo "<div class='record'>";
          echo "<h2>Pet Housing</h2>";
          echo "<p>" . htmlspecialchars($fetch_row['pet_housing']) . "</p>";
          
          echo "<h2>Grooming</h2>";
          echo "<p>" . htmlspecialchars($fetch_row['grooming']) . "</p>";
          
          echo "<h2>Teaching</h2>";
          echo "<p>" . htmlspecialchars($fetch_row['teaching']) . "</p>";
          
          echo "<h2>Nutrition</h2>";
          echo "<p>" . htmlspecialchars($fetch_row['nutrition']) . "</p>";
          
          echo "<h2>Recommendation</h2>";
          echo "<p>" . htmlspecialchars($fetch_row['recommendation']) . "</p>";
          
          // Action buttons
          echo "<div class='actions'>";
          echo "<a href='home.php?edit_id=" . $fetch_row['pet_id'] . "'>Edit</a> | ";
          echo "<a href='home.php?delete_id=" . $fetch_row['pet_id'] . "' onclick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a>";
          echo "</div>";

          echo "</div>"; // Close record
      }
  } else {
      echo "<div class='no-records'>NO RECORDS FOUND</div>";
  }
  ?> -->