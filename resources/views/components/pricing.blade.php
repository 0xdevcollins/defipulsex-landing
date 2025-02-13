<style>
    .pricing-section {
        /* background: linear-gradient(180deg, #1a237e 0%, #0d47a1 100%); */
        padding: 80px 0;
        color: black;
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
        color: #e78c45;
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
        background: #e78c45;
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
            @foreach ($plans as $plan)
                @php
                    // Assuming the data contains image and other info
                    $data = json_decode($plan['description'], true);  // Adjust based on your actual API response structure
                @endphp
                <div class="pricing-card">
                    <!-- Display the image if it exists -->
                    <img src="{{ $data['image'] ?? '' }}" alt="Mini Bot" class="bot-image">
                    <h3 class="plan-name uppercase">{{ $plan['name'] }}</h3>
                    <div class="price-range">${{ $plan['min_amount'] }}-${{ $plan['max_amount'] }}</div>
                    <div class="daily-rate">Up to {{ $plan['percent_return'] }}% DAILY</div>
                    <ul class="features">
                        <li>Yield Days: {{ $plan['duration'] }} Days</li>

                        @foreach ($data['data'] as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ dashboard_url('/trades/buy') }}" data-tw-toggle="modal" data-tw-target="#overlapping-modal-preview-{{ dashboard_url('/trades/buy') }}" class="get-started-btn">Get Started</a>
                </div>
            @endforeach
        </div>

    </div>
</section>
