<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Plataforma ICP</title>




  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" >

    <!-- Sidebar -->
    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion " id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex  align-items-center justify-content-center" href="{{ route('dash') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class=""><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggZD0iTTQ3Miw0MTZoLThWMTY4YzAtNC40MTgtMy41ODItOC04LThIMjRjLTQuNDE4LDAtOCwzLjU4Mi04LDh2MjQ4SDhjLTQuNDE4LDAtOCwzLjU4Mi04LDh2MTYgICAgIGMwLjAyNiwyMi4wOCwxNy45MiwzOS45NzQsNDAsNDBoNDAwYzIyLjA4LTAuMDI2LDM5Ljk3NC0xNy45Miw0MC00MHYtMTZDNDgwLDQxOS41ODIsNDc2LjQxOCw0MTYsNDcyLDQxNnogTTMyLDE3Nmg0MTZ2MjQwSDMwNCAgICAgYy0yLjEyMywwLjAxMS00LjE1NywwLjg1Ni01LjY2NCwyLjM1MkwyODQuNjg4LDQzMmgtODkuMzc2bC0xMy42NDgtMTMuNjQ4Yy0xLjUwNy0xLjQ5Ni0zLjU0MS0yLjM0MS01LjY2NC0yLjM1MkgzMlYxNzZ6ICAgICAgTTQ2NCw0NDBjMCwxMy4yNTUtMTAuNzQ1LDI0LTI0LDI0SDQwYy0xMy4yNTUsMC0yNC0xMC43NDUtMjQtMjR2LThoMTU2LjY4OGwxMy42NTYsMTMuNjU2YzEuNSwxLjUsMy41MzQsMi4zNDQsNS42NTYsMi4zNDRoOTYgICAgIGMyLjEyMiwwLDQuMTU2LTAuODQ0LDUuNjU2LTIuMzQ0TDMwNy4zMTIsNDMySDQ2NFY0NDB6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik0xNzYuNjI0LDM0Ni4yOGw5Ni40NC04OC40MDhsOTYsNTUuOTEyTDQ0MCwyNDIuODMyVjE4NEg0MHYxODQuMzZsODAuMi02Mi40TDE3Ni42MjQsMzQ2LjI4eiBNNTYsMzM1LjY0VjIwMGgzNjh2MzYuMjA4ICAgICBsLTU3LjUyOCw1Ny41NDRsLTk1LjUzNi01NS42MjRsLTk1LjU2LDg3LjU5MkwxMTkuOCwyODYuMDI0TDU2LDMzNS42NHoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTExMiwxNTJjNC40MTgsMCw4LTMuNTgyLDgtOHYtMTcuMjI0bDI3LjgtNC42NGMzLjE5NC0wLjUzNyw1Ljc0OS0yLjk0Nyw2LjQ3Mi02LjEwNCAgICAgYzIuMTUtOS40MSw1Ljg2My0xOC4zOTQsMTAuOTg0LTI2LjU3NmMxLjcyNy0yLjc1LDEuNjE5LTYuMjcyLTAuMjcyLTguOTEybC0xNi4zNzYtMjIuODg4bDEzLjA0OC0xMy4wNDhsMjIuODg4LDE2LjM3NiAgICAgYzIuNjQsMS44OTEsNi4xNjEsMS45OTksOC45MTIsMC4yNzJjOC4xNzMtNS4xMTgsMTcuMTQ1LTguODMxLDI2LjU0NC0xMC45ODRjMy4xNTctMC43MjMsNS41NjctMy4yNzgsNi4xMDQtNi40NzJsNC42NzItMjcuOCAgICAgaDE4LjQ0OGw0LjY0LDI3LjhjMC41MzcsMy4xOTQsMi45NDcsNS43NDksNi4xMDQsNi40NzJjOS40MSwyLjE1LDE4LjM5NCw1Ljg2MywyNi41NzYsMTAuOTg0ICAgICBjMi43NSwxLjcyNyw2LjI3MiwxLjYxOSw4LjkxMi0wLjI3MmwyMi44ODgtMTYuMzc2bDEzLjA0OCwxMy4wNDhsLTE2LjM3NiwyMi44ODhjLTEuODkxLDIuNjQtMS45OTksNi4xNjEtMC4yNzIsOC45MTIgICAgIGM1LjExOCw4LjE3Miw4LjgzMSwxNy4xNDUsMTAuOTg0LDI2LjU0NGMwLjcyMywzLjE1NywzLjI3OCw1LjU2Nyw2LjQ3Miw2LjEwNGwyNy44LDQuNjRWMTQ0YzAsNC40MTgsMy41ODIsOCw4LDhzOC0zLjU4Miw4LTggICAgIHYtMjRjLTAuMDAxLTMuOTA4LTIuODI2LTcuMjQzLTYuNjgtNy44ODhMMzQwLDEwNy4yYy0yLjE0MS03LjUxNS01LjEzMS0xNC43NjItOC45MTItMjEuNmwxNy4yODgtMjQuMTY4ICAgICBjMi4yNzUtMy4xODQsMS45MTMtNy41NDctMC44NTYtMTAuMzEybC0yMi42NC0yMi42NDhjLTIuNzY3LTIuNzY3LTcuMTMtMy4xMjUtMTAuMzEyLTAuODQ4TDI5MC40LDQ0LjkzNiAgICAgYy02LjgzNy0zLjc4OS0xNC4wODQtNi43ODctMjEuNi04LjkzNmwtNC45MDQtMjkuMzQ0QzI2My4yNCwyLjgwOCwyNTkuOTAzLTAuMDA1LDI1NiwwaC0zMmMtMy45MDgsMC4wMDEtNy4yNDMsMi44MjYtNy44ODgsNi42OCAgICAgTDIxMS4yLDM2Yy03LjUxNSwyLjE0MS0xNC43NjIsNS4xMzEtMjEuNiw4LjkxMmwtMjQuMTQ0LTE3LjI2NGMtMy4xODItMi4yNzctNy41NDUtMS45MTktMTAuMzEyLDAuODQ4bC0yMi42NDgsMjIuNjQ4ICAgICBjLTIuNzY3LDIuNzY3LTMuMTI1LDcuMTMtMC44NDgsMTAuMzEyTDE0OC45MzYsODUuNmMtMy43ODksNi44MzctNi43ODcsMTQuMDg0LTguOTM2LDIxLjZsLTI5LjM0NCw0LjkwNCAgICAgYy0zLjg0OCwwLjY1Ni02LjY2MSwzLjk5My02LjY1Niw3Ljg5NnYyNEMxMDQsMTQ4LjQxOCwxMDcuNTgyLDE1MiwxMTIsMTUyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJCQk8cGF0aCBkPSJNMjg4LDEzNmMwLDQuNDE4LDMuNTgyLDgsOCw4czgtMy41ODIsOC04YzAtMzUuMzQ2LTI4LjY1NC02NC02NC02NGMtMzUuMzQ2LDAtNjQsMjguNjU0LTY0LDY0YzAsNC40MTgsMy41ODIsOCw4LDggICAgIHM4LTMuNTgyLDgtOGMwLTI2LjUxLDIxLjQ5LTQ4LDQ4LTQ4QzI2Ni41MSw4OCwyODgsMTA5LjQ5LDI4OCwxMzZ6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik0yMDgsMTM2YzAsNC40MTgsMy41ODIsOCw4LDhzOC0zLjU4Miw4LThjMC04LjgzNyw3LjE2My0xNiwxNi0xNnMxNiw3LjE2MywxNiwxNmMwLDQuNDE4LDMuNTgyLDgsOCw4czgtMy41ODIsOC04ICAgICBjMC0xNy42NzMtMTQuMzI3LTMyLTMyLTMyQzIyMi4zMjcsMTA0LDIwOCwxMTguMzI3LDIwOCwxMzZ6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwb2x5Z29uIHBvaW50cz0iNDQwLDQwMCA0NDAsMzkyIDQ0MCwyNzIgNDI0LDI3MiA0MjQsMzkyIDQwOCwzOTIgNDA4LDMwNCAzOTIsMzA0IDM5MiwzOTIgMzc2LDM5MiAzNzYsMzI4IDM2MCwzMjggMzYwLDM5MiAgICAgIDM0NCwzOTIgMzQ0LDMxMiAzMjgsMzEyIDMyOCwzOTIgMzEyLDM5MiAzMTIsMjk2IDI5NiwyOTYgMjk2LDM5MiAyODAsMzkyIDI4MCwyODAgMjY0LDI4MCAyNjQsMzkyIDI0OCwzOTIgMjQ4LDMxMiAyMzIsMzEyICAgICAgMjMyLDM5MiAyMTYsMzkyIDIxNiwzNDQgMjAwLDM0NCAyMDAsMzkyIDE4NCwzOTIgMTg0LDM2MCAxNjgsMzYwIDE2OCwzOTIgMTUyLDM5MiAxNTIsMzQ0IDEzNiwzNDQgMTM2LDM5MiAxMjAsMzkyIDEyMCwzMzYgICAgICAxMDQsMzM2IDEwNCwzOTIgODgsMzkyIDg4LDM2MCA3MiwzNjAgNzIsMzkyIDU2LDM5MiA1NiwzODQgNDAsMzg0IDQwLDM5MiA0MCw0MDAgNDAsNDA4IDQ0MCw0MDggICAgIiBmaWxsPSIjRkZGRkZGIi8+CgkJPC9nPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="/></i>
        </div>
        <div class="sidebar-brand-text mx-4">Plataforma ICP<sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dash') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>




      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-paper-plane"></i>
          <span>Propostas</span></a>
      </li>



      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-users"></i>
          <span>Clientes</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="{{ route('cliente.index')}}">Empresas</a>
            <a class="collapse-item" href="{{ route('contato.index')}}">Contatos</a>
            <a class="collapse-item" href="#">Base Instalada</a>
          </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-shopping-bag"></i>
          <span>Produtos</span></a>
      </li>



      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Sistema</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="{{ route('ativ.index')}}">Atividades</a>
            <a class="collapse-item" href="{{ route('escp.index')}}">Escopo</a>
            <a class="collapse-item" href="{{ route('seg.index') }}">Segmento</a>
            <a class="collapse-item" href="{{ route('dept.index') }}">Departamento</a>
            <a class="collapse-item" href="#">Origem</a>
            <a class="collapse-item" href="{{ route('trat.index') }}">Tratamento</a>
          </div>
        </div>
      </li>

     <!-- Divider
      <hr class="sidebar-divider">

       Heading
      <div class="sidebar-heading">
        CONFIG
      </div>
-->

      <!-- Nav Item - Pages Collapse Menu -->

      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-lock"></i>
          <span>Segurança</span>
        </a>
        <div id="collapsePages" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="{{ route('users.index') }}">Usuários</a>
            <a class="collapse-item" href="#">Perfis</a>
            <a class="collapse-item" href="#">Equipes</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Relatórios</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="links">

            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Procurar por..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alertas do Sistema
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamatialon-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Ver todos alertas</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Caixa de Mensagens
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Ver todas mensagens</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                <img class="img-profile rounded-circle" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDMxMS41NDEgMzExLjU0MSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzExLjU0MSAzMTEuNTQxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE1NS43NzEsMjYuMzMxQzY5Ljc0LDI2LjMzMSwwLDk2LjA3MSwwLDE4Mi4xMDJjMCwzNy40ODgsMTMuMjUsNzEuODgzLDM1LjMxNCw5OC43NjEgICAgYzMuNDA0LTI3LjI1NiwzMC42MjctNTAuMzA4LDY4LjgtNjEuMjI1YzEzLjk0NiwxMi45OTQsMzEuOTYsMjAuODc4LDUxLjY1NiwyMC44NzhjMTkuMjMzLDAsMzYuODk0LTcuNDg3LDUwLjY5OC0xOS45MzYgICAgYzM4LjUwMywxMS44NzEsNjUuMTQxLDM2LjI3LDY2LjAxNyw2NC42M2MyNC4yODQtMjcuNDcyLDM5LjA1Ni02My41NTUsMzkuMDU2LTEwMy4xMDggICAgQzMxMS41NDEsOTYuMDcxLDI0MS44MDEsMjYuMzMxLDE1NS43NzEsMjYuMzMxeiBNMTU1Ljc3MSwyMjIuMDY5Yy05Ljk0NCwwLTE5LjMxNC0yLjczMi0yNy42MzQtNy40NjQgICAgYy0yMC4wNS0xMS40MDktMzMuODU1LTM0Ljc1Ni0zMy44NTUtNjEuNzExYzAtMzguMTQzLDI3LjU4My02OS4xNzYsNjEuNDg5LTY5LjE3NmMzMy45MDksMCw2MS40ODksMzEuMDMzLDYxLjQ4OSw2OS4xNzYgICAgYzAsMjcuMzY5LTE0LjIzNyw1MS4wMDQtMzQuNzg2LDYyLjIxNUMxNzQuMzc5LDIxOS41MjMsMTY1LjM0NiwyMjIuMDY5LDE1NS43NzEsMjIyLjA2OXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"/>

              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configurações
                </a>
                <a class="dropdown-item" href="">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Atividades
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
        @yield('head')

        </div>
        @yield('body')
        <!-- /.container-fluid -->
      </div>
      <!-- Footer -->
        @yield('foot')

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo para finalizar sua sessão no sistema.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="{{ url('/logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">Sair</a>
         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
        </div>
      </div>
    </div>
  </div>



  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>



 <!-- Script Tela de  -->
@yield('scripts')

</body>

</html>
