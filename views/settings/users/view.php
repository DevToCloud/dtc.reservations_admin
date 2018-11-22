<?php
	$db->where("id",encdec("dec",encdec("dec",$_REQUEST["object"])));
	$user = $db->getOne("users");
?>
<div class="col-md-10 col-md-offset-1">
	<div class="col-md-3">
		<div class="col-md-12 text-center">
			<img class="img-responsive img-thumbnail" style="margin:0px" src="<?php if(isset($_SESSION["dmfs"]["photo"])){ echo $_SESSION["dmfs"]["photo"]; }else{ echo "dist/img/avatar5.png";} ?>">
			<button class="btn btn-flat btn-sm btn-default btn-block" onclick="$('#uphoto').click()"> Change photo </button>
			<input type="file" class="hidden" name="uphoto" id="uphoto">
		</div>
	</div>
	<div class="col-md-9">
		<div class="col-md-12">
			<a href="?controller=settings/users&view=edit&object=<?php echo $_REQUEST["object"]; ?>" class="btn btn-sm btn-default btn-flat pull-right hidden-xs hidden-sm"><i class="fa fa-pencil"></i></a>
			<div><b>Name</b></div>
			<div><?php echo $user["firstname"]." ".$user["lastname"]; ?></div>
		</div>
		<div class="col-md-12">
			<div><b>Job</b></div>
			<div><?php echo $user["job"]; ?></div>
		</div>
		<div class="col-md-6">
			<div><b>Phone</b></div>
			<div><?php echo $user["phone"]; ?></div>
		</div>
		<div class="col-md-6">
			<div><b>Email</b></div>
			<div><?php echo $user["email"]; ?></div>
		</div>
		<div class="col-md-12">
			<div><b>Rol</b></div>
			<div><?php echo ROLES[$user["role"]]; ?></div>
		</div>
		<div class="col-md-12 hidden-md hidden-lg">
			<div class="clearfix">&nbsp;</div>
			<a href="?controller=settings/users&view=edit&object=<?php echo $_REQUEST["object"]; ?>" class="btn btn-block btn-sm btn-default btn-flat"><i class="fa fa-pencil"></i></a>
		</div>
	</div>
	<div class="clearfix">&nbsp;</div>
</div>