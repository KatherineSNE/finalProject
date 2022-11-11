let countdown = document.getElementById("counter")
let timer = 15;
let counter = setInterval(function verifEmail(){
    if (timer>0){
        timer--;
    }else{
        clearInterval(counter);
        window.location.href = "Login";
    }}, 1000);