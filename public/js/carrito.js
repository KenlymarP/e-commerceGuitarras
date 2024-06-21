document.addEventListener("DOMContentLoaded", (e) => {
    leerLocalStorage();
});
document.addEventListener("click", (e) => {
    if (e.target.classList.contains("borrar-producto")) {
        let producto, productoID;
        e.target.parentElement.parentElement.remove();
        producto = e.target.parentElement.parentElement;
        productoID = producto.querySelector("a").getAttribute("data-id");
        eliminarLocalStorage(productoID);
    }
});

const botonesAgregar = document.querySelectorAll(".agregar");
botonesAgregar.forEach((boton) => {
    boton.addEventListener("click", function (e) {
        obtenerDatos(e);
    });
});

const obtenerDatos = (e) => {
    const producto = e.target.parentElement.parentElement.parentElement;
    /* console.log(producto); */
    leerDatos(producto);
};
const leerDatos = (producto) => {
    const rutaDeseada = "/shop/guitarra/";
    const rutaActual = window.location.pathname;
    const patronRuta = new RegExp(`^${rutaDeseada}`);
    let infoProducto;

    if (patronRuta.test(rutaActual)) {
        // Realiza la acción deseada
        infoProducto = {
            imagen: producto.querySelector("img").src,
            nombre: producto.querySelector("li").textContent,
            precio: producto.querySelector("li").textContent,
            id: producto.querySelector(".agregar").getAttribute("data-id"),
            cantidad: 1,
        };
        /*  console.log("Estás en la ruta /shop/guitarra/"); */
    } else {
        infoProducto = {
            imagen: producto.querySelector("img").src,
            nombre: producto.querySelector("h3").textContent,
            precio: producto.querySelector("p").textContent,
            id: producto.querySelector(".agregar").getAttribute("data-id"),
            cantidad: 1,
        };
        /* console.log("No estás en la ruta /shop/guitarra/"); */
    }
    /* console.log(infoProducto); */
    insertarDatos(infoProducto);
};
const insertarDatos = (producto) => {
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>
        <img src="${producto.imagen}" width=100>
      </td>
      <td>${producto.nombre}</td>
      <td>${producto.precio}</td>
      <td>
        <a href='#'class="bi bi-trash-fill borrar-producto" data-id="${producto.id}"><i class=""></i></a>
      </td> 
      `;
    const listaProductos = document.querySelector("#lista-carrito tbody");
    listaProductos.appendChild(row);
    guardarLocalStorage(producto);
};
const guardarLocalStorage = (producto) => {
    let productos;
    productos = obtenerLocalStorage();
    productos.push(producto);
    localStorage.setItem("productos", JSON.stringify(productos));
};
const obtenerLocalStorage = () => {
    let productLS;
    if (localStorage.getItem("productos") === null) {
        productLS = [];
    } else {
        productLS = JSON.parse(localStorage.getItem("productos"));
    }
    return productLS;
};
const eliminarLocalStorage = (productoID) => {
    let productLS;
    productLS = obtenerLocalStorage();
    let nuevoProductLS = productLS.filter(
        (producto) => producto.id !== productoID
    );

    localStorage.setItem("productos", JSON.stringify(nuevoProductLS));
};
const leerLocalStorage = () => {
    let productLS;
    productLS = obtenerLocalStorage();
    productLS.forEach(function (producto) {
        const row = document.createElement("tr");
        row.innerHTML = `
      <td>
        <img src="${producto.imagen}" width=100>
      </td>
      <td>${producto.nombre}</td>
      <td>${producto.precio}</td>
      <td>
        <a href='#'class="bi bi-trash-fill borrar-producto" data-id="${producto.id}"><i class=""></i></a>
      </td> 
      `;
        const listaProductos = document.querySelector("#lista-carrito tbody");
        listaProductos.appendChild(row);
    });
};
/* class Carrito {
    obtenerDatos(e) {
        e.preventDefault();
        const producto = e.target.parentElement.parentElement;
        leerDatos(producto);
    }

    leerDatos(producto) {
        console.log(producto); // Verifica si el elemento producto se selecciona correctamente
        const infoProducto = {
            imagen: producto.querySelector("img").src,
            nombre: producto.querySelector("h3").textContent,
            precio: producto.querySelector("p").textContent,
            id: producto.querySelector("a").getAttribute("data-id"),
            cantidad: 1,
        };
        console.log(infoProducto); // Verifica los valores obtenidos
        insertarDatos(infoProducto);
    }

    

    const eliminarProducto(e) {
        e.preventDefault();
        
        
    }
} */
