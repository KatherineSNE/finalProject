let y = "Cacher le mot de passe";
let z = "Voir le mot de passe";

let see = document.querySelector(".view")
let hide = document.querySelector(".hide")

let viewType = document.querySelector(".viewPass")
let hidetype =  document.querySelector(".hidePass")

see.addEventListener("click", function(){
    if (see.classList.contains("view")){
        viewType.type= "text";
        see.textContent= y;
        see.classList.toggle("hide");
        see.classList.toggle("view");
        viewType.classList.toggle("hidePass");
        viewType.classList.toggle("viewPass");
    } else if(see.classList.contains("hide")){
        viewType.type ="password";
        see.textContent= z;
        see.classList.toggle("view");
        see.classList.toggle("hide");
        viewType.classList.toggle("viewPass");
        viewType.classList.toggle("hidePass")
    }
});