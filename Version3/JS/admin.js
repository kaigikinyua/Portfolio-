console.log("admin.js online");
function upTime(){
  document.getElementById('time');
  var x=new Date();
  var year=x.getFullYear();
  var month=x.getMonth();
  var date=x.getDate();
  var hours=x.getHours();
  var minutes=x.getMinutes();
  var seconds=String(x.getSeconds());
  if(seconds.length<2){
    seconds='0'+seconds;
  }
  
  console.log(seconds.length)
  document.getElementById('year').innerHTML=year+"  :";
  document.getElementById('month').innerHTML=month+"  :";
  document.getElementById('date').innerHTML=date+"  :";
  document.getElementById('hours').innerHTML=hours+"  :";
  document.getElementById('minutes').innerHTML=minutes+"  :";
  document.getElementById('seconds').innerHTML=seconds;
}
setInterval(upTime,1000);
