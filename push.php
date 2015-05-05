<?php
    //sending dummy data to websocket subscriber client (push.php => pusher.php)
	
	$user_id = 1; //dummy user id
    $entryData = array(
       'channel' => "test_$user_id",
	   'category' => 'test',
       'title'    => 'testing',
       'article'  => 'hello world',
       'time'     => time()
    );


    // This is our new stuff
    $context = new ZMQContext();
    $socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'pusher');
    $socket->connect("tcp://localhost:5555");

    $socket->send(json_encode($entryData));
