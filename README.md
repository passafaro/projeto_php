# Site Pessoal
## Seja bem vindo

Este sistema foi desenvolvido para gerenciar empresas e seu funcionarios.


## Vizualização do projeto

Para a visualização deste projeto o sistema encontra-se 
hospedados no seguinte link:
http://projetophp.alessandropassafaro.com.br/


## Sobre o projeto

Foi utilizando Codeigniter um framework para desenvolvimento de aplicações PHP 
que facilita no desenvolvimento, sendo gratuito, leve, 
rápido, extensível, possuindo estrutura MVC.
Para o front-end foi utilizado Bootstrap 4.



## Pré requisitos

Antes de iniciar o projeto, certifique-se que você tenha o docker e o Docker Compose instalado em seu ambiente.

## Criando a imagem do docker

Dentro dos projetos, existe um arquivo Dockerfile
Ele é responsável por definir a composição da camada da construção das imagens que iremos utilizar.

### Criando imagen

```bash
FROM php:5.6-apache
RUN docker-php-ext-install mysqli


# INSTALL PHP EXTENSIONS
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
#RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# ANABLE APACHE MOD REWRITE
RUN a2enmod rewrite

# ANABLE APACHE MOD HEADER
RUN a2enmod headers

# UPDATE APT-GET AND INSTALL LIBS
RUN apt-get update -y
RUN apt-get install -y openssl zip unzip git libnss3 libpng-dev
```

### docker-compose

O docker-compose.yml está configurado o services.

```yml
version: '3'

services:
  php:
    container_name: PHP
    build: .
    ports:
    - "80:80"
    - "443:443"
    volumes:
    - ./html:/var/www/html
    - ./custom.php.ini:/usr/local/etc/php/php.ini
    networks:
      - app-network

  mysql-app:
    container_name: mysql
    image: mysql:5.7.22
    ports: 
      - "3306:3306"
    volumes:
      - ./db/:/docker-entrypoint-initdb.d/
    environment:
      MYSQL_DATABASE: admin
      MYSQL_ROOT_PASSWORD: 12345
    networks:
      - app-network
  
  phpmyadmin:
    container_name: phpmyadmin
    image: phpmyadmin
    restart: always
    ports:
      - 8082:80
    environment:
      - PMA_ARBITRARY=1
    networks:
      - app-network
      
networks:
  app-network:
    driver: bridge
```



## Terminal

Para iniciar e visualizar o status dos containers
execute os seguintes comandos.


```bash
# Supondo que esteja na raiz do projeto
cd pasta-projeto

# Iniciar os containers
$ docker-compose up -d

# Vizualizar o status dos containers
$ docker-compose ps
```

O site estará disponível em [http://localhost](http://localhost/)

O SGBD (phpMyadmin) estará disponível em [http://localhost:8082/]
```bash
`DB_HOST`: mysql-app
`DB_USERNAME`: root
`DB_PASSWORD`: 12345
```

