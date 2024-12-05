@extends('layouts.app')

@section('title', 'Menu for Buyers')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Available Menus</h2>
    <div class="row">
        @foreach($menus as $menu)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $menu->image) }}" class="card-img-top" alt="{{ $menu->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->name }}</h5>
                        <p class="card-text">{{ $menu->description }}</p>
                        <p class="card-text"><strong>Price: {{ number_format($menu->price, 0, ',', '.') }} IDR</strong></p>
                        <input type="number" class="form-control quantity" placeholder="Quantity" min="1" data-price="{{ $menu->price }}">
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Total Pesanan -->
    <div class="text-center mt-4">
        <h4>Total Order: <span id="totalOrder">0</span> IDR</h4>
        <button class="btn btn-success mt-3">Place Order</button>
    </div>
</div>

<!-- JavaScript untuk Menghitung Total -->
<script>
    const quantities = document.querySelectorAll('.quantity');
    const totalOrder = document.getElementById('totalOrder');

    quantities.forEach(input => {
        input.addEventListener('input', calculateTotal);
    });

    function calculateTotal() {
        let total = 0;
        quantities.forEach(input => {
            const quantity = parseInt(input.value) || 0;
            const price = parseInt(input.dataset.price);
            total += quantity * price;
        });
        totalOrder.textContent = total.toLocaleString('id-ID');
    }
</script>
@endsection
