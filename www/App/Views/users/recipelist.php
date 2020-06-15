<div style="background: #e7eef8; padding-bottom: 50px;">
	<div class="container pt-5">
		<h2 class="pb-3">List My Recipe</h2>
		<div class="content">
			<?php foreach ($recipe as $key => $value) { ?>
				<div class="card mb-3" style="max-width: 100%">
					<div class="row no-gutters">
						<div class="col-md-4">
							<div style="background: url('<?php echo BASE . "/assets/images/uploads/image/" . $value['image'] ?>');background-repeat: no-repeat;background-size: cover; height: 230px;"></div>
							
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><?php echo $value['title'] ?></h5>
								<p class="card-text"><?php echo $value['description'] ?>.</p>
								<p class="card-text"><small class="text-muted"><?php echo $value['createdAt'] ?></small></p>
								<a href="<?php echo BASE . '/recipe/edit?id=' .  $value['id'] ?>" class="btn btn-success mr-2">Edit</a>
								<a href="<?php echo BASE . '/admin/delete_recipe?id=' .  $value['id'] ?>" class="btn btn-danger mr-2">Delete</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>


<!-- <tr>
							<td>
								<?php echo $value['id']; ?>
							</td>
							<td>
								<?php echo $value['title']; ?>
							</td>
							<td>
								<?php echo $value['name']; ?>
							</td>
							<td>
								<?php echo $value['price']; ?>
							</td>
							<td>
								<img width="100%" src="<?php echo BASE . '/assets/images/uploads/image/' . $value['image']?>">
							</td>
							<td>
								<a href="<?php echo BASE . '/recipe/edit?id=' .  $value['id'] ?>" class="btn btn-success mr-2">Edit</a>
								<a href="<?php echo BASE . '/admin/delete_recipe?id=' .  $value['id'] ?>" class="btn btn-danger mr-2">Delete</a>
							</td>
						</tr> -->