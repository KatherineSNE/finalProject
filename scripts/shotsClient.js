const url1 = "./api/apiShots.php";
async function showAssoc(){
const associ = await fetch(url1);
const details = await associ.json();
for(let y in details[0]){
    
    let section = document.getElementById("show_shot");
    let article = document.createElement("article");
    let figure = document.createElement("figure");
    let image = document.createElement("img");
    let name = document.createElement("P");
    let keyword = document.createElement("strong");
    let description = document.createElement("P");
    let need = document.createElement("P");
    let first = document.createElement("P");
    let second = document.createElement("P");
    let third = document.createElement("P");
    let form = document.createElement("form");
    let idhide = document.createElement("input");
    let seo =" shooter";
    
    image.setAttribute("src","./image/"+details[0][y].image_partyitem+"");
    image.setAttribute("alt", seo);
    name.textContent+= ""+details[0][y].name_partyitem+"";
    keyword.textContent=seo;
    keyword.style.fontWeight="normal";
    description.textContent+=""+details[0][y].description_partyitem+"";
    need.textContent+="Tu auras besoin:";
    first.textContent+=""+details[1][y].one+"";
    second.textContent+=""+details[2][y].two+"";
    third.textContent+=""+details[3][y].three+"";
    form.setAttribute("action","");
    form.setAttribute("method","post");
    idhide.setAttribute("type","hidden");
    idhide.setAttribute("name","id_partyitem");
    idhide.setAttribute("value",""+details[0][y].id_partyitem+"");
        
    section.appendChild(article);
    article.appendChild(figure);
    figure.appendChild(image);
    article.appendChild(name);
    name.appendChild(keyword);
    article.appendChild(description);
    article.appendChild(need);
    article.appendChild(first);
    article.appendChild(second);
    article.appendChild(third);
    article.appendChild(form);
    form.appendChild(idhide);

 let rights = document.getElementById("breadcrumb");
if(rights){
        let saveItem = document.createElement("input");
        saveItem.setAttribute("type","submit");
        saveItem.setAttribute("name","add_plan");
        saveItem.setAttribute("value","Ajouter au planner");
        form.appendChild(saveItem);
        }          
    }
}
showAssoc();

    
