<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<style>
		body{
			font-size: 17px;
			font-family: arial;
			background: #f4f4f4;
			line-height: 1.5em;
		}
		header{
			background:#333;
			color:#fff;
			padding:20px;
			text-align: center;
			border-bottom: 4px #000 solid;
			margin-bottom: 10px;
		}
		#container{
			width:90%;
			margin:auto;
			padding:10px;
		}

	</style>
</head>
<body>
	<header>
		<h3>Calling data from phpmyadmin dbase using JSON and AJAX</h3>
	</header>
	<div id="container">
		<div id="result"></div>
		<ul id="users"></ul>
		
		<form id="postForm" action="">
		
		</form>
	</div>

	<script>
		$(document).ready(function(){
			

			 // $.getJSON('studRecords.json',function(data){
				// 	$.each(data, function(i, user){
				// 		$('ul#users').append('<li>'+user.id+'</li>'+'<li>'+user.name+'</li>'+'<li>'+user.email+'</li>'+'<li>'+user.password+'</li>'+'<li>'+user.mob+'</li>'+'<li>'+user.city+'</li>'+'<li>'+user.zip+'</li>'+'<li>'+user.gender+'</li>'+'<li>'+user.dob+'</li>'+'<li>'+user.study+'</li>'+'<li>'+user.hobby+'</li>'+'<li>'+user.pic+'</li>');
				// 	});
				// }); 

				 $.ajax({
					method: 'GET',
					url: 'studRecords.json',
					dataType: 'json'
				}).done(function(data){
					console.log(data);
					$.map(data, function(user, i){
							$('#result').append('<li>'+user.name+'</li>'+'<li>'+user.email+'</li>'+'<li>'+user.password+'</li>'+'<li>'+user.mob+'</li>'+'<li>'+user.city+'</li>'+'<li>'+user.zip+'</li>'+'<li>'+user.gender+'</li>'+'<li>'+user.dob+'</li>'+'<li>'+user.study+'</li>'+'<li>'+user.hobby+'</li>'+'<li>'+user.pic+'</li>');
					});
				}); 

		});
	</script>
</body>
</html>