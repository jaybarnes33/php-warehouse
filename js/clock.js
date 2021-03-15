const clock = document.querySelector(".clock");

const time = new Date().toLocaleTimeString();

clock.innerHTML(time);
