@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">

      {{--Tabla de Asignacion de Establecimientos--}}
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Asignar Establecimiento</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-0">Todas las Asignaciones de Establecimiento</h5>
                    </div>
                    {{--Buton nuevo Asignacion de Establecimiento modal--}}
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Asistencial</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Establecimiento</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Docente de Catedra</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Inicio</th> 
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Fin</th>                      
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th> 
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($asignacionsGeneral as $asignacion)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">{{$asignacion->id}}</div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Asistencial->nombre}}</td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Establecimiento->nombre}}</td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Nombramiento->docente}}</td>
                      <td class="align-middle text-center">{{$asignacion->fecha_inicio}}</td>
                      <td class="align-middle text-center">{{$asignacion->fecha_fin}}</td>
                        <td>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$asignacion->id}}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$asignacion->id}}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>  
                      </td>
                      </tr>
                      @include('asignacion.info')
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @include('asignacion.create')
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">

      {{--Listado por ESTABLECIMIENTO--}}
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>LISTAR</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-0">LISTAR POR ESTABLECIMIENTO</h5>
                    </div>
                    {{--Filtraciones--}}
                    <form method="GET" action="{{ route('asignacions.index') }}" class="d-flex align-items-center mb-4">
                      <div class="form-group me-3">
                          <select name="id_establecimiento" id="id_establecimiento" class="form-select">
                              <option value="">-- Seleccionar --</option>
                              @foreach($establecimientos as $establecimiento)
                                  <option value="{{ $establecimiento->id }}" {{ request('id_establecimiento') == $establecimiento->id ? 'selected' : '' }}>
                                      {{ $establecimiento->nombre }}
                                  </option>
                              @endforeach
                          </select>
                      </div>
                  
                      <div class="form-group">
                        <button type="submit" class="btn bg-gradient-primary btn-sm mb-0">Listar</button>
                      </div>
                    </form>
                </div>
            </div>
            
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Asistencial</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Establecimiento</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Docente de Catedra</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Inicio</th> 
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Fin</th>                      
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th> 
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($asignacionsEstablecimiento as $asignacion)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">{{$asignacion->id}}</div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Asistencial->nombre}}</td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Establecimiento->nombre}}</td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Nombramiento->docente}}</td>
                      <td class="align-middle text-center">{{$asignacion->fecha_inicio}}</td>
                      <td class="align-middle text-center">{{$asignacion->fecha_fin}}</td>
                        <td>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$asignacion->id}}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$asignacion->id}}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>  
                      </td>
                      </tr>
                      @include('asignacion.info')
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @include('asignacion.create')
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">

      {{--Listado por DOCENTE ASISTENCIAL--}}
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>LISTAR</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-0">LISTAR POR DOCENTE ASISTENCIAL</h5>
                    </div>
                    {{--Filtraciones--}}
                  </form> 
                  <form method="GET" action="{{ route('asignacions.index') }}" class="d-flex align-items-center mb-4">
                    <div class="form-group me-3">
                        <select name="id_asistencial" id="id_asistencial" class="form-select">
                            <option value="">-- Seleccionar --</option>
                            @foreach($asistencials as $asistencial)
                                <option value="{{ $asistencial->id }}" {{ request('id_asistencial') == $asistencial->id ? 'selected' : '' }}>
                                    {{ $asistencial->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                  
                    <div class="form-group">
                      <button type="submit" class="btn bg-gradient-primary btn-sm mb-0">Listar</button>
                    </div>
                  </form>
                </div>
            </div>
            
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Asistencial</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Establecimiento</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Docente de Catedra</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Inicio</th> 
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Fin</th>                      
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th> 
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($asignacionsAsistencial as $asignacion)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">{{$asignacion->id}} </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Asistencial->nombre}}</td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Establecimiento->nombre}}</td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Nombramiento->docente}}</td>
                      <td class="align-middle text-center">{{$asignacion->fecha_inicio}}</td>
                      <td class="align-middle text-center">{{$asignacion->fecha_fin}}</td>
                        <td>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$asignacion->id}}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$asignacion->id}}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>  
                      </td>
                      </tr>
                      @include('asignacion.info')
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @include('asignacion.create')
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> 
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">

      {{--Tabla de Listado por ID:NOMBRAMIENTO--}}
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>LISTAR</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-0">LISTAR POR DOCENTE DE CATEDRA</h5>
                    </div>
                    {{--Filtraciones--}}
                  </form> 
                  <form method="GET" action="{{ route('asignacions.index') }}" class="d-flex align-items-center mb-4">
                    <div class="form-group me-3">
                        <select name="id_nombramiento" id="id_nombramiento" class="form-select">
                            <option value="">-- Seleccionar --</option>
                            @foreach($nombramientos as $nombramiento)
                                <option value="{{ $nombramiento->id }}" {{ request('id_nombramiento') == $nombramiento->id ? 'selected' : '' }}>
                                    {{ $nombramiento->docente }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                  
                    <div class="form-group">
                      <button type="submit" class="btn bg-gradient-primary btn-sm mb-0">Listar</button>
                    </div>
                  </form>
                </div>
            </div>
            
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Asistencial</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Establecimiento</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Docente de Catedra</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Inicio</th> 
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Fin</th>                      
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th> 
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($asignacionsNombramiento as $asignacion)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">{{$asignacion->id}}</div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Asistencial->nombre}}</td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Establecimiento->nombre}}</td>
                      <td class="align-middle text-center text-sm">{{$asignacion->Nombramiento->docente}}</td>
                      <td class="align-middle text-center">{{$asignacion->fecha_inicio}}</td>
                      <td class="align-middle text-center">{{$asignacion->fecha_fin}}</td>
                        <td>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$asignacion->id}}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$asignacion->id}}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>  
                      </td>
                      </tr>
                      @include('asignacion.info')
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @include('asignacion.create')
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> 

  
  @endsection
