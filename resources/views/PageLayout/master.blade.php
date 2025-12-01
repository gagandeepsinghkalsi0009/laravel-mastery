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
    @hassection('content')
    @yield('content')
    @else
    <h2>No Content Found</h2>
    @endif
   </div>

   
   @section('sidebar')
   <h1>hello</h1>
   <h1>hello</h1>
   <h1>hello</h1>
   <h1>hello</h1>
   @show

   @hassection('div')
   @yield('div')
   @else
   <h2>No Div Found</h2>
   @endif

   @hassection('carousel')
   @yield('carousel')
   @else
   <h2>No Carousel Found</h2>
   @endif

   @section('show')
   <h2>1</h2>
   <h2>2</h2>
   <h2>3</h2>
   <h2>4</h2>
    @show

    @section('gagan')
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eos dolores libero quod delectus ab voluptate. Amet labore aut in.</p>
    @show

    @stack('kalsi')
    @stack('ram')

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
</html>