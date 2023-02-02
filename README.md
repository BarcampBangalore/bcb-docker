## bcb-docker

BCB now in Docker and vscode devcontainer!

### What is it?

This repo consists of scaffolding to setup the dev environment in a vscopde devcontainer and uses docker-compose file and some supporting files required to bring up a local instance of BCB in docker containers for various services. When brought up, the running services include:
- WordPress 6.0
- Mysql 8.0
- Adminer (a web UI for MySQL)

The supporting files include:
- A submodule to fetch the [current theme](https://github.com/barcampbangalore/bcb-theme)(NeoBCB21 theme).
- bcbwp.sql (not committed, contact @sathyabhat for this) - a database dump of the current BCB info
- update-data.sql which changes the site URL & homepage to localhost (probably can add more scripts to scrub PII)
- wp-config.php with some defaults. 

## Dev only!
This is designed only for **dev, not for production**. Weakness includes:

- Extremely stupid database username and password
- Salts in `wp-config.php` (change it as per instructions mentioned in `wp-config.php` file)

## Getting started:

- Clone the repo: (see [this Stack Overflow answer](https://stackoverflow.com/q/3796927/92837))

      git clone --recurse-submodules git@github.com:BarcampBangalore/bcb-docker.git
      
 - place `bcbwp.sql` file in `migration-scripts/` directory
 - If you wish to use Visual Studio Code DevContainer (Recommended), Open the cloned repository folder in VS Code
   - Install the DevContainer Extension and (Re)build the dev container and open the folder in the dev container
   - The dev container should have all the environment you need for development. It can be improved over time but a consistent dev environment reduces the chances of age old software development issue of `Huh! it worked on my computer`
 - To bring up the BCB environment use docker compose
 
       docker-compose up
 - See below for Notes on How the setup worke
 - Done! 
 
 BCB will be running on port 80, MySQL on port 3306 and Adminer on port 8080
 
 ### How does it work?
 
 - DevContainer config sets up a container with required development environment and bind mounts the cloned repo from the host system into the dev container. This is standard devcontainer feature of vscode.
 - The Devcontainer also bind mounts the docker docket from the host into the devcontainer so any docker cli commands executed from inside the dev container talk to the docker daemon of the host and any containers created using docker CLI executed within the dev container create the containers on the host. This is known as [Docker-from-Docker](https://github.com/microsoft/vscode-dev-containers/tree/main/containers/docker-from-docker) model (as compared on [Docker-in-Docker](https://github.com/microsoft/vscode-dev-containers/tree/main/containers/docker-in-docker) model where containers are nested within the dev container).
 - Compose brings up 3 containers, WordPress, MySQL & Adminer
 - When MySQL is brought up, it runs the SQL files in `migration-scripts/` directory and the data is persisted to dbdata bind mount
 - When WordPress is brought up, it bind mounts the theme, wp-config.php, etc. from the cloned repo on host system into the wordpress container. This is achieved by defining the bind paths for wordpress container based on `${HOST_PROJECT_PATH}` environment variabnle which is mapped to vscode special variable `${localWorkspaceFolder}` in `devcontainer.json`. This facilitates the Docker-from-Docker model, where the `docker-compose.yml` file cannot define relative paths  for bind mounts as they would be resolved based on working directorty paths from inside the dev container while the actual wordpress container is created on the host where those paths may not match. 
 - Adminer is just a utility to browse and ticker with mysql DB data
 
 
