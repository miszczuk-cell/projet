//function disparaitre(var element)
//{
//  element.style.display = "none";
//}
var div = document.querySelectorAll("li");
var nbDiv = div.length;
for (var i = 0; i<nbDiv ; i++)
{
  div[i].onmouseover = function(){
    this.lastChild.style.width = "100%";
  };

  div[i].onmouseout = function(){
    this.lastChild.style.width = "0%";
  };
}

var bouton = document.querySelector(".boutonMenuMobile");
bouton.onclick = function(){
  document.querySelector(".voile").style.width = "20%";
  document.querySelector(".voile").style.backgroundColor = "rgba(0,0,0,0)";
};
