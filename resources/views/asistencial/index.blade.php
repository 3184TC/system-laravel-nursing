@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">

      {{--Tabla de Docentes Asistenciales--}}
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Registar Docente Asistencial</h6>
            </div>
            {{--Buton nuevo Docente Asistencial--}}
            <div class="card-body px-0 pt-0 pb-2">
              <div class="card-header pb-0">
                <a href="{{route('asistenciales.pdf')}}" class="btn btn-success" target="blank">PDF</a>
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-0">Todos los Docentes Asistenciales Registrados</h5>
                    </div>
                    {{--Buton nuevo Docente Asistencial modal--}}
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombres y Apellidos</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Genero</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cargo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CI</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Celular</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th> 
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($asistencials as $asistencial)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                            {{--mini foto--}}
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            {{$asistencial->id}}
                          </div>
                        </div>
                      </td>
                        <td>{{$asistencial->nombre}}</td>
                        <td>{{$asistencial->genero}}</td>
                        <td>{{$asistencial->cargo}}</td>
                        <td>{{$asistencial->ci}}</td>
                        <td>{{$asistencial->celular}}</td>
                          <td>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$asistencial->id}}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$asistencial->id}}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>  
                      </td>
                      </tr>
                      @include('asistencial.info')
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @include('asistencial.create')
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  @endsection
