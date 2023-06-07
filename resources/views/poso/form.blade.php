<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('lista') }}
            {{ Form::select('lista_id',$listum, $poso->lista_id, ['class' => 'form-control' . ($errors->has('lista_id') ? ' is-invalid' : ''), 'placeholder' => 'Lista Id']) }}
            {!! $errors->first('lista_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::select('user_id',$User, $poso->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'usuario']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('presion') }}
            {{ Form::text('presion', $poso->presion, ['class' => 'form-control' . ($errors->has('presion') ? ' is-invalid' : ''), 'placeholder' => 'Presion']) }}
            {!! $errors->first('presion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gas') }}
            {{ Form::text('gas', $poso->gas, ['class' => 'form-control' . ($errors->has('gas') ? ' is-invalid' : ''), 'placeholder' => 'Gas']) }}
            {!! $errors->first('gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conbustible') }}
            {{ Form::text('conbustible', $poso->conbustible, ['class' => 'form-control' . ($errors->has('conbustible') ? ' is-invalid' : ''), 'placeholder' => 'Conbustible']) }}
            {!! $errors->first('conbustible', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carbono') }}
            {{ Form::text('carbono', $poso->carbono, ['class' => 'form-control' . ($errors->has('carbono') ? ' is-invalid' : ''), 'placeholder' => 'Carbono']) }}
            {!! $errors->first('carbono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>