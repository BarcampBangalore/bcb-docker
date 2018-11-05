### bcb-docker

BCB now in Docker!

### What is it?

This repo consists of a docker-compose file and some supporting files required to bring up a local instance of BCB. When brought up, the running services include:
- WordPress 4.9.8
- Mysql 5.7
- Adminer (a web UI for MySQL)

The supporting files include:
- A submodule to fetch the [current theme](https://github.com/barcampbangalore/bcb-theme)(NeoBCB21 theme).
- bcbwp.sql (not committed, contact @sathyabhat for this) - a database dump of the current BCB info
- update-data.sql which changes the site URL & homepage to localhost (probably can add more scripts to scrub PII)
- wp-config.php with some defaults. 

### Dev only!
This is designed only for **dev, not for production**. Weakness includes:

- Extremely stupid database username and password
- Salts in `wp-config.php` (change it as per instructions mentioned in `wp-config.php` file)

### Getting started:

- Clone the repo: (see [this Stack Overflow answer](https://stackoverflow.com/q/3796927/92837))

      git clone --recurse-submodules 
      
 - place `bcbwp.sql` file in `migration-scripts/` directory
 - Start Compose
 
       docker-compose up
 - Done!
 
 BCB will be running on port 80, MySQL on port 3306 and Adminer on port 8080
 
 ### How does it work?
 
 - Compose brings up 3 containers, WordPress, MySQL & Adminer
 - When MySQL is brought up, it runs the SQL files in `migration-scripts/` directory and the data is persisted to dbdata bind mount
 - When WordPress is brought up, it loads wp-config.php and wp-content via bind mounts
 
 