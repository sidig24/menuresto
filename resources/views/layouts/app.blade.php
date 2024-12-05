<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Restaurant')</title>
    <!-- Tambahkan link Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Restaurant')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Jika ada file CSS -->
</head>
<body>
    <nav>
        <!-- Navigasi atau header menu di sini -->
        <ul>
            <li><a href="{{ route('menus.index') }}">Home</a></li>
            <li><a href="{{ route('menus.create') }}">Create Menu</a></li>



        </ul>
    </nav>

    <div class="container">
        @yield('content')  <!-- Bagian utama halaman -->
    </div>

    <footer>
        <!-- Footer di sini -->
        <p>&copy; 2024 FATHIA Restaurant</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Jika ada file JavaScript -->
</body>
</html>
