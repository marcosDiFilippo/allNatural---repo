<?php
    include_once("./componentes/headerPanel.php");
?>
    <div id="container">
    <nav>
        <ul id="listaSections">
            <li>
                <a href="#home">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
                    <span class="linkSections">
                        Inicio
                    </span>
                </a>
            </li>
            <li>
                <a href="#products">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-80 92L160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11Zm200-528 77-44-237-137-78 45 238 136Zm-160 93 78-45-237-137-78 45 237 137Z"/>
                    </svg>
                    <span class="linkSections">
                        Productos
                    </span>
                </a>
            </li>
            <li>
                <a href="#stock">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm200 280h240v-80H360v80Zm120 20Z"/>
                </svg>
                    <span class="linkSections">
                        Stock
                    </span>
                </a>
            </li>
            <li>
                <a href="#clientes">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                    <span class="linkSections">
                        Clientes
                    </span>
                </a>
            </li>
            <li>
                <a href="#orders">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"/></svg>
                    <span class="linkSections">
                        Pedidos
                    </span>
                </a>
            </li>
            <li>
                <a href="#settings">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg>
                    <span class="linkSections">
                        Configuracion
                    </span>
                </a>
            </li>
            <li>
                <a href="#settings">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333333"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
                    <span class="linkSections">
                        Salir
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <main>
        <section id="products">
            <article id="articleListaProductos">
                <div>
                    <h2>Productos</h2>
                </div>
                <div>
                    <h3>
                        Legumbres
                    </h3>
                    <ul id="legumbres"></ul>
                </div>
                <div>
                    <h3>Semillas</h3>
                    <ul id="semillas"></ul>
                </div>
                <div>
                    <h3>Harinas</h3>
                    <ul id="harinas"></ul>
                </div>
                <div>
                    <h3>Frutos Secos Y Deshidratados</h3>
                    <ul id="frutosSecosDesihdratados"></ul>
                </div>
                <div>
                    <h3>Mix Frutos Secos</h3>
                    <ul id="mixFrutosSecos"></ul>
                </div>
                <div>
                    <h3>Condimentos</h3>
                    <ul id="condimentos"></ul>
                </div>
                <div>
                    <h3>Miel</h3>
                    <ul id="miel"></ul>
                </div>
                <div>
                    <h3>Yerbas</h3>
                    <ul id="yerbas"></ul>
                </div>
            </article>
            <article id="articleAddProduct">
                <div>
                    <p>
                        Ingrese el nombre del producto
                    </p>
                    <input type="text" name="nameProduct" id="nameProduct" placeholder="Nombre del producto">
                    <button id="addProduct">
                        Agregar
                    </button>
                </div>
                <div>
                    <p>
                        Seleccione la categoria del producto
                    </p>
                    <select name="selectCategory" id="selectCategory"> 
                        <option class="optionCategorys" value="legumbres">
                            Legumbres
                        </option>
                        <option class="optionCategorys" value="semillas">
                            Semillas
                        </option>
                        <option class="optionCategorys" value="harinas">
                            Harinas
                        </option>
                        <option class="optionCategorys" value="frutosSecosDesihdratados">
                            Frutos secos y deshidratados
                        </option>
                        <option class="optionCategorys" value="mixFrutosSecos">
                            Mix frutos secos
                        </option>
                        <option class="optionCategorys" value="condimentos">
                            Condimentos
                        </option>
                        <option class="optionCategorys" value="miel">
                            Miel
                        </option>
                        <option class="optionCategorys" value="yerbas">
                            Yerbas
                        </option>
                    </select>
                </div>
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
    </div>
<?php
    include_once("./componentes/footerPanel.php");
?>