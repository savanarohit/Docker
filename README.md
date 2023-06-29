### Docker & Docker Compose installation on Ubuntu OS

## Install Docker requirements

sudo apt install apt-transport-https ca-certificates curl software-properties-common -y
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"

## Update Ubuntu OS

sudo apt update

## Install Docker Community Edition and Docker Compose

sudo apt install docker-ce -y
sudo apt install docker-compose -y

## Create a Docker Group

sudo groupadd docker

## Add current user to the Docker Group

sudo usermod -aG docker $USER && newgrp docker

## Reboot the system

sudo reboot
