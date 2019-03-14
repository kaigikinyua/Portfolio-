//importing modules
var express=require('express');
var path=require('path');
var server=express();
//serving static files
server.use('/',express.static('static'));

server.get('/',function(req,res){
	res.sendFile(path.join(__dirname, 'templates/index.html'));
});
server.listen(3000);
console.log('node server online at port 3000');
console.log(path.join(__dirname,'/static'));