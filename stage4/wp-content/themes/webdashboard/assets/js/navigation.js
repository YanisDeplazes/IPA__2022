function toggleMainnavigation(){
    var element = document.querySelector(".navigation.primary");
    element.classList.toggle("toggle");   
     var main = document.querySelector("main");
     main.classList.toggle("mainnavigationtoggle");   
  
  }
  function toggleSecondnavigation(){
    var element = document.querySelector(".navigation.secondary");
    element.classList.toggle("toggle");   
  }

document.querySelectorAll('.navigation.primary li').forEach(item => {
  item.addEventListener('click', event => {
    item.querySelector("a").click()
  })
})