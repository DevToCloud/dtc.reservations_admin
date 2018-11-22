<div class="table-responsive">
	<table id="users" class="table table-condensed table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th style="min-width: 70px;width: 70px;">Actions</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>User</th>
				<th>Role</th>
				<th>Active</th>
			</tr>
		</thead>
		<tbody>
			<?php
				//$db->where("uname <> 'admin'");
				$users = $db->get("users");
				foreach ($users as $user) {
					echo "<tr>";
					echo "<td>".$user["id"]."</td>";
					echo "<td><div class='btn-group'>
                      <a href='?controller=settings/users&view=view&object=".encdec("enc",encdec("enc",$user["id"]))."' type='button' class='btn btn-sm btn-default'><i class='fa fa-eye'></i></a>
                      <a href='?controller=settings/users&view=edit&object=".encdec("enc",encdec("enc",$user["id"]))."' type='button' class='btn btn-sm btn-default'><i class='fa fa-pencil'></i></a>
                    </div></td>";
					echo "<td>".$user["firstname"]."</td><td>".$user["lastname"]."</td>";
					echo "<td>".$user["email"]."</td><td>".$user["phone"]."</td>";
					echo "<td>".$user["uname"]."</td><td>".ROLES[$user["role"]]."</td>";
					echo "<td>".$user["active"]."</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</div>