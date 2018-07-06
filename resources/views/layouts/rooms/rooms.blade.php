<div class="sidenav">
@guest
<h1>Players</h1>
@else
<h1>Players</h1>
	@isset ($playersOnline)
	    
		@foreach(json_decode($playersOnline) as $player)
			<a class="room" href="">{{$player->name}}</a>

		@endforeach

	@endisset
	
	
@endguest
</div>
	
