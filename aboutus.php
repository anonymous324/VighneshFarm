<?php
// index.php - Main entry point for the Organic website
// Include necessary files
include 'include/header.php';
?>
<section class="about-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-4">
                    <h2 class="section-title" style="color: green">🧈 VIGHNESH FARM's Desi Gir Cow Ghee – A Gift of Purity and Wellness! 🌿</h2>
                    <p>
                        ✅Made using the traditional Bilona method
                    </p>
                    <p>✅A2 milk from grass-fed Gir cows</p>
                    <p>✅100% pure, chemical-free, and preservative-free</p>
                    <p>✅Infused with herbs like Nagini leaves and Ashwagandha</p>
                    <p>✅Home delivery available</p>
                    <p style="font-weight: 700;">📦Available in: 250ml, 500ml, and 1L bottles</p>
                </div>
            </div>
        </div>
    </div>



<style>
    .ghee-bg-container {
        background-image: url('images/banner1.jpg'); /* Replace with your image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 400px;
        display: flex;
        align-items: center;
        padding: 60px 15px;
    }

    .card-overlay {
        background-color: rgba(0, 0, 0, 0.85); /* Semi-transparent dark background */
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
        color: white;
    }

    .card-overlay h3 {
        font-size: calc(1.5rem + 1vw);
        font-weight: bold;
        color: #90ee90; /* Light green */
    }

    .card-overlay p {
        font-size: calc(1rem + 0.3vw);
        margin-bottom: 0;
    }
</style>

<div class="container-fluid ghee-bg-container">
    <div class="row justify-content-center w-100">
        <div class="col-lg-8">
            <div class="card-overlay text-center">
                <h3>Why Choose Our Gir Cow Ghee?</h3>
                <p>
                    Our ghee is not just a cooking ingredient; it’s a health elixir. Made from the milk of our beloved Gir cows, it’s rich in nutrients and has numerous health benefits. From enhancing digestion to boosting immunity, our ghee is a staple in every healthy kitchen.
                </p>
            </div>
        </div>
    </div>
</div>






    <div class="container">
        <style>
            .benefit-card {
                background: #fff;
                box-shadow: 0 4px 24px rgba(0,0,0,0.10), 0 1.5px 6px rgba(0,0,0,0.08);
                border-radius: 1rem;
                transition: 
                    transform 0.25s cubic-bezier(.21,1.02,.73,1.01),
                    box-shadow 0.25s cubic-bezier(.21,1.02,.73,1.01);
                will-change: transform, box-shadow;
            }
            .benefit-card:hover {
                transform: translateY(-16px) scale(1.04);
                box-shadow: 0 12px 32px rgba(0,0,0,0.18), 0 4px 16px rgba(0,0,0,0.10);
                z-index: 2;
            }
        </style>
        <div class="row justify-content-center my-5">
            <div class="col-lg-10">
                <h3 class="mb-4 text-center" style="color: green">Health Benefits of Gir Cow Ghee</h3>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 text-center shadow-sm benefit-card">
                            <div class="card-body">
                                <div class="mb-3" style="font-size:2rem;">🧠</div>
                                <h5 class="card-title" style="color:#7a5c00;">Enhances Brain Function</h5>
                                <p class="card-text">Supports memory and cognitive abilities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center shadow-sm benefit-card">
                            <div class="card-body">
                                <div class="mb-3" style="font-size:2rem;">💪</div>
                                <h5 class="card-title" style="color:#7a5c00;">Boosts Immunity</h5>
                                <p class="card-text">Strengthens your body’s natural defenses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center shadow-sm benefit-card">
                            <div class="card-body">
                                <div class="mb-3" style="font-size:2rem;">✨</div>
                                <h5 class="card-title" style="color:#7a5c00;">Nourishes Skin & Hair</h5>
                                <p class="card-text">Promotes healthy, glowing skin and strong hair.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center shadow-sm benefit-card">
                            <div class="card-body">
                                <div class="mb-3" style="font-size:2rem;">💓</div>
                                <h5 class="card-title" style="color:#7a5c00;">Heart Friendly</h5>
                                <p class="card-text">Safe for the heart when consumed in moderation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center shadow-sm benefit-card">
                            <div class="card-body">
                                <div class="mb-3" style="font-size:2rem;">🦴</div>
                                <h5 class="card-title" style="color:#7a5c00;">Strengthens Bones & Joints</h5>
                                <p class="card-text">Supports bone density and joint health.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center shadow-sm benefit-card">
                            <div class="card-body">
                                <div class="mb-3" style="font-size:2rem;">🔥</div>
                                <h5 class="card-title" style="color:#7a5c00;">Improves Digestion</h5>
                                <p class="card-text">Relieves acidity, gas, and bloating.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="position-relative p-4" style="background: white; border-radius: 1.25rem; box-shadow: 0 6px 32px rgba(255,193,7,0.13); overflow: hidden;">
                    <div class="d-flex flex-column align-items-center">
                        <div style="font-size:2.5rem; color:#ffc107; margin-bottom:0.5rem;">🕉️</div>
                        <p class="mb-2 text-center" style="font-size:1.25rem; font-weight:500; color:#7a5c00;">
                            <span style="font-size:1.1rem; color:#b48a00;">As per Ayurveda:</span><br>
                            <span style="font-weight:700; color:#a67c00;">
                                Just 4 drops of Gir cow ghee in the navel every day can activate 72,000 nerves and help prevent 40+ health issues.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">                
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">About Us</span>
                        <h2 style="color: green">Who We Are</h2>
                        <p>
                            <span style="font-weight: 700">Vighnesh Farm</span> is not just a dairy brand – it’s a story of trust, purity, and tradition. For the past <span style="font-weight: 700">8 years</span>, we’ve been committed to delivering <span style="font-weight: 700">100% natural and Ayurvedic Gir cow ghee</span> directly from our farm to your home.
                        </p>
                        <p>
                            We have a herd of over <span style="font-weight: 700">200 cows and buffaloes</span>, including <span style="font-weight: 700">Gir, native Indian breeds, and buffaloes.</span> All our cattle are <span style="font-weight: 700">grass-fed on 150 to 200 acres of natural farmland,</span> where we grow <span style="font-weight: 700">chemical-free, herbal fodder.</span>
                        </p>
                    </div>
                    


                    <h3 class="text-center mb-4 fw-bold" style="color: green">What Makes Us Special</h3>
                    <div class="row g-4">
                        
                        <div class="col-md-6 col-lg-6">
                            <div class="p-3 shadow rounded-3 h-100 bg-light">
                                <h5 class="fw-semibold" style="color:#7a5c00;">🧈 Traditional Bilona Method</h5>
                                <p class="mb-0">Ghee is made using the ancient Bilona process to retain all its nutrients and authenticity.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="p-3 shadow rounded-3 h-100 bg-light">
                                <h5 class="fw-semibold" style="color:#7a5c00;">🌿 Herbal Enrichment</h5>
                                <p class="mb-0">Infused with Nagini leaves and Ashwagandha for added Ayurvedic benefits.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="p-3 shadow rounded-3 h-100 bg-light">
                                <h5 class="fw-semibold" style="color:#7a5c00;">🚫 No Preservatives</h5>
                                <p class="mb-0">Absolutely no chemicals or additives – just pure and natural goodness.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="p-3 shadow rounded-3 h-100 bg-light">
                                <h5 class="fw-semibold" style="color:#7a5c00;">📸 Full Transparency</h5>
                                <p class="mb-0">Our cows, farms, and the entire process are available to view on our website.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="p-3 shadow rounded-3 h-100 bg-light">
                                <h5 class="fw-semibold" style="color:#7a5c00;">💛 Trusted by Thousands</h5>
                                <p class="mb-0">Years of dedication have earned the love and trust of countless happy customers.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="p-3 shadow rounded-3 h-100 bg-light">
                                <h5 class="fw-semibold" style="color:#7a5c00;">🌾 Sustainably Farmed</h5>
                                <p class="mb-0">Cows graze freely on 150+ acres of natural farmland for a stress-free and healthy lifestyle.</p>
                            </div>
                        </div>

                    </div>


                    <div class="d-flex align-items-center mt-4 justify-content-center">
                        <a href="#" class="btn btn-primary rounded-1 fw-bold">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">
                    <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img class="w-100" src="./images/12.jpg" alt=""></a></figure>
                    <figure class="image-2"><a href="#" class="lightbox-image" data-fancybox="images"><img class="w-100" src="./images/11.jpg" alt=""></a></figure>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>
