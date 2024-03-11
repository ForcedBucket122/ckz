function f3(){
    const element1=document.getElementById("podz_3");
    const element2=document.getElementById("sum_niep");
    let dlugosc=document.getElementById("numer1").value;
    dlugosc=parseInt(dlugosc);
    let ciag=[];
    let podzielne=[];
    let nieparzyste=[];
    for(let i=0; i<dlugosc; i++){
        let los=Math.round(Math.random()*100);
        ciag.push(los);
        if(ciag[i]%3==0){
            podzielne.push(ciag[i]);
        }
        if(ciag[i]%2==1){
            nieparzyste.push(ciag[i]);
        }
    }
    
    element1.innerHTML="Liczby podzielne przez 3: "+podzielne;
    element2.innerHTML="Liczby nieparzyste: "+nieparzyste;
}