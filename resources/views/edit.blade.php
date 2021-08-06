@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
          <div class="card">
            <div class="card-header"><h2>Editar Usuário</h2></div>
            <div class="card-body">
              <form name="formUser" id="formUser" method="POST" action="{{ route('update', $nameEdit->id) }}">
                @csrf
                @method('PUT')
                
                <input class="form-control" value="{{$nameEdit->name}}" type="text" name="name" id="name" placeholder="Nome:">
                <input class="form-control" value="{{$nameEdit->email}}" type="email" name="email" id="email" placeholder="E-mail:">
                <input class="form-control" value="{{$nameEdit->role}}" type="text" name="role" id="role" placeholder="Função:">
                <input class="form-control" value="{{$nameEdit->password}}" type="password" name="password" id="password" placeholder="Senha:">
              
                <input class="btn btn-success" type="submit" value="Editar" />

              </form>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection