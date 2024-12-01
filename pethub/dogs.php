<?php
include 'connection.php'; // Assuming the connection to the database
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=bookmark" />
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="general.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="contents.css">
  <title>Dogs Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
   $(document).ready(function() {
  // Bookmark click event
  $(".bookmark-icon").click(function() {
    const sectionId = $(this).attr("name");  // Get the section name
    const sectionTitle = $("#" + sectionId + " h2").text();  // Get the title (h2 text)
    const sectionContent = $("#" + sectionId + " p").text();  // Get the content (p text)

    console.log(sectionTitle, sectionContent); // For debugging, check in browser console

    // Set the category based on the page
    const category = "Dogs";  // Change this dynamically if on a different page
    console.log(sectionTitle, sectionContent)
    // AJAX call to save the bookmark
    $.ajax({
      url: "save_bookmark.php", // PHP file to save the bookmark
      type: "POST",
      data: {
        title: sectionTitle,
        content: sectionContent,
        category: category  // Pass the category (e.g., "Cats")
      },
      success: function(response) {
        alert(response); // Show a confirmation message
      },
      error: function(xhr, status, error) {
        console.error("AJAX Error: " + error); // For debugging in case of error
      }
    });
  });
});

  </script>
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
    <div class="profile-section">
      <form method="POST" action="index.php">
        <div class="profile-picture-section">
        <a href="index.php"><img class="profile-img" src="profile-picture-dog.png"></a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- main -->
<div class="main">
  <div class="go-back-text">
    
      <a class="back-text" href="#">Back to Dog Care</a>
    
  </div>
  <div class="thumbnail-container">
    <img id="thumbnail" src="/pethub/img/thumbnail.jpg" alt="">
    <div class="corner"></div>
  </div>
  <div class="content">
    <div class="header-text">
      <h1 class="h1-text">Grooming for Dogs</h1>
    </div>
    <div class="line-bar">
      <hr>
    </div>
    <div class="paragraph-section">
      <div class="paragraph">
        <a href="https://www.jerrygreendogs.org.uk/dog-advice/grooming-tips/?gad_source=1" target="_blank"><h2>HOW OFTEN SHOULD I GROOM MY DOG?</h2></a>
        <h3>BRUSHING</h3>
        <p>Different types of brushes are suited for different coat types, so choose the right brush for your dog. Dogs with long hair may need to be brushed every day, but short-haired types can be brushed once a week.
        </p>
        <h3>BATHING</h3>
        <p>Bathing your dog on a regular basis helps to keep them clean and fresh-smelling. However, bathing too regularly can deplete the skin's natural oils, resulting in dry skin and other skin irritations. Most dogs require only one bath every three months. Lather with a dog-specific shampoo and warm water, then rinse completely.</p>
        <h3>NAIL TRIMMING</h3>
        <p>Long nails can be quite painful for your dog. Regularly inspecting your dog's nails (including dewclaws) and clipping as needed will help prevent nail-related issues. If your dog walks regularly on harsh surfaces, such as pavement, their nails may naturally wear down. A decent test to see whether they are too long is to try to slide a bankcard between their nail and the floor while standing; if you can't, they could use a little trimming. Use a nail clipper made for dogs and be careful not to cut the quick, which is a blood vessel that goes into the nail. Nail trimming is best done after a bath because the water softens them.
        </p>
        <h3>EAR CLEANING</h3>
        <p>Cleaning your dog's ears helps to prevent infections and pain, but too much cleaning might make them unpleasant. Only clean your dog's ears if there is a noticeable accumulation of wax. Use a dog-specific ear cleaner to gently clean your dog's ears. Be careful not to put anything too deeply into the ear canal, as this might cause injury. If you notice any odor, irritation, or discharge in your ear, contact your veterinarian. 
        </p>
        <h3>TEETH CLEANING</h3>
        <p>Just like humans, dogs require regular dental care. Plaque and tartar buildup can cause gum disease and tooth loss. Brush your dog's teeth with a toothbrush and toothpaste designed for dogs, and introduce it cautiously. Once your dog is used to having its teeth washed, try brushing them a few times per week. If your dog dislikes having its teeth washed, chews and dental toys might help keep his teeth clean by manually scraping plaque off the tooth surface.
        </p>
        
        <a href="https://www.petmd.com/dog/general-health/flea-and-tick-prevention-and-treatment-dogs" target="_blank">
        <h2>PROBLEM WITH TICKS AND FLEAS?</h2></a>
        <p>There are a variety of products to help keep your dog free of parasites. These products can be in the form of pesticides, repellents, or growth inhibitors. Each tackles pests at different life stages to prevent infestations.
        Some products are only effective against one parasite (typically fleas).</p>
        <p>Combination flea and tick preventatives for dogs contain multiple ingredients to battle different types of pests. These prevention options may also provide additional protection against heartworms, skin and ear mites, and intestinal parasites.</p>
        <p>Flea and tick preventatives commonly come in two forms:</p>
        <ol><li><strong>Oral:</strong> chewable tablet that your dog ingests</li>
        <li><strong>Topical:</strong> liquid that’s applied between the should blades or down the back of your dog</li></ol>
        <p>Before deciding on a flea and tick medication, always check with your veterinarian and make sure it’s a good fit for your dog. </p>
        <a href="https://bondvet.com/b/dog-rash" target="_blank"><h2>SKIN RASHES, ITCHY SPOTS, AND/OR BALD SPOT?</h2></a>
        <p>There are many possible causes of skin problems, all of which can cause similar symptoms. Here are some common symptoms:</p>

        <ul>
        <li><strong>Fleas and flea allergy dermatitis</strong> (an allergic response to flea bites that causes extreme itchiness and commonly leads to skin infections).</li>

        <li><strong>Allergies</strong>. Most commonly, this includes environmental/seasonal allergies, also known as atopy. Food allergies or contact allergies (from plastic food bowls, for example) can also occur but are less common.</li>

        <li><strong>Contact irritation</strong> (shampoo, home cleaning products, a collar that chafes the skin, etc.).</li>

        <li><strong>Skin parasites</strong> such as mites/mange, ticks, or lice.</li>

        <li><strong>Medical conditions</strong> such as hormonal imbalances, autoimmune diseases, or other underlying issues.</li>

        <li><strong>Obsessive chewing or licking behavior</strong> due to stress or boredom.</li>

        <li>Anything else that can affect the skin, such as <strong>skin growths, matted fur, sunburn, poison ivy, poor nutrition, insect bites, dry skin, etc.</strong></li>

        <li><strong>Bacterial infections</strong>. Primary infections are possible, but more commonly, bacteria that normally live on the skin become opportunistic and overgrow due to disruption in the skin’s protective barrier secondary to rashes or wounds.</li>

        <li><strong>Fungal infections</strong>. These are usually opportunistic yeast infections that occur due to disruption of the protective skin barrier. However, less commonly, other fungi (including ringworm infection that is much more common in cats than in dogs) can occur.</li>
        </ul>

        <p>Check with your veterinarian before giving any medication or supplement at home, to be sure it’s safe for your pup. Some substances can be toxic or harmful, including “dog-safe” medications and supplements if they are given at the wrong dosage.</p>
      </div>
    </div>
  </div>
</div>


<div class="grid-container">
  <div class="latest-articles"><h2>Latest Articles</h2></div>
  <div class="grid-section">
    <div class="left-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/pethub/img/image.png">
      </div>
      <div class="bottom-description-grid">
      <h2>Dos and Dont's for Dogs</h2>
      <span class="span-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo est quod itaque minus unde nisi iure ea ducimus, totam quasi maiores sapiente inventore dicta autem magni aliquam optio laborum blanditiis!
        </span>
      </div>
    </div>
    <div class="middle-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/pethub/img/image1.png">
        </div>
        <div class="bottom-description-grid">
          <h2>Grooming for Dogs</h2>
          <span class="span-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo est quod itaque minus unde nisi iure ea ducimus, totam quasi maiores sapiente inventore dicta autem magni aliquam optio laborum blanditiis!
          </span>
        </div>
      </div>
    <div class="right-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/pethub/img/image2.png">
          </div>
          <div class="bottom-description-grid">
            <h2>Nutrition for Dogs</h2>
            <span class="span-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo est quod itaque minus unde nisi iure ea ducimus, totam quasi maiores sapiente inventore dicta autem magni aliquam optio laborum blanditiis!
            </span>
          </div>
        </div>
    </div>
  </div>
  
</div>
<div class="footer">
  <div class="footer-content">
    <h3>About us</h3>
      <p>Dogs Grooming</p>
      <p>Dogs Nutrition</p>
      <p>Dogs Dos and Dont's</p>

  </div>
</div>
</body>
</html>

<!-- <span id="grooming-bookmark" name="grooming" class="material-symbols-outlined bookmark-icon" style="font-variation-settings: 'FILL' 0;">bookmark</span> -->