
@extends('admin.headeradm', $notificacoes)

@section('main') 
<div class="content-wrapper">
    <section class="content-header text-center">
        <h1>
        EDITAR VALOR <br>
        <small></small>
        </h1>      
    </section>
    
    <section class="content container-fluid">
        <form action="#">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th  class="text-center">DATA</th>
                                    <th  class="text-center">VALOR</th>
                                </tr>
                            </thead>
                            <tbody>   
                                <tr  class="mouse-point">
                                    <td><input type="date" name="data" class="form-control"></td>
                                    <td><input type="text" name="valor"  class="form-control   dinheiro_mascara"></td>
                                </tr>  
                            </tbody>
                        </table>   
                    </div>
                    <div class="box-footer">
                        <div class="col-xs-6 text-center">
                            <div class="btn btn-success ">SALVAR</div>
                        </div>
                        
                        <div class="col-xs-6  text-center">
                            <div class="btn btn-warning">CANCELAR</div>
                        </div>
                        
                    </div>
                </div>         
            </div>
        </form>
     </section>
  </div>

@endsection

