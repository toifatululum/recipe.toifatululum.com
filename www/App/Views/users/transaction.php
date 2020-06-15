<?php
if(empty($_SESSION['status'])){
	header("location:" . BASE . "/index/login");
}
?>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-9">
			<div class="card">
				<img src="<?php echo BASE . "/assets/images/uploads/image/" . $result['image'] ?>" width="100%">
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="card p-2">
				<table class="mb-3">
					<tr><td>Nama Makanan</td><td>:</td><td><?php echo $result["title"] ?></td></tr>
					<tr><td>Asal</td><td>:</td><td><?php echo $result["tagName"] ?></td></tr>
					<tr><td>Author</td><td>:</td><td><?php echo $result["name"] ?></td></tr>
					<tr><td>Harga</td><td>:</td><td><?php echo $result["price"] ?></td></tr>
					
				</table>
				<div class="mb-3">
					<?php echo $result["description"] ?>
				</div>
				
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $result['tagName'] ?>">Beli Resep</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Pembelian Resep</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-user" onSubmit="return validasi()">
					<input type="number" hidden value="<?php echo $result['id'] ?>" name="recipe">
					<input type="number" hidden value="<?php echo $_SESSION['id'] ?>" name="user">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Masukan Nama:</label>
						<input type="text" class="form-control" name="name" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Masukan No Rekening:</label>
						<input type="number" class="form-control" name="norek" id="message-text">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" data-toggle="modal" onclick="myFunction()" class="btn btn-primary add-transaction">Beli</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="hehe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Instruksi Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>1. Masuk ke list recepient</p>
				<p>2. Masukan ke no rekening yang disediakan</p>
				<p>3. Upload Pembayaran</p>
			</div>
			<div class="modal-footer">
				<a href="<?php echo BASE . "/recipe/checkout" ?>" type="button" data-target="#exampleModal" class="btn btn-primary">Ok</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('#exampleModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget)
		var recipient = button.data('whatever')
		console.log(button.data('whatever'))

		var modal = $(this)
		// modal.find('.modal-title').text('New message to ' + recipient)
		// modal.find('.modal-body input').val(recipient)
	})
	
	function myFunction() {
		$('#exampleModal').modal('hide')
	}

	$(".add-transaction").click(function(){
		var data = $('.form-user').serialize();
		$.ajax({
			type: 'POST',
			url: '<?php echo BASE . '/recipe/add_transaction' ?>',
			data: data,
			success: function(e) {
				var json = JSON.parse(e)
				if(json.name == "" || json.norek == "") {
					alert("heh ini data dulu")
				}
				else{
					$('#hehe').modal('show')
				}

			}
		});
	});
</script>