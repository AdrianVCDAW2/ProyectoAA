<div class="container">
    <h2 class="text-center">Nuestras instalaciones</h2>
    <div class="lightbox-gallery">
        <div><img src="img/hotel-mini.jpg" data-image-hd="img/hotel.jpg" alt="La fachada - Igual de bonita que el hotel"></div>
        <div><img src="img/recepcion-hotel-mini.jpg" data-image-hd="img/recepcion-hotel.jpg" alt="La recepción - Siempre atendida por los mejores recepcionistas"></div>
        <div><img src="img/comedor-mini.jpg" data-image-hd="img/comedor.jpg" alt="El comedor - Disfruta de la mejor comida y el mejor servicio. <a href='?opcion=ver_menu'>Menú</a>"></div>
        <div><img src="img/piscina-mini.jpg" data-image-hd="img/piscina.jpg" alt="La piscina - Relájate con un baño"></div>
        <div><img src="img/gym30-mini.jpg" data-image-hd="img/gym30.jpg" alt="El gimnasio - Entrena con las mejores vistas"></div>
        <div><img src="img/sala-eventos-mini.jpg" data-image-hd="img/sala-eventos.jpg" alt="La sala de eventos - Eventos todas las noches"></div>
    </div>
</div>



<script>
    // Create a lightbox
    (function() {
        // Create lightbox elements
        var lightbox = document.createElement("div");
        lightbox.classList.add("lightbox");
        var img = document.createElement("img");
        var caption = document.createElement("p");
        caption.classList.add("caption");

        // Append elements to lightbox
        lightbox.appendChild(img);
        lightbox.appendChild(caption);

        // Append lightbox to body
        document.body.appendChild(lightbox);

        // Add click event listener to gallery images
        var galleryImages = document.querySelectorAll(".lightbox-gallery img");
        galleryImages.forEach(function(image) {
            image.addEventListener("click", function(e) {
                e.preventDefault();

                // Get image link and description
                var src = image.getAttribute("data-image-hd");
                var cap = image.getAttribute("alt");

                // Add data to lightbox
                img.setAttribute("src", src);
                caption.innerHTML = cap;

                // Show lightbox
                lightbox.style.display = "block";

                // Add click event listener to lightbox to close it
                lightbox.addEventListener("click", function() {
                    lightbox.style.display = "none";
                });
            });
        });
    }());

</script>