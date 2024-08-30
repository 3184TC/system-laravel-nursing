@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">


{{--Tabla de gestiones--}}
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Registar Establecimiento</h6>
            </div>
            {{--Buton nuevo gestion--}}
            <div class="card-body px-0 pt-0 pb-2">
              <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-0">Todas las gestiones</h5>
                    </div>
                    {{--Buton nuevo gestion modal--}}
                    <button type="button" class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#create">
                      NUEVO
                  </button> 
                </div>
            </div>
            
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Inicio</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Fecha de Fin</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th> 
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($gestions as $gestion)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <!-- mini foto-->
                          {{--<div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>--}}
                          <div class="d-flex flex-column justify-content-center">
                            {{$gestion->id}}
                          </div>
                        </div>
                      </td>
                      <td>{{$gestion->fecha_inicio}}</td>
                      <td>{{$gestion->fecha_fin}}</td>
                        <td>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$gestion->id}}">
                              Editar
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$gestion->id}}">
                              Eliminar
                          </button>  
                       </td>
                      </tr>
                      @include('gestion.info')
                      @endforeach
                    </tbody>
                  </table>
                </div>
                @include('gestion.create')
            </div>
          </div>
        </div>
      </div>     
    </div>
  </main>
  
  @endsection
