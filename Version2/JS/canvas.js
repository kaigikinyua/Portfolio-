console.log("Hello Cnavas!!!");
var myCanvas=document.querySelector('canvas');
var canvas=myCanvas.getContext('2d');
canvas.beginPath();
var color=['green','blue','orange','red','pink','gray'];
var x=0;
var y=0;
for(var i=0;i<=5;i++){
    x=Math.random()*100;
    y=Math.random()*100;
    canvas.beginPath();
    canvas.arc(x,y,10,0,Math.PI*2,false);
    canvas.strokeStyle=color[i];
    canvas.stroke();
}
var animX=20;var animY=20;
var dx=0.7;dy=1;
function animate(){
    canvas.clearRect(0,0,200,200);
    canvas.beginPath();
    canvas.arc(animX,animY,20,Math.PI*2,false);
    canvas.strokeStyle="red";
    canvas.stroke();
    animX+=dx;animY+=dy;
    if(animX+20>=200 || animX-20<0){
      dx=dx*-1;
    }
    if(animY+20>=200 || animY-20<0){
      dy=dy*-1;
    }
    requestAnimationFrame(animate);
}
animate(1,2);
