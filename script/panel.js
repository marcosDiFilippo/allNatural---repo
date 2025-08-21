//burguerMenu
const botonMenu = document.querySelector(".burger");
const panelHamburguesa = document.getElementById("panelHamburguesa");

botonMenu.addEventListener("click", () => {
        botonMenu.addEventListener("click", () => {
        
        if (panelHamburguesa.style.display === "flex") {
            panelHamburguesa.style.display = "none";
        }
        else {
            panelHamburguesa.style.display = "flex";
        }
    });
});

//Product
const buttonAddProduct = document.getElementById("addProduct");
const inputTextProduct = document.getElementById("nameProduct");

buttonAddProduct.addEventListener("click", () => {
    const selectCategory = document.getElementById("selectCategory");

    const nuevoItem = document.createElement("li");
    nuevoItem.style.listStyleType = "none";

    const valorItemProduct = inputTextProduct.value;
    nuevoItem.textContent = valorItemProduct;
    
    const valorSelectCategory = selectCategory.value;
    document.getElementById(valorSelectCategory).appendChild(nuevoItem);
});