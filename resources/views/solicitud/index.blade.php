@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">

      {{--Tabla de  Solicitud--}}
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Solicitud</h6>
            </div>
            {{--Buton nueva solicitud--}}
            <div class="card-body px-0 pt-0 pb-2">
              <div class="card-header pb-0">
                <button type="button" class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#create">
                  CREAR SOLICITUD
              </button>
                {{--<a href="{{route('asistenciales.pdf')}}" class="btn btn-success" target="blank">Crear</a>--}}
                <div class="d-flex flex-row justify-content-between"> 
                    <div>
                        <h5 class="mb-0">Todos las Solicitudes</h5>
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
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CITE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DIRIGIDO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CARGO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ESTABLECIMIENTO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA EMISION</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($solicituds as $solicitud)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                            {{--mini foto--}}
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            {{$solicitud->id}}
                            {{--@dump($solicitud->dirigido)--}}
                          </div>
                        </div>
                      </td>
                        <td>{{$solicitud->cite}}</td>
                        <td>{{$solicitud->dirigido}}</td>
                        <td>{{$solicitud->cargo}}</td>
                        <td>{{$solicitud->establecimiento}}</td>
                        <td>{{$solicitud->fecha_emision}}</td>
                        <td>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$solicitud->id}}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$solicitud->id}}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button> 
                          <form action="{{route('mostrarPDF',$solicitud->id)}}" target="blank" method="POST">
                            @csrf
                            @method('POST')
                            <button>PDF</button>
                          </form> 
                      </td>
                    </tr>
                      @include('solicitud.info')
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @include('solicitud.create')
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </main>
  

  @endsection