<?php
	$db->where("id",encdec("dec",encdec("dec",$_REQUEST["object"])));
	$user = $db->getOne("users");
?>
<div class="col-md-10 col-md-offset-1">
	<div class="col-md-3">
		<img class="img-responsive img-thumbnail" src="<?php if(isset($_SESSION["dmfs"]["photo"])){ echo $_SESSION["dmfs"]["photo"]; }else{ echo "dist/img/avatar5.png";} ?>">
		<button class="btn btn-flat btn-sm btn-default btn-block" onclick="$('#uphoto').click()"> Change photo </button>
		<input type="file" class="hidden" name="uphoto" id="uphoto">
	</div>
	<div class="col-md-9">
		<div class="col-md-12">
			<div class="form-grupo">
				<label for="firstname">First Name</label>
				<input type="text" name="firstname" class="form-control" value="<?php echo $user["firstname"]; ?>" >
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-grupo">
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" class="form-control" value="<?php echo $user["lastname"]; ?>" >
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-grupo">
				<label for="job">Job</label>
				<input type="text" name="job" class="form-control" value="<?php echo $user["job"]; ?>" >
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-grupo">
				<label for="phone">Phone</label>
				<input type="text" name="phone" class="form-control" value="<?php echo $user["phone"]; ?>" >
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-grupo">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $user["email"]; ?>" >
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-grupo">
				<label for="role">Rol</label>
				<select name="role" class="form-control">
					<option <?php if($user["role"] == 0){ echo " selected "; } ?> value="0">Super Administrator</option>
					<option <?php if($user["role"] == 1){ echo " selected "; } ?> value="1">Administrator</option>
					<option <?php if($user["role"] == 2){ echo " selected "; } ?> value="2">Customer</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-grupo">
				<label for="active">Active</label>
				<select name="active" class="form-control">
					<option value="0">Yes</option>
					<option value="1">No</option>
				</select>
			</div>
		</div>

		<div class="clearfix">&nbsp;</div>
		
		<div class="col-md-12">
			<button type="submit" class="btn btn-block btn-primary"> Save</button>
		</div>
	</div>
	<div class="clearfix">&nbsp;</div>
</div>