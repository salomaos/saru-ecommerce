FROM gitpod/workspace-mysql
                    
USER gitpod

RUN wget -q https://packages.microsoft.com/config/ubuntu/19.10/packages-microsoft-prod.deb -O packages-microsoft-prod.deb
RUN sudo dpkg -i packages-microsoft-prod.deb
RUN sudo apt-get update
RUN sudo apt-get install -y apt-transport-https
RUN sudo apt-get install -y dotnet-sdk-3.1

# Install custom tools, runtime, etc. using apt-get
# For example, the command below would install "bastet" - a command line tetris clone:
#
# RUN sudo apt-get -q update && #     sudo apt-get install -yq bastet && #     sudo rm -rf /var/lib/apt/lists/*
#
# More information: https://www.gitpod.io/docs/config-docker/
