

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ef0f923b61c220011098161&product=inline-share-buttons" async="async"></script>
  <title> Pizza Ordering App</title>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
 <link href="/css/main.css" rel="stylesheet">
    </head>

    <body>

<!--testing different yields for section contents defined in the main view-->
        @yield('content')

        <br><br>
        <p> This is to check how to create different yields</p>
    <br><br>

  
    @yield('form')

</body>
</html>