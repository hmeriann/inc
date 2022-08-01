# INCEPTION

#### This project aims to broaden my knowledge of system administration by using Docker.
#### I will virtualize several Docker images, creating them in your new personal virtual machine

#### This project done on a Virtual Machine.

#### All the files required for the configuration of your project must be placed in a srcs folder.
#### A Makefile is also required and must be located at the root of your directory. It must set up your entire application (i.e., it has to build the Docker images using docker-compose.yml).

## TO-DO
1. Set up Virtual Machine by the [instruction](https://www.youtube.com/watch?v=j1FAZ0bUEvs) + [article](https://habr.com/ru/post/460173/) + [medium](https://medium.com/swlh/wordpress-deployment-with-nginx-php-fpm-and-mariadb-using-docker-compose-55f59e5c1a) (to work with the project via VSCode6 you should connect to new host using cmd+shift+P following instructions; to connect to the clone of your VM, you should remove the content of the file '/Users/hmeriann/.ssh/known_hosts' and make new connection as described earlier)
2. `$ sudo apt-get install vim`
`$ sudo apt-get install make`
and make your user sudoer with `sudo usermod -aG <username>`
3. For activating ssh: 
`$ sudo apt-get update`
`$ sudo apt install openssh-server`
Check activation with `systemctl status ssh`
4. About [LEMP](https://tech.osteel.me/posts/docker-for-local-web-development-part-1-a-basic-lemp-stack)