
<div>
	<h1>Profile</h1>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
		</tr>
		<tr>
			<td>{{ $user->id; }}</td>
			<td>{{ $user->name; }}</td>
			<td>{{ $user->email; }}</td>
		</tr>
	</table>
</div>