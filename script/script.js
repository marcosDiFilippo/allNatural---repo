const links = document.querySelectorAll(".linksContacto");
const iconos = document.querySelectorAll(".svgContacto");

//[index significa el indice del array]
links.forEach((link, index) => {
    link.addEventListener("mouseover", () => {
        iconos[index].style.transform = "translateY(-10px)";
        iconos[index].style.transition = "transform 0.3s ease";
    });

    link.addEventListener("mouseout", () => {
        iconos[index].style.transform = "translateY(0)";
    });
});

const buscar = document.querySelector("#buscar");