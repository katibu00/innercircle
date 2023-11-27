@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')
    <div id="home"></div>
    <div class="fugu--client-section">
        <div class="container">
            <div class="fugu--client-title">
                <p>Trusted Over 80k+ Companies in the World</p>
            </div>
            <div class="fugu-client-slider">
                <div class="fugu--brand-logo">
                    <img src="/frontend/images/all-img/v5/client1.png" alt="">
                </div>
                <div class="fugu--brand-logo">
                    <img src="/frontend/images/all-img/v5/client2.png" alt="">
                </div>
                <div class="fugu--brand-logo">
                    <img src="/frontend/images/all-img/v5/client3.png" alt="">
                </div>
                <div class="fugu--brand-logo">
                    <img src="/frontend/images/all-img/v5/client4.png" alt="">
                </div>
                <div class="fugu--brand-logo">
                    <img src="/frontend/images/all-img/v5/client5.png" alt="">
                </div>
                <div class="fugu--brand-logo">
                    <img src="/frontend/images/all-img/v5/client1.png" alt="">
                </div>
                <div class="fugu--brand-logo">
                    <img src="/frontend/images/all-img/v5/client2.png" alt="">
                </div>
                <div class="fugu--brand-logo">
                    <img src="/frontend/images/all-img/v5/client3.png" alt="">
                </div>
                <div class="fugu--brand-logo">
                    <img src="/frontend/images/all-img/v5/client4.png" alt="">
                </div>
                <div class="fugu--brand-logo">
                    <img src="/frontend/images/all-img/v5/client5.png" alt="">
                </div>

            </div>
        </div>
    </div>
    <!-- End client section -->


    <div class="fugu--inner-section dark-version">
        <div class="container">
            <div class="fugu--section-title">
                <div class="fugu--default-content">
                    <h2>Choose Your Trading Advantage</h2>
                    <p>Tailored Service Plans for Every Trader's Success.</p>
                </div>
            </div>
            <div class="section fugu-pricing-dark">
                <div class="container">
                    <div id="service-plans"></div>
                    <div class="row" id="table-price-value" data-pricing-dynamic data-value-active="monthly">
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                            <div class="fugu-pricing-wrap fugu-pricing-wrap3 wow fadeInUpX" data-wow-delay="0s">
                                <div class="fugu-pricing-header">
                                    <h5>Basic (3months)</h5>
                                </div>
                                <div class="fugu-pricing-price">
                                    <span class="fugu-pricing-currency">$</span>
                                    <div class="fugu-price dynamic-value" data-active="0" data-monthly="100" data-yearly="0">
                                    </div>
                                    <p class="bottom_text dynamic-value" data-active="" data-monthly=""
                                        data-yearly="/y"></p>
                                </div>
                                <p>Suitable for non TA traders</p>
                                <div class="fugu-pricing-body">
                                    <span>What you get:</span>
                                    <ul>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Crypto Trading Signals</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Online Support Group</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Supportive Community</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Risk Management Strategies</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Psychology</li>                                       
                                    </ul>
                                </div>
                                <a class="fugu--outline-btn m-0" href=""><span>Choose the plan</span></a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                            <div class="fugu-pricing-wrap fugu-pricing-wrap3 wow fadeInUpX" data-wow-delay=".10s">
                                <div class="fugu-pricing-header">
                                    <h5>Starters (6months)</h5>
                                </div>
                                <div class="fugu-pricing-price">
                                    <span class="fugu-pricing-currency">$</span>
                                    <div class="fugu-price dynamic-value" data-active="200" data-monthly="200"
                                        data-yearly="199"></div>
                                    <p class="bottom_text dynamic-value" data-active="" data-monthly=""
                                        data-yearly="/y"></p>
                                </div>
                                <p>Suitable for those looking to gain mastering in trading</p>
                                <div class="fugu-pricing-body">
                                    <span>What you get:</span>
                                    <ul>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Live Trading Class</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Signals on Crypto & Forex</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Online Support Group</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Supportive Community</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Educational Recorded Content</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Psychology</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Risk Management Strategies</li>                                        
                                    </ul>
                                </div>
                                <a class="fugu--outline-btn m-0" href=""><span>Choose the plan</span></a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                            <div class="fugu-pricing-wrap fugu-pricing-wrap3 wow fadeInUpX" data-wow-delay=".20s">
                                <div class="fugu-pricing-header">
                                    <h5>Professional Plan (1 yr)</h5>
                                </div>
                                <div class="fugu-pricing-price">
                                    <span class="fugu-pricing-currency">$</span>
                                    <div class="fugu-price dynamic-value" data-active="500" data-monthly="500"
                                        data-yearly="250"></div>
                                    <p class="bottom_text dynamic-value" data-active="" data-monthly=""
                                        data-yearly="/y"></p>
                                </div>
                                <p>Suitable for those looking to gain mastering in trading and access propfirm funds</p>
                                <div class="fugu-pricing-body">
                                    <span>What you get:</span>
                                    <ul>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Live Trading Class</li>

                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Signals on Crypto, Forex & Metals</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Propfirm trading ( $5K - $100k Accts)</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Market Research on Crypto, Forex, & Metals.</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Online Support Group</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Supportive Community</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Educational Recorded Content</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Psychology</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">Risk Management Strategies</li>
                                        <li><img src="/frontend/images/svg/check4.svg" alt="">ICT Concepts</li>
                                       
                                    </ul>
                                </div>
                                <a class="fugu--outline-btn m-0" href=""><span>Choose the plan</span></a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                            <div class="fugu-pricing-wrap fugu-pricing-wrap3 wow fadeInUpX" data-wow-delay=".30s">
                                <div class="fugu-pricing-header">
                                    <h5>Exclusive Plan (Lifetime)</h5>
                                </div>
                                <div class="fugu-pricing-price">
                                    <span class="fugu-pricing-currency">$</span>
                                    <div class="fugu-price dynamic-value" data-active="1000" data-monthly="1000"
                                        data-yearly="299"></div>
                                    <p class="bottom_text dynamic-value" data-active="" data-monthly=""
                                        data-yearly="/y"></p>
                                </div>
                                <p>Suitable for full time professional traders</p>
                                <div class="fugu-pricing-body">
                                    <span>What you get:</span>
                                    <ul>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Lifetime Mentorship</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Live Trading Class</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Trading indicators</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Signals on Crypto, Forex, Indices, Stocks,& Metals</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Propfirm trading ( $5K - $1M Accts)</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Market Research on Crypto, Forex, & Metals.</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Online Support Group</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Supportive Community</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Educational Recorded Content</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Psychology</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">Risk Management Strategies</li>
                                      <li><img src="/frontend/images/svg/check4.svg" alt="">ICT Concepts</li>

                                    </ul>
                                </div>
                                <a class="fugu--outline-btn m-0" href=""><span>Choose the plan</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fugu--video-section">
        <div class="container">
            <div class="fugu--section-title">
                <div class="fugu--default-content">
                    <h2>Discover Inner Circle Traders</h2>
                    <p>Your Path to Trading Excellence Begins Here</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="fugu--video-thumb wow fadeInUpX" data-wow-delay="0.10s">
                        <img src="/frontend/images/all-img/hand-mocup.png" alt="">
                        <a class="fugu--popup" href="https://youtube.com/shorts/meB9LJJBaP4?si=Y6iPu7SZJIq8pmEE">
                            <img src="/frontend/images/all-img/v5/play-button.png" alt="Play">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </a>
                        <div class="fugu--video-shape1">
                            <img src="/frontend/images/shape2/shape-video.png" alt="">
                        </div>
                        <div class="fugu--video-shape2">
                            <img src="/frontend/images/shape2/shape-video.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-flex align-items-center">
                    <div class="fugu--default-content">
                        <p>Inner Circle Traders (ICT). We explores our discoveries and perspectives on various topics
                            relating to Forex, indices, stock and cryptocurrency trading. We’re professional traders, we
                            have discovered our “sweet spot” in trading and We’re aiming to help you find yours. We’re
                            planning to offer you VALUE, trading guides and strategies that actually work.</p>
                        <p> "Inner Circle information" that will help you become a successful trader. No matter if you’re a
                            beginner trader or a seasoned technician looking for new trading ideas, you’re in the right
                            place.</p>
                        <div class="fugu--btn-wrap">
                            <a class="fugu--btn bg-blue" href="#">Discover More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End video section -->

    <div class="fugu--feature-section fugu--section-padding2">
        <div class="container">
            <div class="fugu--section-title">
                <div class="fugu--default-content">
                    <h2>Trade our Product</h2>
                    <p>Search our Instruments, Check what interest you today.</p>
                </div>
            </div>
            <div class="row">
                <style>
                    .star-ratings {
                        color: white;
                    }

                    .star {
                        color: white;
                        font-size: 1.2em;
                        margin-right: 2px;
                    }
                </style>

                <div class="col-xl-4 col-md-6">
                    <div class="fugu--iconbox-wrap fugu--iconbox-wrap3 wow fadeInUpX" data-wow-delay="0s">
                        <div class="fugu--iconbox-thumb">
                            <img src="/logo.jpeg" alt="Asset Logo" width="60" height="60">
                        </div>
                        <div class="fugu--iconbox-data">
                            <h4>Forex</h4>
                            <div class="star-ratings">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                            <p>EUR/USD, USD/JPY, GPB/USD, ETC</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="fugu--iconbox-wrap fugu--iconbox-wrap3 wow fadeInUpX" data-wow-delay="0s">
                        <div class="fugu--iconbox-thumb">
                          <img src="/logo.jpeg" alt="Asset Logo" width="60" height="60">
                        </div>
                        <div class="fugu--iconbox-data">
                            <h4>CRYPTO</h4>
                            <div class="star-ratings">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                            <p>BTC/USD, LTC/USD, ETH/USD, ETC</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="fugu--iconbox-wrap fugu--iconbox-wrap3 wow fadeInUpX" data-wow-delay="0s">
                        <div class="fugu--iconbox-thumb">
                          <img src="/logo.jpeg" alt="Asset Logo" width="60" height="60">
                        </div>
                        <div class="fugu--iconbox-data">
                            <h4>ENERGIES</h4>
                            <div class="star-ratings">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                            <p>OIL, GAS, AND ALL ENERGIES</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="fugu--iconbox-wrap fugu--iconbox-wrap3 wow fadeInUpX" data-wow-delay="0s">
                        <div class="fugu--iconbox-thumb">
                          <img src="/logo.jpeg" alt="Asset Logo" width="60" height="60">
                        </div>
                        <div class="fugu--iconbox-data">
                            <h4>STOCK</h4>
                            <div class="star-ratings">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                            <p>APPLE, GOOGLE, FACEBOOK</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="fugu--iconbox-wrap fugu--iconbox-wrap3 wow fadeInUpX" data-wow-delay="0s">
                        <div class="fugu--iconbox-thumb">
                          <img src="/logo.jpeg" alt="Asset Logo" width="60" height="60">
                        </div>
                        <div class="fugu--iconbox-data">
                            <h4>INDICIES</h4>
                            <div class="star-ratings">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                            <p>U$500, UK100, EUR750</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="fugu--iconbox-wrap fugu--iconbox-wrap3 wow fadeInUpX" data-wow-delay="0s">
                        <div class="fugu--iconbox-thumb">
                          <img src="/logo.jpeg" alt="Asset Logo" width="60" height="60">
                        </div>
                        <div class="fugu--iconbox-data">
                            <h4>METALS</h4>
                            <div class="star-ratings">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                            <p>GOLD,SILVER, AND MORE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fugu feature section -->

    <div class="fugu--content-section">
        <div class="container">
            <div class="fugu--content-top">
                <div class="row">
                    <div class="col-xl-6 d-flex justify-content-center align-items-center order-xl-2">
                        <div class="fugu--content-thumb">
                            <img class="wow fadeInUpX" data-wow-delay=".10s" src="/about_img.jpeg" alt="" height="70%" width="80%">
                            <div class="fugu--circle-shape circle-three">
                                <img src="/frontend/images/all-img/shapes-round.png" alt="">
                                <div class="waves wave-1"></div>
                            </div>
                            <div class="fugu--circle-shape circle-four">
                                <img src="/frontend/images/all-img/shapes-round.png" alt="">
                                <div class="waves wave-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="fugu--default-content">
                            <h2>Discover where the smart money is buying and selling</h2>
                            <p>Are you tired of losing money in the markets due to lagging indicators that give you false
                                signals and late entries? Do you want to learn how to trade using leading tools, key levels
                                and volume that show you where the market is likely to reverse or break out? Do you want to
                                discover a simple and effective trading approach that can help you achieve consistent
                                profits and grow your trading account? If you answered “yes” to any of these questions, then
                                you need to check out our trading program. Our program teaches you how to identify key
                                levels in any market (Forex, stocks, commodities, indices, crypto etc.) without relying on
                                lagging indicators. You’ll learn how to use volume profile and market profile – two powerful
                                tools that show you where the smart money is buying and selling and how to align yourself
                                with their actions.</p>
                            {{-- <div class="fugu--meta">
                <ul>
                  <li><img src="/frontend/images/svg2/check.svg" alt="">Cost-effective mode of transaction secure and private.</li>
                  <li><img src="/frontend/images/svg2/check.svg" alt="">Self-governed managed all and easy transfer of funds.</li>
                  <li><img src="/frontend/images/svg2/check.svg" alt="">Currency exchanges finish smoothly and decentralized.</li>
                </ul>
              </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="fugu--content-bottom">
                <div class="row">
                    <div class="col-xl-6 d-flex align-items-center">
                        <div class="fugu--content-thumb">
                            <img class="wow fadeInLeft" data-wow-delay=".10s"
                                src="/about_img2.jpeg" alt="">
                            {{-- <div class="fugu--bitcoin">
                                <img src="/frontend/images/all-img/v5/bitcoin4.png" alt="">
                            </div>
                            <div class="fugu--content-shape">
                                <img src="/frontend/images/shape2/shape-video.png" alt="">
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="fugu--default-content">
                            <h2>Maximize your trading potential</h2>
                            <p>A great option to minimize trading costs. Spreads from 0 points on top instruments. Amazing benefit for your clients to use! </p>
                            <div class="fugu--accordion-one accordion-two" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Create your wallet
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Fugu just like any other digital wallet, a crypto wallet helps users store, send
                                            & receive easily
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Link your bank account
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Fugu just like any other digital wallet, a crypto wallet helps users store, send
                                            & receive easily
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Start buying & selling crypto
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Fugu just like any other digital wallet, a crypto wallet helps users store, send
                                            & receive easily
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fugu--btn-wrap">
                                <a class="fugu--btn bg-blue" href="https://fbs.partners?ibl=813364&ibp=33788856">Register</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- End content section -->
    <div id="testimonials"></div>
    <div class="fugu--testimonial-section fugu--section-padding">
        <div class="container">
            <div class="fugu--section-title">
                <div class="fugu--default-content">
                    <h2>Success Stories</h2>
                    <p>Discover What Our Members Have to Say About Their Trading Journey.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="fugu--testimonial-wrap wow fadeInUpX" data-wow-delay="0s">
                        <div class="fugu--testimonial-rating">
                            <ul>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                            </ul>
                        </div>
                        <div class="fugu--testimonial-data">
                            <p>"Simple and effective. I enjoyed the content and the teaching style. 2 words will remain in
                                my head forever: confluence and confirmation. Got rid of all my indicators, added the
                                leading tools presented and now I have a new perspective on trading. I 100% recommend this
                                course."</p>
                        </div>
                        <div class="fugu--testimonial-author">
                            <div class="fugu--testimonial-author-thumb">
                                <img src="/frontend/images/all-img/v5/author1.png" alt="">
                            </div>
                            <div class="fugu--testimonial-author-data">
                                <span>- Stacy M.</span>
                                <p>Banker</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="fugu--testimonial-wrap wow fadeInUpX" data-wow-delay=".10s">
                        <div class="fugu--testimonial-rating">
                            <ul>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                            </ul>
                        </div>
                        <div class="fugu--testimonial-data">
                            <p>"One of the best trading courses I’ve purchased. I don’t have much time to trade and this
                                course suits me perfectly. I feel confident after a few trades that this course really
                                improved my style. The content is A+, very easy to understand with great visuals!"</p>
                        </div>
                        <div class="fugu--testimonial-author">
                            <div class="fugu--testimonial-author-thumb">
                                <img src="/frontend/images/all-img/v5/author2.png" alt="">
                            </div>
                            <div class="fugu--testimonial-author-data">
                                <span>- Williams B.</span>
                                <p>Analyst</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="fugu--testimonial-wrap wow fadeInUpX" data-wow-delay=".20s">
                        <div class="fugu--testimonial-rating">
                            <ul>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                                <li><img src="/frontend/images/svg2/star.svg" alt=""></li>
                            </ul>
                        </div>
                        <div class="fugu--testimonial-data">
                            <p>"This program works and I highly recommend it. It helped me take everything that I knew about
                                trading and scale it. I was dependent on lagging indicators and signals, but this course
                                opened my eyes. Five star recommendation!"</p>
                        </div>
                        <div class="fugu--testimonial-author">
                            <div class="fugu--testimonial-author-thumb">
                                <img src="/frontend/images/all-img/v5/author3.png" alt="">
                            </div>
                            <div class="fugu--testimonial-author-data">
                                <span>- Constanta G.</span>
                                <p>Analyst</p>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="fugu--testimonial-button">
                <a class="fugu--btn bg-blue" href="https://whatsapp.com/channel/0029Va4SghpId7nSr6dBSK1d">Join Us</a>
            </div>
        </div>
    </div>
    <!-- End fugu testimonial-section -->


    <div class="fugu--faq-section2 fugu--section-padding-bottom">
        <div class="container">
            <div class="fugu--section-title">
                <div class="fugu--default-content">
                    <h2>Frequently Asked Questions</h2>
                    <p>Find Answers to Common Queries About Inner Circle Traders</p>
                </div>
            </div>
            <div class="fugu--accordion-one accordion-three" id="accordionExample2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Q. Is This Course Suitable For Beginners Or Intermediate Traders?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    This program is suitable for beginners, but also for intermediate traders who already
                                    have some knowledge/experience.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Q. What Markets Is This Strategy Suitable For?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Any market: Forex, stocks, crypto, futures, commodities etc. The strategies are based on
                                    key levels trading, which can be applied on all financial markets.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    What Is The Capital Required To Trade This Strategy?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    The recommended minimum for swing trading on a daily time-frame is $5k. This is only a
                                    rough guideline.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading12">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                    Q. Are There Refunds Available?
                                </button>
                            </h2>
                            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    No. Due to the digital nature of all course materials, and assets, The InnerCircle LLC
                                    is not able to accept returns of any kind. Before making a purchase, please carefully
                                    read the product details to ensure compatibility.
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                    Q. Why Should I Enroll When You Already Offer A Lot Of Free Content On Your YouTube
                                    Channel?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    The free content on my YouTube channel is great for having the correct foundation in
                                    trading and getting familiar with the market. I share valuable insights that will help
                                    you get started and grow as a trader, without needing to enroll in the
                                    program.<br>However, the free content has its limitations. It does not cover all the
                                    aspects of trading that you need to master to succeed.
                                    This program gives you access to the exact tools and strategies that can help you
                                    analyze the market.<br>
                                    It teaches you in-depth strategies, tools, and techniques that we have used and tested
                                    in the markets for years.<br>
                                    It is not just another course that gives you some generic information. It is a complete
                                    learning experience that will guide you step by step to achieve your trading goals.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Q. What Trading Platform Is Needed To Trade This Strategy?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Any charting software can be used. We use TradingView and thus all charts presented in
                                    the program are displayed in this platform.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Q. How Long Will I Have Access To This Course's Content?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    It depends on the plan you choose 2 months, 3 months 6 months and life-time access to
                                    InnerCircle. On top of this, access to all ongoing, future updates to the course is
                                    included as well.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    Q. Can You Guarantee My Trading Results?
                                </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Your success depends primarily on your own effort, motivation, commitment and
                                    follow-through. We cannot and do not guarantee that you will attain a trading result or
                                    income increase, and you accept and understand that results differ by each individual.
                                    Please read carefully the disclaimer on our website: https://icircletrader.com/
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div class="fugu--circle-shape circle-five">
            <img src="/frontend/images/all-img/shapes-round.png" alt="">
            <div class="waves wave-1"></div>
        </div>
        <div class="fugu--circle-shape circle-six">
            <img src="/frontend/images/all-img/shapes-round.png" alt="">
            <div class="waves wave-1"></div>
        </div>
        <div class="fugu--circle-shape circle-seven">
            <img src="/frontend/images/all-img/shapes-round.png" alt="">
            <div class="waves wave-1"></div>
        </div>
    </div>
    <!-- End faq section -->

    <div class="fugu--cta-section">
        <div class="container">
            <div class="fugu--cta-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fugu--cta-thumb wow fadeInUpX" data-wow-delay=".10s">
                            <img src="/banner.jpeg" alt="Footer Banner">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="fugu--default-content">
                            <h2>Take Your Trading to the Next Level</h2>
                            <p>Join Inner Circle Traders Today for Exclusive Insights and Strategies</p>
                            <div class="fugu--btn-wrap">
                                <a class="fugu--btn bg-black" href="https://whatsapp.com/channel/0029Va4SghpId7nSr6dBSK1d">Join Our WhatsApp Channel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fugu--circle-shape circle-eight">
            <img src="/frontend/images/all-img/shapes-round.png" alt="">
            <div class="waves wave-1"></div>
        </div>
        <div class="fugu--circle-shape circle-nine">
            <img src="/frontend/images/all-img/shapes-round.png" alt="">
            <div class="waves wave-1"></div>
        </div>
    </div>
    <!-- End cta section -->
@endsection
