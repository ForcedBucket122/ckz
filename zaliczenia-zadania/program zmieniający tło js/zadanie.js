const form = document.querySelector("#test");
const inputs = form.querySelectorAll("input");
const r = inputs[0];
const g = inputs[1];
const b = inputs[2];

r.addEventListener("input", () => {
    r.nextElementSibling.innerText = "Wartość pola: " + r.value
    document.body.style.backgroundColor = "rgb("+r.value+","+g.value+","+b.value+")";
});
g.addEventListener("input", () => {
    g.nextElementSibling.innerText = "Wartość pola: " + g.value
    document.body.style.backgroundColor = "rgb("+r.value+","+g.value+","+b.value+")";
});
b.addEventListener("input", () => {
    b.nextElementSibling.innerText = "Wartość pola: " + b.value
    document.body.style.backgroundColor = "rgb("+r.value+","+g.value+","+b.value+")";
});