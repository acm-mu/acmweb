# Marquette ACM - Website

## Directory Structure

Once you have downloaded and extracted the xinu tarball, you will see a
basic directory structure:

    admin/  archive/  assets/  members/  ./docker/  include/  php/
    js/  lib/  css/  .cpanel.yml  .gitignore  .htaccess  README

- `admin/` subsystem for administering the website. Includes dashboard for events and competition registration.
- `archive/` subsite (mu.acm.org/archive) for all previous competition information.
- `assets/` contains images, and documents used and offered by the website.
- `members/` subsite for mu.acm.org/members portion of the website.
- `.docker/` contains configuration files for running website locally for development.
- `include/` contains component files used on other pages throughout the website.
- `php/` contains PHP scripts, mostly for heavy database CRUD operations.
- `js/` contains code for all javascript of the website.
- `lib/` contains source for all libraries used for the website.
- `css/` contains code for the styling of the website.
- `.cpanel.yml` determines how and where the changed files deploy.
- `.gitignore` tells Git which files or folders to ignore.
- `.htaccess` configuration of website-access issues, such as URL redirection, URL shortening, access control, and more.
- `README` this document.

## Installation Instructions

### Running Locally on machine with Docker

1.  Install [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) if you do not already have it installed.
2.  Install Docker for your Operating System ([Mac OS](https://docs.docker.com/docker-for-mac/install/) | [Windows](https://docs.docker.com/docker-for-windows/install/))
    a. You can install Docker with [Homebrew](https://brew.sh/) on Mac.
    b. Here is a great, quick video explaining what Docker is. https://www.youtube.com/watch?v=Gjnup-PuquQ
3.  Clone this repo to your computer.
4.  Navigate to the repo directory.
5.  Run `docker-compose up -d` (`-d` means detached, which means you can close the terminal window and it will still run)
    a. To stop the containers, run `docker-compose down`
6.  There will now be 3 containers running (MySQL, PhpMyAdmin, and an Apache Web Server)
    a. You can access the website at http://localhost or http://127.0.0.1
    b. You can access the phpmyadmin site at http://localhost:5000 or http://127.0.0.1:5000
