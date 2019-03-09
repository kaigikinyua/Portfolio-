console.log("Animation.js");
function hideLoader(){
    document.getElementById('loader').style.display="none";
    setTimeout(typeEffect,2000);
}
var text="turning coffee into code </>";
var i=0;
function typeEffect(){
        if(i<=text.length){
            document.getElementById('typeEffect').innerHTML+=text.charAt(i);
            i++;
        }
        else{
            window.clearInterval();
        }
    setTimeout(typeEffect,70);
}
