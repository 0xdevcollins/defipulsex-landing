@extends('app')

@section('content')
<style>
    /* Make table container responsive */
    .table-responsive-wrapper {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    /* Update table styles */
    .table {
        width: 100%;
        margin-bottom: 1rem;
        white-space: nowrap;
    }

    /* Pagination styles */
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        flex-wrap: wrap; /* Allow pagination to wrap on small screens */
        gap: 5px; /* Space between wrapped items */
    }

    .page-item {
        margin: 0 2px;
    }

    .page-link {
        color: #ff6b00; /* Orange color */
        border-radius: 50px;
        padding: 8px 12px;
        transition: all 0.3s;
    }

    .page-item.active .page-link {
        background-color: #ff6b00;
        border-color: #ff6b00;
        color: white;
    }

    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        background-color: #f8f9fa;
    }

    .page-link:hover {
        background-color: #ff8533;
        border-color: #ff8533;
        color: white;
    }

    /* Responsive styles for small screens */
    @media (max-width: 768px) {
        .table thead th,
        .table tbody td {
            padding: 0.5rem;
            font-size: 0.875rem;
        }
    }
</style>

<div class="container">
    <h2 class="mb-4">Crypto Trading History</h2>

    <div class="table-responsive-wrapper">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Timestamp</th>
                    <th>Pair</th>
                    <th>Strategy</th>
                    <th>Action</th>
                    <th>Price</th>
                    <th>Profit/Loss</th>
                    <th>Total with Rewards</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tradesPaginated as $trade)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($trade['timestamp'])->format('M d, Y h:i A') }}</td>
                        <td>{{ $trade['pair'] }}</td>
                        <td>{{ ucfirst($trade['strategy']) }}</td>
                        <td>{{ ucfirst($trade['action']) }}</td>
                        <td>${{ number_format($trade['price'], 2) }}</td>
                        <td>{{ $trade['profit_loss'] ? '$'.number_format($trade['profit_loss'], 2) : 'N/A' }}</td>
                        <td>{{ $trade['total_with_rewards'] ? '$'.number_format($trade['total_with_rewards'], 4) : 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center mt-4">
        {{ $tradesPaginated->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
@endsection
