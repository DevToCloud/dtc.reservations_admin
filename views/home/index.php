<div class="table-responsive">
	<table id="reservations" class="table table-condensed table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Actions</th>
				<th>Child</th>
				<th>Dad</th>
				<th>Mom</th>
				<th>Birthdate</th>
				<th>Color</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Event</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$db->where("event_date IS NULL");
				$reservations = $db->get("reservations");
				foreach ($reservations as $reservation) {
					echo "<tr>";
					echo "<td>".$reservation["id"]."</td>";
					echo "<td><div class='btn-group'>
                      <a href='?controller=reservations&view=view&object=".encdec("enc",encdec("enc",$reservation["id"]))."' type='button' class='btn btn-sm btn-default'><i class='fa fa-eye'></i></a>
                      <a href='?controller=reservations&view=edit&object=".encdec("enc",encdec("enc",$reservation["id"]))."' type='button' class='btn btn-sm btn-default'><i class='fa fa-pencil'></i></a>
                    </div></td>";
					echo "<td>".$reservation["child_name"]."</td><td>".$reservation["dad_name"]."</td>";
					echo "<td>".$reservation["mom_name"]."</td><td>".$reservation["birthdate"]."</td>";
					echo "<td style='background:#".$reservation["favorite_color"]."'>&nbsp;</td><td>".$reservation["phone"]."</td>";
					echo "<td>".$reservation["email"]."</td><td>".$reservation["event_date"]."</td>";
					echo "<td>".$reservation["status"]."</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</div>