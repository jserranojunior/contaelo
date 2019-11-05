
@extends('admin.headeradm', $notificacoes)

@section('main') 

<div class="content-wrapper">
<section class="content-header text-center">
      <h1>
      PORTAL SAÚDE <br>
        <small></small>
      </h1>      
    </section>
    <section class="content container-fluid">
  <div class="box">
    <div class="box-body">
        <table class="table table-condensed table-hover" id="tabelaClientes">
      <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                    NOME
                    </th>
                    <th>
                    TELEFONE
                    </th>
                    <th>
                    EMAIL
                    </th>
                    <th>DATA SOLICITAÇÃO</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </table>   
  </div>
</div>   
        

    
     </section>  
 </div>


@endsection

