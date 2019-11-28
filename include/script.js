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

var voile = document.querySelector(".voile");
voile.onclick = function(){
  this.style.width = "0px";
  this.style.backgroundColor = "rgba(0,0,0,0)";
};
