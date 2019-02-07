<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $data->name }} At Narasi</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->

        <!-- Styles -->
        <style>
            html, body{
				font-size: 16px;
				padding: 0 10px;
				margin: 0;
			}
			iframe{
				width: 100%;
			}
        </style>
    </head>
    <body>
        <iframe width="1366" height="6000" src="{{ $data->url }}" frameborder="0" style="border:0" allowfullscreen></iframe>
    </body>
	<script>
		// document.querySelector("#iframe").onload = function(){
		// 	console.log('iframe');
		// 	console.log(document.querySelector("#iframe"));
		// }
		
	// document.addEventListener("DOMContentLoaded", function(event) { 
		//do work
	// });
		// $(document).ready(function(params) {
		// 	$("#iframe").contents().find('.embedding-footer-bg').hide();
		// 	console.log($("#iframe"));
		// })
	</script>
</html>
