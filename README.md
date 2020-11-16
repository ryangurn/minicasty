# minicasty | cis 451/551 final project

## name

ryan gurnick

## project title

minicasty

## connection information

redacted for security here!

## project url

http://ix.cs.uoregon.edu/~rgurnick/final

## highlights
* so far just being allowed to use laravel is a major highlight.

## data model (11/11/2020) 
![Model](model.png)

## helpful things
* when working on a local machine, i wanted to use the same mysql version as ix, but ran into the issue of already having mariadb installed and running for other critical purposes on the same port. in dealing with this i decided to use docker on my local machine to work around this and just change the localhost port to '3307' with this i present the following helpful thing a command to docker that will setup the system properly for us. ```docker run -d -p 3307:3306 --name mysql -e MYSQL_DATABASE=minicasty -e MYSQL_USER=minicasty -e MYSQL_PASSWORD=123 -e MYSQL_ROOT_PASSWORD=123 -e MYSQL_ROOT_HOST=% -d mysql/mysql-server:8.0.22-1.1.18 --default-authentication-plugin=mysql_native_password``` just know that the username is minicasty and the password is 123 for that user and also root. this is just meant for testing on a local machine with docker
* [Apple Podcast Specification](https://help.apple.com/itc/podcasts_connect/#/itcb54353390)
* [Spotify Podcast Specification](https://podcasters.spotify.com/terms/Spotify_Podcast_Delivery_Specification_v1.6.pdf)
