<div class="content">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title"> Simple Table</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table">
					<thead class=" text-primary">
						<th>
							id
						</th>
						<th>
							Recipe
						</th>
						<th>
							Proof
						</th>
						<th >
							Email
						</th>
						<th >
							Name
						</th>
						<th>
							Action
						</th>
					</thead>
					<tbody>
						<?php foreach ($result as $key => $value) { ?>
							<tr>
								<td>
									<?php echo $value['id']; ?>
								</td>
								<td>
									<?php echo $value['title']; ?>
								</td>
								<td>
									<img width="300px" src="<?php echo BASE . '/assets/images/uploads/proof/' . $value['proof']?>">
								</td>
								<td>
									<?php echo $value['email']; ?>
								</td>
									<td>
									<?php echo $value['name']; ?>
								</td>
								<td>
									<?php if ($value['status'] == 2) { ?>
										<a href="" class="btn btn-success mr-2">Complete</a>
									<?php } ?>
									<?php if ($value['status'] == 1) { ?>
										<a href="<?php echo BASE . '/admin/markcompleted?id=' .  $value['id'] ?>" class="btn btn-primary mr-2">Mark as Complite</a>
									<?php } ?>
									
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>