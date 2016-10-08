@extends('layout')


@section('content')

<div class="container">
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand">Bowling Tracker</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="/">Home</a></li>
				<li><a href="/bowler/dylan">Dylan</a></li>
				<li><a href="/bowler/justin">Justin</a></li>
				<li><a href="/bowler/isaiah">Isaiah</a></li>  
				<li><a href="/bowler/gary">Gary</a></li> 
			</ul>
		</div>
	</nav>

		<div class="row">
	<div class="col-md-4">
		<div class="panel panel-primary" style="height:250px; width:360px;">
			<div class="panel-heading text-center">High Score</div>
				<div class="panel-body text-center">
					<h2>{{ $highScore }}</h2>
					{{-- <img src="mb3.jpg" alt="cannot load image" `enter code here`class="img-responsive" />
					<button type="button" class="btn btn-primary btn-block">button</button> --}}
					
				</div>
		</div>
	</div>
	
	<div class="col-md-4">
		<div class="panel panel-primary" style="height:250px; width:360px;">
			<div class="panel-heading text-center">Average</div>
				<div class="panel-body text-center">
					<h2>{{ $averageScore }}</h2>
				</div>
			</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary" style="height:250px; width:360px;">
			<div class="panel-heading text-center">Recent</div>
				<div class="panel-body text-center">
					<h2>{{ $recentGame or null }}</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Bowling For: </h3>
		</div>
		<div class="panel-body">

			<table class="table tablesorter">
				<thead>
					<tr>
						<th>Game Id</th>
						<th>Name</th>
						<th>Score</th>
						<th>Date</th>		
					</tr>	
				</thead>
				<tbody>
				@foreach($allGames as $games)
					<tr>
						<td>{{ $games->id }}</td>
						<td>{{ $games->user }}</td>
						<td>{{ $games->score }}</td>
						<td>{{ $games->created_at }}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>

</div>


{{-- tablesorter plugin --}}
<script>
	$(document).ready(function() 
	    { 
	        $(".tablesorter").tablesorter(); 
	    } 
	);
</script> 


@endsection
