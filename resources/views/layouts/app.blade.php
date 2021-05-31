<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
   <div class="container">
    
    <div class="m-5">
        @if(Request::is('/'))
        @include('inc.showcase')
        @endif
       <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('inc.messeges')
            @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')  
        </div>
       </div>
    </div>   
   </div>
    
  <footer id="footer" class="text-center">
      <p>Laravel is a Trademark of Taylor Otwell.
        Copyright &copy; 2011-2021 Laravel LLC.</p>
   </footer>   

   

</body>
</html>