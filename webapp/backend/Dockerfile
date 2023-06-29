# specify base image
FROM node

# install dependencies
WORKDIR /usr/app
COPY package.json /usr/app/packag.json
COPY . .
RUN  npm install
EXPOSE 80
CMD [ "node","/usr/app/server.js"]
