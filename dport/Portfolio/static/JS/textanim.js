console.log('textanim online');
var text="< Turning Coffe into Code />"
var i=0;
function type(){
	document.getElementById("motto").innerHTML+=text.charAt(i);
	i++;
	if(text.length<=i){
		clearInterval();
	}
}
setInterval(type,"100");