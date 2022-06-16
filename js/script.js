function openRightMenu() {
    if (document.getElementById("rightMenu").style.display == "none")
        document.getElementById("rightMenu").style.display = "block";
    else 
        document.getElementById("rightMenu").style.display = "none";
}
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

 // Disable inspect element
$(document).bind("contextmenu",function(e) {
    e.preventDefault();
  });
  $(document).keydown(function(e){
    if(e.which === 123){
      return false;
  }
  });