<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--------------Google Font Family-------------------->

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;900&display=swap" rel="stylesheet">

	<!--------------Font cdn link------------------------->

	


	<!--------------Boostrap cdn link--------------------->

	

	<!--------------style.css----------------------------->

	<link rel="stylesheet" href="landingstyle.css">

	<title>COMBASE IT SOLUTION INC.</title>

</head>
<body>

<!--------------Markup Navigation Area------------------>

 <header>
 	<div class="logo">
		<a href=""><img src="Gallery/CombaseLogo.jpg" alt="CombaseLogo"></a>
	</div>
 	<div class="hamburger">
 		<div class="line"></div>
 		<div class="line"></div>
 		<div class="line"></div>
 	</div>
 	<nav class="nav-bar">
 		<ul>
 			<li>
 				<a href="login.php" class="active active--login">Login</a>
 			</li>
 			<li>
 				<a href="">Services</a>
 			</li>
 			<li>
 				<a href="contactpage.php">Contact</a>
 			</li>
 		</ul>
 	</nav>
 </header>
 <main>

 	<h1 class="greetings">COMBASE IS YOUR AUTHORIZED SERVICE CENTER / HOUSE OF
 	<br>
 	<span class="multiple-text"></span></h1>
 	
 </main>

<script type="text/javascript">
	hambuger = document.querySelector(".hamburger");
	hambuger.onclick = function() {
		navBar = document.querySelector(".nav-bar");
		navBar.classList.toggle("active");
	}
</script>

<!-- type js -->

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12">
</script>

<!-- custom js -->

<script src="landingapp.js"></script> 

</body>
</html>