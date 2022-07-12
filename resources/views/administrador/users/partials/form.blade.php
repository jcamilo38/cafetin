
<div class="form.group">
{!! Form::label('name', 'Nombre'); !!}
{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}

</div>

<div class="form.group">
    {!! Form::label('email', 'Correo electrónico');  !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electrónico']) !!}
</div>

<div class="form.group">
    {!! Form::label('password', 'Contraseña');  !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese la contraseña']) !!}
</div>

