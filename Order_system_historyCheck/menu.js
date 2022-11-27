function myFunction() {
    var yes = document.getElementById("y");
    var no = document.getElementById("n");
    var yli = document.getElementsByClassName("1");
    var nli = document.getElementsByClassName("2");
      if (yes.checked == true){
        for (let i = 0; i < cars.length; i++) {
            text += cars[i] + "<br>";
          }
        yli.style.background = "green";
        console.log("he")
      } else {
        yli.style.background = "none";
      };
      if (no.checked == true){
        nli.style.background = "red";
      } else {
        nli.style.background = "none";
      };
    }

/*
function Displayform(){
    console.log(2);
    $('#Displayform').css('display','block'); //using jquery
}
*/
var btn_menu_dental = document.getElementById('btn_dental');
var dental_content = document.getElementById('dental_content');
var btn_inquery = document.getElementById('btn_inquery');
var inquery_content = document.getElementById('inquery_content');

var x =1;
btn_menu_dental.addEventListener('click', () => {
  if (x%2==1){
      dental_content.style.display = "block";
      x+=1;
    }else{
      dental_content.style.display = "none";
      x+=1;
  }
  console.log(1);
});
btn_inquery.addEventListener('click', () => {
  if (x%2==1){
    inquery_content.style.display = "block";
      x+=1;
    }else{
      inquery_content.style.display = "none";
      x+=1;
  }
  console.log(1);
});

/*
if (x[1].style.display=="none"){
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "block";
    }
  }else{
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
  }
  */

/*
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu_btn");
  if (x[1].style.display=="none"){
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "block";
    }
  }else{
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
  }


  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
*/
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}