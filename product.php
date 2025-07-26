<?php
include 'include/header.php';
?>

<style>
.text-bold {
  font-weight: 800;
}

.text-color {
  color: #0093c4;
}

.main-img img {
  width: 100%;
}

.previews img {
  width: 100%;
  height: auto;
}

.main-description .category {
  text-transform: uppercase;
  color: #1aa708ff;
}

.main-description .product-title {
  font-size: 2rem;
}

.old-price-discount {
  font-weight: 600;
}

.new-price {
  font-size: 1.8rem;
  color: #047904ff;
}

.details-title {
  text-transform: uppercase;
  font-weight: 600;
  font-size: 1.2rem;
  color: #757575;
}

.buttons .block {
  margin-right: 10px;
}

.quantity input {
  border-radius: 0;
  height: 40px;
  max-width: 80px;
}

.custom-btn {
  background-color: #ff5e00ff;
  color: white;
  width: 140px;
  height: 40px;
  border-radius: 5px;
}

.custom-btn:hover {
  background-color: #b1a500ff !important;
  color: white !important;
}

.similar-product {
  text-align: left;
  margin-bottom: 1.5rem;
}

.similar-product .title {
  margin: 10px 0 5px;
}

.similar-product .price {
  font-weight: bold;
}

.questions .icon i {
  font-size: 2rem;
}

.questions-icon {
  font-size: 2rem;
  color: #0093c4;
}

@media (max-width: 767.98px) {
  .main-description .product-title {
    font-size: 1.5rem;
  }
  .new-price {
    font-size: 1.5rem;
  }
  .buttons {
    flex-direction: column;
  }
  .buttons .block {
    margin-bottom: 10px;
  }
  .questions .icon,
  .questions .text {
    text-align: center;
  }
  .questions .icon {
    margin-bottom: 10px;
  }
  .similar-product img {
    height: auto;
  }
}
</style>

<div class="container my-5">
  <div class="row">
    <div class="col-md-5">
      <div class="main-img">
        <img class="img-fluid rounded shadow" src="./images/product_1.jpg" alt="Main Product">
        <div class="row my-3 g-2 previews">
          <div class="col-3"><img class="img-fluid border rounded" src="./images/product_1.jpg" alt="Thumb 1"></div>
          <div class="col-3"><img class="img-fluid border rounded" src="./images/product_2.jpg" alt="Thumb 2"></div>
          <div class="col-3"><img class="img-fluid border rounded" src="./images/product_3.jpg" alt="Thumb 3"></div>
          <div class="col-3"><img class="img-fluid border rounded" src="./images/product_1.jpg" alt="Thumb 4"></div>
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <div class="main-description px-2">
        <div class="category text-bold">Category: <span style="color: #ff6600ff">Deshi Ghee</span></div>
        <div class="product-title text-bold my-3 text-primary">A2 Gir Cow Ghee (Bilona Method)</div>
        <div class="price-area my-4">
          <p class="old-price mb-1"><del>$100</del> <span class="old-price-discount text-danger">(20% off)</span></p>
          <p class="new-price text-bold mb-1">$80</p>
          <p class="text-secondary mb-1">(Additional tax may apply on checkout)</p>
        </div>
        <div class="buttons d-flex flex-wrap align-items-center my-4">
          <div class="block"><a href="#" class="btn custom-btn shadow">Wishlist</a></div>
          <div class="block"><button class="btn custom-btn shadow">Add to cart</button></div>
          <div class="block quantity mt-2 mt-md-0"><input type="number" class="form-control" value="1" min="0" max="5"></div>
        </div>
      </div>
      <div class="product-details my-4">
        <p class="details-title text-color mb-1">Product Details</p>
        <p>100% Pure A2 Ghee made from grass-fed Gir cows using the traditional Bilona method.</p>
        <ul class="list-unstyled mb-4">
          <li>✅ Herbal infusion: Nagini leaves & Ashwagandha</li>
          <li>✅ No chemicals or preservatives</li>
          <li>✅ Supports digestion, immunity & brain function</li>
          <li>✅ Ayurveda recommended – use on navel too!</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row questions shadow-lg p-3 mt-4" style="background: linear-gradient(135deg, #cffc08ff 0%, #b0f067ff 100%);">
    <div class="col-md-1 icon d-flex justify-content-center align-items-center">
      <i class="fa-brands fa-rocketchat questions-icon"></i>
    </div>
    <div class="col-md-11 text">
      <div class="p-3 rounded-4">
        <h4 class="fw-bold mb-3">📦 Interested in Bulk or Wholesale Orders?</h4>
        <p class="mb-4 fs-5 text-dark">We proudly supply to retailers, organic stores, wellness brands, and Ayurvedic practitioners across India.</p>
        <a href="https://wa.me/918286295663?text=I'm+interested+in+wholesale+pricing+for+Gir+Cow+Ghee" class="btn btn-success btn-lg px-4 py-2 shadow">🤝 Enquire Now on WhatsApp</a>
      </div>
    </div>
  </div>

  <div class="mt-5">
    <h3 class="text-center mb-4 fw-bold">What Makes Us Special</h3>
    <div class="row g-4">
      <div class="col-sm-6 col-lg-4">
        <div class="p-3 shadow rounded-3 h-100 bg-white">
          <h5>🧈 Traditional Bilona Method</h5>
          <p>Ghee is made using the ancient Bilona process to retain all its nutrients and authenticity.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="p-3 shadow rounded-3 h-100 bg-white">
          <h5>🌿 Herbal Enrichment</h5>
          <p>Infused with Nagini leaves and Ashwagandha for added Ayurvedic benefits.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="p-3 shadow rounded-3 h-100 bg-white">
          <h5>❌ No Preservatives</h5>
          <p>Absolutely no chemicals or additives – just pure and natural goodness.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="p-3 shadow rounded-3 h-100 bg-white">
          <h5>📸 Full Transparency</h5>
          <p>Our cows, farms, and the entire process are available to view on our website.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="p-3 shadow rounded-3 h-100 bg-white">
          <h5>💛 Trusted by Thousands</h5>
          <p>Years of dedication have earned the love and trust of countless happy customers.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="p-3 shadow rounded-3 h-100 bg-white">
          <h5>🌾 Sustainably Farmed</h5>
          <p>Cows graze freely on 150+ acres of natural farmland for a stress-free and healthy lifestyle.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container similar-products my-5">
    <hr>
    <p class="display-6">Similar Products</p>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="similar-product">
          <img class="w-100" src="images/product_2.jpg" alt="Preview">
          <p class="title">Lovely black dress</p>
          <p class="price">$100</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="similar-product">
          <img class="w-100" src="images/product_2.jpg" alt="Preview">
          <p class="title">Lovely Dress with patterns</p>
          <p class="price">$85</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="similar-product">
          <img class="w-100" src="images/product_2.jpg" alt="Preview">
          <p class="title">Lovely fashion dress</p>
          <p class="price">$200</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="similar-product">
          <img class="w-100" src="images/product_2.jpg" alt="Preview">
          <p class="title">Lovely red dress</p>
          <p class="price">$120</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'include/footer.php'; ?>
