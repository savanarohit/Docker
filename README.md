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

1. [Docker Containers and Images]()
2. []()








## Use docker-compose to pull multiple of Docker app at once

# Create a docker-compose.yml as below

version: '3.1'
services:
  centos:
    image: centos
  ubuntu:
    image: ubuntu
  php:
    image: php
  node:
    image: node
  tomcat:
    image: tomcat
  python:
    image: python
  apache:
    image: httpd
  nginx:
    image: nginx
  redis:
    image: redis
  mysql:
    image: mysql
  golang:
    image: golang
  mongo:
    image: mongo
  consul:
    image: consul
  elasticsearch:
    image: elasticsearch:8.1.2
  mongo-express:
    image: mongo-express
  jenkins:
    image: jenkins/jenkins:lts-jdk11
  kibana:
    image: kibana:8.1.2
  drupal:
    image: drupal
  rocker.chat:
    image: rocket.chat
  backdrop:
    image: backdrop
  postfixadmin:
    image: postfixadmin

# Then run Docker-compose to pull all the images in parallel

sudo docker-compose pull --parallel

