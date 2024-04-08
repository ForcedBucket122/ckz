var suwak=document.getElementById("suwak");
var wpisz=document.getElementById("wpisz");
var rozmiar=document.getElementById("rozmiar");
suwak.addEventListener("input",()=>{
    wpisz.innerHTML=suwak.value;
    rozmiar.style.width=suwak.value+"px";
    rozmiar.style.height=suwak.value+"px";
    rozmiar.style.backgroundColor="red";
})