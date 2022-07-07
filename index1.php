<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tokopakedy</title>
	<link rel="stylesheet" href="assets/plugin/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


	<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="datatable.php">
				<h4>Tokopakedy</h3>
			</a>
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link menu active" id="menuHome" href="index.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu" id="menuCart" href="cart.html"><i class="fa fa-shopping-cart"></i> (<span id="countCart"></span>) </a>
				</li>
			</ul>
		</div>
	</nav>

	<div id="content"></div>
	

	<footer>
		<p>PWEB SI B <a href="https://www.youtube.com/watch?v=J4Th9ERgBhc">Kelompok 16</a> 2022</p>
	</footer>


	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function () {
			$('#content').load('home.php');

			$('.menu').click(function (e) { 
				e.preventDefault();
				
				var menu = $(this).attr('id');

				if(menu == "menuHome"){
					$('.nav-link').removeClass('active');
					$(this).addClass('active');
					$('#content').load('home.php');
					countCart();
				}else if(menu == "menuCart"){
					$('.nav-link').removeClass('active');
					$(this).addClass('active');
					$('#content').load('cart.php');
					countCart();
				} 
			});

			countCart();
		});



		function countCart(){
			$.ajax({
				type: "GET",
				url: "proses-cart.php",
				dataType: "JSON",
				success: function (response) {
					console.log(response);

					$("#countCart").text("");
					$("#countCart").text(response);
				}
			});
		}

		function addCart($id){
			$.ajax({
				type: "POST",
				url: "proses-cart.php",
				data: {"proses" : "add", "id" : $id},
				dataType: "JSON",
				success: function (response) {
					console.log(response);
					countCart();
					// $('#content').load('home.php');
					
					
				}
			});
		}
		function deleteCart($id){
			$.ajax({
				type: "POST",
				url: "proses-cart.php",
				data: {"proses" : "delete", "id" : $id},
				dataType: "JSON",
				success: function (response) {
					console.log(response);

					if (response.message == "success") {
						alert("Pesanan berhasil dihapus");
					} else {
						alert("Pesanan gagal dihapus!");
					}
					countCart();
					$('#content').load('cart.php');
					
					
				}
			});
		}


	</script>
</body>

</html>