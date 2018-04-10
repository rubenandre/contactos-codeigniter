<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
	$user_id = $this->session->userdata('login_id');
	if($user_id){
	  
	  redirect('sistema');
	}
 
?>

<div class="container" style="margin-top:10%">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading text-center"><h3 class="panel-title"><strong>Registrar</strong></h3></div>

  <div class="panel-body">
    <form role="form" method="post" action="<?php echo base_url('register/register_user'); ?>">
    <?php 

    $error_msg = $this->session->flashdata('error_message');

    if($error_msg){
    ?>
    <div class="alert alert-danger">
    <a class="close" data-dismiss="alert" href="#">×</a><?php echo $error_msg ?>
    </div>
    <?php
    }
    ?>
	<div class="form-group">
      <input type="text" name="username" id="username" class="form-control " placeholder="Nome de utilizador" tabindex="1" required>
    </div>
    <div class="form-group">
      <input type="password" name="senha" id="senha" class="form-control " placeholder="Senha" tabindex="2" required>
    </div>
    <div class="form-group">
      <input type="text" name="nome" id="nome" class="form-control " placeholder="Nome Ex: Rúben" tabindex="3" >
    </div>
    <div class="form-group">
      <input type="text" name="apelido" id="apelido" class="form-control " placeholder="Apelido Ex: Silva" tabindex="4">
    </div>
                                                                     
    <button type="submit" style="width: 200px; font-size: 14pt;" class="btn btn-success center-block">Registrar</button>
  
    <hr style="margin-top:10px;margin-bottom:10px;" >
  
    <div class="form-group">
                                    
      <div style="font-size:85%">
        Já tem uma conta?
        <a href="<?php echo base_url('login'); ?>">
          Faça login
        </a>
      </div>
                                    
    </div> 
    </form>
    </div>
  </div>
  </div>
</div>