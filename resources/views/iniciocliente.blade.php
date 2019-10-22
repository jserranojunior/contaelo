@extends('user.headercliente')

@section('main') 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
      <h1>
        PÁGINA INICIAL<br>       
        <small>Seja bem vindo</small>
      </h1>




      <!-- Large modal -->
<div class="modal fade" id="modalSaude" tabindex="-1" role="dialog" aria-labelledby="modalSaude" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
      <div class="container-fluid">
       
      <div class="row">
          <div class="col-md-6 bg-elo-portal">          
            <div class="row justify-content-center">
              <div class="col-xs-12 float-center">
              <button type="button" class="close text-left btn-white " data-dismiss="modal" aria-label="Close">
              <span class="text-white text-light" aria-hidden="true">&times;</span>
            </button>         
            <img src="/img/popup/elo-portal-saude.jpeg" class="img-popup img-responsive" alt="">
              </div>
            </div>
            
          </div>




          <div class="col-md-6 bg-usufrua text-center float-center">
          <!-- <button type="button" class="close text-left btn-white " data-dismiss="modal" aria-label="Close">
              <span class="text-white text-light" aria-hidden="true">&times;</span>
            </button>   -->
            <img src="/img/popup/usufrua.jpeg" class="img-popup img-responsive" alt="">
            
          </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#modalSaude').modal('show');
    });
</script>
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

  


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<style>
.img-popup.img-responsive {
    margin: 0 auto;
}
  .bg-elo-portal{
    background-color: #1d2e5c;
    color:white;
  }
  .bg-usufrua{
    background-color: #009ab2;
    color:white;
  }
  .modal-body {
    position: relative;
    padding: 0px;
}


.modal {
  text-align: center;
}

@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}

.close.text-left.btn-white {
    font-size: 30px;
    color: 
    white;
    text-align: left;
    float: left;
    opacity: 1;
}
</style>
 

@endsection