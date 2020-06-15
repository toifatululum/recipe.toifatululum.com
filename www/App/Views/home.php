<div style="background: #e7eef8; padding-bottom: 50px;">
	<div class="container">
		<div class="py-5">
			<div class="row">
				<div class="col-md-9">
					<div class="gradient">
						<img width="20%" src="<?php echo BASE . '/assets/images/uploads/image/620006452Group 85.png' ?>">
						<div style="display: flex; align-content: center; flex-direction: column; justify-content: center;">
							<h3 style="color: white">Discover the sensation of delicious food in every choice</h3>
							<p style="color: white">Special promo. Attractive discounts for every purchase  </p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="gradient">
						<img width="40%"  src="<?php echo BASE . '/assets/images/uploads/cover/1114358490Group 84 (1).png' ?>">
						<div style="margin-left:10px;display: flex; align-content: center; flex-direction: column; justify-content: center;">
							<h4 style="color: white">My Recipe</h4>
							<h1 style="color: white">
								<?php if (isset($jumlah['numberRecipe'])) {
								echo $jumlah['numberRecipe'];
							} else {
								echo "0";
							}
							 ?></h1>
						</div>
					</div>

				</div>
			</div>
		</div>
		<h3 class="">What’s your plan today?  </h3>
		<p class="pb-3">Find your categories in here</p>

		<div class="row">
			<div class="col-md-3">
				<div class="card p-3">
					<h5 class="pb-3">Category</h5>
					<form method="get" action="<?php BASE."/index/index" ?>">
						<?php foreach ($tag as $ktag => $tag) { ?>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" value="<?php echo $tag['id'] ?>" name="category[]" id="<?php echo $tag['tagName'] ?>">
								<label class="form-check-label" for="<?php echo $tag['tagName'] ?>"><?php echo $tag['tagName'] ?></label>
							</div>
						<?php } ?>

						<input class="btn btn-primary w-100" type="submit" name="" value="filter">
					</form>

				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<?php foreach ($recipe as $recipeKey => $recipe) { ?>
						<div class="col-md-4 pb-4">
							<div class="card" style="width: 100%">
								<div class="image-post" style="background: url('<?php echo BASE . '/assets/images/uploads/image/' . $recipe['image'] ?>');height: 200px; background-size: cover; background-repeat: no-repeat;"></div>
								<!-- <img class="card-img-top" src="" alt="Card image cap"> -->
								<div class="card-body">
									<h5 class="card-title"><?php echo $recipe["title"] ?></h5>
									<p class="card-text">
										<b>Rp. <?php echo $recipe["price"] . ",00"?> </b><br>
										<?php echo $recipe["description"]?>
									</p>

									<a href="<?php echo BASE . "/recipe/transaction?id=" . $recipe['id'] ?>" class="btn btn-primary">Beli</a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
