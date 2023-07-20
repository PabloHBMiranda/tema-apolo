Para rodar o projeto:

Para habilitar e executar o container do Wordpress, execute o comando abaixo:
#### Run docker
```
docker-compose up

```
O comando abaixo vai instalar o pacotes do NPm/YARN.
Pelo TERMINAL do seu sistema operacional, entre na pasta tema-apolo e execute o comando abaixo:
#### Install yarn in theme directory
```
LINUX: cd public/wp-content/themes/tema-apolo
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



