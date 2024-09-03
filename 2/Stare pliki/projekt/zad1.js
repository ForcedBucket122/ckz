function f1(){
    const element1=document.getElementById("ciag");
    const element2=document.getElementById("suma");
    let dlugosc=document.getElementById("n1").value;
    let l_pocz=document.getElementById("n2").value;
    dlugosc=parseInt(dlugosc);
    l_pocz=parseInt(l_pocz);
    let ciag=[];
    let suma=0;

    for(let i=0; i<dlugosc; i++){
        ciag.push(l_pocz);
        suma+=l_pocz;
        l_pocz--;
    }
    element1.innerHTML="Ciąg liczb: "+ciag;
    element2.innerHTML="Suma liczb ciągu: "+suma;
}