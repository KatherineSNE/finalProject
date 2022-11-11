


let a = "Me Souvenir";
let b = "M'oublier";
let c = document.getElementById("remfor");



let store = document.querySelector(".remember");
let user = document.querySelector(".username"); 
user.value = localStorage.getItem("Toujours partying");

if(user.value){
    c.textContent=b;
}else{
    c.textContent=a;
}

store.addEventListener("click", function remember(){

if(store.classList.contains("remember")){

    localStorage.setItem("Toujours partying", user.value);
    store.textContent = b;
    store.classList.toggle("forget");
    store.classList.toggle("remember");

}else if(store.classList.contains("forget")){

    localStorage.removeItem("Toujours partying", user.value);
    store.textContent = a;
    store.classList.toggle("remember");
    store.classList.toggle("forget");
}
});
