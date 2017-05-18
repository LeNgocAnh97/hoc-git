<?php include "public/javascript/ajaxCategory.php"; ?>
<?php include "public/javascript/ajaxJob.php"; ?>
<h1> Các công việc </h1>

<div class="container">
	<h3> Lĩnh vực </h3>
	<select onchange="ajaxfunction(this.value)" class="form-control">  
	<?php foreach ($posts as $post):  
	?>
	<?php if($post != ""){ ?>
		<option value="<?php echo $post['id']; ?> "> <?php echo $post["name"]; ?></option>
	<?php } ?>

	<?php endforeach; ?>
	</select>
	<div id="hear"> </div>
	<div id="hear2"> </div>
</div>
