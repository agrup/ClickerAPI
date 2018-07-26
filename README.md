Requerimientos
==============
php 7 >=
curl
libpng-dev
openssl



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

		Configurar Cuenta Faccebook

			FACEBOOK_ID = 
			FACEBOOK_SECRET = 
			FACEBOOK_URL = 

		Configurar base de datos
		
			DB_CONNECTION=
			DB_HOST=
			DB_PORT=
			DB_DATABASE=
			DB_USERNAME=
			DB_PASSWORD=

		Configurar cuenta PUSHER

			BROADCAST_DRIVER=pusher

			PUSHER_APP_ID=
			PUSHER_APP_KEY=
			PUSHER_APP_SECRET=
			PUSHER_APP_CLUSTER=

		Configurar Una clave personal para la creacion de una key de la api

			PERSONAL_API_KEY="Aqui va cualquier texto" 

			GAME_URL="URL a donde se va a redireccionar el jugador con el puerto "
			 #GAME_URL=http://localhost:5000/game/

Inicio
=======

	php artisan migrate --seed
	php artisan serve

	npm run watch


POST INSTALACION
=================

	Se creara un user admin que cuenta con un toquen para que las aplicaciones que la consuman puenda usar el auth
