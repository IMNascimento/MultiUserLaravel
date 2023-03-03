<h1 align="center">
  <br>
  <a href="#"><img src="https://narmament.com/src/imagem/logo.png" alt="Nascimento" width="200"></a>
  <br>
  Nascimento
  <br>
</h1>

<h4 align="center">Login MultiUser com Laravel 10x.</h4>
<!--
<p align="center">
  <a href="https://badge.fury.io/js/electron-markdownify">
    <img src="https://badge.fury.io/js/electron-markdownify.svg"
         alt="Gitter">
  </a>
  <a href="https://gitter.im/amitmerchant1990/electron-markdownify"><img src="https://badges.gitter.im/amitmerchant1990/electron-markdownify.svg"></a>
  <a href="https://saythanks.io/to/bullredeyes@gmail.com">
      <img src="https://img.shields.io/badge/SayThanks.io-%E2%98%BC-1EAEDB.svg">
  </a>
  <a href="https://www.paypal.me/AmitMerchant">
    <img src="https://img.shields.io/badge/$-donate-ff69b4.svg?maxAge=2592000&amp;style=flat">
  </a>
</p>
<p align="center">
  <a href="#key-features">Key Features</a> •
  <a href="#how-to-use">How To Use</a> •
  <a href="#download">Download</a> •
  <a href="#credits">Credits</a> •
  <a href="#related">Related</a> •
  <a href="#license">License</a>
</p>
-->


## Atenção

* Commit - Cada commit corresponde a uma alteração no código.
  - Então caso você queira criar mais usuários só seguir os commits realizados.
* Código
  - Esse código está só com os usuários "USER" e "ADMIN" criados, com o framework Laravel 10x e php 8.x.
  
* Utilize o nosso discord para estudos <a href="https://discord.gg/x4XyBtgF"><img src="https://cloud.githubusercontent.com/assets/6291467/26705903/96c2d66e-477c-11e7-9f4e-f3c0efe96c9a.png" width="20px" heigth="20px"></a>
* Veja nossos videos no nosso canal no youtube <a href="https://www.youtube.com/channel/UC2UniIDdpqHH6tUFedkMfJQ"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" style="width:30px; heigth:30px; border-radius: 10px;" alt="Watch the video"  border="10" /></a>


## Como Usar

Realize um fork dele ou clone o projeto. Verificando os commits você verá que toda estrutura é basica apenas para realizar autenticação, você pode usar ele como base em seus projetos. Aqui toda ajuda é bem vinda:

```bash
# Clone this repository
$ git clone https://github.com/IMNascimento/MultiUserLaravel.git
# Crie um bando de dados.
# Agora configure o arquivo .env o seu bando de dados
# Em seguida execute os seguintes códigos
# Para subir suas tabelas que estão nas migrations
$ php artisan migrate
# já exsistem dois usuários cadastrados no sistema admin@laravel.com e o user@laravel.com com ambas a senhas de 1 a 8. Executando o db:seed você já consegui ter esses usuarios 
$ php artisan db:seed
# para iniciar o serviço apache do artisan 
$ php artisan serve
# agora só ir na web e testar

``` 
