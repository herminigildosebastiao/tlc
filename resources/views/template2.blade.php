<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin SIGE-SEBA</title>
  <!-- loader-->
  <link href="{{url("admin/css/pace.min.css")}}" rel="stylesheet"/>
  <script src="{{url("admin/js/pace.min.js")}}"></script>
  <!--favicon-->
  <link rel="icon" href="{{url("admin/images/favicon.ico")}}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{url("admin/plugins/vectormap/jquery-jvectormap-2.0.2.css")}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{url("admin/plugins/simplebar/css/simplebar.css")}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{url("admin/css/bootstrap.min.css")}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{url("admin/css/animate.css")}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{url("admin/css/icons.css")}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{url("admin/css/sidebar-menu.css")}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{url("admin/css/app-style.css")}}" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper">
 
    <!--Start sidebar-wrapper-->
     <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
       <div class="brand-logo">
        <a href="{{url('dashboard')}}">
         <img src="{{url("admin/images/logo-icon.png")}}" class="logo-icon" alt="logo icon">
         <h5 class="logo-text">SIGE-SEBA</h5>
       </a>
     </div>
     <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">Menu de navegacao</li>
  
        <li>
          <a href="{{route('dashboard')}}">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="{{url('dashboard/blog')}}">
            <i class="zmdi zmdi-collection-text"></i> <span>Noticias</span>
          </a>
        </li>

        <li>
          <a href="{{url('dashboard/portfolio')}}">
            <i class="zmdi zmdi-collection-folder-image"></i><i class="zmdi zmdi-view-dashboard"></i> <span>Galeria</span>
          </a>
        </li>
  
      </ul>
     
     </div>
     <!--End sidebar-wrapper-->
  
  <!--Start topbar header-->
  <header class="topbar-nav">
   <nav class="navbar navbar-expand fixed-top">
    <ul class="navbar-nav mr-auto align-items-center">
      
    </ul>
       
    <ul class="navbar-nav align-items-center right-nav-link">
  
      <li class="nav-item mr-1">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="{{url("admin/images/profile/avatar.png")}}" class="img-circle" alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
         <li class="dropdown-item user-details">
          <a href="javaScript:void();">
             <div class="media">
               <div class="avatar"><img class="align-self-start mr-3" src="{{url("admin/images/profile/avatar.png")}}" alt="user avatar"></div>
              <div class="media-body">
              <h6 class="mt-2 user-title">{{$user['name']. ' '.$user['apelido']}}</h6>
              <p class="user-subtitle">{{$user['email']}}</p>
              </div>
             </div>
            </a>
          </li>
          <li class="dropdown-item"><a href="{{url('painel/perfil')}}"><i class="icon-user mr-2"></i> Perfil</a></li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><a href="{{url('painel/logout')}}"><i class="icon-power mr-2"></i> Terminar sessao</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  </header>
  <!--End topbar header-->
  
  <div class="clearfix"></div>
      
  @yield('content')


     <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
      
      <!--Start footer-->
      <footer class="footer">
        <div class="container">
          <div class="text-center">
            Copyright © 2021 Dashtreme Admin
          </div>
        </div>
      </footer>
      <!--End footer-->
      
    </div><!--End wrapper-->
    <script src="{{url("admin/js/jquery.min.js")}}"></script>
    <script>
      $(document).ready(function(){
        $('#novaNoticia').show();
  
        $('#btnNovaFoto').click(function(){
          $('#novaFoto').show();
          $('#novaNoticia').hide();
        });
  
        $('#btnNovaNoticia').click(function(){
          $('#novaNoticia').show();
          $('#novaFoto').hide();
        });
  
      });
      $(document).ready(function(){
        setInterval(ocultar,5000);
        function ocultar(){
          $('#displayMessage').hide();
        }
      });
    </script>
  <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
  <script src="{{url("admin/js/popper.min.jss")}}"></script>
  <script src="{{url("admin/js/bootstrap.min.js")}}"></script>
	
  <!-- simplebar js -->
  <script src="{{url("admin/plugins/simplebar/js/simplebar.jss")}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{url("admin/js/sidebar-menu.jss")}}"></script>
  
  <!-- Custom scripts -->
  <script src="{{url("admin/js/app-script.jss")}}"></script>
	
</body>
</html>
