 
{!!Form::open(['route'=>'post.store','method'=>'post'])!!}


{!! Form::label('nombre', 'nombre', ['class' => 'col-md-4 control-label']) !!}
{!! Form::text('nombre', null, ['class' => 'form-control']) !!}

{!! Form::label('apellidos', 'nombre', ['class' => 'col-md-4 control-label']) !!}
{!! Form::text('apellidos', null, ['class' => 'form-control']) !!}

<div class="form-group">
<div class="col-md-offset-4 col-md-4">
{!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'aceptar', ['class' => 'btn btn-primary']) !!}
</div></div>    
                    {!!Form::close()!!}