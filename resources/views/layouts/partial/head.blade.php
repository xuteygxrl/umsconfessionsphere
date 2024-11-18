<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="UMS Confession Sphere">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to UMS Confession Sphere. This is a platform for University of Malaysia Sabah students to share their confessions.">
    <meta name="application-name" content="UMS Confession Sphere">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='./boxicons-2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>UMS Confession Sphere</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<header class="header">
    <a  onclick='location.href="#"'  class="logo">UMS Confession Sphere</a>
    <input type="checkbox" name="a" id="check">
    <label for="check" class="icons">
        <i class="bx bx-menu bx-tada-hover" id="menu-icon"></i>
        <i class="bx bx-x bx-tada-hover" id="close-icon"></i>
    </label>
    <nav class="navbar" id="navigation">
        {{ request()->path() }} 
        <a class="url nav-item {{ request()->is('/') ? 'active' : '' }}" id="hmnav"   href="/" style="--i:0;">Home</a>
        <a class="url nav-item" 
            href="#category" 
            style="--i:1;"
            onclick="navigateToCategory(event)">
            Category
         </a>
        <a class="url nav-item {{ request()->is('profile') ? 'active' : '' }}"  href="/profile" style="--i:1;">Profile</a>
        <a class="url nav-item {{ request()->is('login') ? 'active' : '' }}" href="{{ route('logout') }}" 
            onclick="event.preventDefault(); 
                     fetch('{{ route('logout') }}', { 
                         method: 'POST', 
                         headers: { 
                             'X-CSRF-TOKEN': '{{ csrf_token() }}' 
                         } 
                     }).then(() => window.location.href = '{{ route('login') }}');" 
            style="--i:1;">
            Logout
         </a>
         
    </nav>
</header>

<script>
    function navigateToCategory(event) {
        // Prevent the default anchor click behavior
        event.preventDefault();

        // Check if the current URL path is the homepage ('/')
        if (window.location.pathname === '/') {
            // If on the homepage, scroll to the #category section
            document.querySelector('#category').scrollIntoView({ behavior: 'smooth' });
        } else {
            // If not on the homepage, redirect to the homepage with #category
            window.location.href = '/#category';
        }
    }
</script>
