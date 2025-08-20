<?php
    include_once("./componentes/headerPanel.php");
?>
    <div id="container">
    <nav>
        <ul id="listaSections">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-80 92L160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11Zm200-528 77-44-237-137-78 45 238 136Zm-160 93 78-45-237-137-78 45 237 137Z"/>
                </svg>
                <a href="#products">Productos</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm200 280h240v-80H360v80Zm120 20Z"/></svg>
                <a href="#stock">Stock</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                <a href="#clientes">Clientes</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"/></svg>
                <a href="#orders">Pedidos</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="m105-399-65-47 200-320 120 140 160-260 120 180 135-214 65 47-198 314-119-179-152 247-121-141-145 233Zm475 159q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29ZM784-80 676-188q-21 14-45.5 21t-50.5 7q-75 0-127.5-52.5T400-340q0-75 52.5-127.5T580-520q75 0 127.5 52.5T760-340q0 26-7 50.5T732-244l108 108-56 56Z"/></svg>  
                <a href="#stats">Estadisticas</a>
            </li>
        </ul>
    </nav>
    <main>
        <section id="products">
            <article id="articleListaProductos">
                <h2>Productos</h2>
                <ul id="listaProductos"></ul>
            </article>
            <article id="articleAddProduct">
                <p>
                    Ingrese el nombre del producto
                </p>
                <input type="text" name="nameProduct" id="nameProduct" placeholder="Nombre del producto">

                <button id="addProduct">
                    Agregar
                </button>
            </article>
        </section>
        <section id="stock">

        </section>
        <section id="clientes">

        </section>
        <section id="orders">

        </section>
        <section id="stats">

        </section>
    </main>
    <script src="./script/panel.js"></script>
    </div>
<?php
    include_once("./componentes/footerPanel.php");
?>