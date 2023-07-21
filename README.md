#### Docker & Docker Compose installation on Ubuntu OS

#### Update Ubuntu OS

sudo apt update

#### Install Docker dependencies

sudo apt install apt-transport-https ca-certificates curl software-properties-common -y && sudo apt update

#### Install Docker Community Edition and Docker Compose

sudo apt install docker-ce -y && sudo apt install docker-compose -y

#### Create a Docker Group

sudo groupadd docker

#### Add current user to the Docker Group

sudo usermod -aG docker $USER && newgrp docker

#### Reboot the system

sudo reboot

#### Docker Commands Documentation 

1. [Docker Containers](https://github.com/savanarohit/Docker/blob/main/docs/1_Docker_Containers.txt)
2. [Docker Images](https://github.com/savanarohit/Docker/blob/main/docs/2_Docker_Images.txt)
3. [Docker Volume](https://github.com/savanarohit/Docker/blob/main/docs/3_Docker_Volume.txt)
4. [Docker Networking](https://github.com/savanarohit/Docker/blob/main/docs/4_Docker_Networking.txt)
5. [Docker Compose](https://github.com/savanarohit/Docker/blob/main/docs/5_Docker_Compose.txt)
6. [Docker Swarm](https://github.com/savanarohit/Docker/blob/main/docs/6_Docker_Swarm.txt)
7. [Docker Hub](https://github.com/savanarohit/Docker/blob/main/docs/7_Docker_Hub.txt)

### DOCKER Commands

##### Create image using this directory's Dockerfile

docker build -t friendlyname .              

#### Run "friendlyname" mapping port 4000 to 80

docker run -p 4000:80 friendlyname          

#### Same thing, but in detached mode

docker run -d -p 4000:80 friendlyname       

#### Enter a running container

docker exec -it [container-id] bash         

#### See a list of all running containers

docker ps                                   

#### Gracefully stop the specified container

docker stop <hash>                          

#### See a list of all containers, even the ones not running

docker ps -a                                

#### Force shutdown of the specified container

docker kill <hash>                          

#### Remove the specified container from this machine

docker rm <hash>                            

#### Remove force specified container from this machine

docker rm -f <hash>                         

#### Remove all containers from this machine

docker rm $(docker ps -a -q)                

#### Show all images on this machine

docker images -a            

#### Remove the specified image from this machine

docker rmi <imagename>

#### Remove all images from this machine

docker rmi $(docker images -q)              

#### Live tail a container's logs

docker logs <container-id> -f               

#### Login to this CLI session using your Docker credentials

docker login                                

#### Tag <image> for upload to registry

docker tag <image> username/repository:tag  

#### Upload tagged image to a registry

docker push username/repository:tag         

#### Run image from a registry

docker run username/repository:tag          

#### Remove all unused containers, networks, images (both dangling and unreferenced), and optionally, volumes. (Docker 17.06.1-ce and superior)

docker system prune                         

#### Remove all unused containers, networks, and images not just dangling ones (Docker 17.06.1-ce and superior)

docker system prune -a                      

#### Remove all unused local volumes

docker volume prune 

#### Remove all unused networks

docker network prune                        

################
DOCKER COMPOSE
################

#### Create and start containers
docker-compose up                           

#### Create and start containers in detached mode

docker-compose up -d                        

#### Stop and remove containers, networks, images, and volumes

docker-compose down                         

#### View output from containers

docker-compose logs                         

#### Restart all service

docker-compose restart                      

#### Pull all image service 

docker-compose pull                         

#### Build all image service

docker-compose build                        

#### Validate and view the Compose file

docker-compose config                       

#### Scale special service(s)

docker-compose scale <service_name>=<replica>

#### Display the running processes

docker-compose top                          

#### Start web service and runs bash as its command, remove the old container.

docker-compose run -rm -p 2022:22 web bash  

################
DOCKER SERVICES 
################

#### Create new service

docker service create <options> <image> <command>

#### Display detailed information Service(s)

docker service inspect --pretty <service_name>   

#### List Services

docker service ls                                

#### List the tasks of Services

docker service ps                                

#### Scale special service(s)

docker service scale <service_name>=<replica>    

#### Update Service options

docker service update <options> <service_name>  

################
DOCKER STACK 
################

#### List all running applications on this Docker host

docker stack ls                               

#### Run the specified Compose file

docker stack deploy -c <composefile> <appname>

#### List the services associated with an app

docker stack services <appname>               

#### List the running containers associated with an app

docker stack ps <appname>                     

#### Tear down an application

docker stack rm <appname>                     

################
DOCKER MACHINE
################

#### Create a VM (Mac, Win7, Linux)

docker-machine create --driver virtualbox myvm1                          

#### Win10

docker-machine create -d hyperv --hyperv-virtual-switch "myswitch" myvm1 

#### View basic information about your node

docker-machine env myvm1                                                 

#### List the nodes in your swarm

docker-machine ssh myvm1 "docker node ls"                                

#### Inspect a node

docker-machine ssh myvm1 "docker node inspect <node ID>"                 

#### View join token

docker-machine ssh myvm1 "docker swarm join-token -q worker"             

#### Open an SSH session with the VM; type "exit" to end

docker-machine ssh myvm1                                                 

#### Make the worker leave the swarm

docker-machine ssh myvm2 "docker swarm leave"                            

#### Make master leave, kill swarm

docker-machine ssh myvm1 "docker swarm leave -f"                         

#### Start a VM that is currently not running

docker-machine start myvm1                                               

#### Stop all running VMs

docker-machine stop $(docker-machine ls -q)                              

#### Delete all VMs and their disk images

docker-machine rm $(docker-machine ls -q)                                

#### Copy file to node's home dir

docker-machine scp docker-compose.yml myvm1:~                            

#### Deploy an app

docker-machine ssh myvm1 "docker stack deploy -c <file> <app>"           






