<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Master Page')</title>
    <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
    @yield('css')
</head>
<body>
  <!-- Navbar -->
   <div class="navbar">
    <a href="">Home</a>
    <a href="">About</a>
    <a href="">Services</a>
    <a href="">Contact Us</a>
   </div>

   <br><br><br><br>
   <!-- Main Content -->
   <div class="@yield('class','class')">
    @yield('content')
   </div>

   <!-- Footer -->
  <div class="footer">
    <a href="">About Us</a>
    <a href="">Privacy Policy</a>|
    <a href="">
      Careers
    </a>

    <p>Designed & Developed By Gaganadeep</p>
  </footer>
</body>
</body>
</html>