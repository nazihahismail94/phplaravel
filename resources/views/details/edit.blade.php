@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data</div>

                <div class="panel-body">

                	{!! Form::model($detail,array('route'=>['detail.update', $detail->id], 'method'=>'PUT')) !!}
	                	<div class="form-group">
	                		{!! Form::label('name', 'Name') !!}
	                		{!! Form::text('name', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('email', 'Email') !!}
	                		{!! Form::text('email', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('ic', 'IC No') !!}
	                		{!! Form::text('ic', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
						    {!! Form::label('Profile Image') !!}
						    {!! Form::file('image', null) !!}
						</div>

	                	<div class="form-group">
	                		{!! Form::label('phonenumber', 'Phone Number') !!}
	                		{!! Form::text('phonenumber', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('officenumber', 'Office Number') !!}
	                		{!! Form::text('officenumber', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('occupation', 'Occupation') !!}
	                		{!! Form::text('occupation', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('race', 'Race') !!}
	                		{!! Form::text('race', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('religion', 'Religion') !!}
	                		{!! Form::text('religion', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('address1', 'Address 1') !!}
	                		{!! Form::text('address1', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('address2', 'Address 2') !!}
	                		{!! Form::text('address2', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('poscode', 'Poscode') !!}
	                		{!! Form::text('poscode', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('city', 'City') !!}
	                		{!! Form::text('city', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('province', 'Province') !!}
	                		{!! Form::text('province', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::label('note', 'Note') !!}
	                		{!! Form::textarea('note', null,['class'=>'form-control']) !!}
	                	</div>

	                	<div class="form-group">
	                		{!! Form::button('Update',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
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
