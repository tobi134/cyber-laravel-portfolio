const contenedor = document.getElementById("burbujas-container");
function crearBurbuja() {
    const div = document.createElement("div");
    div.classList.add("burbuja");
    div.style.left = `${Math.random() * 100}%`;
    const size = Math.random() * 15 + 10;
    div.style.width = `${size}px`;
    div.style.height = `${size}px`;
    div.style.animationName = "moverArriba";
    div.style.animationDuration = `${Math.random() * 3 + 2}s`;
    contenedor.appendChild(div);

    div.addEventListener("animationend", () => {
        div.remove();
    });
}
window.addEventListener("DOMContentLoaded", () => {
    setInterval(crearBurbuja, 300);
});

const ContenedorTexto = document.getElementById("typing");
const frases = [
    "print('Hola mundo!')",
    "console.log('Hola mundo!')",
    "print('¡Bienvenido a mi portafolio!')",
    "console.log('¡Bienvenido a mi portafolio!')",
    "sudo apt-get install creatividad",
    "npm install innovación",
];
let indice = 0;
let caracteresIndex = 0;
let timeout = 100;
let borrado = false;
function escribirFrase() {
    setTimeout(() => {
        const frase = frases[indice];
        if (!borrado) {
            caracteresIndex++;
            ContenedorTexto.textContent = frase.slice(0, caracteresIndex);
            if (caracteresIndex >= frase.length) {
                borrado = true;
                timeout = 2000; // Pausa antes de escribir la siguiente frase
            } else {
                timeout = 100; // Velocidad de escritura;
            }
        } else {
            caracteresIndex--;
            ContenedorTexto.textContent = frase.slice(0, caracteresIndex);
            if (caracteresIndex <= 0) {
                borrado = false;
                indice = (indice + 1) % frases.length;
                timeout = 500;
            } else {
                timeout = 50; // Velocidad de borrado
            }
        }
        escribirFrase();
    }, timeout);
}
escribirFrase();
