<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="admin template, angular admin template, bootstrap admin template, modern admin template, modern design admin template, dashboard template, responsive admin template, angular web app, crypto dashboard, bitcoin dashboard">
    <title>G20 | Perfil</title><!-- GLOBAL VENDORS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" href="../img/logoG20_BTC_original_v2.png">
    
    <link rel="stylesheet" href="../../../assets/feather-icons/feather.css">
    <link rel="stylesheet" href="../../../assets/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../../assets/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../../assets/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../../../assets/assets/css/themes/app-sidebar-light.css">     <link rel="stylesheet" href="../../../assets/assets/css/themes/app-sidebar-light.css">
    <link rel="stylesheet" href="../../../assets/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="../../../assets/DataTables/datatables.min.css">

    
    <style>.data-widget-icon {
position: absolute;
top: 20px;
right: 20px;
font-size: 40px;
color: #6a89d7;
}
</style>
</head>

<body>
<!--   ----------------------------------------------------------- DELETAR DAQUI PARA CIMA------------------------------------------------------>
    <div class="page-wrapper">
        <div class="content-wrapper">
            <!-- BEGIN: Sidebar-->
            <div class="page-sidebar custom-scroll text-dark" id="sidebar">
                <div class="sidebar-header mb-0 p-0 pt-2"><a class="sidebar-brand" href="#"><img src="../img/logoG20_BTC_original_v1.png" class="rounded" alt="LogoG20"></a><a class="sidebar-brand-mini" href="#"></a><span class="sidebar-points"></span></div>
                <ul class="sidebar-menu metismenu">
                    <li class="heading p-0 pl-4"><span>Navegação</span></li>
                    <li><a href="#"><i class="sidebar-item-icon ft-home"></i><span class="nav-label">Home</span></a></li>
                    <li><a href="#"><i class="sidebar-item-icon ft-git-pull-request"></i><span class="nav-label">Rede</span></a></li>
                    <li><a href="#"><i class="sidebar-item-icon ft-user"></i><span class="nav-label">Perfil</span></a></li>
                    <li><a href="javascript:;"> <i class="sidebar-item-icon ft-settings"></i><span class="nav-label text-dark">Financeiro</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="#"><i class="sidebar-item-icon ft-dollar-sign"></i>Comprar Curso</a></li>
                            <li><a href="#"><i class="sidebar-item-icon ft-file-text"></i>Extrato</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="sidebar-item-icon ft-monitor"></i><span class="nav-label">Curso</span></a></li>
                    <li><a href="#"><i class="sidebar-item-icon ft-headphones"></i><span class="nav-label"> Suporte</span></a>
                    </li>
                </ul>
            </div><!-- END: Sidebar-->
            <!-- BEGIN: Content-->
            <div class="content-area">
                <!-- BEGIN: Header-->
                <nav class="navbar navbar-expand navbar-light fixed-top header">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link navbar-icon sidebar-toggler" id="sidebar-toggler" href="#"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></li>
                        <li class="nav-item dropdown d-none d-sm-inline-block"><a class="nav-link dropdown-toggle megamenu-link" href="#" data-toggle="dropdown"></a>
                        </li>
                    </ul>
                </nav><!-- END: Header-->
                <main>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="card rounded-0">
                                    <h4 class="text-center mt-2">Perfil</h4>
                                    <div class="card-body">
                                        <div class="alert alert-warning alert-bordered has-icon" role="alert"><i class="la la-warning alert-icon"></i> <strong>Warning!</strong><br>A simple warning alert&mdash;check it out!
                                         </div>
                                        <div class="row mt-4">
                                            <div class="col-6 mt-4">
                                                <h4><i class="sidebar-item-icon ft-user"></i> Dados Pessoais</h4>
                                            </div>
                                            <div class="col-5 mt-4">
                                                <h4><i class="sidebar-item-icon ft-home"></i> Endereço</h4>
                                            </div>
                                        </div>
                                        
                                        <form class="" name="frm_dadospessoais" method="post">
                                           <div class="row">
                                                <div class="col-sm-6 mt-0">
                                                    <div class="card-body">
                                                        <div class="form-group mb-3"><label>Nome</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-user"></i></span><input class="form-control" type="text" placeholder="Nome" disabled></div>
                                                        </div>
                                                        <div class="form-group mb-3"><label>Email</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-email"></i></span><input class="form-control" type="text" placeholder="E-mail" disabled></div>
                                                        </div>
                                                        <div class="form-group mb-3"><label>Celular</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-mobile"></i></span><input class="form-control" type="text" placeholder="Celular"></div>
                                                        </div>
                                                        <div class="form-group mb-3"><label>Login</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-id-badge"></i></span><input class="form-control" type="text" placeholder="Login" disabled></div>
                                                        </div>
                                                        <div class="form-group mb-3"><label>Senha</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-lock"></i></span><input class="form-control" type="text" placeholder="Senha"></div>
                                                        </div>
                                                        <div class="form-group mb-3"><label>Confirmar    Senha</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-lock"></i></span><input class="form-control" type="text" placeholder="Confirmar senha"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="col-6 mt-5">
                                                    <div class="form-group"><label>Rua/Nº</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-car"></i></span><input class="form-control" type="text" placeholder="Rua/Nº"></div>
                                                    </div>   
                                                    <div class="form-group"><label>Cidade</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-direction-alt"></i></span><input class="form-control" type="text" placeholder="Cidade"></div>
                                                    </div> 
                                                   <div class="form-group"><label>Estado</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-direction"></i></span><input class="form-control" type="text" placeholder="Estado"></div>
                                                    </div>   
                                                    <div class="form-group"><label>Pais</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-world"></i></span><input class="form-control" type="text" placeholder="Pais"></div>
                                                    </div> 
                                                   
                                                    <div class="form-group"><label>CEP</label>
                                                            <div class="input-group-icon input-group-icon-left"><span class="input-icon input-icon-left"><i class="ti-user"></i></span><input class="form-control" type="text" placeholder="CEP"></div>
                                                    </div> 
                                                
                                               </div>
                                           </div>
                                            <div class="text-center">
                                                <input type="submit" value="Salvar" class="btn btn-rounded btn-success btn-lg">
                                            </div>
                                            
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Carregando..</div>
    </div> 
    <!-- CORE PLUGINS-->
    
    <script src="../../../assets/jquery/dist/jquery.min.js"></script>
    <script src="../../../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/metismenu/dist/metisMenu.min.js"></script>
    <script src="../../../assets/perfect-scrollbar/dist/perfect-scrollbar.js"></script>
    <script src="../../../assets/moment/min/locales.min.js"></script>
    <script src="../../../assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../../../assets/chart.js/dist/Chart.min.js"></script>
    <script src="../../../assets/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="../../../assets/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="../../../assets/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../../assets/DataTables/datatables.min.js"></script>
    <script src="../../../assets/assets/js/app.min.js"></script>
    <script src="../../../assets/assets/js/scripts/calendar-demo.js"></script>
    <script src="../../../assets/clipboard/dist/clipboard.js"></script>
    <script>
        $(function() {
            var clipboard = new ClipboardJS('[data-clipboard]')
                .on("success", function(e) {
                    //e.clearSelection();
                    alert("Link copiado com sucesso!");
                });
        });
    </script>
</body>

</html>