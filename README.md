Requerimientos
==============
php 7 >=
curl
libpng-dev
openssl
php7.2-gd
postgresql 9 >=

INSTALACION
============

	Composer Install

	npm Install


CONFIGURACION
=============
	.env 
	-----
		Configurar Cuenta google 

			GOOGLE_SECRET=
			GOOGLE_URL=
			GOOGLE_ID=

		var mas en https://developers.google.com/+/web/api/rest/oauth
		
		habilitar google+ api

		Configurar Cuenta Faccebook 

			FACEBOOK_ID = 
			FACEBOOK_SECRET = 
			FACEBOOK_URL = 

		ver mas en https://developers.facebook.com/
	
		Configurar base de datos 
		
			DB_CONNECTION=
			DB_HOST=
			DB_PORT=
			DB_DATABASE=
			DB_USERNAME=
			DB_PASSWORD=





		Configurar Una clave personal para la creacion de una key de la api
		(se creara una clave de 60 caracteres hexadecimales que se usara en el juego (ClikerGame))

			PERSONAL_API_KEY="Un nombre para el User admin" 

			GAME_URL="URL a donde se va a redireccionar el jugador con el puerto "
			 #GAME_URL=http://localhost:5000/game/

Inicio
=======
	
	php artisan storage:link

	php artisan migrate --seed
	php artisan serve

	php artisan key:generate

	npm run watch

	Url de ingreso 127.0.0.1:8000/game

POST INSTALACION
=================

	Se creara un user admin que cuenta con un toquen para que las aplicaciones que la consuman puenda usar el auth (60 caracteres hexadecimales)
