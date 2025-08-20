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

//login

const labels = document.querySelectorAll('.labels');
const inputs = document.querySelectorAll('.inputs');

inputs.forEach((input, index) => {
    input.addEventListener("click", () => {
        labels[index].style.color = "#d9a86cc4";
        labels[index].style.transition = "all 0.3s ease";
    });

    //el blur actua cuando dejas de clickear el elemento
    input.addEventListener("blur", () => {
        labels[index].style.color = "";
    });
});