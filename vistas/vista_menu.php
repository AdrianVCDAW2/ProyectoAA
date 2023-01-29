<?php
$empleado = false;
if (isset($_SESSION['tipo_usuario'])){
    $empleado = $_SESSION['tipo_usuario'][0] == "empleado";
}
echo '<section class="wrap">
    <div class="title-menu">
        <h2>Restaurante Aritz y Adrian</h2>
    </div>
    <div class="column-3 columns">
        <div class="menu-restaurante">
            <h3>Menú mediodia</h3>
            <hr>
            <h4>Primeros Platos (uno a elegir)</h4>
            <p>Ensalada mixta</p>
            <p>Ensalada cesar</p>
            <p>Macarrones con tomate</p>
            <p>Croquetas de jamon</p>
            <br>
            <h4>Segundos Platos (uno a elegir)</h4>
            <p>Pechuga de pollo con limon</p>
            <p>Ternera a la plancha con patatas</p>
            <p>Hamburguesa (150g) con patatas</p>
            <p>Entrecot de ternera con patatas</p>
            <br>
            <p class="precio-menu">
                Precio:
                <span>';
if ($empleado){
    echo "15€";
}else {
    echo '19€';
}
echo '</span>
            </p>
        </div>
        <div class="menu-restaurante">
            <h3>Menú noche</h3>
            <hr>
            <h4>Primeros Platos (uno a elegir)</h4>
            <p>Caldo de pollo casero</p>
            <p>Salsa de hongos casera</p>
            <p>Arroz caldoso</p>
            <p>Paella valenciana</p>
            <br>
            <h4>Segundos Platos (uno a elegir)</h4>
            <p>Albondigas caseras con tomate</p>
            <p>Pechuga de pollo con roquefort</p>
            <p>Hamburguesa (300g) con patatas gajo</p>
            <p>Fideua de pescado y marisco (suplemento <span class="red">2€</span>)</p>
            <br>
            <p class="precio-menu">
                Precio:
                <span>';
if ($empleado){
    echo "20€";
}else {
    echo '25€';
}
echo '</span>
            </p>
        </div>
        <div class="menu-restaurante">
            <h3>Menú degustación</h3>
            <hr>
            <h4>Primeros Platos</h4>
            <p>Jamon de bellota con pan de coca</p>
            <p>Crema de hongos casera</p>
            <p>Mezclum de flores, nueces y ralafia</p>
            <p>Tartar de ternera con verduras</p>
            <br>
            <h4>Segundos Platos</h4>
            <p>Confit de pato con ciruelas</p>
            <p>Solomillo de vaca con esparragos y demi-glace</p>
            <p>Tomahawk Rib-Eye de hueso largo +2000g</p>
            <p>Chuleton de lomo alto +500g</p>
            <br>
            <p class="precio-menu">
                Precio:
                <span>';
if ($empleado){
    echo "50€";
}else {
    echo '65€';
}

echo '</span>
            </p>
        </div>
    </div>
</section>';
if ($empleado){
    echo "<script>document.addEventListener('DOMContentLoaded', function(){
    setTimeout(function(){alert('Como empleado tienes un descuento en el precio de los menús')},800)
})</script>";
}
