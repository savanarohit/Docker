# Docker & Docker Compose installation on Ubuntu OS

## Update Ubuntu OS

sudo apt update

## Install Docker dependencies

sudo apt install apt-transport-https ca-certificates curl software-properties-common -y && sudo apt update

## Install Docker Community Edition and Docker Compose

sudo apt install docker-ce -y && sudo apt install docker-compose -y

## Create a Docker Group

sudo groupadd docker

## Add current user to the Docker Group

sudo usermod -aG docker $USER && newgrp docker

## Reboot the system

sudo reboot

# Docker Commands Documentation 

1. [Docker Containers](https://github.com/savanarohit/Docker/blob/main/docs/1_Docker_Containers.txt)
2. [Docker Images](https://github.com/savanarohit/Docker/blob/main/docs/2_Docker_Images.txt)
3. [Docker Volume](https://github.com/savanarohit/Docker/blob/main/docs/3_Docker_Volume.txt)
4. [Docker Networking](https://github.com/savanarohit/Docker/blob/main/docs/4_Docker_Networking.txt)
5. [Docker Compose](https://github.com/savanarohit/Docker/blob/main/docs/5_Docker_Compose.txt)
6. [Docker Swarm](https://github.com/savanarohit/Docker/blob/main/docs/6_Docker_Swarm.txt)
7. [Docker Hub](https://github.com/savanarohit/Docker/blob/main/docs/7_Docker_Hub.txt)





