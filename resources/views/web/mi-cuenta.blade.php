@extends('web.plantilla')
@section('contenido')

<!-- book section -->
<section class="book_section layout_padding">
      <div class="container">
            <div class="heading_container">
                  @if(isset($msg))
                  <div class="alert alert-{{ $msg['estado'] }}" role="alert">
                        {{$msg["msg"]}}
                  </div>
                  @endif
                  <div class="card border-light mb-3 col-6">
                        <div class="card-body">
                              <h2 class="card-title">{{ $cliente->nombre . " " . $cliente->apellido}}</h2>
                              <p class="card-text">Celular: {{ $cliente->celular}}</p>
                              <p class="card-text">Correo: {{ $cliente->correo}}</p>
                        </div>
                  </div>
                  <div class="form_container">                       
                        <div class="btn_box">
                              <button><a href="/cambiar-datos" class="text-white">Cambiar datos</a></button>                       
                              <button><a href="/cambiar-clave" class="text-white">Cambiar clave</a></button>
                        </div>                        
                  </div>
            </div>
      </div>
      <div class="pt-5">
            <div class="container">
                  <div class="heading_container">
                        <div class="card border-light mb-3 col-12">
                              <div class="card-body">
                                    <div>
                                          <h2 class="text-center p-4">Pedidos</h2>
                                          <table class="table table-striped table-hover border">
                                                <thead>
                                                      <tr>
                                                            <th>Pedido</th>
                                                            <th>Fecha</th>
                                                            <th>Descripción</th>
                                                            <th>Total</th>
                                                            <th>Sucursal</th>                                                            
                                                            <th>Estado</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      @foreach ($aPedidos as $item)
                                                            <tr>
                                                                  <td>{{$item->idpedido}}</td>
                                                                  <td>{{date_format(date_create($item->fecha), "d/m/Y H:i")}}</td>
                                                                  <td>{{$item->descripcion}}</td>                                                                                                            
                                                                  <td>${{number_format($item->total, 2, "," , ".")}}</td>                                                                                                                                
                                                                  <td>{{$item->sucursal}}</td>         
                                                                  <td>{{$item->estado}}</td>
                                                            </tr>                                                            
                                                      @endforeach
                                                </tbody>
                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>
<!-- end book section -->

@endsection