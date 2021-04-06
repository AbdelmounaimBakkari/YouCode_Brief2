
var popup = document.getElementById("popup1");

var btn = document.getElementById("myBtn");

var btn2 = document.getElementsByClassName("myBtn2");

var header = document.getElementById("header");

var main = document.getElementById("mn");

var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    popup.style.display = "block";
    header.style.filter = "blur(20px)";
    main.style.filter = "blur(60px)";
}


for(let i=0;i<btn2.length;i++){
  btn2[i].onclick = function() {
      popup.style.display = "block";
      header.style.filter = "blur(20px)";
      main.style.filter = "blur(60px)";
  }
}



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    popup.style.display = "none";
    header.style.filter = "blur(0)";
    main.style.filter = "blur(0)";
    location.replace("../page/starters.php");
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
    header.style.filter = "blur(0)";
    main.style.filter = "blur(0)";
    location.replace("../page/starters.php");
  }
}