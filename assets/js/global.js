(async () => {
    function mainresize() {
        var main = document.querySelector("#main");
        var header = document.querySelector("#header");
        var footer = document.querySelector("#footer");
        var size = header.clientHeight + footer.clientHeight;
        main.classList.add("hola");
        main.style.setProperty("min-height", "calc(100vh - " + size + "px)")
    }
    mainresize();
    window.addEventListener("resize", () => mainresize)
})();

document.querySelector("#test").addEventListener("click", async () => {
    let response = await fetch("?c=error&a=test");
    let data =  (await response.json())[0];
    data.forEach(element => {
        const body = document.querySelector("tbody");

        body.innerHTML += `
        <tr>
            <td>${element.ape_cli}</td> 
            <td>${element.cel_cli}</td> 
            <td>${element.ciu_cli}</td> 
            <td>${element.cor_cli}</td> 
            <td>${element.dir_cli}</td> 
            <td>${element.fch_cli}</td> 
            <td>${element.id_cli}</td>  
            <td>${element.nom_cli}</td> 
            <td>${element.pri_cli}</td> 
            <td>${element.user_cli}</td>    
        </tr>
        `

        
        
        
        
        
        
        
        
        
        
        
    });
})