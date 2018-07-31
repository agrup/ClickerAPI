



@if (!empty($success))
	<div class="alert alert-success">
	  <strong>{{ $success }}</strong>
	</div>

@endif

@if (!empty($warning))
	<div class="alert alert-warning">
	  <strong>{{ $warning }}</strong>
	</div>

@endif