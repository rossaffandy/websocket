<html>
<head>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>
var conn = new WebSocket('ws://192.168.199.130:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    //console.log(e.data);
    alert(e.data);
};

$(document).ready(function() {
 
   
  $('#send').click(function(e){
        e.preventDefault();
   	var text = $('textarea#msg').val();
	conn.send(text);
  });

});
</script>
</head>

<body>

<textarea id="msg" rows="10" cols="100"></textarea><br>
<button id="send">Send</button>
</body>
</html>
