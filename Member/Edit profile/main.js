//import from '/General style/main.js';
var imported = document.createElement('script');
imported.src = '../../General style/general-main.js';
document.head.appendChild(imported);
//-------------------------------------






// ON INPUT INFORMATIONS ANIMATION


var inputs = document.querySelectorAll(".edit-profile-container input")
var inputsLabel = document.querySelectorAll(".edit-profile-container p")

// on mouse enter
for (var i = 0; i < inputs.length; i++) {

  inputs[0].onfocus = function() {
    inputsLabel[1].style.color= "rgba(37, 145, 255, 1)"
  }
  inputs[1].onfocus = function() {
    inputsLabel[2].style.color= "rgba(37, 145, 255, 1)"
}
inputs[2].onfocus = function() {
    inputsLabel[3].style.color= "rgba(37, 145, 255, 1)"

}
inputs[3].onfocus = function() {
    inputsLabel[4].style.color= "rgba(37, 145, 255, 1)"

}

inputs[4].onclick = function() {
    inputsLabel[5].style.color= "rgba(37, 145, 255, 1)"
}
}


// on mouse leave 

for (var i = 0; i < inputs.length; i++) {

 inputs[0].onmouseleave = function() {
  if (inputs[0].value.length == 0) {
    inputsLabel[1].style = "none"
  }else{
    inputsLabel[1].style.color = "rgba(37, 145, 255, 1)"
  }
}
inputs[1].onmouseleave = function() {
  if (inputs[1].value.length == 0) {
    inputsLabel[2].style = "none"
  } else {
    inputsLabel[2].style.color = "rgba(37, 145, 255, 1)"
  }
}
inputs[2].onmouseleave = function() {
  if (inputs[2].value.length == 0) {
    inputsLabel[3].style = "none"
  } else {
    inputsLabel[3].style.color = "rgba(37, 145, 255, 1)"
  }
}
inputs[3].onmouseleave = function() {
  if (inputs[3].value.length == 0) {
    inputsLabel[4].style = "none"
  } else {
    inputsLabel[4].style.color = "rgba(37, 145, 255, 1)"
  }
}
inputs[4].onmouseleave = function() {
  if (inputs[4].value.length == 0) {
    inputsLabel[5].style = "none"
  } else {
    inputsLabel[5].style.color = "rgba(37, 145, 255, 1)"
  }
}
inputs[5].onmouseleave = function() {
  if (inputs[5].value.length == 0) {
    inputsLabel[5].style = "none"
  } else {
    inputsLabel[5].style.color = "rgba(37, 145, 255, 1)"
  }
}
}