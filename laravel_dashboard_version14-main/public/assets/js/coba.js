
// Create a client instance
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
  client.subscribe("hum2");
  client.subscribe("lux2");
  // var a=client.subscribe("hum1");
  // console.log(a);
  // document.getElementById("hum1").innerHTML =client.subscribe("hum1");
  
}
