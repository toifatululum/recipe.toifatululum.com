<div class="container mt-5">
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<img width="100%" src="<?php echo BASE . '/assets/images/uploads/image/'. $result['image'] ?>">
				<div class="p-3">
					<p>
						Resep : <?php echo $result['title'] ?> <br>
						Asal : <?php echo $result['tagName'] ?> </br>
						Cheff : <?php echo $result['name'] ?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="card mb-5">
				<div width="100%" class="h-200" style="background: url(<?php echo BASE . '/assets/images/uploads/image/'. $result['image'] ?>);"></div>
				<div class=" p-4">
					<h3><?php echo $result['title'] ?></h3>
				<p><?php echo $result['content'] ?></p>
				</div>
				
			</div>
			<div id="disqus_thread"></div>
			<script>
				(function() {
					var d = document, s = d.createElement('script');
					s.src = 'https://ecommerce-yrvucjrs8l.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
				})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		</div>
	</div>
</div>