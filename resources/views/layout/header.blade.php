<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('titulo')</title>

</head>
<body>
  <div class="container">
    <div class="row">
        <div id="wrapper">

          <!-- Sidebar -->
          <div id="sidebar-wrapper">
              <ul class="sidebar-nav" style="margin-left:0;">
                  <li class="sidebar-brand">
                    <a href="#menu-toggle"  id="menu-toggle" style="float:right;" > <i class="fa fa-angle-double-left " style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#submenuTecnicos" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="submentuTecnicos" class="collapsed">
                      <i class="fa fa-user-o" aria-hidden="true"></i>
                      <span style="margin-left:10px;">Técnicos</span>
                      <span class="button-down"> <i class="fa fa-angle-down"></i> </span>
                    </a>
                  </li>
                  <ul class="collapse submenu" id="submenuTecnicos">
                    <li>
                        <a href="#"> <i class="fa fa-snowflake-o" aria-hidden="true"> </i> <span style="margin-left:10px;"> Visualizar </span> </a>
                    </li>
                    <li>
                        <a href="#"> <i class="fa fa-snowflake-o" aria-hidden="true"> </i> <span style="margin-left:10px;"> Adicionar </span> </a>
                    </li>
                  </ul>
                  <li>
                      <a href="#"> <i class="fa fa-users " aria-hidden="true"> </i> <span style="margin-left:10px;"> Famílias</span> </a>
                  </li>
                  <li>
                      <a href="#"> <i class="fa fa-leaf" aria-hidden="true"> </i> <span style="margin-left:10px;"> SCFV</span> </a>
                  </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->

            <div id="page-content-wrapper">
                <div class="container-fluid" id="app">


