@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">

{{--Tabla de Asignar Encargado--}}
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Registar Encargado</h6>
      </div>
      {{--Buton Asignar Nuevo Encargado--}}
      <div class="card-body px-0 pt-0 pb-2">
        <div class="card-header pb-0">
          <div class="d-flex flex-row justify-content-between">
              <div>
                  <h5 class="mb-0">Todos los Encargados Registrados</h5>
              </div>
              {{--Buton nuevo Encargado modal--}}
              <button type="button" class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#create">
                NUEVO
            </button> 
          </div>
      </div>
      
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Id Persona</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Establecimiento</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cargo</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th> 
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($encargados as $encargado)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                      {{--mini foto--}}
                    <div>
                      <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      {{$encargado->id}}
                    </div>
                  </div>
                </td>
                <td>{{$encargado->id_persona}}</td>
                <td class="align-middle text-center text-sm">
                  {{$encargado->id_establecimiento}}
                </td>
                <td class="align-middle text-center">
                  {{$encargado->cargo}}
                </td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$encargado->id}}">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$encargado->id}}">
                        Eliminar
                    </button>  
                 </td>
                </tr>
                @include('encargado.info')
                @endforeach
                
              </tbody>
            </table>
          </div>
          @include('encargado.create')
      </div>
    </div>
  </div>
</div>

    </div>
  </main>
  
  @endsection
