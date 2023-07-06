(() => {

    function mainresize() {
        var main = document.querySelector("main");
        var header = document.querySelector("header");
        var footer = document.querySelector("footer");

        var size = header.clientHeight + footer.clientHeight;
        main.style.minHeight = "calc(100vh - " + size + "px)"
    }
    mainresize();
    window.addEventListener("resize", () => {
        mainresize();
    })
})()