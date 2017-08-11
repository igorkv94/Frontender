var menu = document.getElementById("main-menu");
function onNavClick(element) {
  if(!element.classList.contains("open")) {
    element.classList.add("open");
    menu.classList.add("show");
  }
  else{
    element.classList.remove("open");
    menu.classList.remove("show");
  }
}