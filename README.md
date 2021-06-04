# Docker

## `Description`

The objective of this assignment is to deploy a Custom image which has php files in it with apache server and a mysql image using a compose file in swarm mode. Then to establish a connection between the mysql and apache server.   

## `Create Custom Image`

To create a image run the Dockerfile which is present in the `src` directory as follows,

```
docker build -t phpimg:latest ./src
```

This image will consists of php files of the application along with apache2 server and stored in the local memory.

## `Swarm orchestration`


The initial requirement is one or more hosts with docker installed in it, It can be verified using the command `docker --version`.

Then initializing one host system as manager node in the swarm cluster using the command as follows,

```docker
docker swarm init --advertise-addr <manager-ip>
```

We can add a node to the swarm as a manager or worker node using the docker swarm join token 

```docker
$ docker swarm init --advertise-addr 192.168.99.100
Swarm initialized: current node (dxn1zf6l61qsb1josjja83ngz) is now a manager.

To add a worker to this swarm, run the following command:

    docker swarm join \
    --token SWMTKN-1-49nj1cmql0jkz5s954yi3oex3nedyz0fb0xx14ie39trti4wxv-8vxv8rssmk743ojnwacrr2e7c \
    192.168.99.100:2377

To add a manager to this swarm, run 'docker swarm join-token manager' and follow the instructions.
```

Run `docker info` to view the current state of the swarm

Run the `docker node ls` command to view information about nodes

To deploy the application to the nodes, we have to run the docker compose file which has details like image name, how many replicas, port mapping, environmental variables etc ...

Usage is as follows , 

```docker
docker stack deploy -c stack.yml
```

The services can be verified by using the following commands such as `docker service ls` ,  `docker service logs <service-name>` .