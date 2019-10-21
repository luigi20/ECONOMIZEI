<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <meta name="csrf-token" content="{{csrf_token()}}" > 
    <title>ECONOMIZEI</title>

    <link rel="canonical" href="{{asset('css/app.css')}}">
    <!-- Bootstrap core CSS -->
<link href="{{asset('css/app.css')}}" rel="stylesheet" >


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-green flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{route('dashboard')}}">ECONOMIZEI</a>
  <ul class="navbar-nav px-3">
    
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#" style="color: white"><span data-feather="log-out"> </span> Logout</a>
    </li>
  </ul>
</nav>

<div class="container-fluid" >
  <div class="row"   >
      
    <nav class="col-md-2 d-none d-md-block bg-light sidebar" id="sidebar"  > 
      
      <div class="sidebar-sticky" id="sidebar-wrapper" ><span data-feather="align-justify" id="toggleSidebar" style="margin-left: 60px" > <button type="button" class="btn btn-light" style="color:gray"></button> </span>
        <ul class="nav flex-column"> 
           
           <li class="nav-item {{request()->routeIs('dashboard')  ? 'active' : ''}}">
            
            <a class="nav-link " href="{{route('dashboard')}}" id='home'>
              <span data-feather="home"></span>
              <span>Home</span> <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item {{request()->routeIs('indexReceita') || request()->routeIs('addReceita')? 'active' : ''}}">
            <a class="nav-link" href="{{route('addReceita')}}" id='receitas'>
              <span data-feather="dollar-sign"></span>
              <span>Receitas</span>
            </a>
          </li>
          <li class="nav-item {{request()->routeIs('indexDespesa') || request()->routeIs('addDespesa') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('addDespesa')}}" id='despesas'>
              <span data-feather="shopping-cart"></span>
              <span>Despesas</span>
            </a>
          </li>
          <li class="nav-item {{request()->routeIs('indexTipoReceita') || request()->routeIs('addTipoReceita') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('addTipoReceita')}}" id='tipoReceita'>
              <span data-feather="box"></span>
              <span>Tipos de Receita</span>
            </a>
          </li>
          <li class="nav-item {{request()->routeIs('addTipoDespesa') || request()->routeIs('indexTipoDespesa') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('addTipoDespesa')}}" id='tipoDespesa'>
              <span data-feather="layers"></span>
              <span>Tipos de Despesa</span>
            </a>
          </li>
          <li class="nav-item {{request()->routeIs('addTipoPagamento') || request()->routeIs('indexTipoPagamento')? 'active' : ''}}">
            <a class="nav-link" href="{{route('addTipoPagamento')}}">
              <span data-feather="bar-chart-2"></span>
              <span>Tipos de Pagamento</span>
            </a>
          </li>
        </ul>
      
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Relatorios</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              <span> Mês Atual</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              <span>Renda vs Despesa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              <span>Calendário de Despesa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              <span> Log</span>
            </a>
          </li>
        </ul>
      </div>
      
    </nav>
  </div>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="margin-top:-50px">
        <h1 class="h2">{{$cabecalho}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <div class='container-conteudo'>
          @yield('conteudo')
          
      </div>

      <script src="{{asset('js/app.js')}}" ></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="{{'js/app.js'}}"></script>
      <script src="{{asset('js/sidebar-hide.js')}}" type="text/javascript"></script>
          
    </body>
</html>
