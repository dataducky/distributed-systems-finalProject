This submission by Mylo Counts contains the project report, a demo showcasing the end-to-end connection, and the two virtual machines that can be ran
on VMWare Workstation 17.
Below are the server credentials and a couple instructions to get the web server working.


These are the credentials for the Apache2 web server
Duckybuntu Server profile config:
name: Ducky
servname: duckyserv
username:ducky
password:quack123

Before Apache2 can launch, it must be restarted to initalize OpenSSL. To do this, run the following command on startup:
sudo systemctl restart apache2
[sudo] password for ducky?: quack123

OpenSSL can now be initialized with the following password:
cloud

These are the credentials for the MySQL database server
duckydb Server profile config:
Duckshirt
duckydb
dbdb
quack321
