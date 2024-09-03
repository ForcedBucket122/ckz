var p1=document.getElementById("p1");
var p2=document.getElementById("p2");
var kolor=document.getElementById("kolor");
p1.addEventListener("click",()=>{
    kolor.style.backgroundColor="red";
})
p2.addEventListener("click",()=>{
    kolor.style.backgroundColor="green";
})