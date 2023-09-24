<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="./assets/style.css">
</head>

<body>
  <?php
  include('partials/navbar.html');

  $data = [
    ['src' => 'assets/images/frames-for-your-heart-zSG-kd-L6vw-unsplash-min.jpg',],
    ['src' => 'assets/images/christian-lambert-vmIWr0NnpCQ-unsplash-min.jpg',],
    ['src' => 'assets/images/reisetopia-pSDe7ePo0Tc-unsplash-min.jpg',],
    ['src' => 'assets/images/paula-aTlgqRfg0k4-unsplash-min.jpg',],
    ['src' => 'assets/images/pascal-debrunner-X4Lj9LB5XAI-unsplash-min.jpg',],
    ['src' => 'assets/images/isaac-quesada-xc4oxgAbDmw-unsplash-min.jpg']
  ];
  ?>
  <section>
    <div class="banner-img-container position-relative">
      <div class="banner-bg-color position-absolute"></div>
      <img src="assets/images/vojtech-bruzek-Yrxr3bsPdS0-unsplash-min.jpg" alt="" class="banner-img">
      <!-- TODO: icon -->
    </div>
    <div class="d-flex justify-content-center ">
      <!-- TODO: BELUM BENER NIH  -->
      <div class="position-absolute scroll-down-arrow">
        <button type="button" class="scroll-down-btn" onclick="scrollDown()">ssss</button>
      </div>
    </div>
  </section>
  <section id="about">
    <div class="container position-relative">
      <div class="row">
        <div class="col-6">
          <p class="title-placeholder mb-0">About Us</p>
          <p class="fs-1 content-title">Lorem Ipsum Dolor</p>
          <div class="text-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iure nisi modi quam maxime explicabo
              officia molestias temporibus quod doloribus. Impedit natus iure cum, odio accusantium porro necessitatibus
              vel molestiae.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iure nisi modi quam maxime explicabo
              officia molestias temporibus quod doloribus. Impedit natus iure cum, odio accusantium porro necessitatibus
              vel.</p>
          </div>
          <div class="d-flex">
            <div class="cs-transparent-btn">
              <a href="" class="learn-more-link">Learn More</a>
              <!-- <i class="fa-solid fa-arrow-right"></i> -->
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="about-img-content d-flex gap-1">
            <img src="assets/images/roberto-nickson-rEJxpBskj3Q-unsplash-min.jpg" alt="">
            <img src="assets/images/saad-khan-425b2PhNuHA-unsplash-min.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="facilities">
    <!-- slide show front office, restaurant, pool, room, villa -->
    <!--  -->
    <div class="position-relative overflow-hidden">
      <div id="facility-container" class="d-flex">
        <?php foreach ($data as $val) : ?>
          <div class="facility-img-content">
            <img src="<?= $val['src'] ?>" alt="" class="facility-img">
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img src="assets/images/reisetopia-oukA5uMuALg-unsplash-min.jpg" alt="" class="content-img">
        </div>
        <div class="col-6">
          <!-- <p class="title-placeholder mb-0"></p> -->
          <p class="fs-1 content-title">Rooms</p>
          <div class="text-content">
            <!-- <p>We concern about our guest needs and satisfaction while staying here. Our job is to
              give the best service and accommodation for our guest and make sure they get great experience during their
              vacation in Bali.</p> -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iure nisi modi quam maxime explicabo
              officia molestias temporibus quod doloribus. Impedit natus iure cum, odio accusantium porro necessitatibus
              vel molestiae.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iure nisi modi quam maxime explicabo
              officia molestias temporibus quod doloribus. Impedit natus iure cum, odio accusantium porro necessitatibus
              vel.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <img src="assets/images/visualsofdana-T5pL6ciEn-I-unsplash-min.jpg" alt="" class="content-img">
        </div>
        <div class="col-6">
          <!-- <p class="title-placeholder mb-0"></p> -->
          <p class="fs-1 content-title">Villas</p>
          <div class="text-content">
            <!-- <p>We concern about our guest needs and satisfaction while staying here. Our job is to
              give the best service and accommodation for our guest and make sure they get great experience during their
              vacation in Bali.</p> -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iure nisi modi quam maxime explicabo
              officia molestias temporibus quod doloribus. Impedit natus iure cum, odio accusantium porro necessitatibus
              vel molestiae.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iure nisi modi quam maxime explicabo
              officia molestias temporibus quod doloribus. Impedit natus iure cum, odio accusantium porro necessitatibus
              vel.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <img src="assets/images/jason-leung-poI7DelFiVA-unsplash-min.jpg" alt="" class="content-img">
        </div>
        <div class="col-6">
          <!-- <p class="title-placeholder mb-0"></p> -->
          <p class="fs-1 content-title">Restaurant</p>
          <div class="text-content">
            <!-- <p>We concern about our guest needs and satisfaction while staying here. Our job is to
              give the best service and accommodation for our guest and make sure they get great experience during their
              vacation in Bali.</p> -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iure nisi modi quam maxime explicabo
              officia molestias temporibus quod doloribus. Impedit natus iure cum, odio accusantium porro necessitatibus
              vel molestiae.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iure nisi modi quam maxime explicabo
              officia molestias temporibus quod doloribus. Impedit natus iure cum, odio accusantium porro necessitatibus
              vel.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="product">
    <div class="container position-relative">
      <div class="mb-4 text-center">
        <p class="title-placeholder mb-0">Our Accomodations</p>
        <p class="fs-1 content-title mb-0">Lorem ipsum dolor</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iure nisi modi quam
          maxime explicabo</p>
      </div>
      <!-- <div class="d-flex justify-content-center">
        <ul class="d-flex product-menu m-0">
          <li><button class="cs-btn cs-transparent-btn">Rooms</button></li>
          <li><button class="cs-btn cs-transparent-btn">Villas</button></li>
        </ul>
      </div> -->
      <!-- rooms -->
      <!-- <div class="row mt-3">
        <div class="col-4">
          <div class="card p-0">
            <img src="assets/images/hans-isaacson-ffGdB-Yfy_4-unsplash-min.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fs-5 product-title">Standard Single Room</p>
              <div class="cs-transparent-btn">
                <a href="#" class="learn-more-link">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card p-0">
            <img src="assets/images/grant-durr-XW0Kamhhwos-unsplash-min.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fs-5 product-title">Standard Twin Room</p>
              <div class="cs-primary-btn">
                <a href="#" class="learn-more-link">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card p-0">
            <img src="assets/images/reisetopia-fbG4S32ssd8-unsplash-min.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fs-5 product-title">Standard Double Room</p>
              <div class="cs-primary-btn">
                <a href="#" class="learn-more-link">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card p-0">
            <img src="assets/images/reisetopia-oukA5uMuALg-unsplash-min.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fs-5 product-title">Deluxe Double Room</p>
              <div class="cs-primary-btn">
                <a href="#" class="learn-more-link">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- villas -->
      <!-- <div class="row mt-3">
        <div class="col-4">
          <div class="card p-0">
            <img src="assets/images/visualsofdana-T5pL6ciEn-I-unsplash-min.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fs-5 product-title">Standard Villa</p>
              <div class="cs-transparent-btn">
                <a href="#" class="learn-more-link">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card p-0">
            <img src="assets/images/sasha-kaunas-67-sOi7mVIk-unsplash-min.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fs-5 product-title">Luxe Villa</p>
              <div class="cs-primary-btn">
                <a href="#" class="learn-more-link">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card p-0">
            <img src="assets/images/reisetopia-pSDe7ePo0Tc-unsplash-min.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fs-5 product-title">Deluxe Villa</p>
              <div class="cs-primary-btn">
                <a href="#" class="learn-more-link">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card p-0">
            <img src="assets/images/isaac-quesada-xc4oxgAbDmw-unsplash-min.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fs-5 product-title">Exclusive Villa</p>
              <div class="cs-primary-btn">
                <a href="#" class="learn-more-link">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <?php
  include('partials/footer.html')
  ?>
</body>

</html>