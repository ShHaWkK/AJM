# Dockerfile pour le frontend

FROM node:latest

WORKDIR /usr/src/app

COPY package*.json ./

RUN npm install

COPY . .

RUN npm run build

RUN npm install -g serve

EXPOSE 8083

CMD ["serve", "-s", "dist", "-l", "8083", "--single"]
