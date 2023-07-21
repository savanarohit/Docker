#### Dokcer & Dokcer Compose installation on Ubuntu OS

#### Update Ubuntu OS

sudo apt update

#### Install Dokcer dependencies

sudo apt install apt-transport-https ca-certificates curl software-properties-common -y && sudo apt update

#### Install Dokcer Community Edition and Dokcer Compose

sudo apt install Dokcer-ce -y && sudo apt install Dokcer-Compose -y

#### Create a Dokcer Group

sudo groupadd Dokcer

#### Add current user to the Dokcer Group

sudo usermod -aG Dokcer $USER && newgrp Dokcer

#### Reboot the system

sudo reboot

#### Dokcer Commands Documentation 

1. [Dokcer Containers](https://github.com/savanarohit/Dokcer/blob/main/docs/1_Dokcer_Containers.txt)
2. [Dokcer Images](https://github.com/savanarohit/Dokcer/blob/main/docs/2_Dokcer_Images.txt)
3. [Dokcer Volume](https://github.com/savanarohit/Dokcer/blob/main/docs/3_Dokcer_Volume.txt)
4. [Dokcer Networking](https://github.com/savanarohit/Dokcer/blob/main/docs/4_Dokcer_Networking.txt)
5. [Dokcer Compose](https://github.com/savanarohit/Dokcer/blob/main/docs/5_Dokcer_Compose.txt)
6. [Dokcer Swarm](https://github.com/savanarohit/Dokcer/blob/main/docs/6_Dokcer_Swarm.txt)
7. [Dokcer Hub](https://github.com/savanarohit/Dokcer/blob/main/docs/7_Dokcer_Hub.txt)

### Dokcer Commands

##### Create image using this directory's Dokcerfile

Dokcer build -t friendlyname .              

#### Run "friendlyname" mapping port 4000 to 80

Dokcer run -p 4000:80 friendlyname          

#### Same thing, but in detached mode

Dokcer run -d -p 4000:80 friendlyname       

#### Enter a running container

Dokcer exec -it [container-id] bash         

#### See a list of all running containers

Dokcer ps                                   

#### Gracefully stop the specified container

Dokcer stop <hash>                          

#### See a list of all containers, even the ones not running

Dokcer ps -a                                

#### Force shutdown of the specified container

Dokcer kill <hash>                          

#### Remove the specified container from this Machine

Dokcer rm <hash>                            

#### Remove force specified container from this Machine

Dokcer rm -f <hash>                         

#### Remove all containers from this Machine

Dokcer rm $(Dokcer ps -a -q)                

#### Show all images on this Machine

Dokcer images -a            

#### Remove the specified image from this Machine

Dokcer rmi <imagename>

#### Remove all images from this Machine

Dokcer rmi $(Dokcer images -q)              

#### Live tail a container's logs

Dokcer logs <container-id> -f               

#### Login to this CLI session using your Dokcer credentials

Dokcer login                                

#### Tag <image> for upload to registry

Dokcer tag <image> username/repository:tag  

#### Upload tagged image to a registry

Dokcer push username/repository:tag         

#### Run image from a registry

Dokcer run username/repository:tag          

#### Remove all unused containers, networks, images (both dangling and unreferenced), and optionally, volumes. (Dokcer 17.06.1-ce and superior)

Dokcer system prune                         

#### Remove all unused containers, networks, and images not just dangling ones (Dokcer 17.06.1-ce and superior)

Dokcer system prune -a                      

#### Remove all unused local volumes

Dokcer volume prune 

#### Remove all unused networks

Dokcer network prune                        


### Dokcer Compose

#### Create and start containers
Dokcer-Compose up                           

#### Create and start containers in detached mode

Dokcer-Compose up -d                        

#### Stop and remove containers, networks, images, and volumes

Dokcer-Compose down                         

#### View output from containers

Dokcer-Compose logs                         

#### Restart all service

Dokcer-Compose restart                      

#### Pull all image service 

Dokcer-Compose pull                         

#### Build all image service

Dokcer-Compose build                        

#### Validate and view the Compose file

Dokcer-Compose config                       

#### Scale special service(s)

Dokcer-Compose scale <service_name>=<replica>

#### Display the running processes

Dokcer-Compose top                          

#### Start web service and runs bash as its command, remove the old container.

Dokcer-Compose run -rm -p 2022:22 web bash  

### Dokcer Services

#### Create new service

Dokcer service create <options> <image> <command>

#### Display detailed information Service(s)

Dokcer service inspect --pretty <service_name>   

#### List Services

Dokcer service ls                                

#### List the tasks of Services

Dokcer service ps                                

#### Scale special service(s)

Dokcer service scale <service_name>=<replica>    

#### Update Service options

Dokcer service update <options> <service_name>  

### Dokcer Stack 

#### List all running applications on this Dokcer host

Dokcer Stack ls                               

#### Run the specified Compose file

Dokcer Stack deploy -c <Composefile> <appname>

#### List the services associated with an app

Dokcer Stack services <appname>               

#### List the running containers associated with an app

Dokcer Stack ps <appname>                     

#### Tear down an application

Dokcer Stack rm <appname>                     

### Dokcer Machine

#### Create a VM (Mac, Win7, Linux)

Dokcer-Machine create --driver virtualbox myvm1                          

#### Win10

Dokcer-Machine create -d hyperv --hyperv-virtual-switch "myswitch" myvm1 

#### View basic information about your node

Dokcer-Machine env myvm1                                                 

#### List the nodes in your swarm

Dokcer-Machine ssh myvm1 "Dokcer node ls"                                

#### Inspect a node

Dokcer-Machine ssh myvm1 "Dokcer node inspect <node ID>"                 

#### View join token

Dokcer-Machine ssh myvm1 "Dokcer swarm join-token -q worker"             

#### Open an SSH session with the VM; type "exit" to end

Dokcer-Machine ssh myvm1                                                 

#### Make the worker leave the swarm

Dokcer-Machine ssh myvm2 "Dokcer swarm leave"                            

#### Make master leave, kill swarm

Dokcer-Machine ssh myvm1 "Dokcer swarm leave -f"                         

#### Start a VM that is currently not running

Dokcer-Machine start myvm1                                               

#### Stop all running VMs

Dokcer-Machine stop $(Dokcer-Machine ls -q)                              

#### Delete all VMs and their disk images

Dokcer-Machine rm $(Dokcer-Machine ls -q)                                

#### Copy file to node's home dir

Dokcer-Machine scp Dokcer-Compose.yml myvm1:~                            

#### Deploy an app

Dokcer-Machine ssh myvm1 "Dokcer Stack deploy -c <file> <app>"           






