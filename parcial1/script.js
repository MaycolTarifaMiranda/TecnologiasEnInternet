function mostrarMensaje() {
    let mensaje = document.querySelector("#mensaje");

    mensaje.textContent = "Gracias por tu pedido, pero aún no hay sistema, pasa por nuestras oficinas si gustas el arreglo";
    mensaje.classList.remove("oculto");
}

document.querySelector("#boton").addEventListener("click", mostrarMensaje);
