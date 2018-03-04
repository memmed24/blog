<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--Custom Font-->
	<link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">
	<link href="{{asset('css/styles.css')}}" rel="stylesheet">
	
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>ACSC</span>Logistics</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="divider"></div>
		<ul class="nav menu">
			<li 
			@if(Request::url()==='http://localhost:8000/admin')
			class="active"
			@endif
			
			><a href="{{url('/admin')}}"><em class="fa fa-user">&nbsp;</em> Adminlər</a></li>
			<li 
			@if(Request::url()==='http://localhost:8000/admin/news')
			class="active"
			@endif
			>
				<a href="{{url('/admin/news')}}"><em class="fa fa-file">&nbsp;</em> Xəbərlər</a>
			</li>
			<li
			@if(Request::url()==='http://localhost:8000/admin/gallery')
			class="active"
			@endif
			><a href="{{url('/admin/gallery')}}"><em class="fa fa-clone">&nbsp;</em> Qaleriya </a></li>

			<li
			@if(Request::url()==='http://localhost:8000/admin/files')
			class="active"
			@endif
			><a href="{{url('/admin/files')}}"><em class="fa fa-file">&nbsp;</em> Fayllar</a></li>
			<li><a href="{{url('/')}}"><em class="fa fa-dashboard">&nbsp;</em> Ana səhifəyə qayıt</a></li>

			<li>
				<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
						<em class="fa fa-power-off">&nbsp;</em>
						Çıxış
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
				</form>	
			</li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
	
    <section class="content">
        @yield('content')
    </section>

		
	</div>
	
	<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/chart.min.js')}}"></script>
	<script src="{{asset('js/chart-data.js')}}"></script>
	<script src="{{asset('js/easypiechart.js')}}"></script>
	<script src="{{asset('js/easypiechart-data.js')}}"></script>
	<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('js/custom.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>


	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>