<!DOCTYPE html>
<html>
  <head>
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    @include('include.navbar')
    <div class="container">
        @include('include.messages')
        @yield('content')
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright &copy; <?php echo date('Y'); ?> Todolist</p>
    </footer>
  </body>
</html>