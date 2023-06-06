@extends('layouts.app')

@section('template_title')
    {{ $listum->name ?? "{{ __('Show') Listum" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Listum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lista.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $listum->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
