let navtoggle = document.querySelector(".fa-bars");
let navbar = document.querySelector(".mobile-nav");

navtoggle.addEventListener( "click", function(){

  if (navtoggle.classList.contains("fa-bars"))
  {
     navtoggle.classList.replace("fa-bars","fa-times")
     navbar.classList.add('active')
  }
  else
  {
    navtoggle.classList.replace("fa-times","fa-bars")
    navbar.classList.remove('active')
  }
})