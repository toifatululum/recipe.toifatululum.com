<div class="container mt-5">
	<form action="<?php echo BASE . '/recipe/action_edit_recipe'?>" method="post" enctype="multipart/form-data">
		<input type="number" name="id" hidden value="<?php echo $recipe['id'] ?>">
		<div class="form-group">
			<label for="judul">Masukan Judul</label>
			<input type="text" class="form-control" id="judul" name="title" value="<?php echo $recipe['title'] ?>" placeholder="Masukan Judul">
		</div>
		<div class="form-group">
			<label for="judul">Masukan Harga</label>
			<input type="number" class="form-control" id="judul" name="price" value="<?php echo $recipe['price'] ?>" placeholder="Masukan Harga">
		</div>
		<div class="form-group">
			<label for="judul">Masukan Description</label>
			<textarea class="form-control" name="description"><?php echo $recipe['description'] ?></textarea>
		</div>
		<div class="input-group mb-3">
			<select class="custom-select" name="tag" id="inputGroupSelect02" >
				<?php foreach ($result as $key => $value) { ?>
					<option value="<?php echo $value['id'] ?>"><?php echo $value['tagName'] ?></option>
				<?php } ?>
			</select>
			<div class="input-group-append">
				<label class="input-group-text" for="inputGroupSelect02">Asal</label>
			</div>
		</div>
		<label for="basic-url">Masukan langkah langkah</label>
		<textarea name="content" id="editor1" rows="10" cols="80"><?php echo $recipe['content'] ?></textarea>
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