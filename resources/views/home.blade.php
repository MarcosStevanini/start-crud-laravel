@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Painel de Controle - Guanabara</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Email</th>
                          <th scope="col">Função</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($list as $data)
                          <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->role}}</td>
                            <td><a class="btn btn-success"href="{{route('edit', $data->id)}}">Editar</a></td>
                            <td><a class="btn btn-danger" href="{{route('delete', $data->id)}}">Deletar</a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <a href="{{url('create')}}" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
