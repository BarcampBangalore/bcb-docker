FROM fedora:37

RUN dnf -y update 
RUN dnf -y install dnf-plugins-core && dnf config-manager --add-repo https://download.docker.com/linux/fedora/docker-ce.repo
RUN dnf -y install git docker-ce-cli docker-compose-plugin 
