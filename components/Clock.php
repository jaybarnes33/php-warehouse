<div class="clock">


</div>

<script>
const clock = document.querySelector(".clock");



setInterval(() => {
    const time = new Date().toLocaleTimeString();
    clock.innerHTML = time;
}, 1000);



</script>
