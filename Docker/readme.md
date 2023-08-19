# Docker Commands 🧑‍💻
---
### 📌 To see current docker version
```
docker version
```
### 📌 To run a docker image
```
docker run <image name>
``` 
### 📌 Pull an image from docker hub
```
docker pull <image name>
```
### 📌 See the list of images in your machine
```
docker image ls
```
### 📌 Run an image
```
docker run <image name>
```
## 📌 Remove docker image created by the compose file
```
docker-compose down --rmi all -v
```
## 📌 Push an image to hub
```
docker tag <source-image-name> <anrajin/image-name:tag>

docker push <anrajin/image-name:tag>
```
