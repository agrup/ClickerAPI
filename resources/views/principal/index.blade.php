@extends('layouts.principal')
	@guest
		
	@endguest
	@auth
	@include('maps.maps')
	@endauth
	
	