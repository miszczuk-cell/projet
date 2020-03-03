//function disparaitre(var element)
//{
//  element.style.display = "none";
//}

var div = document.querySelectorAll(".menuPC ul li");
var nbDiv = div.length;
for (var i = 0; i<nbDiv ; i++)
{
  div[i].onmouseover = function(){
    this.lastChild.style.height = "100%";
  };

  div[i].onmouseout = function(){
    this.lastChild.style.height = "0%";
  };
}

var etatVoile = 0;
var bouton = document.querySelector(".boutonMenuMobile");
bouton.onclick = function(){
  var voile = document.querySelector(".voile");

  if(etatVoile == 0)
  {
    voile.style.height = "100%";
    voile.style.backgroundColor = "rgba(0,0,0,0)";
    etatVoile = 1;
    bouton.innerText = "";
  }
  else
  {
    voile.style.height = "0px";
    voile.style.backgroundColor = "rgba(0,0,0,0)";
    etatVoile = 0;
    bouton.innerText = "";
  }


};
// dljsdlhjkldjlfksjklsfdljkfljksdf

(function(){
		var etat = 0;
		var bouton = document.querySelector(".boutonMenuMobile");
		var voile = document.querySelector(".voile");
		var barre1 = document.querySelector(".boutonMenuMobile .anime1");
		var barre2 = document.querySelector(".boutonMenuMobile .anime2");
		var barre3 = document.querySelector(".boutonMenuMobile .anime3");
		bouton.addEventListener("click",function(e){
			if(etat == 0)
			{
				voile.style.width = "100vw";
				voile.style.opacity = "1";
				barre1.style.top = "50%";
				barre1.style.transform = "translateY(-50%)";
				barre1.style.backgroundColor = "#ffffff";
				barre2.style.transform = "rotate(90deg)";
				barre2.style.backgroundColor = "#ffffff";
				barre3.style.bottom = "50%";
				barre3.style.transform = "translateY(50%)";
				barre3.style.backgroundColor = "#ffffff";
				document.querySelector(".boutonMenuMobile").style.transform = "rotate(45deg)";
				etat = 1;
			}
			else
			{
				voile.style.width = "0vw";
				voile.style.opacity = "0";
				barre1.style.top = "0%";
				barre1.style.transform = "translateY(0%)";
				barre1.style.backgroundColor = "#000000";
				barre2.style.transform = "rotate(0deg)";
				barre2.style.backgroundColor = "#000000";
				barre3.style.bottom = "0%";
				barre3.style.transform = "translateY(0%)";
				barre3.style.backgroundColor = "#000000";
				document.querySelector(".boutonMenuMobile").style.transform = "rotate(0deg)";
				etat = 0;
			}

		});
	})();
