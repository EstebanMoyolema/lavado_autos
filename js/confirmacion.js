function confirmacion(e) {
    if (confirm("Esta seguro que desea eliminar este registro?")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelet = document.querySelectorAll(".table__item__link");

for (var i = 0; i < linkDelet.length; i++) {
    linkDelet[i].addEventListener('click',confirmacion);
}