@extends('app')

@section('content')
    <section class="about-section section-padding fix">
        <div class="about-container-wrapper style1">
            <div class="container">
                <div class="about-wrapper style1">
                    <div class="row gy-5 gx-60">
                        <!-- Image Section -->
                        <div class="col-xl-6">
                            <div class="about-thumb">
                                <div class="bg"></div>
                                <div class="thumbShape1 d-none d-xxl-block cir36">
                                    <img src="assets/images/shape/aboutThumbShape1_1.png" alt="Decorative Shape">
                                </div>
                                <div class="thumbShape2 d-none d-xxl-block cir36">
                                    <img src="assets/images/shape/aboutThumbShape1_2.png" alt="Decorative Shape">
                                </div>
                                <div class="thumbShape3 d-none d-xxl-block cir36 float-bob-y">
                                    <img src="assets/images/shape/aboutThumbShape1_3.png" alt="Decorative Shape">
                                </div>
                                <div class="thumbShape4 d-none d-xxl-block cir36">
                                    <img src="assets/images/shape/aboutThumbShape1_4.png" alt="Decorative Shape">
                                </div>
                                <div class="main-thumb">
                                    <img src="assets/images/about/aboutThumb1_1.png" alt="DeFiPulseX App Overview">
                                </div>
                                <div class="absolute-thumb float-bob-x">
                                    <img src="assets/images/about/aboutThumb1_2.png" alt="DeFiPulseX Analytics">
                                </div>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="col-xl-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                        About DeFiPulseX <img src="assets/images/icon/fireIcon.svg" alt="Fire Icon">
                                    </div>
                                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">
                                        Powerful Tools for Smarter Trading
                                    </h2>
                                    <p class="section-desc wow fadeInUp" data-wow-delay=".6s">
                                        DeFiPulseX is your all-in-one platform for decentralized finance. With advanced
                                        trading bots, seamless staking, and real-time analytics, we empower you to take
                                        control of your financial future. Whether you're a beginner or a seasoned trader,
                                        our tools are designed to help you succeed.
                                    </p>
                                </div>
                                <ul class="checklist style1 wow fadeInUp" data-wow-delay=".2s">
                                    <li>
                                        <img src="assets/images/icon/checkmarkIcon.svg" alt="Checkmark Icon">
                                        Automated trading bots for 24/7 market coverage.
                                    </li>
                                    <li>
                                        <img src="assets/images/icon/checkmarkIcon.svg" alt="Checkmark Icon">
                                        Secure staking options to grow your assets.
                                    </li>
                                    <li>
                                        <img src="assets/images/icon/checkmarkIcon.svg" alt="Checkmark Icon">
                                        Real-time analytics and risk management tools.
                                    </li>
                                </ul>
                                <a class="theme-btn wow fadeInUp" data-wow-delay=".2s"
                                    href="{{ dashboard_url('/trades/buy') }}">
                                    Discover More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_18_41)">
                                            <path
                                                d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_18_41">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wcu-section">
        <div class="wcu-container-wrapper style2">
            <div class="container">
                <div class="wcu-wrapper style2 section-padding fix">
                    <div class="container">
                        <div class="row gy-5 gx-60 d-flex align-items-center">
                            <div class="col-xl-6">
                                <div class="wcu-thumb">
                                    <div class="main-thumb img-custom-anim-right wow fadeInUp" data-wow-delay=".4s">
                                        <img src="assets/images/wcu/wcuThumb2_1.png" alt="thumb">
                                    </div>
                                    <div class="thumb2 float-bob-y"><img src="assets/images/wcu/wcuThumb2_2.png"
                                            alt="thumb"></div>
                                    <div class="thumb3 float-bob-x"><img src="assets/images/wcu/wcuThumb2_3.png"
                                            alt="thumb"></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="wcu-content">
                                    <div class="section-title">
                                        <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                            Customizations & Analysis <img src="assets/images/icon/fireIcon.svg"
                                                alt="icon">
                                        </div>
                                        <h2 class="title wow fadeInUp" data-wow-delay=".4s">Easily Manage Your Trading
                                            Strategies & Team</h2>
                                        <p class="text1 wow fadeInUp" data-wow-delay=".6s">Create, customize, and monitor
                                            your trading bots to ensure your team maximizes profits and minimizes risks with
                                            strategic automation. No coding skills required!</p>
                                    </div>
                                    <div class="fancy-box style3 mb-20 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="icon">
                                            <img src="assets/images/icon/wcuIcon2_1.svg" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h4>Effortless Team Collaboration</h4>
                                            <p class="text">Share trading strategies, results, and insights with your team
                                                in real-time, optimizing your workflow and performance together.</p>
                                        </div>
                                    </div>
                                    <div class="fancy-box style3 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="icon">
                                            <img src="assets/images/icon/wcuIcon2_2.svg" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h4>Advanced Analytics & Insights</h4>
                                            <p class="text">Leverage powerful analytics tools to track performance,
                                                analyze market trends, and adjust strategies for optimal results.</p>
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



    <section class="work-process-section section-padding fix">
        <div class="work-process-container-wrapper style1">
            <div class="container">
                <div class="section-title text-center mxw-565 mx-auto">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                        How It Works <img src="assets/images/icon/fireIcon.svg" alt="icon">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">Let us Trade & Earn For You!</h2>
                </div>
                <div class="work-process-wrapper style1">
                    <div class="shape"><img src="assets/images/shape/workProcessShape1_1.png" alt="shape"></div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="work-process-box style1 wow fadeInUp" data-wow-delay=".2s">
                                <div class="step">STEP - 01</div>
                                <div class="title">Get Started</div>
                                <div class="text">Sign up on our platform and complete the registration process to get
                                    started.</div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="work-process-box style1 child2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="step">STEP - 02</div>
                                <div class="title">Connect Your Accounts</div>
                                <div class="text">Create your wallet accounts to set up your trading profile.
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="work-process-box style1 wow fadeInUp" data-wow-delay=".6s">
                                <div class="step">STEP - 03</div>
                                <div class="title">Choose Your Trading Plan</div>
                                <div class="text">Select from a variety of plan tailored to different market strategies
                                    and let them trade for you.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="work-process-section section-padding fix">
        <div class="work-process-container-wrapper style1">
            <div class="container">
                <div class="section-title text-center mxw-565 mx-auto">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                        How It Works <img src="assets/images/icon/fireIcon.svg" alt="Fire Icon">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">Automate Your Trading in 3 Easy Steps</h2>
                </div>
                <div class="work-process-wrapper style1">
                    <div class="shape">
                        <img src="assets/images/shape/workProcessShape1_1.png" alt="Decorative Shape">
                    </div>
                    <div class="row">
                        <!-- Step 1 -->
                        <div class="col-xl-4">
                            <div class="work-process-box style1 wow fadeInUp" data-wow-delay=".2s">
                                <div class="step">STEP - 01</div>
                                <div class="title">Sign Up & Connect</div>
                                <div class="text">
                                    Create your account and securely connect your wallet or exchange.
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="col-xl-4">
                            <div class="work-process-box style1 child2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="step">STEP - 02</div>
                                <div class="title">Choose Your Strategy</div>
                                <div class="text">
                                    Select from our range of trading bots or staking options.
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="col-xl-4">
                            <div class="work-process-box style1 wow fadeInUp" data-wow-delay=".6s">
                                <div class="step">STEP - 03</div>
                                <div class="title">Automate & Grow</div>
                                <div class="text">
                                    Let our tools handle the work while you watch your portfolio grow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wcu-section section-padding pt-0 fix">
        <div class="wcu-container-wrapper style3">
            <div class="container">
                <div class="wcu-wrapper style3">
                    <div class="row gy-5 gx-60">
                        <div class="col-xl-6">
                            <div class="wcu-content">
                                <div class="section-title">
                                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                        Why Choose Us <img src="assets/images/icon/fireIcon.svg" alt="Fire Icon">
                                    </div>
                                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">
                                        Empowering Your Trading Journey
                                    </h2>
                                    <p class="text1 wow fadeInUp" data-wow-delay=".6s">
                                        At DeFiPulseX, we combine cutting-edge technology with user-centric design to
                                        deliver a seamless trading experience. Whether you're a beginner or a seasoned
                                        trader, our platform is built to help you succeed.
                                    </p>
                                    <p class="text2 wow fadeInUp" data-wow-delay=".8s">
                                        From automated trading bots to secure staking options, we provide the tools you need
                                        to maximize your returns and minimize risks.
                                    </p>
                                </div>
                                <a class="theme-btn rounded-5 wow fadeInUp" data-wow-delay=".4s"
                                    href="{{ dashboard_url('/trades/buy') }}">
                                    Explore Features
                                    <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_190_64)">
                                            <path
                                                d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_190_64">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="counter-box-wrapper style3">
                                    <div class="counter-box style3 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="counter">
                                            <span class="counter-nubmer">56</span> <span>k+</span>
                                        </div>
                                        <p class="text">Active Traders</p>
                                    </div>
                                    <div class="counter-box style3 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="counter">
                                            <span class="counter-nubmer">126</span> <span>k+</span>
                                        </div>
                                        <p class="text">Successful Trades</p>
                                    </div>
                                    <div class="counter-box style3 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="counter">
                                            <span class="counter-nubmer">1.2</span> <span>M+</span>
                                        </div>
                                        <p class="text">Assets Secured</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="wcu-thumb">
                                <div class="main-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                                    <img src="assets/images/wcu/wcuThumb3_1.png" alt="DeFiPulseX Dashboard">
                                </div>
                                <div class="thumb2">
                                    <img src="assets/images/wcu/wcuThumb3_2.png" alt="Analytics Overview">
                                </div>
                                <div class="thumb-box wow fadeInUp" data-wow-delay=".4s">
                                    <h5>Portfolio Growth</h5>
                                    <p class="text">Average growth of 45% annually</p>
                                    <div class="shape-box">
                                        <img src="assets/images/shape/wcuThumbShape3_1.png" alt="Growth Chart">
                                        <div class="shape-content">
                                            <h6>Success Rate</h6>
                                            <h3>86%</h3>
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

    @include('components.testimonial')
@endsection
