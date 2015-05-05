#Proof of concept and example how to running socket server using Ratchet http://socketo.me/

#Requirement
Centos/Redhat/Fedora
```
yum install libevent libevent-devel php-pecl-zmq (EPEL/REMI Repo)
```

Debian/Ubuntu
```
apt-get install php-pear libevent libevent-dev libzmq-dev
pecl install channel://pecl.php.net/zmq-1.1.2
```

#Installation
```
composer install
```

#Running
1) Execute bin/push-server.php in terminal (In future, run through supervisord as daemon)
2) Open pusher.php in browser
3) Execute push.php in other terminal