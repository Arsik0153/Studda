let i = 1;
function openAbout() {
  i++;
  var element = document.getElementById("about");
  element.classList.toggle("about__toggle");
  if (i%2 == 0){
    var metaThemeColor = document.querySelector("meta[name=theme-color]");
    metaThemeColor.setAttribute("content", "#fff");
  } else{
    var metaThemeColor = document.querySelector("meta[name=theme-color]");
    metaThemeColor.setAttribute("content", "#297af9");
  }
}
  