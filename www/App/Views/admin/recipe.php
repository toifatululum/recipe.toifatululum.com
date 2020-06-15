<div class="content">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title"> Recipe</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table">
					<thead class="text-primary">
						<th>
							id
						</th>
						<th>
							Recipe
						</th>
						<th>
							Author
						</th>
						<th>
							Price
						</th>
						<th>
							Image
						</th>
						<th>
							Action
						</th>
					</thead>
					<tbody>
						<?php foreach ($recipe as $key => $value) { ?>
							<tr>
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
									<img width="300" src="<?php echo BASE . '/assets/images/uploads/image/' . $value['image']?>">
								</td>
								<td>
									<a href="<?php echo BASE . '/admin/delete_recipe?id=' .  $value['id'] ?>" class="btn btn-danger mr-2">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>