/*
This file is for the solar system home page. When you hover over a image of a planet
it will tell you what planet it is. 
*/
const sun = document.getElementById('sun');
const mercury = document.getElementById('mercury');
const venus = document.getElementById('venus');
const earth = document.getElementById('earth');
const mars = document.getElementById('mars');
const jupiter = document.getElementById('jupiter');
const saturn = document.getElementById('saturn');
const neptune = document.getElementById('neptune');
const uranus = document.getElementById('uranus');
const text = document.getElementById('planet-select');


sun.addEventListener("mouseover", (event) => {
    text.textContent = "Sun";
})

mercury.addEventListener("mouseover", (event) => {
    text.textContent = "Mercury";
})

venus.addEventListener("mouseover", (event) => {
    text.textContent = "Venus";
})

earth.addEventListener("mouseover", (event) => {
    text.textContent = "Earth";
})

mars.addEventListener("mouseover", (event) => {
    text.textContent = "Mars";
})

jupiter.addEventListener("mouseover", (event) => {
    text.textContent = "Jupiter";
})

saturn.addEventListener("mouseover", (event) => {
    text.textContent = "Saturn";
})

neptune.addEventListener("mouseover", (event) => {
    text.textContent = "Neptune";
})

uranus.addEventListener("mouseover", (event) => {
    text.textContent = "Uranus";
})

