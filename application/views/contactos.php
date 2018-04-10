<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/_all-skins.min.css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<?php
	$user_id = $this->session->userdata('login_id');
	if(!$user_id){
	  
	  redirect('login');
	}
 
?>

<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('sistema'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>CT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Meus </b>Contactos</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menus</li>
        <li class="treeview">
          <a href="<?php echo base_url('sistema'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview active">
          <a href="<?php echo base_url('sistema/contactos'); ?>">
            <i class="fa fa-users"></i> <span>Contactos</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      &nbsp
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('sistema'); ?>"><i class="fa fa-dashboard"></i> Sistema</a> / <a href="<?php echo base_url('sistema/contactos'); ?>">Contactos</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Contactos</h3>
        </div>
        <div class="col-md-2" style="padding-bottom: 0px;">
          <form action="<?php echo base_url('sistema/add'); ?>">
            <button class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</button>
          </form>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Telemóvel</th>
                <th>Cidade</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($query as $row): ?>
              <tr>
                <th><?php echo $row->id; ?></th>
                <td><?php echo $row->nome; ?></td>
                <td><?php echo $row->telemovel; ?></td>
                <td><?php echo $row->cidade; ?></td>
                <td width="9%">
                <form method="post" action="<?php echo base_url('sistema/edit'); ?>" style="display: inline;">
                  <input type="hidden" name="id_contacto" id="id_contacto" value="<?php echo $row->id; ?>">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                </form>
                  <form method="post" action="<?php echo base_url('sistema/delete'); ?>" style="display: inline;"> 
                    <input type="hidden" name="id_contacto" id="id_contacto" value="<?php echo $row->id; ?>">   
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
                </td>    
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2018 <a href="https://github.com/rubenandre">Rúben Silva</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>

