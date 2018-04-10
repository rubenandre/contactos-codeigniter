<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<!------ Include the above in your HEAD tag ---------->

<?php
	$user_id = $this->session->userdata('login_id');
	if(!$user_id){
	  
	  redirect('login');
	}
 
?>

<body class="hold-transition login-page" style="padding-top:10%">
  <div class="login-logo">
    <a href="#"><b>Meus </b>Contactos</a>
  </div>
  
  <div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading text-center"><h3 class="panel-title"><strong>Editar</strong></h3></div>

  <div class="panel-body">
    <?php foreach($editar as $row): ?>
    <form role="form" method="post" action="<?php echo base_url('sistema/update_contact'); ?>">

    <div class="form-group">
      <input type="number" name="id" id="id" class="form-control " value="<?php echo $row->id; ?>" disabled>
    </div>
    <div class="form-group">
      <input type="hidden" name="id_contacto" id="id_contacto" class="form-control " value="<?php echo $row->id; ?>">
    </div>
    <div class="form-group">
      <input type="text" name="nome" id="nome" class="form-control " value="<?php echo $row->nome; ?>">
    </div>
    <div class="form-group">
      <input type="number" size="9" name="telemovel" id="telemovel" class="form-control " value="<?php echo $row->telemovel; ?>">
    </div>
    <div class="form-group">
      <input type="text" name="cidade" id="cidade" class="form-control " value="<?php echo $row->cidade; ?>">
    </div>             

    <button type="submit" style="width: 200px; font-size: 14pt;" class="btn btn-warning center-block">Alterar</button>
  
    <hr style="margin-top:10px;margin-bottom:10px;" >
  
    </form>
    <?php endforeach; ?>
    </div>
  </div>
  </div>
</body>

