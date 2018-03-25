@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Show Detail</div>

                <div class="panel-body">

                	{!! Form::model($detail,array('route'=>['detail.update', $detail->id], 'method'=>'PUT')) !!}
	                	<div class="form-group">
	                		{!! Form::label('name', 'Name') !!}
	                		{{ $detail->name }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('email', 'Email') !!}
	                		{{ $detail->email }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('ic', 'IC No') !!}
	                		{{ $detail->ic }}
	                	</div>

	                	<div class="form-group">
						    {!! Form::label('Profile Image') !!}
						    {{ $detail->image }}
						</div>

	                	<div class="form-group">
	                		{!! Form::label('phonenumber', 'Phone Number') !!}
	                		{{ $detail->phonenumber }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('officenumber', 'Office Number') !!}
	                		{{ $detail->officenumber }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('occupation', 'Occupation') !!}
	                		{{ $detail->occupation }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('race', 'Race') !!}
	                		{{ $detail->race }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('religion', 'Religion') !!}
	                		{{ $detail->religion }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('address1', 'Address 1') !!}
	                		{{ $detail->address1 }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('address2', 'Address 2') !!}
	                		{{ $detail->address2 }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('poscode', 'Poscode') !!}
	                		{{ $detail->poscode }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('city', 'City') !!}
	                		{{ $detail->city }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('province', 'Province') !!}
	                		{{ $detail->province }}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('note', 'Note') !!}
	                		{{ $detail->note }}
	                	</div>

	                	<div>
                			<a class="btn btn-primary" href="{{ route('detail.index') }}"> Back</a>
            			</div>

                	{!! Form::close() !!}

                </div>
            </div>
            
            @if($errors->has())
            	<ul class="alert alert-danger">
	            	@foreach($errors->all() as $error)
	            		<li>{{ $error }}</li>
	            	@endforeach
	            </ul>
            @endif
            
        </div>
    </div>
</div>
@endsection
