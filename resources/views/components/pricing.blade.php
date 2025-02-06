<style>
    .pricing-section {
        /* background: linear-gradient(180deg, #1a237e 0%, #0d47a1 100%); */
        padding: 80px 0;
        color: white;
        font-family: system-ui, -apple-system, sans-serif;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-header h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: white;
    }

    .pricing-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        justify-content: center;
    }

    .pricing-card {
        background: black;
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.1);
        transition: transform 0.3s ease;
    }

    .pricing-card:hover {
        transform: translateY(-10px);
    }

    .bot-image {
        width: 150px;
        height: 150px;
        margin: 0 auto 20px;
    }

    .plan-name {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: white;
    }

    .price-range {
        font-size: 1.25rem;
        color: #e78c45;
        margin-bottom: 10px;
    }

    .daily-rate {
        font-size: 1.1rem;
        color: #e1b492;
        margin-bottom: 20px;
    }

    .features {
        list-style: none;
        padding: 0;
        margin-bottom: 30px;
    }

    .features li {
        margin-bottom: 10px;
        color: #e0e0e0;
    }

    .get-started-btn {
        background: linear-gradient(90deg, #e78c45 0%, #864f25 100%);
        color: #fff;
        padding: 12px 30px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .get-started-btn:hover {
        transform: scale(1.05);
    }
    </style>
    <section class="pricing-section">
    <div class="container">
        <div class="section-header">
            <h2>Choose Your Trading Bot</h2>
            <p>Select the perfect plan for your trading journey</p>
        </div>

        <div class="pricing-grid">
            <!-- MINI Plan -->
            <div class="pricing-card">
                <img src="/assets/images/mini.png" alt="Mini Bot" class="bot-image">
                <h3 class="plan-name">MINI</h3>
                <div class="price-range">$100-$399</div>
                <div class="daily-rate">Up to 1.0% DAILY</div>
                <ul class="features">
                    <li>Yield Days: 7 Days</li>
                    <li>Deposit Stake: 14 Days</li>
                    <li>Basic Trading Features</li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
            </div>

            <!-- PRO Plan -->
            <div class="pricing-card">
                <img src="/assets/images/pro.png" alt="Pro Bot" class="bot-image">
                <h3 class="plan-name">PRO</h3>
                <div class="price-range">$400-$1,999</div>
                <div class="daily-rate">Up to 1.5% DAILY</div>
                <ul class="features">
                    <li>Withdrawal: Every 72 hours</li>
                    <li>2% Withdrawal Fee</li>
                    <li>Advanced Trading Tools</li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
            </div>

            <!-- PREMIUM Plan -->
            <div class="pricing-card">
                <img src="/assets/images/premium.png" alt="Premium Bot" class="bot-image">
                <h3 class="plan-name">PREMIUM</h3>
                <div class="price-range">$2,000-$7,999</div>
                <div class="daily-rate">Up to 2% DAILY</div>
                <ul class="features">
                    <li>Min of $50 Withdrawal</li>
                    <li>Withdrawals: Within 24 hours</li>
                    <li>Premium Trading Features</li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
            </div>

            <!-- SUPREME Plan -->
            <div class="pricing-card">
                <img src="/assets/images/supreme.png" alt="Supreme Bot" class="bot-image">
                <h3 class="plan-name">SUPREME</h3>
                <div class="price-range">$8,000-Unlimited</div>
                <div class="daily-rate">Up to 2.5% DAILY</div>
                <ul class="features">
                    <li>Only one Bot Needed</li>
                    <li>Top-Up with any amount</li>
                    <li>Supreme Trading Features</li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
            </div>
        </div>
    </div>
</section>
