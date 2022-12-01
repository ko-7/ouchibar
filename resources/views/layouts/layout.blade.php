<html>
  <head>
    <title>@yield('title')</title>
  </head>
  <body>
    <h1>Layout</h1>
    <header>
      
    </header>
    <?php echo render('layouts.header'); ?>
    <div class="content">@yield('content')</div>
    <footer>@yield('footer')</footer>
  </body>
</html>