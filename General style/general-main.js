





// OPEN AND CLOSE MENU 

var openMenu = document.querySelector('#open-menu-icon')
var closeMenu = document.querySelector('#close-menu-icon')
var menu = document.querySelector('.menu-container')


openMenu.addEventListener('click', function(){
 openMenu.style = "visibility: hidden; opacity: 0"
 closeMenu.style = "visibility: visible; opacity: 1"
 menu.style = "left:0 ; opacity: 1"
})

closeMenu.addEventListener('click', function(){
 closeMenu.style = "visibility: hidden; opacity: 0"
 openMenu.style = "visibility: visible; opacity: 1"
 menu.style = "none"
})

openMenu.addEventListener('mouseleave', function(){
 setTimeout(function(){menu.style = "-300px"
 closeMenu.style = "visibility: hidden; opacity: 0"
 openMenu.style = "visibility: visible; opacity: 1"},100)

})








// OPEN NOTIFICATIONS BAR

 
 
 
 
 
 

