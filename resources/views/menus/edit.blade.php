
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Menu</h2>

        <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Menu Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $menu->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $menu->price }}" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if($menu->image)
                    <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Menu</button>
        </form>
    </div>
@endsection
