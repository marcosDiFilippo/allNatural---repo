<?php
    include_once("./header.php");
?>

<main>
    <section id="inicio">
        <article id="search">
            <button id="buscar">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
            </button>
            <input type="search">
        </article>
        <article>
            <h1>Categorías</h1>
        </article>
        <article>
            <div class="parent">
                <div class="categorias">
                    <a class="linkCategoria" href="./legumbres.php">
                        <img src="./imagenesIndex/legumbres.webp" alt="Legumbres">
                        <span>Legumbres</span>
                    </a>
                </div>
                <div class="categorias">
                    <a class="linkCategoria" href="">
                        <img src="./imagenesIndex/semillas.webp" alt="Semillas">
                        <span>Semillas</span>
                    </a>
                </div>
                <div class="categorias">
                    <a class="linkCategoria" href="">
                        <img src="./imagenesIndex/harina.webp" alt="Harinas">
                        <span>Harinas</span>
                    </a>
                </div>
                <div class="categorias">
                    <a class="linkCategoria" href="">
                        <img src="./imagenesIndex/frutosSecos.webp" alt="Frutos secos y deshidratados">
                        <span>Frutos secos y deshidratados</span>
                    </a>
                </div>
                <div class="categorias">
                    <a class="linkCategoria" href="">
                        <img src="./imagenesIndex/mixFrutosSecos.webp" alt="Mix frutos secos">
                        <span>Mix frutos secos</span>
                    </a>
                </div>
                <div class="categorias">
                    <a class="linkCategoria" href="">
                        <img src="./imagenesIndex/condimentos.webp" alt="Condimentos">
                        <span>Condimentos</span>
                    </a>
                </div>
                <div class="categorias">
                    <a class="linkCategoria" href="">
                        <img src="./imagenesIndex/miel.webp" alt="Miel">
                        <span>Miel</span>
                    </a>
                </div>
                <div class="categorias">
                    <a class="linkCategoria" href="">
                        <img src="./imagenesIndex/yerbas.webp" alt="Yerbas">
                        <span>Yerbas</span>
                    </a>
                </div>
            </div>
        </article>
    </section>
    <section id="quienesSomos">
        <article id="textoQuienesSomos">
            <h2>
                ¿Quienes Somos?
            </h2>
            <p>
                En <span class="textoDestacado">All Natural</span> creemos que la <span class="textoDestacado">naturaleza y la salud</span> van de la mano. <span class="textoOculto">Somos una tienda online mayorista que nace con el propósito de acercar productos naturales y saludables a quienes buscan <span class="textoDestacado">calidad y bienestar en su día a día.</span></span>
            </p>
            <p>
                Nos dedicamos a seleccionar cuidadosamente cada producto para ofrecer a comercios y emprendimientos una alternativa          <span class="textoDestacado">consciente, sustentable y confiable.</span> <span class="textoOculto">Apostamos por un estilo de vida más equilibrado, donde lo natural sea una elección accesible para todos.</span>
            </p>
            <p class="textoOculto">
                <span class="textoDestacado">Conectamos con vos y con tu negocio</span> para que puedas llevar lo mejor de la naturaleza a más personas.
            </p>
        </article>
    </section>
    <section id="contacto">
        <article>
            <figure>
                <img src="./imagenesIndex/contacto.webp" alt="">
            </figure>
        </article>
        <article id="textoContacto">
            <div>
                <h2>
                    Contacto
                </h2>
                <p>
                    ¿Tenés un negocio y querés sumar productos naturales? ¿Sos emprendedor/a y buscás comprar al por mayor?
                </p>
                <p>
                    Estamos para ayudarte.
                </p>
                <p class="textoOculto">
                    En All Natural nos encanta conectar con quienes comparten nuestra visión de una vida más saludable y consciente.
                </p>
                <p>
                    Escribinos para conocer nuestras condiciones mayoristas, consultar stock o simplemente charlar sobre cómo podemos trabajar juntos.
                </p>
            </div>
            <ul id="listaContacto">
                <li class="linksContacto">
                    <a target="_blank" href="">
                        <svg class="svgContacto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#F33052;" cx="256" cy="256" r="256"></circle> <g> <path style="fill:#FFFFFF;" d="M400.272,356.08H112.048v-205.6h288.24v205.6H400.272z M128.048,340.08h256.24v-173.6h-256.24 V340.08z"></path> <polygon style="fill:#FFFFFF;" points="256.176,279.824 115.824,192.704 124.256,179.104 256.144,260.976 388.032,178.464 396.528,192.032 "></polygon> </g> <rect x="342.548" y="225.448" transform="matrix(-0.7863 0.6178 -0.6178 -0.7863 807.8576 308.6862)" style="fill:#FFFFFF;" width="16" height="137.196"></rect> <polygon style="fill:#FFFFFF;" points="126.032,352.944 113.424,343.056 198.208,235.168 210.8,245.04 "></polygon> </g></svg>
                        <span class="textoOculto">Email</span>
                    </a>
                </li>
                <li class="linksContacto" id="ig">
                    <a target="_blank" href="https://www.instagram.com/allnaturaljesusmaria/">
                        <svg class="svgContacto" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="24" cy="24" r="20" fill="#C13584"></circle> <path d="M24 14.1622C27.2041 14.1622 27.5837 14.1744 28.849 14.2321C30.019 14.2855 30.6544 14.481 31.0773 14.6453C31.6374 14.863 32.0371 15.123 32.457 15.5429C32.877 15.9629 33.137 16.3626 33.3547 16.9227C33.519 17.3456 33.7145 17.981 33.7679 19.1509C33.8256 20.4163 33.8378 20.7958 33.8378 23.9999C33.8378 27.2041 33.8256 27.5836 33.7679 28.849C33.7145 30.019 33.519 30.6543 33.3547 31.0772C33.137 31.6373 32.877 32.0371 32.4571 32.457C32.0371 32.8769 31.6374 33.1369 31.0773 33.3546C30.6544 33.519 30.019 33.7144 28.849 33.7678C27.5839 33.8255 27.2044 33.8378 24 33.8378C20.7956 33.8378 20.4162 33.8255 19.151 33.7678C17.981 33.7144 17.3456 33.519 16.9227 33.3546C16.3626 33.1369 15.9629 32.8769 15.543 32.457C15.1231 32.0371 14.863 31.6373 14.6453 31.0772C14.481 30.6543 14.2855 30.019 14.2321 28.849C14.1744 27.5836 14.1622 27.2041 14.1622 23.9999C14.1622 20.7958 14.1744 20.4163 14.2321 19.1509C14.2855 17.981 14.481 17.3456 14.6453 16.9227C14.863 16.3626 15.123 15.9629 15.543 15.543C15.9629 15.123 16.3626 14.863 16.9227 14.6453C17.3456 14.481 17.981 14.2855 19.151 14.2321C20.4163 14.1744 20.7959 14.1622 24 14.1622ZM24 12C20.741 12 20.3323 12.0138 19.0524 12.0722C17.7752 12.1305 16.9028 12.3333 16.1395 12.63C15.3504 12.9366 14.6812 13.3469 14.0141 14.0141C13.3469 14.6812 12.9366 15.3504 12.63 16.1395C12.3333 16.9028 12.1305 17.7751 12.0722 19.0524C12.0138 20.3323 12 20.741 12 23.9999C12 27.259 12.0138 27.6676 12.0722 28.9475C12.1305 30.2248 12.3333 31.0971 12.63 31.8604C12.9366 32.6495 13.3469 33.3187 14.0141 33.9859C14.6812 34.653 15.3504 35.0633 16.1395 35.3699C16.9028 35.6666 17.7752 35.8694 19.0524 35.9277C20.3323 35.9861 20.741 35.9999 24 35.9999C27.259 35.9999 27.6677 35.9861 28.9476 35.9277C30.2248 35.8694 31.0972 35.6666 31.8605 35.3699C32.6496 35.0633 33.3188 34.653 33.9859 33.9859C34.653 33.3187 35.0634 32.6495 35.37 31.8604C35.6667 31.0971 35.8695 30.2248 35.9278 28.9475C35.9862 27.6676 36 27.259 36 23.9999C36 20.741 35.9862 20.3323 35.9278 19.0524C35.8695 17.7751 35.6667 16.9028 35.37 16.1395C35.0634 15.3504 34.653 14.6812 33.9859 14.0141C33.3188 13.3469 32.6496 12.9366 31.8605 12.63C31.0972 12.3333 30.2248 12.1305 28.9476 12.0722C27.6677 12.0138 27.259 12 24 12Z" fill="white"></path> <path d="M24.0059 17.8433C20.6026 17.8433 17.8438 20.6021 17.8438 24.0054C17.8438 27.4087 20.6026 30.1675 24.0059 30.1675C27.4092 30.1675 30.1681 27.4087 30.1681 24.0054C30.1681 20.6021 27.4092 17.8433 24.0059 17.8433ZM24.0059 28.0054C21.7968 28.0054 20.0059 26.2145 20.0059 24.0054C20.0059 21.7963 21.7968 20.0054 24.0059 20.0054C26.2151 20.0054 28.0059 21.7963 28.0059 24.0054C28.0059 26.2145 26.2151 28.0054 24.0059 28.0054Z" fill="white"></path> <path d="M31.8507 17.5963C31.8507 18.3915 31.206 19.0363 30.4107 19.0363C29.6154 19.0363 28.9707 18.3915 28.9707 17.5963C28.9707 16.801 29.6154 16.1562 30.4107 16.1562C31.206 16.1562 31.8507 16.801 31.8507 17.5963Z" fill="white"></path> </g></svg>
                        <span class="textoOculto">Instagram</span>
                    </a>
                </li>
                <li class="linksContacto">
                    <a target="_blank" href="https://wa.me/5493525454564">
                        <svg class="svgContacto" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#75B73B;" cx="256" cy="256" r="256"></circle> <path style="fill:#52891D;" d="M360.241,151.826c-14.843-3.712-36.671-16.532-50.8-21.671 c-55.165-17.239-129.293-3.448-149.98,60.337c-1.724,1.724-5.172,1.724-6.896,1.724c-41.374,48.269-13.791,106.882-17.239,160.323 c-1.177,18.839-11.083,35.497-23.831,49.588l107.282,107.17C230.931,511.067,243.355,512,256,512 c126.436,0,231.452-91.665,252.247-212.161L360.241,151.826z"></path> <g> <path style="fill:#FFFFFF;" d="M248.837,108.447c-78.029,3.712-139.604,68.696-139.369,146.811 c0.072,23.792,5.816,46.249,15.95,66.095l-15.557,75.514c-0.841,4.086,2.843,7.663,6.901,6.701l73.995-17.53 c19.011,9.471,40.364,14.939,62.962,15.284c79.753,1.219,146.251-62.105,148.74-141.829 C405.121,174.035,334.591,104.362,248.837,108.447L248.837,108.447z M337.13,335.936c-21.669,21.669-50.483,33.604-81.13,33.604 c-17.944,0-35.126-4.027-51.066-11.966l-10.302-5.134l-45.37,10.747l9.549-46.356l-5.075-9.943 c-8.276-16.206-12.472-33.728-12.472-52.084c0-30.648,11.935-59.459,33.604-81.13c21.476-21.478,50.759-33.604,81.134-33.604 c30.644,0,59.458,11.935,81.127,33.604c21.669,21.669,33.604,50.483,33.604,81.127C370.735,285.177,358.607,314.459,337.13,335.936 L337.13,335.936z"></path> <path style="fill:#FFFFFF;" d="M327.115,286.582l-28.384-8.149c-3.729-1.069-7.749-0.01-10.468,2.76l-6.942,7.07 c-2.926,2.984-7.366,3.941-11.24,2.374c-13.427-5.434-41.672-30.548-48.881-43.106c-2.084-3.624-1.739-8.152,0.817-11.462 l6.058-7.839c2.374-3.07,2.874-7.197,1.305-10.747l-11.941-27.008c-2.86-6.468-11.126-8.352-16.527-3.784 c-7.921,6.701-17.32,16.88-18.461,28.16c-2.015,19.887,6.515,44.954,38.762,75.055c37.257,34.778,67.094,39.369,86.523,34.664 c11.019-2.667,19.825-13.365,25.379-22.126C336.906,296.467,333.91,288.535,327.115,286.582L327.115,286.582z"></path> </g> <g> <path style="fill:#D1D1D1;" d="M356.004,147.708l-22.223,22.778c1.131,1.045,2.257,2.096,3.351,3.191 c21.67,21.669,33.604,50.483,33.604,81.127c0,30.375-12.128,59.656-33.604,81.134c-21.669,21.669-50.483,33.604-81.13,33.604 c-17.944,0-35.125-4.027-51.066-11.966l-10.302-5.134l-45.37,10.747l0.938-4.553l-40.174,41.172 c0.886,2.663,3.705,4.475,6.734,3.758l73.995-17.53c19.011,9.471,40.364,14.939,62.962,15.284 c79.753,1.219,146.253-62.105,148.74-141.829C403.834,215.357,385.686,175.435,356.004,147.708z"></path> <path style="fill:#D1D1D1;" d="M327.115,286.582l-28.384-8.149c-3.729-1.069-7.749-0.01-10.468,2.76l-6.942,7.07 c-2.926,2.984-7.366,3.941-11.24,2.374c-7.756-3.139-20.451-12.845-31.185-22.904l-19.732,20.225 c0.677,0.648,1.352,1.295,2.05,1.948c37.257,34.778,67.094,39.369,86.523,34.664c11.019-2.667,19.825-13.365,25.379-22.126 C336.906,296.467,333.91,288.535,327.115,286.582z"></path> </g> </g></svg>
                        <span class="textoOculto">Whatsapp</span>
                    </a>
                </li>
            </ul>
        </article>
    </section>
    <section id="ubicacion">
        <article id="textoUbicacion">
            <h2>
                Nuestra ubicación
            </h2>
            <p>
                📍 Estamos en <span>Cordoba, Argentina</span> el punto de partida donde nace cada envío que preparamos con cuidado y compromiso. Desde acá trabajamos día a día para acercarte productos naturales y saludables que suman valor a tu emprendimiento o negocio.
            </p>
            <p>
                ¿Sos de otra provincia o querés coordinar una entrega especial? Escribinos, ¡nos encanta ayudarte a crecer!
            </p>
        </article>
        <article id="iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3420.500177359454!2d-64.0970050244097!3d-30.984427574463776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDU5JzAzLjkiUyA2NMKwMDUnNDAuMCJX!5e0!3m2!1ses!2sar!4v1754074153992!5m2!1ses!2sar" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </article>
    </section>
</main>

<?php
    include_once("./footer.php");
?>