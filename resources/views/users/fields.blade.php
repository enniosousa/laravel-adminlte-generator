<div class="card m-2 p-2">
    <div class="row">
        <!-- Name Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('name', 'Nome completo') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Email Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('email', 'E-mail') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Password Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('password', 'Senha') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <!-- Confirmation Password Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('password', 'Confirmação de senha') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>

        <!-- Submit Field -->
        <div class="form-group col-sm-12">
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            <a href="{!! route('users.index') !!}" class="btn btn-default">Cancelar</a>
        </div>

    </div>
</div>