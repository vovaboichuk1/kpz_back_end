<!DOCTYPE html>
<html lang="en">
      
<head> 
 
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title-block') </title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css'])
    
</head>
<body>
     @include('inc.header')
   @yield('content')
    @include('inc.aside')
   
</body>
</html>