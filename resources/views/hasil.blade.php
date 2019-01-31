<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Hasil Survey</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="global--wrapper">
			<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">Pemenang Survey Narasi </h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div id="app">
					<result-content></result-content>
				</div>
			</div>
		</div>
		</div>
	</div>
	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
