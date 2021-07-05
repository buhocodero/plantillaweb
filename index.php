<!DOCTYPE html>
<html>
<head>
	<title>Haciendo un sitio web con materialize Desing</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script type="text/javascript">
     	$(document).ready(function(){
    $('.carousel').carousel();
  });
     </script>       
     <style type="text/css">
     	.img_entrada{
     		height: 200px;
     	}
     	
     	.caja{
     		margin-bottom: 10px;
     		margin-left: 5px; 
     	}
     </style>
</head>
<body>
	<nav>
    <div class="nav-wrapper  indigo lighten-1">
      <div class="container">
      	<a href="#" class="brand-logo"><img src="img/rev.jpg" class="circle" style="width:50px;" /></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Nuevos Tours</a></li>
        <li><a href="#">Experiencias</a></li>
      </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
  	<img src="https://www.visitcentroamerica.com/wp-content/uploads/2017/08/ver-centroamerica-el-salvador-parque-nacional-cerro-verde-01.jpg" style="width: 100%; height: 300px;">  	
  </div>
  <div class="container">  	
      <!--s = pequeño, m = mediano, l = grande-->
       <div class="row">
      <div class="col s4 caja">
      	 
		    
		      <div class="card">
		        <div class="card-image">
		          <img src="https://elfotobus.com/wp-content/uploads/2018/01/13096156_10154071680042412_5320849061723622324_n.jpg" class="img_entrada">
		          <span class="card-title">Card Title</span>
		        </div>
		        <div class="card-action">
		          <p>I am a very simple card. I am good at containing small bits of information.
		          I am convenient because I require little markup to use effectively.</p>
		        </div>
		        <div class="card-action">
		          <a href="#">This is a link</a>
		        </div>
		      </div>
		    
		  
      	
      </div>
      <div class="col s4 caja">
      	<div class="card">
		        <div class="card-image">
		          <img src="https://unique-universe.blog/wp-content/uploads/2018/07/Ruta-de-las-Flores-El-Salvador-51.jpg" class="img_entrada">
		          <span class="card-title">Card Title</span>
		        </div>
		        <div class="card-action">
		          <p>I am a very simple card. I am good at containing small bits of information.
		          I am convenient because I require little markup to use effectively.</p>
		        </div>
		        <div class="card-action">
		          <a href="#">This is a link</a>
		        </div>
		      </div>
      </div>
      <div class="col s4 caja">
      	<div class="card">
		        <div class="card-image">
		          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg6kWthedbxRo665efafpJAl6L1gIPOSfBLQ&usqp=CAU" class="img_entrada">
		          <span class="card-title">Card Title</span>
		        </div>
		        <div class="card-action">
		          <p>I am a very simple card. I am good at containing small bits of information.
		          I am convenient because I require little markup to use effectively.</p>
		        </div>
		        <div class="card-action">
		          <a href="#">This is a link</a>
		        </div>
		      </div>
      </div>
      <div class="col s4 caja">
      	<div class="card">
		        <div class="card-image">
		          <img src="https://www.theseforeignroads.com/wp-content/uploads/2020/01/Juayua-Ruta-Flores.jpg" class="img_entrada">
		          <span class="card-title">Card Title</span>
		        </div>
		        <div class="card-action">
		          <p>I am a very simple card. I am good at containing small bits of information.
		          I am convenient because I require little markup to use effectively.</p>
		        </div>
		        <div class="card-action">
		          <a href="#">This is a link</a>
		        </div>
		      </div>
      </div>
      <div class="col s4 caja">
      	<div class="card">
		        <div class="card-image">
		          <img src="https://image.slidesharecdn.com/exposicion1-161025225329/95/la-ruta-de-las-flores-el-salvador-1-638.jpg?cb=1477438102" class="img_entrada">
		          <span class="card-title">Card Title</span>
		        </div>
		        <div class="card-action">
		          <p>I am a very simple card. I am good at containing small bits of information.
		          I am convenient because I require little markup to use effectively.</p>
		        </div>
		        <div class="card-action">
		          <a href="#">This is a link</a>
		        </div>
		      </div>
      </div>
    </div>
          
      
  </div>

        <footer class="page-footer indigo lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

  
  

</body>
</html>