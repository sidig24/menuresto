@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create New Menu</h2>

        <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Menu Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Save Menu</button>
        </form>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Create Menu')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Create New Menu</h2>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf  <!-- Token CSRF untuk keamanan -->

                    <div class="form-group">
                        <label for="name">Menu Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter menu name" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter menu description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter menu price" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-3">Save Menu</button>
                </form>
            </div>
        </div>
    </div>
@endsection

