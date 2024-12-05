
@extends('layouts.app')

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
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Tombol untuk Menampilkan Menu List di Halaman Lain -->
    <div class="text-center mt-4">
        <a href="{{ route('buyer.menuList') }}" class="btn btn-primary">View Full Menu List</a>
        <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning">Edit</a>
    </div>
</div>
@endsection

