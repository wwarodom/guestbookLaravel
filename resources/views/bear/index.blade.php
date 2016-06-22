
@extends('layouts.app')
@section('content')

<div class="container">
	<h2>Bear database</h2>

	<table border="1">
		<tr><th>id</th><th>name</th><th>weight</th></tr>
		@foreach($bears as $bear )
			<tr>
				<td> {{$bear->id}} </td>
				<td> {{$bear->name}} </td>
				<td> {{$bear->weight}} </td>
				<td> <a href="edit/{{$bear->id}}"> edit </a> </td>
				<td> <a href="delete/{{$bear->id}}"> delete </a> </td>
			</tr>
		@endforeach  	
	</table>

	<hr> 
	<h2>Add new bear</h2>
  	{!! Form::open(['url' => array('add') ]) !!}
    {!! Form::label('name','Name:') !!}		
    {!! Form::text('name',null,['required' => 'required']) !!}	<br>	
    {!! Form::label('weight','weight:') !!}		
    {!! Form::number('weight',null,['required' => 'required']) !!}	<br>	
    {!! Form::submit('submit',['class' => 'btn btn-primary btn-sm']) !!}
    {!! Form::close() !!}

</div>	

@endsection