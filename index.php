<!DOCTYPE html>
<html>
<head>
	<title>
		Recordando un poco de materialize
	</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--USANDO CDN para no descargar los files style-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript">
    	// Or with jQuery
	  $(document).ready(function(){
	    $('.carousel').carousel();
	  });
    </script>
</head>
<body>
<div style="width: 70%;margin: auto;">
	<hr>

	 <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Test 1</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab col s3"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">Test 1</div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
  </div>
  <script type="text/javascript">
  	 $(document).ready(function(){
    $('.tabs').tabs();
  });
  </script>
        <hr>

	<div class="carousel">
	    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
	    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
	    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
	    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
	    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  	</div>
  	<hr>
  	 <script type="text/javascript">
	    
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
        
    </script>
  	 <ul class="collapsible">

    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>

   
    
	<hr>
	TRBAJANDO CON TOSTADORA
	 <a class="btn-floating btn-large waves-effect waves-light red btnTostadora">Click</a>
	
	 <script type="text/javascript">
	 	$(document).ready(function(){
	 		 $(".btnTostadora").click(function(){
	 		 	M.toast({html: 'Hola! Que tal?'})
	 		 });
	 	});
	 </script>
	<hr>


</div>
      
</body>
</html>