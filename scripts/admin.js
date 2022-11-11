const url = "./api/apiAllPar.php";
async function showpartyItem(){
const par = await fetch(url);
const infopar = await par.json();
for (let j in infopar){
    let d = document.getElementById("par");
    let e = document.createElement("option");

    e.setAttribute("class","list");
    e.setAttribute("value",""+infopar[j]["id_partyitem"]+"");
    e.textContent=""+infopar[j]["id_partyitem"]+"--"+infopar[j]["name_partyitem"]+"";

    d.appendChild(e);
 
}
}
showpartyItem();



const url1= "./api/apiNeed.php";
async function showNeed(){
const ing = await fetch(url1);
const info = await ing.json();
for (let i in info){
    let a = document.getElementById("one");
    let c = document.createElement("option");

    c.setAttribute("class","list");
    c.setAttribute("value",""+info[i]["id_need"]+"");
    c.textContent=""+info[i]["id_need"]+"--"+info[i]["name_need"]+"";

    a.appendChild(c);
 
}
}
showNeed();

