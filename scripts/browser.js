
function browserDetect(){
    let useragent=navigator.userAgent;

    if (useragent.match(/edg/i)){
        let x = document.getElementById("browse");
        x.style.visibility="hidden";
    }
}
browserDetect();

