<div >

<!--Sidebar content-->

		<table class="table table-hover">
		<thead>
			<tr>
				<td>ID</td>
				<td>Company</td>
				<td>Phone</td>
				<td>Fax</td>
				<td>Address</td>
				<td>Register</td>
				<td>Regidate</td>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($list_data as $key) {
					
			?>
			<tr>
				<td><a href="/index.php/board/read/<?=$key->comp_id?>"><?=$key->comp_id?></a></td>
				<td><?=$key->comp_name?> </td>
				<td><?=$key->comp_phone?> </td>
				<td><?=$key->comp_fax?> </td>
				<td><?=$key->comp_addr?> </td>
				<td><?=$key->usr_name?> </td>
				<td><?=$key->crt_date?> </td>
				</a>
			</tr>
			<?php	
				}
			?>
			</tbody>
		</table>
		<div>
			<a href="/index.php/board/write" class="btn">Write</a>
		</div>

</div>