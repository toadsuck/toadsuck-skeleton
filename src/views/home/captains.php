<h1>The Captains</h1>

<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
	</thead>
	<tbody>
		<? foreach($this->captains as $c):?>
		<tr>
			<td><?=$c['first_name']?></td>
			<td><?=$c['last_name']?></td>
		</tr>
		<? endforeach;?>
	</tbody>
</table>