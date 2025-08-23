//Product
const buttonAddProduct = document.getElementById("addProduct");
const inputTextProduct = document.getElementById("nameProduct");
const inputCantidadStock = document.getElementById("cantidadStock");
const inputMontoPrecio = document.getElementById("montoPrecio");

buttonAddProduct.addEventListener("click", () => {
    const selectCategory = document.getElementById("selectCategory");

    const nuevoItem = document.createElement("li");
    const itemPrecio = document.createElement("span");
    const montoPrecio = document.createElement("span");
    const itemStock = document.createElement("span");
    const cantidadStock = document.createElement("span");

    nuevoItem.className = "itemProductos";
    itemPrecio.className = "itemPrecio";
    montoPrecio.className = "montoPrecio";
    itemStock.className = "itemStock";
    cantidadStock.className = "cantidadStock";

    nuevoItem.style.listStyleType = "none";

    nuevoItem.textContent = inputTextProduct.value;

    //obtenemos el valor seleccionado en la lista

    //hagamos de cuenta que la opcion elegida en la lista es miel, entonces cuando obtenemos su valor seria como decir que valorSelectCategory = "miel", y como el valor de la seleccion coincide con el id de la lista para agregar productos entonces se va agregar en esa posicion

    itemStock.textContent = "Stock por unidad: ";
    cantidadStock.textContent = inputCantidadStock.value;

    itemPrecio.textContent = "Precio: $";
    montoPrecio.textContent = inputMontoPrecio.value;

    console.log(selectCategory.value);
    document.getElementById(selectCategory.value).appendChild(nuevoItem);
    nuevoItem.appendChild(itemStock);
    nuevoItem.appendChild(cantidadStock);
    nuevoItem.appendChild(itemPrecio);
    nuevoItem.appendChild(montoPrecio);
});