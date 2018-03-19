@extends('_LayoutDashboard')

@section('content')
      
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Inventario</h3>
           

              <div class="box-tools">
                 
                <div class="input-group input-group-sm" style="width: 150px;">
                  
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                      
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <a class="btn bg-info margin" href="/dashboard/item/create" > <i class="fa fa-fw fa-plus"></i> Nuevo Articulo</a>
              <table class="table table-hover">


                <tbody>
                    <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                                 
                </tr>
                @foreach($items as $item)              
                <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->description}}</td>                            
                </tr>
            @endforeach


               
               
               
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

@endsection    

@section('scripts')
      
<script>
    setTitle('Articulos', 'Lista de articulos del inventario.');
//menuSelected('Servicios');    
</script> 

@endsection
