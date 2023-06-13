@extends('layouts.app')

@section('template_title')
    {{ $poso->name ?? "{{ __('Show') Poso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Poso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('posos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Lista Id:</strong>
                            {{ $poso->lista_id }}
                        </div>
                        <div class="form-group">
                            <strong>usuario:</strong>
                            {{ $poso->user_id}}
                        </div>
                        <div class="form-group">
                            <strong>Presion:</strong>
                            {{ $poso->presion }}
                        </div>
                        <div class="form-group">
                            <strong>Gas:</strong>
                            {{ $poso->gas }}
                        </div>
                        <div class="form-group">
                            <strong>Conbustible:</strong>
                            {{ $poso->conbustible }}
                        </div>
                        <div class="form-group">
                            <strong>Carbono:</strong>
                            {{ $poso->carbono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
