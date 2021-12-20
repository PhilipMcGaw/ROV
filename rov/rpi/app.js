// Install socket.io by typing: npm install socket.io
// Install zeparser: npm install zeparser

var fs, http, io, server, net;
fs = require(‘fs’);
http = require(‘http’);
net = require(‘net’);

var light1 = true;
var light2 = true;

server = http.createServer(function(req, res) {
return fs.readFile(“” + __dirname + “/socket.io.mobil2an.html”, function(err, data) {

res.writeHead(200, {
‘Content-Type’: ‘text/html’
});
return res.end(data, ‘utf8′);
});
});
server.listen(1338);

//return socket.broadcast.send(message);
var dgram = require(‘dgram’);
//var message = new Buffer(“PyHB”);
var server_ip = “localhost”;
var server_port = 9090;
var beat_period = 5;
var debug = 1;
console.log(“Sending heartbeat to IP ” + server_ip + ” , port ” + server_port);
console.log(“press Ctrl-C to stop”);

var client = dgram.createSocket(“udp4″);

//io = require(‘socket.io’).listen(9091);

/*
net.createServer(function(socket2){
socket2.on(‘data’, function(data){
console.log(“The message data” + data);
socket2.write(‘This is your request: “‘ + data + ‘”‘);
});
}).listen(9999);
*/

io = require(‘socket.io’).listen(server);

io.sockets.on(‘connection’, function(socket) {
//console.log(socket);
socket.emit(“publish”, “Connected.”);

fs.writeFile(“” + __dirname + “/log2.txt”, “Hello! My name is Rasver your Raspberry Rover!\n”);
/*
socket.on(‘publish’, function(message) {
return io.sockets.send(message);
});*/
socket.on(‘broadcast’, function(message) {
var message = new Buffer(message);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){
client.close();
});
if (debug)
console.log(“Time: ” + new Date());

});

socket.on(‘message’, function(data){
console.log(“The message data ” + data);
socket.emit(“data”,data);
});

socket.on(‘getfile’, function(data){
console.log(“The message data ” + data);
socket.emit(“data”,data);
});

socket.on(‘forward’, function(message2) {
//socket.emit(“publish”,message2)
var message = new Buffer(“w”);

return client.send(message, 0, message.length, server_port, server_ip, function(message2,bytes){

});

if (debug)
console.log(“Time: ” + new Date());

});

socket.on(‘reverse’, function(message) {

//socket.emit(“publish”,message)
var message = new Buffer(“x”);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){

});

if(debug)
console.log(“Time: ” + new Date());

});
socket.on(‘left’, function(message) {
//socket.emit(“publish”,message);
var message = new Buffer(“a”);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){

});

if (debug)
console.log(“Time: ” + new Date());

});
socket.on(‘right’, function(message) {
//socket.emit(“publish”,message);
var message = new Buffer(“d”);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){

});

if (debug)
console.log(“Time: ” + new Date());

});
socket.on(‘stop’, function(message) {
//socket.emit(“publish”,message);
var message = new Buffer(“s”);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){

});

if (debug)
console.log(“Time: ” + new Date());

});
socket.on(’1′, function(message2) {
//socket.emit(“publish”,”Camera ” + message2);
var message = new Buffer(message2);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){

});

if (debug)
console.log(“Time: ” + new Date());

});
socket.on(’2′, function(message2) {
//socket.emit(“publish”,”Camera ” + message2);
var message = new Buffer(message2);
return client.send(message, 0, message.length, server_port, server_ip, function(message2,bytes){

});

if (debug)
console.log(“Time: ” + new Date());

});
socket.on(’3′, function(message2) {
//socket.emit(“publish”,”Camera ” + message2);
var message = new Buffer(message2);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){

});

if (debug)
console.log(“Time: ” + new Date());

});
socket.on(‘fl’, function(message) {
//socket.emit(“publish”,message);
var message = new Buffer(“q”);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){
//client.close();
});
if (debug)
console.log(“Time: ” + new Date());

});

socket.on(‘fr’, function(message) {
//socket.emit(“publish”,message);
var message = new Buffer(“e”);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){
//client.close();
});
if (debug)
console.log(“Time: ” + new Date());

});

socket.on(‘reverse’, function(message) {
//socket.emit(“publish”,message);
var message = new Buffer(“x”);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){
//client.close();
});
if (debug)
console.log(“Time: ” + new Date());
});

socket.on(‘rl’, function(message) {
//socket.emit(“publish”,message);
var message = new Buffer(“z”);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){
//client.close();
});
if (debug)
console.log(“Time: ” + new Date());

});

socket.on(‘rr’, function(message) {
//socket.emit(“publish”,message);
var message = new Buffer(“c”);
return client.send(message, 0, message.length, server_port, server_ip, function(err,bytes){
//client.close();
});
if (debug)
console.log(“Time: ” + new Date());

});

socket.on(‘light1′, function(message) {
//socket.emit(“publish”,message);
var message = new Buffer(“i”);
if(light1){
message = new Buffer(“i”);
light1 = false;
return client.send(message, 0, message.length, server_port, server_ip);

}else{
message = new Buffer(“p”);
light1 = true;
return client.send(message, 0, message.length, server_port, server_ip);

}
if (debug)
console.log(“Time: ” + new Date());
});
socket.on(‘light2′, function(message) {
//socket.emit(“publish”,message);
var message = new Buffer(“u”);
if(light2){
message = new Buffer(“u”);
light2 = false;
return client.send(message, 0, message.length, server_port, server_ip);

}else{
message = new Buffer(“o”);
light2 = true;
return client.send(message, 0, message.length, server_port, server_ip);

}
if (debug)
console.log(“Time: ” + new Date());
});
socket.on(‘whisper’, function(message) {
return socket.broadcast.emit(‘secret’, message);
});
});

net.createServer(function(socket2){
socket2.on(‘data’, function(data){
console.log(“The message data: ” + data);
//socket2.write(‘This is your request: “‘ + data + ‘”‘);
//return ii.sockets.send(“data”,data);
//return ss.send(“data”,data);
//fs.writeFile(“test.txt”, data);

//Set our log file as a writestream variable with the ‘a’ flag
var logFile = fs.createWriteStream(“” + __dirname + “/log2.txt”, {
flags: “a”,
encoding: “encoding”,
mode: 0744
})
//call the write option where you need to append new data
logFile.write(data+”\n”);

});
}).listen(1234);