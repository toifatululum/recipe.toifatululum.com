<div class="container mt-5">
	<h1>List Transaction</h1>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Date</th>
				<th scope="col">Recipe</th>
				<th scope="col">No Rek</th>
				<th scope="col">Status</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while($transaction = mysqli_fetch_assoc($result)){ ?>
				<tr>
					<td><?php echo $transaction['id'] ?></td>
					<td><?php echo $transaction['date'] ?></td>
					<td><?php echo $transaction['title'] ?></td>
					<td><?php echo $transaction['norek'] ?></td>
					<td>
						<?php if($transaction['status'] == 1){
							echo "Sedang di process";
						}else if($transaction['status'] == 2){
							echo "Pembayaran Berhasil";
						}else{
							echo "Pembayaran Pending";
						}?>
					</td>
					<td>
						<?php if($transaction['status'] == 2){ ?>
							<a href="<?php echo BASE . "/index/myrecipe?id=" . $transaction['recipeId']?>">Buka Recipe</a>
						<?php }else{ ?>
							<form method="post" action="<?php echo BASE .'/recipe/update_transaction' ?>" enctype="multipart/form-data">
								<input type="number" name="id" hidden value="<?php echo $transaction['id']?>">
								<div class="btn btn-primary">
									<input name="image" type="file"><i class="fa fa-upload"></i> Upload
								</div>
								<input class="btn btn-success" type="submit" name="" value="Simpan">
							</form>
						<?php }?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>


</div>