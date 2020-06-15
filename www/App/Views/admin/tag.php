
<!-- End Navbar -->
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Add Tag</h5>
        </div>
        <div class="card-body">
          <form class="form-user" method="post" action="<?php echo BASE . '/admin/addTags' ?>">
            <div class="row">
              <div class="col-md-3 pr-1">
                <div class="form-group">
                  <label>Category</label>
                  <input type="text" id="password" name="tagName" class="form-control" >
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary add-transaction">Add Category</button>
          </form>
        </div>
      </div>
    </div>
    
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Category</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>
              id
            </th>
            <th>
              Tag
            </th>
          </thead>
          <tbody>
            <?php foreach ($result as $key => $value) { ?>
              <tr>
                <td>
                  <?php echo $value['id']; ?>
                </td>
                <td>
                  <?php echo $value['tagName']; ?>
                </td>
               <td>
                <a href="" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $value['id'] ?>" data-tag="<?php echo $value['tagName'] ?>">Edit</a>
                <a href="<?php echo BASE ."/admin/deleteTags?id=". $value['id'] ?>" class="btn btn-danger">Delete</a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form method="post" action="<?php echo BASE . "/admin/editTags" ?>">
        <input type="text" class="id" hidden name="id">
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Category:</label>
          <input type="text" name="tagName" class="form-control tag" id="tag">
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
    var tag = button.data('tag') 
    var modal = $(this)
    modal.find('.modal-body .id').val(recipient)
    modal.find('.modal-body .tag').val(tag)
  })
</script>