const listaProductos = document.getElementById("listaProductos");
const buttonAddProduct = document.getElementById("addProduct");
const inputTextProduct = document.getElementById("nameProduct");

buttonAddProduct.addEventListener("click", () => {

    const nuevoItem = document.createElement("li");
    nuevoItem.style.listStyleType = "none";

    const valorItemProduct = inputTextProduct.value;

    nuevoItem.textContent = valorItemProduct;

    listaProductos.appendChild(nuevoItem);

});