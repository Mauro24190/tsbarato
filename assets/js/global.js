(async () => {
  function mainresize() {
    var main = document.querySelector("#main");
    var header = document.querySelector("#header");
    var footer = document.querySelector("#footer");
    var size = header.clientHeight + footer.clientHeight;
    main.classList.add("hola");
    main.style.setProperty("min-height", "calc(100vh - " + size + "px)");
  }
  mainresize();
  window.addEventListener("resize", () => mainresize);
})();

const getCookie = (name) => {
    let cookies = []

    document.cookie.split("; ").forEach(e => {
        let [key, value] = e.split("=")
        cookies[key] = value
    })
    
    return cookies[name]
};

const saveCookie = (name, value) => { 
    document.cookie = name + "=" + JSON.stringify(value) + ";path=/"
}