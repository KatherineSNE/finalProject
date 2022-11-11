const url = "./api/apiAllPar.php";

async function showPartyitem(){
const party= await fetch(url);
const infoparty = await party.json();
for (let i in infoparty){
            let a = document.getElementById("modify_party");
            let b = document.createElement("img");
            let c = document.createElement("form");
            let d = document.createElement("input");//id on hidden
            let e = document.createElement("input");//name
            let f = document.createElement("input");//image
            let g = document.createElement("textArea");//description
            let t = document.createElement("input");//visibility
            let h = document.createElement("input");//type
            let j = document.createElement("input");//send

 

            b.setAttribute("src","./image/"+infoparty[i].image_partyitem+"");
            b.setAttribute("alt", "image");

            c.setAttribute("action","");
            c.setAttribute("method","post");

            d.setAttribute("type","hidden");
            d.setAttribute("name","id_partyitem");
            d.setAttribute("value",""+infoparty[i].id_partyitem+"");

            e.setAttribute("class","input");
            e.setAttribute("type","text");
            e.setAttribute("name","name_partyitem");
            e.setAttribute("value",""+infoparty[i].name_partyitem+"");

            f.setAttribute("class","input");
            f.setAttribute("type","text");
            f.setAttribute("name","image_partyitem");
            f.setAttribute("value",""+infoparty[i].image_partyitem+"");

            g.setAttribute("class","input");
            g.setAttribute("rows","auto");
            g.setAttribute("cols","1");
            g.setAttribute("name","description_partyitem");
            g.textContent=""+infoparty[i].description_partyitem+"";

            t.setAttribute("class","input");
            t.setAttribute("type","tel");
            t.setAttribute("name","visibility_partyitem");
            t.setAttribute("value",""+infoparty[i].visibility_partyitem+"");

            h.setAttribute("class","input");
            h.setAttribute("type","tel");
            h.setAttribute("name","id_type_partyitem");
            h.setAttribute("value",""+infoparty[i].id_type_partyitem+"");

            j.setAttribute("type","submit");
            j.setAttribute("name", "update_db");
            j.setAttribute("value","Update");




            a.appendChild(b);
            a.appendChild(c);
            c.appendChild(d);
            c.appendChild(e);
            c.appendChild(f);
            c.appendChild(g);
            c.appendChild(t);
            c.appendChild(h);
            c.appendChild(j);
    }
}
showPartyitem();


//!assoc in format admin system

// const url1 = "apiAssoc.php";

// async function showAssoc(){
// const associ = await fetch(url1);
// const infoassoc = await associ.json();
// for (let z in infoassoc){
// let m = document.getElementById("modify_party");
// let n = document.createElement("img");
// let o = document.createElement("form");
// let p = document.createElement("input");//id partytime
// let q = document.createElement("input");//id reqone
// let r = document.createElement("input");//id reqtwo
// let s = document.createElement("input");//id reqthree
// let t = document.createElement("input");//visibility
// let u = document.createElement("input");//modify
// let v= document.createElement("input");//checkbox
// let w= document.createElement("input");//delete

// n.setAttribute("src","./image/"+infoassoc[z].image_partyitem+"");
// n.setAttribute("alt", "image");

// o.setAttribute("action","");
// o.setAttribute("method","post");

// p.setAttribute("type","hidden");
// p.setAttribute("name","id_partyitem");
// p.setAttribute("value",""+infoassoc[z].id_partyitem+"");

// q.setAttribute("class","input");
// q.setAttribute("type","tel");
// q.setAttribute("name","id_required_one");
// q.setAttribute("value",""+infoassoc[z].id_required_one+"");

// r.setAttribute("class","input");
// r.setAttribute("type","tel");
// r.setAttribute("name","id_required_two");
// r.setAttribute("value",""+infoassoc[z].id_required_two+"");

// s.setAttribute("class","input");
// s.setAttribute("type","tel");;
// s.setAttribute("name","id_required_three");
// s.textContent=""+infoassoc[z].id_required_three+"";

// t.setAttribute("class","input");
// t.setAttribute("type","tel");
// t.setAttribute("name","id_typeitem");
// t.setAttribute("value",""+infoassoc[z].id_typeitem+"");

// t.setAttribute("class","input");
// t.setAttribute("type","tel");
// t.setAttribute("name","visibility");
// t.setAttribute("value",""+infoassoc[z].visbility+"");


// u.setAttribute("type","submit");
// u.setAttribute("name", "update_db");
// u.setAttribute("value","Update");

// v.setAttribute("type","checkbox");
// v.setAttribute("name", "choose");


// w.setAttribute("type","submit");
// w.setAttribute("name", "del_db");
// w.setAttribute("value","Delete");


// m.appendChild(n);
// n.appendChild(o);
// n.appendChild(p);
// n.appendChild(q);
// n.appendChild(r);
// n.appendChild(s);
// n.appendChild(t);
// n.appendChild(u);
// n.appendChild(v);
// n.appendChild(w);



// }
// }
// showAssoc();