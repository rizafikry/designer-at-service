@auth('web')
	<p class="text-success">
		You're logged in as <strong>User</strong>
	</p>
@else
	<p class="text-danger">
		You're logged out as <strong>User</strong>
	</p>
@endauth

@auth('admin')
	<p class="text-success">
		You're logged in as <strong>Admin</strong>
	</p>
@else
	<p class="text-danger">
		You're logged out as <strong>Admin</strong>
	</p>
@endauth