<div class="sidenav">
@guest
<h1>Users Online</h1>
@else
<h1>Users Online</h1>
	@isset ($playersOnline)
	    
		@foreach(json_decode($playersOnline) as $player)
			<a class="room" href="">{{$player->name}}</a>

		@endforeach

	@endisset
	
	
@endguest
</div>
	
