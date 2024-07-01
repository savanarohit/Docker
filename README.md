#### Docker & Docker Compose installation on Ubuntu OS

#### Update Ubuntu OS

sudo apt update

#### Install Docker dependencies

sudo apt install apt-transport-https ca-certificates curl software-properties-common -y && sudo apt update

#### Install Docker Community Edition and Docker Compose

sudo apt install Docker-ce -y && sudo apt install Docker-Compose -y

#### Create a Docker Group

sudo groupadd Docker

#### Add current user to the Docker Group

sudo usermod -aG Docker $USER && newgrp Docker

#### Reboot the system

sudo reboot

### Docker Commands

##### Create an image using this directory's Dockerfile

Docker build -t friendlyname.              

#### Run "friendlyname" mapping port 4000 to 80

Docker run -p 4000:80 friendlyname          

#### Same thing, but in detached mode

Docker run -d -p 4000:80 friendlyname       

#### Enter a running container

Docker exec -it [container-id] bash         

#### See a list of all running containers

Docker ps                                   

#### Gracefully stop the specified container

Docker stop <hash>                          

#### See a list of all containers, even the ones not running

Docker ps -a                                

#### Force shutdown of the specified container

Docker kill <hash>                          

#### Remove the specified container from this Machine

Docker rm <hash>                            

#### Remove force-specified container from this Machine

Docker rm -f <hash>                         

#### Remove all containers from this Machine

Docker rm $(Docker ps -a -q)                

#### Show all images on this Machine

Docker images -a            

#### Remove the specified image from this Machine

Docker rmi <imagename>

#### Remove all images from this Machine

Docker rmi $(Docker images -q)              

#### Live tail a container's logs

Docker logs <container-id> -f               

#### Login to this CLI session using your Docker credentials

Docker login                                

#### Tag <image> for upload to registry

Docker tag <image> username/repository:tag  

#### Upload tagged image to a registry

Docker push username/repository:tag         

#### Run image from a registry

Docker run username/repository:tag          

#### Remove all unused containers, networks, images (dangling and unreferenced), and volumes optionally. (Docker 17.06.1-ce and superior)

Docker system prune                         

#### Remove all unused containers, networks, and images not just dangling ones (Docker 17.06.1-ce and superior)

Docker system prune -a                      

#### Remove all unused local volumes

Docker volume prune 

#### Remove all unused networks

Docker network prune                        


### Docker Compose

#### Create and start containers
Docker-Compose up                           

#### Create and start containers in detached mode

Docker-Compose up -d                        

#### Stop and remove containers, networks, images, and volumes

Docker-Compose down                         

#### View output from containers

Docker-Compose logs                         

#### Restart all service

Docker-Compose restart                      

#### Pull all image service 

Docker-Compose pull                         

#### Build all image service

Docker-Compose build                        

#### Validate and view the Compose file

Docker-Compose config                       

#### Scale special service(s)

Docker-Compose scale <service_name>=<replica>

#### Display the running processes

Docker-Compose top                          

#### Start web service and runs bash as its command, remove the old container.

Docker-Compose run -rm -p 2022:22 web bash  

### Docker Services

#### Create new service

Docker service create <options> <image> <command>

#### Display detailed information Service(s)

Docker service inspect --pretty <service_name>   

#### List Services

Docker service ls                                

#### List the tasks of Services

Docker service ps                                

#### Scale special service(s)

Docker service scale <service_name>=<replica>    

#### Update Service options

Docker service update <options> <service_name>  

### Docker Stack 

#### List all running applications on this Docker host

Docker Stack ls                               

#### Run the specified Compose file

Docker Stack deploy -c <Composefile> <appname>

#### List the services associated with an app

Docker Stack services <appname>               

#### List the running containers associated with an app

Docker Stack ps <appname>                     

#### Tear down an application

Docker Stack rm <appname>                     

### Docker Machine

#### Create a VM (Mac, Win7, Linux)

Docker-Machine create --driver virtualbox myvm1                          

#### Win10

Docker-Machine create -d hyperv --hyperv-virtual-switch "myswitch" myvm1 

#### View basic information about your node

Docker-Machine env myvm1                                                 

#### List the nodes in your swarm

Docker-Machine ssh myvm1 "Docker node ls"                                

#### Inspect a node

Docker-Machine ssh myvm1 "Docker node inspect <node ID>"                 

#### View join token

Docker-Machine ssh myvm1 "Docker swarm join-token -q worker"             

#### Open an SSH session with the VM; type "exit" to end

Docker-Machine ssh myvm1                                                 

#### Make the worker leave the swarm

Docker-Machine ssh myvm2 "Docker swarm leave"                            

#### Make master leave, kill the swarm

Docker-Machine ssh myvm1 "Docker swarm leave -f"                         

#### Start a VM that is currently not running

Docker-Machine start myvm1                                               

#### Stop all running VMs

Docker-Machine stop $(Docker-Machine ls -q)                              

#### Delete all VMs and their disk images

Docker-Machine rm $(Docker-Machine ls -q)                                

#### Copy file to node's home dir

Docker-Machine scp Docker-Compose.yml myvm1:~                            

#### Deploy an app

Docker-Machine ssh myvm1 "Docker Stack deploy -c <file> <app>"           






