@extends('layouts.app')

@section('template_title')
    Poso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Poso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('posos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Lista Id</th>
                                        <th>user</th>
										<th>Presion</th>
										<th>Gas</th>
										<th>Conbustible</th>
										<th>Carbono</th>
                                        <th>creacion</th>
                                        <th>Actualizado</th>
                                        
                                    </tr>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posos as $poso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $poso->listum->nombre}}</td>
                                            <td>{{ $poso->user}}</td>
											<td>{{ $poso->presion }}</td>
											<td>{{ $poso->gas }}</td>
											<td>{{ $poso->conbustible }}</td>
											<td>{{ $poso->carbono }}</td>
                                            <td>{{ $poso->created_at }}</td>
                                            <td>{{ $poso->updated_at }}</td>


                                            <td>
                                                <form action="{{ route('posos.destroy',$poso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('posos.show',$poso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('posos.edit',$poso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $posos->links() !!}
            </div>
        </div>
    </div>
@endsection
