console.log("image Animation Online");
var counter=0;
var previous=0;
let images=document.querySelectorAll(".sImage");
function reset(){
  for(var i=0;i<images.length;i++){
    images[i].style.display="none";
  }
}
function next(){
  reset();
  if(counter>=images.length || counter<0){
    counter=0;
  }
  images[counter].style.display="block";
  counter++;
}
function previous(){
  reset();
  if(counter<0){
    counter=images.length;
  }
}
next();
setInterval(next,10000);
