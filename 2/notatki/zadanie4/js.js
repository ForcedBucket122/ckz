var suwak=document.getElementById("suwak");
var napis=document.getElementById("napis");
suwak.addEventListener("input",()=>{
    napis.innerHTML=suwak.value;
    napis.style.fontSize=suwak.value+"px";

})