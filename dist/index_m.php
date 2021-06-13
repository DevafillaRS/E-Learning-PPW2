<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa PENS</title>
    <link href="css/application.min.css" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
        <![endif]-->
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="FlatLogic One Lite - Bootstrap 4 Admin Dashboard Template">
    <meta name="keywords"
        content="flatlogicone, bootstrap admin template,admin template,admin dashboard,admin dashboard template,admin,dashboard,bootstrap,template">
    <meta name="author" content="Flatlogic LLC">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
        chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
        https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-36759672-9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-36759672-9');
    </script>
    <!-- Yandex.Metrika counter -->
    <script
        type="text/javascript"> (function (m, e, t, r, i, k, a) { m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) }; m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a) })(window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym"); ym(48020168, "init", { id: 48020168, clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true, trackHash: true, ecommerce: "dataLayer" }); </script>
    <!-- /Yandex.Metrika counter -->
</head>

<body class="">
    <!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
    < class="page-controls navbar navbar-dashboard">
    <nav class="page-controls navbar navbar-dashboard">
       
       <div class="container-fluid">
           <div class="navbar-header mobile-hidden">
           <a href="logoutm.php" target="_blank" class="unlock-button d-none d-md-block">
                    <button class="btn btn-outline-warning rounded-0 width-175 mr-3 d-block d-md-none d-lg-block " role="button" >
                        <span class="fw-semi-bold mr-1">Log Out </span><i class="sidebar-icon logout-icon"></i>
                    </button>
                </a>
           </div>
       </div>   
    </nav>
<nav id="sidebar" class="sidebar" role="navigation">
    <!-- need this .js class to initiate slimscroll -->
    <div class="js-sidebar-content">
        <header class="logo d-md-block">
            <a href="index_m.php">
                <img src="img/avatars/a7.png" alt="...">
                <b class="fw-bold">Rizqy Santosa</b> </a>
        </header>
        <h5 class="sidebar-nav-title"></h5>
        <ul class="sidebar-nav">
            <li class=" active ">
                <a href="index_m.php">
                    <i class="sidebar-icon dashboard-icon"></i>
                    <span class="icon">PENS</span>
                </a>
            </li>
        </ul>
        <h5 class="sidebar-nav-title">Tugas </h5>
        <ul class="sidebar-nav">
            <hr>
            <li class="">
                <a href="tu_tugas.php">
                    <i class="sidebar-icon typography-icon"></i>
                    <span class="icon">Tugas Mahasiswa</span>
                </a>
            </li>
            <li class="">
                <a href="ku_tugas.php">
                    <i class="sidebar-icon tables-icon"></i>
                    <span class="icon">Kumpulkan Tugas</span>
                </a>
            </li>
            <li class="">
                <a href="ad_tugas.php">
                    <i class="sidebar-icon ui-elements"></i>
                    <span class="icon">Data Tugas</span>
                </a>
            </li>
        </ul>
        <h5 class="sidebar-nav-title">Ujian </h5>
        <ul class="sidebar-nav">
            <hr>
            <li class="">
                <a href="tu_ujian.php">
                    <i class="sidebar-icon typography-icon"></i>
                    <span class="icon">Ujian Mahasiswa</span>
                </a>
            </li>
            <li class="">
                <a href="ku_ujian.php">
                    <i class="sidebar-icon tables-icon"></i>
                    <span class="icon">Kumpulkan Ujian</span>
                </a>
            </li>
            <li class="">
                <a href="ad_ujian.php">
                    <i class="sidebar-icon ui-elements"></i>
                    <span class="icon">Data Ujian</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
    <div class="content-wrap">
        <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
        <main id="content" class="content" role="main">
            <!-- Page content -->
<div class="no-gutters row">
    <div class="col-lg-5">
        <h1 class="page-title"> <span class="fw-semi-bold">E-Learning</span></h1>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <section class="widget">
            <header>
                <h5>
                    <span class="fw-semi-bold">Index</span>
                </h5>
            </header>
            <div class="widget-body">
                <div class="table-responsive">
                    <table class="mb-0 table dashboard-table">
                        <thead>
                            <tr>
                                <th scope="col" class="pl-0">Id</th>
                                <th scope="col" class="pl-0">Mahasiswa</th>
                                <th scope="col" class="pl-0">Deadline</th>
                                <th scope="col" class="pl-0">Kerjakan</th>
                                <th scope="col" class="pl-0">Status</th>
                                <th scope="col" class="pl-0">Progres</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            <tr>
                                <td class="fw-thin pl-0 fw-thin">1</td>
                                <td class="pl-0 fw-thin">
                                    <img src="img/avatars/tn1.png" alt="" class="mr-3" width="34px" height="34px">Kate
                                    Claus</td>
                                <td class="pl-0 fw-thin">10 Jan 2022</td>
                                <td class="pl-0 fw-normal">Projek Web</td>
                                <td class="pl-0 text-success fw-normal">Kerjakan</td>
                                <td class="pl-0 fw-thin">50%</td>
                            </tr>
                            <tr>
                                <td class="fw-normal pl-0 fw-thin">2</td>
                                <td class="pl-0 fw-thin">
                                    <img src="img/avatars/tn2.png" alt="" class="mr-3" width="34px" height="34px">Maria
                                    Gordon</td>
                                <td class="pl-0 fw-thin">08 Jan 2022</td>
                                <td class="pl-0 fw-normal">Linux System</td>
                                <td class="pl-0 text-success fw-normal">Kerjakan</td>
                                <td class="pl-0 fw-thin">75%</td>
                            </tr>
                            <tr>
                                <td class="fw-normal pl-0 fw-thin">3</td>
                                <td class="pl-0 fw-thin">
                                    <img src="img/avatars/tn3.png" alt="" class="mr-3" width="34px" height="34px">Nick
                                    Peru</td>
                                <td class="pl-0 fw-thin">05 Jan 2022</td>
                                <td class="pl-0 fw-normal">Algoritma</td>
                                <td class="pl-0 text-danger fw-normal">Pending</td>
                                <td class="pl-0 fw-thin">0%</td>
                            </tr>
                            <tr>
                                <td class="fw-normal pl-0 fw-thin">4</td>
                                <td class="pl-0 fw-thin">
                                    <img src="img/avatars/a7.png" alt="" class="mr-3" width="34px" height="34px">Rizqy
                                    Santosa</td>
                                <td class="pl-0 fw-thin">20 Dec 2021</td>
                                <td class="pl-0 fw-normal">UAS PW</td>
                                <td class="pl-0 text-danger fw-normal">Pending</td>
                                <td class="pl-0 fw-thin">91%</td>
                            </tr>
                            <tr>
                                <td class="fw-normal pl-0 fw-thin">5</td>
                                <td class="pl-0 fw-thin">
                                    <img src="img/avatars/tn5.png" alt="" class="mr-3" width="34px" height="34px">Sam
                                    Fisher</td>
                                <td class="pl-0 fw-thin">16 Dec 2021</td>
                                <td class="pl-0 fw-normal">Matematika</td>
                                <td class="pl-0 text-danger fw-normal">Pending</td>
                                <td class="pl-0 fw-thin">50%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

            <footer class="content-footer hidden-print">
                E-Learning <a 
                    rel="nofollow" target="_blank" class="text-dark">PENS</a>
            </footer>
        </main>
    </div>
    <!-- The Loader. Is shown when pjax happens -->
    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin-fast"></i>
    </div>

    <!-- common libraries. required for every page-->

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/jquery-pjax/jquery.pjax.js"></script>
    <script src='../node_modules/popper.js/dist/umd/popper.js'></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/bootstrap/js/dist/util.js"></script>
    <script src="../node_modules/widgster/widgster.js"></script>
    <script src="../node_modules/hammerjs/hammer.js"></script>
    <script src='../node_modules/jquery-slimscroll/jquery.slimscroll.js'></script>
    <script src="../node_modules/jquery-hammerjs/jquery.hammer.js"></script>

    <!-- common app js -->
    <script src="js/settings.js"></script>
    <script src="js/app.js"></script>

    <!-- Page scripts -->
<script src='../node_modules/apexcharts/dist/apexcharts.js'></script>
<!-- page specific js -->
<script src="js/dashboard/index.js"></script>
</body>

</html>
