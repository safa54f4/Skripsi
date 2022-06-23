
var mqtt = { hostname: "test.mosquitto.org", port: 8080 };
var topic_name = "data_alat";
var publish_cnt = 0;

// called when the client loses its connection
function onConnectionLost(responseObject) {
  if (responseObject.errorCode !== 0) {
    console.log("onConnectionLost: "+responseObject.errorMessage);
  }
}

// called when a message arrives
function onMessageArrived(message) {
  console.log("onMessageArrived  gfh: "+message.payloadString);
  const myArray = message.payloadString.split("_");
  // console.log(myArray[0]);
  // console.log(myArray[1]);
  if(myArray[0]=="h1"){
    document.getElementById("hum1").innerHTML =myArray[1];
  }
  if(myArray[0]=="l1"){
    document.getElementById("lux1").innerHTML =myArray[1];
  }
  if(myArray[0]=="r1"){
    document.getElementById("rain1").innerHTML =myArray[1];
  }
  if(myArray[0]=="j1"){
    document.getElementById("jam1").innerHTML =myArray[1];
  }
  if(myArray[0]=="rs1"){
    document.getElementById("rssi1").innerHTML =myArray[1];
  }
  // if(myArray[0]=="j1"){
  //   document.getElementById("jam1").innerHTML =myArray[1];
  // }
  // http://192.168.1.8/mqtt/send.php?id=1&lux=23&hum=344&rain=233&jam=20:32:33
    if(myArray[0]=="h2"){
    document.getElementById("hum2").innerHTML =myArray[1];
  }
  if(myArray[0]=="l2"){
    document.getElementById("lux2").innerHTML =myArray[1];
  }
  if(myArray[0]=="r2"){
    document.getElementById("rain2").innerHTML =myArray[1];
  }
  if(myArray[0]=="j2"){
    document.getElementById("jam2").innerHTML =myArray[1];
  }
  if(myArray[0]=="rs2"){
    document.getElementById("rssi2").innerHTML =myArray[1];
  }
}
$( document ).ready(function() {
 
  var client = new Paho.Client(mqtt.hostname, Number(mqtt.port), "sub-client-id");

// set callback handlers
client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived;

// connect the client
console.log("attempting to connect...")
client.connect({onSuccess:onConnect, useSSL: false});

// called when the client connects
function onConnect() {
  // Once a connection has been made, make a subscription and send a message.
  console.log("onConnect");
  client.subscribe("hum1");
  client.subscribe("lux1");
  client.subscribe("rain1");
  client.subscribe("jam1");
  client.subscribe("rssi1");
  client.subscribe("hum2");
  client.subscribe("lux2");
  client.subscribe("rain2");
  client.subscribe("jam2");
  client.subscribe("rssi2");
  // var a=client.subscribe("hum1");
  // console.log(a);
  // document.getElementById("hum1").innerHTML =client.subscribe("hum1");
  
}
  console.log( "ready!" );
});
