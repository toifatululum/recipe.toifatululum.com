<?php if(empty($result["cover"])) header("location:". BASE . '/error'); ?>

<div class="container mt-5">
	<img src="<?php echo BASE . "/assets/images/uploads/cover/" . $result['cover'] ?>">
	<div><h2><?php echo $result["title"] ?></h2></div>
	<div><p><?php echo $result["content"] ?></p></div>
</div>