

<div class="container mt-5">
	<form action="<?php echo BASE . '/recipe/action_save_recipe'?>" method="post" enctype="multipart/form-data">
		<input type="number" name="users" hidden value="<?php echo $_SESSION['id'] ?>">
		<div class="form-group">
			<label for="judul">Masukan Judul</label>
			<input type="text" class="form-control" id="judul" name="title" placeholder="Masukan Judul">
		</div>
		<div class="form-group">
			<label for="judul">Masukan Harga</label>
			<input type="number" class="form-control" id="judul" name="price" placeholder="Masukan Harga">
		</div>
		<div class="form-group">
			<label for="judul">Masukan Description</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<div class="input-group mb-3">
			<select class="custom-select" name="tag" id="inputGroupSelect02">
				<option selected>Choose...</option>
				<?php foreach ($result as $key => $value) { ?>
					<option value="<?php echo $value['id'] ?>"><?php echo $value['tagName'] ?></option>
				<?php } ?>
			</select>
			<div class="input-group-append">
				<label class="input-group-text" for="inputGroupSelect02">Asal</label>
			</div>
		</div>
		<div>
			<label for="basic-url">Masukan cover gambar</label>
			<div class="input-group mb-3">
				<div class="custom-file">
					<input type="file" class="custom-file-input" name="cover" id="cover">
					<label class="custom-file-label file-cover" for="cover">Choose file</label>
				</div>
			</div>
		</div>
		<div>
			<label for="basic-url">Masukan gambar</label>
			<div class="input-group mb-3">
				<div class="custom-file">
					<input type="file" class="custom-file-input" name="image" id="image">
					<label class="custom-file-label file-image" for="image">Choose file</label>
				</div>
			</div>
		</div>
		<label for="basic-url">Masukan langkah langkah</label>
		<textarea name="content" id="editor1" rows="10" cols="80"></textarea>
		<div class="mt-3">
			<input type="submit" class="btn btn-primary" value="Simpan">
		</div>	
	</form>
</div>

<script>
	CKEDITOR.replace( 'editor1' )
</script>
<script>
	$('#cover').on('change',function(){
		var fileName = $(this).val();
		$(this).next('.file-cover').html(fileName);
	})
</script>
<script>
	$('#image').on('change',function(){
		var fileName = $(this).val();
		$(this).next('.file-image').html(fileName);
	})
</script>