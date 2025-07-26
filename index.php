
<?php include 'include/header.php'; ?>


    






    <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active" style="background-image: url('images/1.jpg'); background-size: cover; background-repeat: no-repeat;">
      <div class="container-lg text-light" style="position: absolute; top: 50%; transform: translateY(-50%);">
        <div class="row mb-5">
          <div class="col-lg-6 pt-5 mt-5">
            <h2 class="display-3 vighnesh-fw-bold vighnesh-text-golden">
              <span class="fw-bold" style="color: #ffffff;">शुद्ध देशी</span> तूप, थेट आपल्या घरी!
            </h2>
            <p class="fs-4 vighnesh-text-green vighnesh-fw-semibold">100% नैसर्गिक गायीचे तूप – बिलोना पद्धतीने तयार</p>
            <div class="d-flex gap-3">
              <p class="fs-5 text-light quote-text">“Order now & bring home purity!”</p>
            </div>
            <a href="shopping.php" class="btn btn-primary text-uppercase fs-6 fw-bold rounded-pill px-4 py-3 mt-3">घरपोच सेवा उपलब्ध</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item" style="background-image: url('images/2.jpg'); background-size: cover; background-repeat: no-repeat;">
      <div class="container-lg text-light" style="position: absolute; top: 50%; transform: translateY(-50%);">
        <div class="row mb-5">
          <div class="col-lg-6 pt-5 mt-5">
            <h2 class="display-3 vighnesh-fw-bold vighnesh-text-golden">गिर गायीपासून  बनवलेलं A2 तूप</h2>
            <p class="fs-4 vighnesh-text-green vighnesh-fw-semibold">आयुर्वेदाने मान्य केलेलं अमृत!</p>
            <div class="d-flex gap-3">
              <p class="fs-5 text-light quote-text">“Experience the Ayurvedic power of Gir Cow Ghee”</p>
            </div>
            <a href="shopping.php" class="btn btn-primary text-uppercase fs-6 fw-bold rounded-pill px-4 py-3 mt-3">🧈 ऑर्डर करा आजच!</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item" style="background-image: url('images/3.jpg'); background-size: cover; background-repeat: no-repeat;">
      <div class="container-lg text-light" style="position: absolute; top: 50%; transform: translateY(-50%);">
        <div class="row mb-5">
          <div class="col-lg-6 pt-5 mt-5">
            <h2 class="display-3 vighnesh-fw-bold vighnesh-text-golden">पारंपरिक बिलोना तुपाची शपथ!</h2>
            <p class="fs-4 vighnesh-text-green vighnesh-fw-semibold">हाताने बनवलेले, यंत्राचा स्पर्श नाही</p>
            <div class="d-flex gap-3">
              <p class="fs-5 text-light quote-text">Crafted with care, not machines.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="carousel-item" style="background-image: url('images/4.jpg'); background-size: cover; background-repeat: no-repeat;">
      <div class="container-lg text-light" style="position: absolute; top: 50%; transform: translateY(-50%);">
        <div class="row mb-5">
          <div class="col-lg-6 pt-5 mt-5">
            <h2 class="display-3 vighnesh-fw-bold vighnesh-text-golden">200+ गायींचा आधार – आपलं Vighnesh Farm</h2>
            <p class="fs-4 vighnesh-text-green vighnesh-fw-semibold">गिर, गावठी आणि म्हैस – नैसर्गिक आहारावर पोसलेल्या</p>
            <div class="d-flex gap-3">
              <p class="fs-5 text-light quote-text">Trust in healthy cows for healthy ghee.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 5 -->
    <div class="carousel-item" style="background-image: url('images/5.jpg'); background-size: cover; background-repeat: no-repeat;">
      <div class="container-lg text-light" style="position: absolute; top: 50%; transform: translateY(-50%);">
        <div class="row mb-5">
          <div class="col-lg-6 pt-5 mt-5">
            <h2 class="display-3 vighnesh-fw-bold vighnesh-text-golden">एक चमचा तूप – अनेक फायदे!</h2>
            <p class="fs-4 vighnesh-text-green vighnesh-fw-semibold">Organic Ghee & Milk, Crafted with Care & Purity.</p>
            <div class="d-flex gap-3">
              <p class="fs-5 text-light quote-text">"One spoon a day keeps many ailments away!"</p>
            </div>
            <a href="shopping.php" class="btn btn-primary text-uppercase fs-6 fw-bold rounded-pill px-4 py-3 mt-3">Read Benefits</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Carousel controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</section>

<style>
  .carousel-item {
    padding-left: 200px;
  }
  /* Ensure text is responsive */
  .carousel-item h2 {
    font-size: 3rem;
  }
  .carousel-item p {
    font-size: 1.25rem;
  }

  /* Adjust font sizes for smaller screens */
  @media (max-width: 768px) {
    .carousel-item {
    padding: 20px;
  }
    .carousel-item h2 {
      font-size: 1.75rem;
    }
    .carousel-item p {
      font-size: 1.1rem;
    }
  }

  /* Adjust padding and positioning for mobile screens */
  @media (max-width: 576px) {
    .carousel-item {
      padding: 10px;
    }
    .carousel-item {
      padding-left: 15px;
      background-size: cover !important;
    }
    .carousel-inner {
      position: relative;
    }
    .carousel-control-prev, .carousel-control-next {
      font-size: 1.5rem;
    }
  }
</style>







<br/>





    <section class="pb-5">
      <div class="container-lg">
        <div class="row">
          <div class="col-md-12">
            <div
              class="section-header d-flex flex-wrap justify-content-between my-4"
            >
              <h2 class="section-title">Best selling products</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary rounded-1">View All</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div
              class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5"
            >
              <div class="col">
                <div class="product-item">
                  <figure>
                    <a href="product.php" title="Product Title">
                      <img
                        src="images/product1.jpg"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">A2 Gir Cow Ghee (Bilona Method)</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                          />
                        </div>
                        <div class="col-7">
                          <a
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</a
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="product-item">
                  <figure>
                    <a href="product.php" title="Product Title">
                      <img
                        src="images/product1.jpg"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Cold-Pressed Groundnut Oil</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(41)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>$54.00</del>
                      <span class="text-dark fw-semibold">$50.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                          />
                        </div>
                        <div class="col-7">
                          <a
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</a
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="product-item">
                  <figure>
                    <a href="product.php" title="Product Title">
                      <img
                        src="images/product1.jpg"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Virgin Coconut Oil (Wood-Pressed)</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(32)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>$14.00</del>
                      <span class="text-dark fw-semibold">$12.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                          />
                        </div>
                        <div class="col-7">
                          <a
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</a
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="product-item">
                  <figure>
                    <a href="product.php" title="Product Title">
                      <img
                        src="images/product1.jpg"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Raw Forest Honey</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                          />
                        </div>
                        <div class="col-7">
                          <a
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</a
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="product-item">
                  <figure>
                    <a href="product.php" title="Product Title">
                      <img
                        src="images/product1.jpg"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">
                      Organic Desi Jaggery (Gud)
                    </h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                          />
                        </div>
                        <div class="col-7">
                          <a
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</a
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / product-grid -->
          </div>
        </div>
      </div>
    </section>



    <hr/>


    <section class="section_all bg-light" id="OurFarms">
      <div class="container">
        <!-- Title Section -->
        <div class="row">
          <div class="col-lg-12">
            <div class="section_title_all text-center">
              <h3 class="font-weight-bold" style="color: green;">Welcome To <span class="text-custom">Vignesh Organic Farm</span></h3>
              <p class="section_subtitle mx-auto text-muted fs-5">A natural way of farming rooted in tradition, sustainability, and purity. Experience farm-fresh products directly from our fields to your home.</p>
            </div>
          </div>
        </div>

        <!-- Image + About Content -->
        <div class="row vertical_content_manage mt-2 mb-5">
          <div class="col-lg-6">
            <div class="about_header_main mt-3">
              <div class="about_icon_box">
                <p class="text_custom font-weight-bold fs-5">Pure, Ethical, Sustainable</p>
              </div>
              <h4 class="about_heading text-capitalize font-weight-bold mt-4" style="color: rgb(255, 145, 0);">Organic farming that nourishes your family and the planet</h4>
              <p class="text-muted mt-3">At Vignesh Organic Farm, we believe in cultivating the land with respect. Our methods are chemical-free and environmentally conscious, ensuring you receive only the freshest and healthiest produce.</p>
              <p class="text-muted mt-3">From handpicked vegetables to desi cow ghee and cold-pressed oils, we focus on quality, sustainability, and trust.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="img_about mt-3">
              <img src="./images/10.jpg" alt="Our Organic Farm" class="img-fluid mx-auto d-block">
            </div>
          </div>
        </div>

        <hr/>

        <!-- Features / Services -->
        <div class="container py-5">
          <div class="row text-center">
            <div class="col-lg-4 col-md-6 py-2">
              <div class="service-card h-100">
                <div class="service-icon text-success">
                  <i class="fas fa-seedling"></i>
                </div>
                <h5 class="mt-3 fw-bold" style="color: rgba(0, 0, 0, 1);">Chemical-Free Cultivation</h5>
                <p class=" mt-2 fs-6" style="color: #333;">We grow our produce using traditional organic methods with zero pesticides or harmful fertilizers.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 py-2">
              <div class="service-card h-100">
                <div class="service-icon text-warning">
                  <i class="fas fa-tractor"></i>
                </div>
                <h5 class="mt-3 fw-bold" style="color: rgba(0, 0, 0, 1);">Farm-Fresh Products</h5>
                <p class="mt-2 fs-6" style="color: #333;">From seasonal vegetables to cold-pressed oils and A2 ghee, we deliver the best from our farm.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 py-2">
              <div class="service-card h-100">
                <div class="service-icon text-danger">
                  <i class="fas fa-hand-holding-heart"></i>
                </div>
                <h5 class="mt-3 fw-bold fs-4" style="color: rgba(0, 0, 0, 1);">Sustainable Practices</h5>
                <p class="mt-2 fs-6" style="color: #333;">Our eco-friendly farming methods preserve soil health and support biodiversity for future generations.</p>
              </div>
            </div>
          </div>
        </div>
        <hr/>
      </div>
    </section>




    




<style>
  .testimonials{
  background: linear-gradient(135deg, #fc9a08ff 30%, #ffd902ff 70%); /* Replace with your image */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  align-items: center;
  padding: 60px 15px;
   text-align:center;
  .testimonials-heading{
 
    hr{
      width:300px;
      margin:2rem auto;
      border: 1px solid #38ef7d;
    }
  }
  
  
  .testimonials-row{
    display: flex;
  flex-wrap: wrap;
  justify-content: center;
    
  }
  
  .testimonials-col{
  flex: 33.33%;  
  display:flex;
  flex-wrap: wrap;
  flex:1;
  max-width: 33.33%;
  box-sizing: border-box;
  padding: 15px;
  align-content:stretch;
  justify-content: space-between;
  }
  
.testimonial {
  background: linear-gradient(135deg, #cffc08ff 0%, #b0f067ff 100%);
  box-shadow: 20px 30px 50px 1px rgba(0, 0, 0, 0.3);
  padding: 30px;
  border-radius: 5px;
  color: white;
  flex: 1;

  .testimonial-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: gray;
    margin: 1rem auto;

    img {
      width: inherit;
      height: inherit;
      border-radius: inherit;
    }
  }
}

  
  .testimonial-name{
  font-size: 20px;
  text-transform: uppercase;
  margin: 20px 0;
}
.testimonial-rating{
  //color: #6ab04c;
  margin-bottom: 20px;
}
    
    
  }
  
}
</style>

    
<section id="testimonials" class="testimonials py-5">
  <div class="container">
    <!-- Heading -->
    <div class="text-center mb-5">
      <h2 class="fw-bold">What Our Clients Say</h2>
      <hr class="w-25 mx-auto" style="border-color: #fff;">
    </div>

    <!-- Testimonials Row -->
    <div class="row g-4">
      <!-- Testimonial 1 -->
      <div class="col-md-4">
        <div class="testimonial p-4 text-center">
          <div class="testimonial-img mx-auto mb-3">
            <img src="images/client1.jpg" alt="Client Photo">
          </div>
          <h5 class="testimonial-name mb-1">Anjali Sharma</h5>
          <div class="testimonial-rating text-warning mb-2">
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p class="mb-0" style="color: #333;">
            I’ve been using their ghee for months now. The taste is unmatched, and the purity is visible. Highly recommend it!
          </p>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-md-4">
        <div class="testimonial p-4 text-center">
          <div class="testimonial-img mx-auto mb-3">
            <img src="images/client3.jpg" alt="Client Photo">
          </div>
          <h5 class="testimonial-name mb-1">Ramesh Patel</h5>
          <div class="testimonial-rating text-warning mb-2">
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p class="mb-0" style="color: #333;">
            Loved the traditional preparation method. Reminded me of homemade ghee from my village days. Worth every rupee!
          </p>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="col-md-4">
        <div class="testimonial p-4 text-center">
          <div class="testimonial-img mx-auto mb-3">
            <img src="images/client2.jpg" alt="Client Photo">
          </div>
          <h5 class="testimonial-name mb-1">Neha Verma</h5>
          <div class="testimonial-rating text-warning mb-2">
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p class="mb-0" style="color: #333;">
            No preservatives, and you can feel the quality. My kids also love it with parathas. Fast delivery too!
          </p>
        </div>
      </div>
    </div>
  </div>
</section>










<?php  include 'include/contact.php'; ?>



    <section class="py-5">
      <div class="container-lg">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5">
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32">
                  <use xlink:href="#package"></use>
                </svg>
              </div>
              <div class="card-body p-0">
                <h5>Free delivery</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipi elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32">
                  <use xlink:href="#secure"></use>
                </svg>
              </div>
              <div class="card-body p-0">
                <h5>100% secure payment</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipi elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32">
                  <use xlink:href="#quality"></use>
                </svg>
              </div>
              <div class="card-body p-0">
                <h5>Quality guarantee</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipi elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32">
                  <use xlink:href="#savings"></use>
                </svg>
              </div>
              <div class="card-body p-0">
                <h5>guaranteed savings</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipi elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32">
                  <use xlink:href="#offers"></use>
                </svg>
              </div>
              <div class="card-body p-0">
                <h5>Daily offers</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipi elit.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




  <?php include 'include/footer.php'; ?>






