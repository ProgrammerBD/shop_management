<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style type="text/css">
  	.sidenav {
  	  height: 100%;
  	  width: 160px;
  	  position: fixed;
  	  z-index: 1;
  	  top: 0;
  	  left: 0;
  	  background-color: #111;
  	  overflow-x: hidden;
  	  
  	}

  	.sidenav a {
  	  padding: 6px 8px 6px 16px;
  	  text-decoration: none;
  	  font-size: 12px;
  	  color: lightgrey;
  	  display: block;
  	  border-bottom: 1px solid white;
  	}

  	.sidenav a:hover {
  	  color: #f1f1f1;
  	}

  	.main {
  	  margin-left: 160px; /* Same as the width of the sidenav */
  	  font-size: 28px; /* Increased text to enable scrolling */
  	  padding: 0px 10px;
  	}

  	@media screen and (max-height: 450px) {
  	  .sidenav {padding-top: 15px;}
  	  .sidenav a {font-size: 18px;}
  	}
  	.navb{

  		position: fixed;
  		background: #111;
  		top: 0px;
  		padding: 10px;
  		width: 100%; color: white;
  		x-index: 10;
  	}
  	.navb a{
  		color: white; text-decoration: none; font-weight: bolder;
  	}
  	.submenu_item{
  		margin-left: 5px;
  	}
  </style>

</head>
<body>
	<div class="navb">
		<a href="" style="display: inline-block; float: right; color: white;" >{{ Auth::user()->name }}</a>
	</div>

    <div class="sidenav">
	  <a href="" style="padding: 0px;">
     	<img src="{{ asset('assets') }}/images/logo.jpg" style="width: 100%; height: 50px;">
      </a>
      <a href="" id="product_btn">Products</a>
      <div class="abc" style="display: none;" id="product_menu">
      	<a href="{{ route('product.add') }}" class="submenu_item">Add </a>
      	<a href="{{ route('product.edit') }}" class="submenu_item">Edit</a>
      	<a href="" class="submenu_item">Delete</a>
      </div>
      <a href="">Edit Product</a>
      <a href="#services">Price</a>
      <a href="#clients">Edit Price</a>
      <a href="#contact">Employee</a>
      <a href="">Add employee</a>
      <a href="">Delete Employee</a>
    </div>
    @yield('content')


    <script type="text/javascript">
    	$(document).ready(function(){
    		$("#product_btn").mouseenter(function(){
    			$("#product_menu").css('display', 'block');
    		});
    		$("#product_menu").mouseleave(function(){
    			$("#product_menu").css('display', 'none');
    		});
    	});
    </script>
</body>
</html>