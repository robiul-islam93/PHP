<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css link -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- css link -->

    <!-- font link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- font link -->

    <title>My Porfolio</title>
  </head>
  <body>

@include('component.Navigation_Bar')



@yield('main')


@include('component.Footer') 








    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- jquery cdn link -->

    <!-- custom js file link -->
    <script src="{{asset('js/script.js')}}"></script>
    <!-- custom js file link -->
  </body>
</html>