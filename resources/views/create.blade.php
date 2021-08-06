@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
          <div class="card">
            <div class="card-header"><h2>Cadastrar Usuário</h2></div>
            <div class="card-body">
              <form name="formUser" id="formUser" method="POST" action="{{ route('store') }}">
                @csrf
                
                <input class="form-control" type="text" name="name" id="name" placeholder="Nome:">
                <input class="form-control" type="email" name="email" id="email" placeholder="E-mail:">
                <input class="form-control" type="text" name="role" id="role" placeholder="Função:">
                <input class="form-control" type="password" name="password" id="password" placeholder="Senha:">
              
                <input class="btn btn-primary" type="submit" value="Cadastrar" />

              </form>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection