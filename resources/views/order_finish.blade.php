@include('header') <!-- Include the header -->

<div class="container my-5">
    <!-- Order Finished Card -->
    <div class="card shadow-sm">
        <div class="card-body">
            <!-- Title -->
            <h3 class="card-title text-center mb-4">Order Finished</h3>

            <!-- Order Reference Number -->
            <p class="h5"><strong>Order Reference Number:</strong> #{{ $order->reference_number }}</p>

            <!-- Order Total Amount -->
            <p class="h5"><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>

            <!-- Order Date -->
            <p class="h6"><strong>Order Date:</strong> {{ \Carbon\Carbon::parse($order->created_at)->format('M d, Y') }}</p>

            <!-- Success Message -->
            <div class="text-center mt-4">
                <button class="btn btn-primary" onclick="window.location.href='{{ route('products.index') }}'">Continue Shopping</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional, for modal or any other component requiring JS) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
