@extends('layouts.master')

@section('content')

	<div class="row">
		<h1>Oversigt for {{ Auth::user()->company->name }}</h1>
	</div>
	<div class="row">
		@foreach($storages as $storage)
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-sm-12">
								<h2><a href="/storage/{{ $storage->name }}">{{ $storage->name }}</a>
										@if($storage->is_open)
											<span class="label label-success label-xs pull-right"> Åbent
												{{ $storage->updated_at }}</span>
										</c:when>
										@else
											<span class="label label-danger pull-right">Lukket
												{{ $storage->updated_at }}</span>
										@endif
								</h2>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-6">
								<form method="POST" action="#">
									<button type="submit" class="btn btn-primary btn-lg btn-block">Start tal</button>
								</form>
							</div>
							<div class="col-xs-6">
								<form method="POST" action="#">
									<button type="submit" class="btn btn-default btn-lg btn-block">Slut tal</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection