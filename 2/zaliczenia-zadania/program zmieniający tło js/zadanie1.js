const form = document.querySelector('#form');
const input = form.querySelectorAll('input');
var r=input[0];
var g=input[1];
var b=input[2];

r.addEventListener ('input', () => {
    document.body.style.backgroundColor ='rgb('+r.value+','+g.value+','+b.value+')'
})
g.addEventListener ('input', () => {
    document.body.style.backgroundColor ='rgb('+r.value+','+g.value+','+b.value+')'
})
b.addEventListener ('input', () => {
    document.body.style.backgroundColor ='rgb('+r.value+','+g.value+','+b.value+')'
})
