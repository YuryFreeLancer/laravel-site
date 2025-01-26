<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row  mb-3">
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-bg-primary p-3" href="{{ route('main.index') }}">Main</a></li>
                <li class="nav-item"><a class="nav-link text-bg-primary p-3" href="{{ route('post.index') }}">Posts</a></li>
                <li class="nav-item"><a class="nav-link text-bg-primary p-3" href="{{ route('contact.index') }}">Contacts</a></li>
                <li class="nav-item"><a class="nav-link text-bg-primary p-3" href="{{ route('about.index') }}">About</a></li>
            </ul>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>
