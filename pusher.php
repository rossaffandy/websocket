<html>
<head>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://autobahn.s3.amazonaws.com/js/autobahn.min.js"></script>
<script>
    var conn = new ab.Session('ws://192.168.199.130:8080',
        function() {
			var channel = 'test_1'; //this is subscribe channel + user id
			conn.subscribe(channel, function(topic, data) {
				var txt = $('textarea#data');
				txt.val( txt.val() + 'Channel: ' + topic + ' Category: ' + data.category + ' Title: ' + data.title + ' Time: ' + data.time + '\r\n');
            });
        },
		
        function() {
            console.warn('WebSocket connection closed');
        },
		
        {'skipSubprotocolCheck': true}
    );
</script>

</head>

<body>
<textarea id="data" rows="10" cols="100"></textarea><br>
</body>
</html>
