@extends('app')

@section('content')
    <section class="faq-section section-padding fix">
        <div class="faq-container-wrapper style2">
            <div class="container">
                <div class="faq-wrapper style2">
                    <div class="row gy-5 gx-100">
                        <!-- Image Section -->
                        <div class="col-xl-6">
                            <div class="faq-thumb">
                                <img src="assets/images/faq/faqThumb3_1.png" alt="DeFiPulseX FAQ Illustration">
                            </div>
                        </div>

                        <!-- FAQ Content Section -->
                        <div class="col-xl-6">
                            <div class="faq-content style1 mt-0">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion">
                                        <!-- FAQ 1 -->
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                                    aria-controls="faq1">
                                                    How do I get started with DeFiPulseX?
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Getting started is easy! Simply sign up, create your wallet , and choose from our range of trading plan or staking options.
                                                    Our platform is designed to be user-friendly, even for beginners.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- FAQ 2 -->
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                                    aria-controls="faq2">
                                                    What trading strategies does DeFiPulseX support?
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    We support a variety of strategies, including trend following, grid
                                                    trading, and dollar-cost averaging (DCA). Our bots are customizable to
                                                    fit your trading goals and risk tolerance.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- FAQ 3 -->
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                    aria-controls="faq3">
                                                    Is DeFiPulseX secure?
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Absolutely. We use advanced encryption and security protocols to protect
                                                    your data and assets. Additionally, our platform undergoes regular
                                                    security audits to ensure the highest level of safety.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- FAQ 4 -->
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                                    aria-controls="faq4">
                                                    Can I stake my assets on DeFiPulseX?
                                                </button>
                                            </h5>
                                            <div id="faq4" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Yes! DeFiPulseX offers secure staking options to help you earn passive
                                                    income on your idle assets. Our staking features are designed to
                                                    maximize returns while minimizing risks.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- FAQ 5 -->
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                                    aria-controls="faq5">
                                                    What kind of support does DeFiPulseX offer?
                                                </button>
                                            </h5>
                                            <div id="faq5" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    We provide 24/7 customer support to assist you with any questions or
                                                    issues. Our team is always ready to help you make the most of our
                                                    platform.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- FAQ 6 -->
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                                    How do I track my portfolio performance?
                                                </button>
                                            </h5>
                                            <div id="faq6" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Our platform provides real-time analytics and performance tracking. You
                                                    can monitor your portfolio, adjust strategies, and optimize your returns
                                                    with ease.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
