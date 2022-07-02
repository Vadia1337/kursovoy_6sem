<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Банковский помощник" name="description">
		<meta content="Банковский помощник" name="author">
		<meta name="keywords" content="Банковский помощник"/>
		<meta id="csrftoken" name="csrf-token" content="{{ csrf_token() }}">
		<!-- Title -->
		<title>Банковский помощник</title>
		<!--Favicon -->
		<link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon"/>

		<!--Bootstrap css -->
		<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- Style css -->
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/css/dark.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

		<!-- Animate css -->
		<link href="{{ asset('assets/css/animated.css') }}" rel="stylesheet" />

		<!-- P-scroll bar css-->
		<link href="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

		<!---Icons css-->
		<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

		<!-- Simplebar css -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}">

		<!-- INTERNAL Select2 css -->
		<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

	    <!-- Color Skin css -->
		<link id="theme" href="{{ asset('assets/colors/color1.css') }}" rel="stylesheet" type="text/css"/>
		@yield('links')
	</head>

    <body class="app main-body">

		<!---Global-loader-->
		<div id="global-loader" >
			<img src="{{ asset('assets/images/svgs/loader.svg') }}" alt="loader">
		</div>
		<!--- End Global-loader-->

		<!-- Page -->
		<div class="page">


         @yield('main')

        	<!--Footer-->
			<footer class="footer main-footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2022 <a href="#">Банковский Помощник</a>. Разработчик <a href="#">Орлов В.А.</a> Все права защищены.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->

		</div>
		<!-- End Page -->

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

		<!-- Jquery js-->
		<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

		<!-- Bootstrap4 js-->
		<script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!--Othercharts js-->
		<script src="{{ asset('assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

		<!-- Circle-progress js-->
		<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

		<!-- Jquery-rating js-->
		<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

		<!--Horizontal-menu js-->
		<script src="{{ asset('assets/plugins/horizontal-menu/horizontal-menu.js') }}"></script>

		<!-- Sticky js-->
		<script src="{{ asset('assets/js/stiky.js') }}"></script>

		<!-- P-scroll js-->
		<script src="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
		<script src="{{ asset('assets/plugins/p-scrollbar/p-scroll.js') }}"></script>

		<!--INTERNAL Peitychart js-->
		<script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

		<!--INTERNAL Apexchart js-->
		<script src="{{ asset('assets/js/apexcharts.js') }}"></script>

		<!--INTERNAL ECharts js-->
		<script src="{{ asset('assets/plugins/echarts/echarts.js') }}"></script>

		<!--INTERNAL Chart js -->
		<script src="{{ asset('assets/plugins/chart/chart.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

		<!-- INTERNAL Select2 js -->
		<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
		<script src="{{ asset('assets/js/select2.js') }}"></script>

		<!--INTERNAL Moment js-->
		<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

		<!--INTERNAL Index js-->
		<script src="{{ asset('assets/js/index1.js') }}"></script>

		<!-- Simplebar JS -->
		<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>

		<!-- Custom js-->
		<script src="{{ asset('assets/js/custom.js') }}"></script>
        
        <script src="{{ asset('assets/js/mainfile.js') }}"></script>
		@yield('scripts')
	</body>
</html>