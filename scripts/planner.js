const url = "./apiPlanner.php";

async function showPlanner(){
    info = await fetch(url);
    basket = await info.json();
    for (let y in basket){
        let section = document.getElementById("planner");
        let article = document.createElement("article");
     
        let image = document.createElement(img);
        let name = document.createElement("p");
        let description = document.createElement("p");
        let box=document.createElement("div");
        let one = createElement("p");
        let two = createElement("p");
        let three = createElement("p");
        let form = document.createElement("form");
        let nameof= document.createElement(input);
     

        image.setAttribute("src","./images"+basket[y].image_partyitem+"");
        image.setAttribute("alt","planner");
        name.textContent=""+basket[y].name_partyitem+"";
        description.textContent=""+basket[y].name_partyitem+"";
        one.textContent = ""+baslet[y].name




           
        form.setAttribute("method","POST");

        


        section.appendChild(article);
        article.appendChild(image);
        article.appendChild(form);
        form.appendChild(imin);
        form.appendChild(nameof);
    }
}
showPlanner();