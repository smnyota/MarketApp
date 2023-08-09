
<?php
 include('include/init.php');
 echoHeader();
 echoMainHeader();
 echoBlackNavBar();
?>
<!-- Added Lorem Ipsum Text in the sections below -->
<div class = "carousel">
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="/images/sample2.png"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>WashU's Secure Campus Marketplace! </h1>
            <p class="opacity-75">All you need for quick, safe, and reliable transactions.</p>
            <p><a class="btn btn-lg btn-primary" href="register.php">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="/images/sample4.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1 class = "sample">Inspired by the Future</h1>
            <p class = "sample">Secure Marketplace keeping you protected every step of the way.</p>
            <p><a class="btn btn-lg btn-primary" href="viewProduct.php">Shop Now</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="/images/sample3.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Trusted Marketplace</h1>
            <p>All you need for quick, safe, and reliable transactions.</p>
            <p><a class="btn btn-lg btn-primary" href="addPost.php">Create a Posting</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div class = "b-example-divider exDiv"></div>
<!--Convert inline CSS to stylesheet -->
<section
      class="d-flex flex-column justify-content-center align-items-sm-center"
      id="FAQSection"
      style="width: 100%"
    >
      <div
        class="container"
        style="
          background: rgb(72, 72, 243);
          margin-left: 0;
          margin-right: 0px;
          padding-right: 24px;
          padding-left: 24px;
          width: 100%;
          max-width: 100%;
          padding-top: 35px;
          padding-bottom: 35px;
          margin-bottom: 20px;
          margin-top: -20rem;
        "
      >
        <h1 class="fs-1 text-center masthead-heading mb-0" id="FAQ" style="color: var(--bs-gray-100)">
          <strong>Features</strong>
        </h1>
        <h3
          class="fs-5 fw-lighter text-center masthead-subheading mb-0"
          style="color: var(--bs-gray-100); padding-top: 20px">
          <strong>This is a new, unfamiliar experience. We have descriptions for our product categories outlined below.</strong>
        </h3>
      </div>

<!--Two card display-->
<div class = "twoCardDisplay">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">Electronics</strong>
          <h3 class="mb-0">Explore Cutting Edge Technology.</h3>
          <div class="mb-1 text-body-secondary">View Great Summer Deals!</div>
          <p class="card-text mb-auto">Discover a world of cutting-edge technology and top-notch gadgets in our Electronics section. Whether you're a tech enthusiast, a seasoned pro, or simply looking to upgrade your devices, we've got you covered.</p>
          <a href="viewProduct.php?categoryId=4" class="icon-link gap-1 icon-link-hover stretched-link">
            Explore Electronics
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="/images/iphone.gif">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">Books</strong>
          <h3 class="mb-0">Find Affordable Textbooks</h3>
          <div class="mb-1 text-body-secondary">100% User Guaranteed</div>
          <p class="mb-auto">Delve into a captivating world of knowledge and imagination in our Book Emporium. We've got the perfect book for you. Explore a diverse collection of bestsellers, classics, and textbooks that enrich your mind.</p>
          <a href="viewProduct.php?categoryId=2" class="icon-link gap-1 icon-link-hover stretched-link">
            Browse Books, Movies, & Music
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="/images/calc.png">
        </div>
      </div>
    </div>
  </div>
</div>

<div class = "b-example-divider"></div>

<div class = "twoCardDisplay">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">Appliances</strong>
          <h3 class="mb-0">Find Reliable Dorm and Appartment Appliances.</h3>
          <div class="mb-1 text-body-secondary">Perfect for Move-In!</div>
          <p class="card-text mb-auto">Explore our Appliance Haven and Dorm Essentials! Discover a wide range of efficient and stylish appliances to simplify daily tasks. Deck out your dorm with compact, space-saving appliances.</p>
          <a href="viewProduct.php?categoryId=1" class="icon-link gap-1 icon-link-hover stretched-link">
            Explore Appliances
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="/images/appliances.jpeg">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">Clothing</strong>
          <h3 class="mb-0">Find Affordable Back to School Clothing</h3>
          <div class="mb-1 text-body-secondary">100% User Guaranteed</div>
          <p class="mb-auto">Step into the Fashion Oasis and Back to School Wardrobe! Find the latest trends and timeless classics to elevate your style. Get ready for school with trendy and comfortable clothing for an A+ look!</p>
          <a href="viewProduct.php?categoryId=3" class="icon-link gap-1 icon-link-hover stretched-link">
            See Clothing, Shoes, & Accessories
          </a>
          </div>
        <div class="col-auto d-none d-lg-block"> <img class="bd-placeholder-img" width="200" height="250" src="/images/clothing.jpeg"> </div>
        </div>
      </div>
    </div>
  </div>
  <div class = "b-example-divider"></div>

  <div class = "twoCardDisplay">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary-emphasis">Health & Beauty</strong>
            <h3 class="mb-0">Find Essential Health and Wellness Products</h3>
            <div class="mb-1 text-body-secondary">Look and Feel Your Best!</div>
            <p class="card-text mb-auto">Step into the Fashion Oasis and Back to School Wardrobe! Find the latest trends and timeless classics to elevate your style. Get ready for school with trendy and comfortable clothing for an A+ look!</p>
            <a href="viewProduct.php?categoryId=5" class="icon-link gap-1 icon-link-hover stretched-link">
              Explore Health & Beauty
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="/images/Essentials.jpeg">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success-emphasis">Pet Supplies</strong>
            <h3 class="mb-0">Brought your Pet to Campus?</h3>
            <div class="mb-1 text-body-secondary">We've got you covered!</div>
            <p class="mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dicta quam delectus magni perspiciatis minima numquam qui, deserunt ex quae.</p>
            <a href="viewProduct.php?categoryId=7" class="icon-link gap-1 icon-link-hover stretched-link">
              Browse Pet Supplies
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="/images/pet.webp">
          </div>
        </div>
      </div>
    </div>
    </div>
<main role="main">
  <div class="container marketing">
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Extensive Product Options <span class="text-muted">That will change your life.</span></h2>
        <p class="lead">"Discover WashUList: Revolutionize Your Shopping Experience with a Vast Array of Life-Changing Product Choices!"</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src = "/images/sample.png" alt="WashUList Logo Card">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Unlimited Product Posting <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">"Empower Your Selling Experience: Unleash the Potential of Unlimited Product Posting on WashUList!"</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="featurette-image img-fluid mx-auto" src = "/images/sample.png" alt="WashUList Logo Card">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">100% Satisfaction Guaranteed <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">"Checkmate Doubt: Experience Unparalleled Shopping Confidence with Our 100% Satisfaction Guaranteed Promise on WashUList!"</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src = "/images/sample.png" alt="WashUList Logo Card">
      </div>
    </div>
    <hr class="featurette-divider">
  </div>
 </main>
 <?php
  echoFooter();
 ?>
