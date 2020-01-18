@extends('layouts.html')

@section('css')
    <link rel="stylesheet" href="assets2/css/theme.css">
    <link rel="stylesheet" href="assets2/css/theme-elements.css">
    <link rel="stylesheet" href="assets2/css/theme-blog.css">
    <link rel="stylesheet" href="assets2/css/theme-shop.css">
@endsection

@section('isi')
<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">SPK(OVO)<span class="text-primary">.</span> </a></h1>
                </div>

                <!--NAVBAR-->
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="#home-section" class="nav-link">Home</a></li>
                            <li><a href="#tampilan" class="nav-link">Hasil</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>

    <!--    HOME-->
    <div class="site-blocks-cover overlay" style="background-image: url(assets/images/Tes.jpg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-md-6 mt-lg-5 text-center">
                    <h1>TUGAS GRAFIK VISUALISASI</h1>
                    <p class="mb-3">KELOMPOK 3 (OVO)</p>
                    <p class="mb-2">SYUKRI RAHMAT ILAHI - 1611521013</p>
                    <p class="mb-2">MUHAMAD FEBRI ALGANI - 1611523005</p>
                    <p class="mb-2">ANNISA NURGUSTIA - 1611523009</p>
                    <p class="mb-2">MURDAYANI - 1611529002</p>
                </div>

            </div>
        </div>
    </div>


    <!--    HASIL-->

    <section class="site-section" id="tampilan">
        <div class="container py-2">
        <div class="row">
            <div class="col">
                <h2 class="section-title mb-4" style="text-align: center">Jumlah Customer OVO Tahun 2018</h2>
                <br>
                <br>
                <div class="row mb-3 counters counters-lg text-dark">
                    <div class="col-sm-6">
                        <div class="counter">
                            <strong data-to="{{$m}}">0</strong><br>
                            <label class="section-title mb-4">PRIA</label><br>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="counter">
                            <strong data-to="{{$f}}">0</strong><br>
                            <label class="section-title mb-4">WANITA</label><br>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="counter">
                          <h1 class="mb-3" style="text-align: right">USIA &plusmn</h1><br>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="counter">
                            <strong style="text-align: left" data-to="{{$ratausia}}">0</strong>
                            <label class="section-title mb-4" style="text-align: left">Tahun</label><br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </section>

    <section class="site-section">
        <div class="container py-2">
            <div class="row">
                <div class="col">
                    <h2 class="section-title mb-4" style="text-align: center">Perkembangan Jumlah Customer Ovo Selama tahun 2018</h2>
                        <div class="col-sm-12">
                             <canvas id="Line"></canvas>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container py-2">
            <div class="row">
                <div class="col">
                    <h2 class="section-title mb-3" style="text-align: center">Data Transaksi Ovo Partner</h2>
                    <br><br>
                    <div class="row mb-3 counters counters-lg text-dark">
                        <div class="col-sm-6">
                            <h2 class="mb-3" style="text-align: center">Tingkat Penggunaan</h2>
                            <canvas id="sering"></canvas>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="mb-3" style="text-align: center">Jumlah Transaksi Terbanyak</h2><br>
                            <canvas id="jumlah"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container py-2">
            <div class="row">
                <div class="col">
                    <h2 class="section-title mb-3" style="text-align: center">Data Topup OVO berdasarkan Media(VIA)</h2>
                    <br><br>
                    <div class="row mb-3 counters counters-lg text-dark">
                        <div class="col-sm-6">
                            <h2 class="mb-3" style="text-align: center">Berdasrkan Jumlah Topup </h2><br>
                            <canvas id="jumlah_t"></canvas>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="mb-3" style="text-align: center">Paling Sering Digunakan</h2>
                            <canvas id="sering_t"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
@section('jsoperation')

    <script src="assets2/vendor/jquery/jquery.min.js"></script>		<script src="assets2/vendor/jquery.appear/jquery.appear.min.js"></script>		<script src="assets2/vendor/jquery.easing/jquery.easing.min.js"></script>		<script src="assets2/vendor/jquery.cookie/jquery.cookie.min.js"></script>		<script src="assets2/master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>		<script src="assets2/vendor/popper/umd/popper.min.js"></script>		<script src="assets2/vendor/bootstrap/js/bootstrap.min.js"></script>		<script src="assets2/vendor/common/common.min.js"></script>		<script src="assets2/vendor/jquery.validation/jquery.validate.min.js"></script>		<script src="assets2/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>		<script src="assets2/vendor/jquery.gmap/jquery.gmap.min.js"></script>		<script src="assets2/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>		<script src="assets2/vendor/isotope/jquery.isotope.min.js"></script>		<script src="assets2/vendor/owl.carousel/owl.carousel.min.js"></script>		<script src="assets2/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>		<script src="assets2/vendor/vide/jquery.vide.min.js"></script>		<script src="assets2/vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="assets2/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="assets2/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="assets2/js/theme.init.js"></script>
    <script src="assets2/master/analytics/analytics.js"></script>



<script type="text/javascript">

    var ctx = document.getElementById('Line').getContext('2d');
    var jan = {!! json_encode($jan) !!};
    var feb = {!! json_encode($feb) !!};
    var mar = {!! json_encode($mar) !!};
    var apr = {!! json_encode($apr) !!};
    var mei = {!! json_encode($mei) !!};
    var jun = {!! json_encode($jun) !!};
    var jul = {!! json_encode($jul) !!};
    var agu = {!! json_encode($agu) !!};
    var sep = {!! json_encode($sep) !!};
    var okt = {!! json_encode($okt) !!};
    var nov = {!! json_encode($nov) !!};
    var des = {!! json_encode($des) !!};
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agus', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: 'Customer Data',
                backgroundColor: 'rgba(44,14,179,0)',
                borderColor: 'rgb(162,12,234)',
                data: [
                    jan, feb, mar, apr, mei, jun, jul, agu, sep, okt, nov, des
                ],
            }]
        },
        // Configuration options go here
        options: {
        }
    });


    var ctx = document.getElementById("sering").getContext('2d');
    var trans = {!! json_encode($trans) !!};
    var depts = {!! json_encode($depts) !!};
    var ecom = {!! json_encode($ecom) !!};
    var cafe = {!! json_encode($cafe) !!};
    var franch = {!! json_encode($franch) !!};
    var etik = {!! json_encode($etik) !!};

    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Transportasi","Departmen Store","E-Commerce","Cafe","Franchise","E-Ticket"],
            datasets: [{
                data: [trans,depts,ecom,cafe,franch,etik],
                backgroundColor: [
                    'rgba(255,142,82,0.5)',
                    'rgb(135,134,255)',
                    'rgb(0,255,181)',
                    'rgb(205,255,122)',
                    'rgb(197,95,255)',
                    'rgb(119,255,150)',
                ],
                borderColor: [
                    'rgb(255,142,82)',
                    'rgb(135,134,255)',
                    'rgb(0,255,181)',
                    'rgb(205,255,122)',
                    'rgb(197,95,255)',
                    'rgb(119,255,150)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
            },
            title: {
                display: false,
                text: 'Chart.js Doughnut Chart'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var meta = dataset._meta[Object.keys(dataset._meta)[0]];
                        var total = meta.total;
                        var currentValue = dataset.data[tooltipItem.index];
                        var percentage = parseFloat((currentValue/total*100).toFixed(1));
                        return currentValue + ' (' + percentage + '%)';
                    },
                    title: function(tooltipItem, data) {
                        return data.labels[tooltipItem[0].index];
                    }
                }
            }
        }
    });

    var ctx = document.getElementById("jumlah").getContext('2d');
    var jtrans = {!! json_encode($jtrans) !!};
    var jdepts = {!! json_encode($jdepts) !!};
    var jecom = {!! json_encode($jecom) !!};
    var jcafe = {!! json_encode($jcafe) !!};
    var jfranch = {!! json_encode($jfranch) !!};
    var jetik = {!! json_encode($jetik) !!};
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Transportasi","Departmen Store","E-Commerce","Cafe","Franchise","E-Ticket"],
            datasets: [{
                label: 'Rp',
                data: [jtrans,jdepts,jecom,jcafe,jfranch,jetik],
                backgroundColor: [
                    'rgba(255,142,82,0.5)',
                    'rgb(135,134,255)',
                    'rgb(0,255,181)',
                    'rgb(205,255,122)',
                    'rgb(197,95,255)',
                    'rgb(119,255,150)',
                ],
                borderColor: [
                    'rgb(255,142,82)',
                    'rgb(135,134,255)',
                    'rgb(0,255,181)',
                    'rgb(205,255,122)',
                    'rgb(197,95,255)',
                    'rgb(119,255,150)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                    }
                }],
                xAxes: [{
                    ticks: {

                    }
                }]
            }
        }
    });

    var ctx = document.getElementById("jumlah_t").getContext('2d');
    var jatm = {!! json_encode($jatm) !!};
    var jgrab = {!! json_encode($jgrab) !!};
    var jtokped = {!! json_encode($jtokped) !!};
    var jovobo = {!! json_encode($jovobo) !!};
    var jalfamart = {!! json_encode($jalfamart) !!};
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["ATM/E-Banking","Grab","Tokopedia","Ovo Both","Alfamart"],
            datasets: [{
                label: 'Rp',
                data: [jatm,jgrab,jtokped,jovobo,jalfamart],
                backgroundColor: [
                    'rgba(78,60,255,0.5)',
                    'rgb(156,107,255)',
                    'rgb(130,255,152)',
                    'rgb(255,181,45)',
                    'rgb(255,30,58)'
                ],
                borderColor: [
                    'rgb(0,27,255)',
                    'rgb(156,107,255)',
                    'rgb(130,255,152)',
                    'rgb(255,181,45)',
                    'rgb(255,30,58)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    var ctx = document.getElementById("sering_t").getContext('2d');
    var atm = {!! json_encode($atm) !!};
    var grab = {!! json_encode($grab) !!};
    var tokped = {!! json_encode($tokped) !!};
    var ovobo = {!! json_encode($ovobo) !!};
    var alfamart = {!! json_encode($alfamart) !!};
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["ATM/E-Banking","Grab","Tokopedia","Ovo Both","Alfamart"],
            datasets: [{
                data: [atm,grab,tokped,ovobo,alfamart],
                backgroundColor: [
                    'rgba(78,60,255,0.5)',
                    'rgb(156,107,255)',
                    'rgb(130,255,152)',
                    'rgb(255,181,45)',
                    'rgb(255,30,58)'
                ],
                borderColor: [
                    'rgb(0,27,255)',
                    'rgb(156,107,255)',
                    'rgb(130,255,152)',
                    'rgb(255,181,45)',
                    'rgb(255,30,58)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
            },
            title: {
                display: false,
                text: 'Chart.js Doughnut Chart'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var meta = dataset._meta[Object.keys(dataset._meta)[0]];
                        var total = meta.total;
                        var currentValue = dataset.data[tooltipItem.index];
                        var percentage = parseFloat((currentValue/total*100).toFixed(1));
                        return currentValue + ' (' + percentage + '%)';
                    },
                    title: function(tooltipItem, data) {
                        return data.labels[tooltipItem[0].index];
                    }
                }
            }
        }
    });

</script>
@endsection
