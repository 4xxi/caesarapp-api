# caesarapp-server

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/3faba81b-8c9b-4f0c-aeef-b4ef741ac784/mini.png)](https://insight.sensiolabs.com/projects/3faba81b-8c9b-4f0c-aeef-b4ef741ac784)
[![CircleCI](https://circleci.com/gh/4xxi/caesarapp-server/tree/master.svg?style=shield)](https://circleci.com/gh/4xxi/caesarapp-server/tree/master.svg?style=shield)

==========
## Setup
### Linux/Windows/MacOS
Install [Docker and Docker Compose](https://docs.docker.com/engine/installation)
### MacOS only
Install Docker Sync
```bash
gem install docker-sync
```
## (!) Required configuration .env file
```bash
ENV=prod

# Required for the server api
WWW_DIR=/var/www/html
SERVER_HTTP_PORT=8080
SERVER_HOSTNAME=localhost
BASE_API_URL=http://localhost:8080

# Required for the client app
CLIENT_HTTP_PORT=8181
CLIENT_HOSTNAME=localhost
CLIENT_ORIGIN=http://localhost:8181

# Required for the mongodb
MONGODB_HOST=mongodb
MONGODB_PORT=27017
MONGODB_DATABASE=caesar
```

## Run
### Linux/Windows
```bash
docker-compose up -d
```
### MacOS
```bash
docker-sync-stack start
```
## Run with the web client in the prod mode
```bash
ENV=prod docker-compose -f docker-compose.yml -f docker-compose-client.yml up
```

## API
API documentation will be available at `/api` endpoint.
