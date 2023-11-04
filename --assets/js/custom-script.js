var navlink = document.getElementById("nav-links");
var bar=document.getElementById("bar");
bar.addEventListener('click',()=>{
    bar.classList.toggle('active');
    navlink.classList.toggle('active');
})

function hideMenu(){
    navlink.classList.remove('active');
  }

  var navres = document.getElementById("nav-menu-toogle");
  var liparent=document.getElementById("has-children");
  if(liparent){
    liparent.addEventListener('click',()=>{
        liparent.classList.toggle('active');
        navres.classList.toggle('active');
    });
}


jQuery('.owl-review').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    items:1,
    autoplay:true,
    autoplayHoverPause:true,
    dots:true
})
