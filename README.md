# Marquette ACM Web Site

### Want to contribute?

##### Running Locally on machine with Docker

1. Install Git if you do not already have it installed.
2. Install Docker for your Operating System ([Mac OS](https://docs.docker.com/docker-for-mac/install/) | [Windows](https://docs.docker.com/docker-for-windows/install/))
   a. You can install Docker with Homebrew on Mac.
   b. Here is a great, quick video explaining what Docker is.
   https://www.youtube.com/watch?v=Gjnup-PuquQ
3. Clone this repo to your computer.
4. Navigate to the repo directory.
5. Run `docker-compose up -d` (`-d` means detached, which means you can close the terminal window and it will still run)
   a. To stop the containers, run `docker-compose down`
6. There will now be 3 containers running (MySQL, PhpMyAdmin, and an Apache Web Server)
   a. You can access the website at http://localhost or http://127.0.0.1
   b. You can access the phpmyadmin site at http://localhost:5000 or http://127.0.0.1:5000
