<?php

//echo "<table><tr><th>Usuario</th><th>Correo</th><th>Contraseña</th><th>Ruta</th></tr>";
//foreach ($usuarios as $u) {
//    echo "<tr><td>" . $u["usuario"] . "</td><td>" . $u["correo_usuario"] . "</td><td>" . $u["passwd_usuario"] . "</td><td><img class='ppic' src='uploads/profilepics/" . $u["perfil_usuario"] . "'></td></tr>";
//}
//echo "</table";

echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="container">	
	
	<div class="product-details">
		
	<h1>HABITACIÓN INDIVIDUAL</h1>
	<span class="hint-star star">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star-half-o" aria-hidden="true"></i>
	</span>
		
			<p class="information">"La habitación ideal para tus vacaciones. Disfruta de tu soledad."</p><i class="fas fa-smoking-ban"></i>s

		
		
<div class="control">
	<form id="comprar" method="get">
	
	<input type="hidden" name="opcion" value="crear_reserva">
</form>
	<button id="comprarBtn" class="btn">
	 <span class="price">35.00€</span>
   <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
   <span class="buy">Reservar</span>
 </button>

	
</div>
			
</div>
	
<div class="product-image">
	
	<img src="https://www.casacelsa.com/wp-content/uploads/2016/05/habitacion2.jpg" alt="">
	

<div class="info">
	<h2> Description</h2>
	<ul>
		<li><strong>Capacidad: </strong>1 persona</li>
		<li><strong>Cama: </strong>1.90m * 0.90m</li>
		<li><strong>Decoración: </strong>Contemporánea</li>
		<li><strong>Vistas: </strong>Interior</li>
		<li><strong>Fumar: </strong>Prohibido</li>
		
	</ul>
</div>
</div>

</div>


';
echo "<script>document.getElementById('comprarBtn').addEventListener('click',function(){
    document.getElementById('comprar').submit();
})</script>";


?>