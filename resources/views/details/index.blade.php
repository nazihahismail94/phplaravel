@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

        	@if (Session::has('message'))
        		<div class="alert alert-success">{{ Session::get('$message') }}</div>	
    		@endif

            <div class="panel panel-default">
                <div class="panel-heading">Details</div>

                <div class="panel-body">

                	<table class="table">
                		<tr>
                			<th>Name</th>
                			<th>Action</th>
                		</tr>
	                    @foreach($details as $detail)
	                    	<tr>
	                    		<td>{{ $detail->name}} </td>
	                    		<td>
	                    			<a class="btn btn-info" href="{{ route('detail.show',$detail->id) }}">Show</a>
	                    			|
            						<a class="btn btn-primary" href="{{ route('detail.edit',$detail->id) }}">Edit</a>
            						|
            						{!! Form::open(['method' => 'DELETE','route' => ['detail.destroy', $detail->id],'style'=>'display:inline']) !!}
            						{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            						{!! Form::close() !!}	
	                    		</td>
	                    	</tr>
	                    @endforeach
	                </table>
                </div>
            </div>

            <div>
                <a class="btn btn-success" href="{{ route('detail.create') }}"> Create New Data</a>
            </div>
            
        </div>
    </div>
</div>
@endsection
