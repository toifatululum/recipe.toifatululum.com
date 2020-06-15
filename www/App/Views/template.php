<!DOCTYPE html>
<html>
<head>
  <title>Ulum Kitchen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>/assets/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>/assets/style.css">
  <script src="//cdn.ckeditor.com/4.14.0/basic/ckeditor.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <!-- ini section berita -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

      <a class="navbar-brand" href="<?php echo BASE . "/index" ?>"><b>UlumKitchen</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <form class="form-inline my-2 my-lg-0">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
              </div>
              <form method="get">
                <input type="text" name="search" class="form-control" placeholder="search recipe" aria-label="Username" aria-describedby="basic-addon1">
              </form>
            </div>
          </form>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE.'/index' ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE.'/recipe/checkout' ?>">List Recipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE.'/recipe/myrecipelist' ?>">My Recipe</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <ul class="navbar-nav mr-auto">
            <?php if(!empty($_SESSION['username'])){ ?>
              <a href="<?php echo BASE . '/recipe/add_recipe'?>" class="btn btn-primary my-2 mr-2 my-sm-0">Add Receipe</a> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $_SESSION['username']?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $_SESSION['id'] ?>" data-role="<?php echo $_SESSION['role'] ?>" class="dropdown-item" href="#">Edit Account</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo BASE . '/index/action_logout'?>">Logout</a>
                </div>
              </li>
            <?php } else{ ?>  
              <a href="<?php echo BASE . '/index/login'?>" class="btn btn-primary my-2 my-sm-0" type="submit">login</a> 
            <?php } ?>
          </ul>
        </form>
      </div>
    </div>
  </nav>

  <?php $this->loadViewInTemplate($viewName, $viewData); ?>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <h6 class="modal-title" id="exampleModalLabel">Untuk Perubahan anda harus logout kemudian login lagi</h6>
        <form method="post" action="<?php echo BASE . "/admin/edit" ?>">
          <input type="text" class="id" hidden name="id">
          <input type="text" class="role" hidden name="role">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Username:</label>
            <input type="text" name="username" value="<?php echo $_SESSION['username'] ?>" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['name'] ?>" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" class="form-control" id="recipient-name">
          </div>
          <div class="modal-footer">
            <button type="submit" data-toggle="modal" class="btn btn-primary">Simpan</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>
<script type="text/javascript">
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever') 
    var role = button.data('role') 
    var modal = $(this)
    console.log(role)
    modal.find('.modal-body .id').val(recipient)
    modal.find('.modal-body .role').val(role)
  })
</script>
</body>
</html>




