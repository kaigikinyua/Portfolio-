console.log("Image animation online");
//functions helping in the manipulation of images
var counter=0;
var previous=0;
var images=document.getElementsByClassName('ImageSlide');
console.log(images[2]);
function reset(){
  for(var i=0;i<=images.length;i++){
    images[i].style.display="hidden";
  }
}
function nextImage(){
  reset();
  for(counter=0;counter<=images.length;counter++){
  images[counter].style.visibility="visible";
  console.log(counter);
  }
  if(counter>=images.length){
    counter=0;
  }
}
reset();
//function previousImage(){}
//setInterval(nextImage,1000);
//nextImage();
