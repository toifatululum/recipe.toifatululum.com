<!-- End Navbar -->
<div class="content">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"> Users</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>
              Name
            </th>
            <th>
              Username
            </th>
            <th>
              Role
            </th>
            <th >
              Email
            </th>
            <th>
              Action
            </th>
          </thead>
          <tbody>
            <?php foreach ($admin as $key => $value) { ?>
              <tr>
                <td>
                  <?php echo $value['name']; ?>
                </td>
                <td>
                  <?php echo $value['username']; ?>
                </td>
                <td>
                  <?php echo $value['role']; ?>
                </td>
                <td>
                 <?php echo $value['email']; ?>
               </td>
               <td>
                <a href="" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $value['id'] ?>" data-role="<?php echo $value['role'] ?>">Edit</a>
               <!--  <a href="<?php echo BASE ."/admin/delete?id=". $value['id'] ?>" class="btn btn-danger">Delete</a></td> -->
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form method="post" action="<?php echo BASE . "/admin/edit" ?>">
        <input type="text" class="id" hidden name="id">
        <input type="text" class="role" hidden name="role">
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Username:</label>
          <input type="text" name="username" class="form-control" id="recipient-name">
        </div>
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Name:</label>
          <input type="text" name="name" class="form-control" id="recipient-name">
        </div>
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Password:</label>
          <input type="password" name="password" class="form-control" id="recipient-name">
        </div>

        <div class="form-group">
          <label for="message-text" class="col-form-label">Email:</label>
          <input type="email" name="email" class="form-control" id="recipient-name">
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
    modal.find('.modal-body .id').val(recipient)
    modal.find('.modal-body .role').val(role)
  })
</script>