# 🐳 Useful Docker Cli Commands

### ➡️ Check docker version
```
docker version
```

### 🔗[Docker Build](https://docs.docker.com/engine/reference/commandline/build/)
Build an image from Dockerfile
```
docker build [options] <image-name> .
```


### 🔗[Docker Run](https://docs.docker.com/engine/reference/commandline/run/)

Run commands in a new container
```
docker run [options] <image-name> [commands]
```

Run an image and execute a command inside the container and remove it immediately
```
docker run -d --rm <image-name> echo "Hello World"
```

Run an image, write container id into a file and copy the file into local machine
```
docker run --cidfile /tmp/docker_test.txt <image-name> && scp /tmp/docker_test.cid ~/docker_test.txt
```

Run an image and execute a file into the container. Finally remove the container.
```
docker run -d --rm -v <local-machine-path>/index.js:/home/rajin/index.js <image-name> node /home/rajin/index.js
```


### 🔗[Docker Volume](https://docs.docker.com/engine/reference/commandline/volume_create/)

Create new Docker Volume
```
docker volume create [options] <volume-name>
```


