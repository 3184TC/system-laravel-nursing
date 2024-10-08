@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">

      {{--Tabla de Certificado Dcoente Asistencial--}}
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>CERTIFICADOS</h6>
            </div>
            {{--Buton nuevo Docente Asistencial--}}
            <div class="card-body px-0 pt-0 pb-2">
              <div class="card-header pb-0">
                <button type="button" class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#create">
                  CREAR NUEVO CERTIFICADO
              </button>
                {{--<a href="{{route('asistenciales.pdf')}}" class="btn btn-success" target="blank">Crear</a>--}}
                <div class="d-flex flex-row justify-content-between"> 
                    <div>
                        <h5 class="mb-0">Todos los Certificados</h5>
                    </div>
                    {{--Buton nuevo Docente Asistencial modal
                    <button type="button" class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#create">
                      NUEVO
                  </button> --}}
                </div>
            </div>
            
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CERTIFICADO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CITE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CARGO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NOMBRE COMPLETO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ESTUDIANTES DE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ESTABLECIMIENTO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA EMISION</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($certificados as $certificado)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                            {{--mini foto--}}
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            {{$certificado->id}}
                          </div>
                        </div>
                      </td>
                        <td>{{$certificado->caso}}</td>
                        <td>{{$certificado->cite}}</td>
                        <td>{{$certificado->cargo}}</td>
                        <td>{{$certificado->nombre}}</td>
                        <td>{{$certificado->estudiante_de}}</td>
                        <td>{{$certificado->establecimiento}}</td>
                        <td>{{$certificado->fecha_emision}}</td>
                          <td>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$certificado->id}}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$certificado->id}}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>  
                      </td>
                      </tr>
                      @include('certificado.info')
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @include('certificado.create')
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </main>
  

  @endsection