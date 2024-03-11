function f2(){
    const element1=document.getElementById("wszystkie");
    const element2=document.getElementById("odp");
    let tablica=[];
    tablica[1]=parseFloat(document.getElementById("num1").value); 
    tablica[2]=parseFloat(document.getElementById("num2").value); 
    tablica[3]=parseFloat(document.getElementById("num3").value); 
    tablica[4]=parseFloat(document.getElementById("num4").value); 
    let output1=0;
    let output2=9999999999999999999999999999999999999999999999999999999999999999999999999999999;
    for(let i=1;i<tablica.length;i++){
        if(output1<tablica[i]){
            output1=tablica[i]
            // output2=tablica[i]
        }if(output2>tablica[i]){
            output2=tablica[i]
        }
    }
    element2.innerHTML="Najwieksza jest: "+ output1+"<br> Najmniejsza jest: "+output2;
}