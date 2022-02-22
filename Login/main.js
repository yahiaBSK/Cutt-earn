

var switch_con = document.querySelector('.container-switch')
var switch_btn = document.querySelector('.cycle-switch')
var emailInput = document.querySelector('#email')
var passInput = document.querySelector('#password')
var emailSpan = document.querySelector('#email-label')
var passSpan = document.querySelector('#password-label')
var errorNotice = document.querySelector('.error-login-notice')




// SWITCH BUTTON TO SHOW PASS

switch_con.addEventListener('click', function(){
  if (switch_btn.classList=="cycle-switch") {
    switch_btn.classList ="cycle-switch-on"
    switch_con.style = "background-color:rgba(58, 150, 255, 1); box-shadow: 0 0 0 1.5px rgba(58, 150, 255, 0.35);"
    passInput.type = "text"
    
  } else {
    switch_btn.classList ="cycle-switch"
    switch_con.style = "none"
    passInput.type = "password"
  }
})



// ON INPUT EMAIL & PASSWORD

emailInput.addEventListener('mouseenter', function(){
  emailSpan.id = "email-label-on-input"
})

emailInput.addEventListener('mouseleave', function(){
  if (emailInput.value.length > 0) {
    emailSpan.id = "email-label-on-input"
    emailInput.style = "box-shadow: 0 0 0 2px rgba(0, 111, 243, 0.35)"
  }else{
    emailSpan.id = "email-label"
    emailInput.style = "none"
  }
})


passInput.addEventListener('mouseenter', function(){
  passSpan.id = "password-label-on-input"
})

passInput.addEventListener('mouseleave', function(){
  if (passInput.value.length > 0) {
    passSpan.id = "password-label-on-input"
    passInput.style = "box-shadow: 0 0 0 2px rgba(0, 111, 243, 0.35)"
  } else {
    passSpan.id = "password-label"
    passInput.style = "none"
  }
})





// error login notice
errorNotice.onload = (setTimeout(function(){errorNotice.style = "opacity: 1"},50))