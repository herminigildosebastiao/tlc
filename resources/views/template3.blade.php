<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Login Sige-Seba</title>
  <!-- Bootstrap core CSS-->
  <link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <link href="{{url('admin/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{url('admin/css/app-style.css')}}" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
<br><br>
@yield('login')

<script src="{{url('admin/js/jquery.min.js')}}"></script>
<script>
  $(document).ready(function(){
    setInterval(ocultar,5000);
    function ocultar(){
      $('#displayMessage').hide();
    }
  });
</script>
</body>
</html>