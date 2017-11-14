@extends('layouts.app')

@section('title', 'Productos MVE')

@section('content')
	<div class="box">
		<nav role='navigation'>
		  <ul class="barra">
		    <li>
		      <a href="#">
		       	HERRAMIENTAS
		      </a>
		    </li>
		    <li>
		      <a href="#">
		        AUDIO
		      </a>
		    </li>
		    <li>
		      <a href="#">
		        SOFTWARE
		      </a>
		    </li>
		    <li>
		      <a href="#">
		        CURSOS
		      </a>
		    </li>
		     <li>
		      <a href="#">
		        COMPUTO
		      </a>
		    </li>
		     <li>
		      <a href="#">
		        HOGAR
		      </a>
		    </li>
		     <li>
		      <a href="#">
		        SISTEMA VIGILANCIA
		      </a>
		    </li>
		     <li>
		      <a href="#">
		        ESCOLAR
		      </a>
		    </li>
		     <li>
		      <a href="#">
		        ELECTRONICA
		      </a>
		    </li>
		    <li>
		      <a href="#">
		        AUTOMOTRIZ
		      </a>
		    </li>
		    <li>
		      <a href="#">
		        ELECTRICIDAD
		      </a>
		    </li>
		    <li>
		      <a href="#">
		        OFERTAS
		      </a>
		    </li>
		  </ul>
		</nav>   
	</div>

	<div class="container">
		<section class='galeria'>
			  <input class="cb" type="checkbox" id="id1" value="1" name="slide" />
			  <input class="cb" type="checkbox" id="id2" value="2" name="slide" />      
			  <input class="cb" type="checkbox" id="id3" value="3" name="slide" />
			  <article class='tarjeta one'>
			   
			    <label for='id2' ></label>
			    <label for='id3' ></label>
			    <label for='id1' ></label>  
			  </article>
			  <article class='tarjeta two'>
			    
			    <label for='id3' ></label>
			    <label for='id1' ></label>
			    <label for='id2' ></label>  
			  </article>
			  <article class='tarjeta three'>
			   
			    <label for='id1' ></label>
			    <label for='id2'></label>
			    <label for='id3' ></label>  
			  </article>
		</section>
	</div>

	<div class="contenedor">

	  	<div class="grid">
	     	<div class="grid-item">
		        <h1>HERRAMIENTAS</h1>
		        <div class="overlay"></div>
		        <img src="../public/css/img/arduino.png" alt="">
	      	</div>
	      	<div class="grid-item">
		        <h1>AUDIO</h1>
		        <div class="overlay"></div>
		        <img src="../public/css/img/arduino.png" alt="">
		    </div>
		    <div class="grid-item">
		        <h1>SOFTWARE</h1>
		        <div class="overlay"></div>
		        <img src="../public/css/img/arduino.png" alt="">
	        </div>
	        <div class="grid-item">
		        <h1>CURSOS</h1>
		        <div class="overlay"></div>
		        <img src="../public/css/img/arduino.png" alt="">
	        </div>   
	  	</div>

	 	<div class="grid">
		    <div class="grid-item">
		      <h1>COMPUTO</h1>
		      <div class="overlay"></div>
		      <img src="../public/css/img/arduino.png" alt="">
		    </div>
		    <div class="grid-item">
		      <h1>HOGAR</h1>
		      <div class="overlay"></div>
		      <img src="../public/css/img/arduino.png" alt="">
		    </div>
		    <div class="grid-item">
		      <h1>SISTEMA DE VIGILANCIA</h1>
		      
		      <div class="overlay"></div>
		      <img src="../public/css/img/arduino.png" alt="">
		    </div>
		    <div class="grid-item">
		      <h1>ESCOLAR</h1>
		      <div class="overlay"></div>
		      <img src="../public/css/img/arduino.png" alt="">
		    </div>
	    </div>

	  <div class="grid">
	    <div class="grid-item">
	      <h1>ELECTRONICA</h1>
	      <div class="overlay"></div>
	      <img src="../public/css/img/arduino.png" alt="">
	    </div>
	    <div class="grid-item">
	      <h1>AUTOMOTRIZ</h1>
	      <div class="overlay"></div>
	      <img src="../public/css/img/arduino.png" alt="">
	    </div>
	    <div class="grid-item">
	      <h1>ELECTRICIDAD</h1>
	      <div class="overlay"></div>
	      <img src="../public/css/img/arduino.png" alt="">
	    </div>
	    <div class="grid-item">
	      <h1>OFERTAS</h1>
	      <div class="overlay"></div>
	      <img src="../public/css/img/arduino.png" alt="">
	    </div>
	  </div>

	   <div class="grid">
	    <div class="grid-item">
	      <h1>ELECTRONICA</h1>
	      <div class="overlay"></div>
	      <img src="../public/css/img/arduino.png" alt="">
	    </div>
	    <div class="grid-item">
	      <h1>AUTOMOTRIZ</h1>
	      <div class="overlay"></div>
	      <img src="../public/css/img/arduino.png" alt="">
	    </div>
	    <div class="grid-item">
	      <h1>ELECTRICIDAD</h1>
	      <div class="overlay"></div>
	      <img src="../public/css/img/arduino.png" alt="">
	    </div>
	    <div class="grid-item">
	      <h1>OFERTAS</h1>
	      <div class="overlay"></div>
	      <img src="../public/css/img/arduino.png" alt="">
	    </div>
	  </div>
	</div>


<div class="footer">
  	<div id="button"></div>
	<div id="container">
		<div id="cont">
			<div class="footer_center">
				   <h3>Classy footer text</h3>
			</div>
		</div>
	</div>
</div>
@endsection