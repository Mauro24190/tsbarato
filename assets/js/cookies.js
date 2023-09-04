const producto = document.querySelectorAll(".producto_item")

producto.forEach(p=>{
    const btn = p.querySelector("[data-product-id]");

    btn.addEventListener("click", () => {
        const id = btn.getAttribute("data-product-id");
        console.log(id)
        document.cookie = "carrito=" + id +";path=/";
    })
})
