Para rodar o projeto:

Para habilitar e executar o container do Wordpress, execute o comando abaixo:
#### Run docker
```
docker-compose up
```
O comandoo "yarn install" vai instalar o pacotes do NPm/YARN.
Entre na pasta do tema pelo terminal e excute a instalação.

#### Directory
```
public/wp-content/themes/tema-apolo
```

#### Install yarn in theme directory
```
yarn install
```
Para iniciar o NPM/YARN execute o comando a baixo, após a instalação.
O comando deve ser executado no mesmo diretório que foi feita a instalação dos pacotes do NPM/YARN.
#### Run yarn in theme directory
```
yarn run watch
```
Infos Gerais:

No arquivo .env fica informações da execução do projeto. 

Caso não tenha o Wordpress instalado o comando "docker-compose up" vai efetuar a instalação automaticamente.



