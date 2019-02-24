console.log("Image animation online");
//functions helping in the manipulation of images
var counter=0;
var previous=0;
let images=document.querySelectorAll('.ImageSlide');
console.log(images[2]);
function reset(){
  for(var i=0;i<images.length;i++){
    images[i].style.display="none";
  }
}
function nextImage(){
  reset();
  images[counter].style.display="block";
  counter++;
  if(counter>=images.length){
    counter=0;
  }
}
function previousImage(){
  reset();
  images[counter].style.display="block";
  counter--;
  if(counter<=0){
    counter=images.length;
  }
}
setInterval(nextImage,3000);
