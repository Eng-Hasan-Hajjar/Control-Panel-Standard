
@extends('admin.layouts.layout')
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @section('title')
   control of Categories
@endsection
  <title>Categoy</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>

 @section('content')
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Categories</h3>
     <br />
     @yield('main')
    </div>
 </body>
 @endsection
</html>