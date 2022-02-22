var emailInput = document.querySelector('#email')
var passInput = document.querySelector('#password')
var fullnameInput = document.querySelector('#fullname')
var usernameInput = document.querySelector('#username')
var fullnameSpan = document.querySelector('#fullname-label')
var usernameSpan = document.querySelector('#username-label')
var emailSpan = document.querySelector('#email2-label')
var passSpan = document.querySelector('#password2-label')





// ON CLICK REGISTER INPUTS
function animate(element) {
  
   // ON MOUSE ENTER
  element.addEventListener('mouseenter', function(){
    if (element==emailInput) {
      emailSpan.id = "animation"
    }
    if (element==passInput) {
      passSpan.id = "animation"
    }
    if (element==fullnameInput) {
      fullnameSpan.id = "animation"
    }
    if (element==usernameInput) {
      usernameSpan.id = "animation"
    }
  })
 
   // ON MOUSE LEAVE
  element.addEventListener('mouseleave', function(){
 
   // VALUE > 0
    if (element.value.length>0) {
      if (element==emailInput) {
        element.style = "box-shadow: 0 0 0 2px rgba(0, 111, 243, 0.35)"
      }
      if (element==passInput) {
        element.style = "box-shadow: 0 0 0 2px rgba(0, 111, 243, 0.35)"
      }
      if (element==fullnameInput) {
        element.style = "box-shadow: 0 0 0 2px rgba(0, 111, 243, 0.35)"
      }
      if (element == usernameInput) {
        element.style = "box-shadow: 0 0 0 2px rgba(0, 111, 243, 0.35)"
      }
    }
    
   // VALUE = 0 
    if (element.value.length==0) {
      if (element==emailInput) {
        emailInput.style = "none"
        emailSpan.id = "email2-label"
      }
      if (element==passInput) {
        passInput.style = "none"
        passSpan.id = "password2-label"
      }
      if (element==fullnameInput) {
        fullnameInput.style = "none"
        fullnameSpan.id = "password2-label"
      }
      if (element == usernameInput) {
        usernameInput.style = "none"
        usernameSpan.id = "password2-label"
      }
    }
  })
}animate(emailInput);animate(passInput);animate(fullnameInput);animate(usernameInput);
