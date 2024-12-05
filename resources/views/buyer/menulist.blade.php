@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Full Menu List</h2>
    <form id="orderForm">
        <ul class="list-group">
            @foreach($menus as $menu)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <!-- Gambar Menu -->
                        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" style="width: 50px; height: 50px; object-fit: cover;" class="mr-3">
                        <div>
                            <strong>{{ $menu->name }}</strong><br>
                            <small>Price: {{ number_format($menu->price, 0, ',', '.') }} IDR</small>
                        </div>
                    </div>
                    <div>
                        <input type="number" class="form-control quantity" min="0" data-price="{{ $menu->price }}" placeholder="Qty" style="width: 80px;">
                    </div>
                </li>
            @endforeach
        </ul>

        <!-- Total Pesanan -->
        <div class="text-center mt-4">
            <h4>Total Order: <span id="totalOrder">0</span> IDR</h4>
            <button type="submit" class="btn btn-success mt-3">Place Order</button>
        </div>
    </form>
</div>

<!-- JavaScript untuk Menghitung Total -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
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
    });
</script>
@endsection
