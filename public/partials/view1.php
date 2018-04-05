<h3>Sort with AngularJS</h3>
<div class="form-group">
	<label for="sort">Find:</label>
	<input type="text" class="form-control" id="sort" aria-describedby="" placeholder="Enter character(s)" data-ng-model="filter.name">
	<small id="" class="form-text text-muted">Input characters to sort list by.</small>
</div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Person</th>
		</tr>
	</thead>
	<tbody>
		<tr data-ng-repeat="friend in friends | filter:filter.name | orderBy:'city'">
			<td><% friend.name + " is from " + friend.city %></td>
		</tr>
	</tbody>
</table>
<h3>Add to list</h3>
<div class="form-group">
	<label for="name">Name:</label>
	<input type="text" class="form-control" id="name" aria-describedby="" placeholder="Enter character(s)" data-ng-model="newFriend.name">
	<small id="" class="form-text text-muted">Add name of person.</small>
</div>
<div class="form-group">
	<label for="city">City:</label>
	<input type="text" class="form-control" id="city" aria-describedby="" placeholder="Enter character(s)" data-ng-model="newFriend.city">
	<small id="" class="form-text text-muted">Add city of person.</small>
</div>
<button type="button" class="btn btn-primary" data-ng-click="addFriend()">Add</button>
<a href="#/view2">View 2</a>
<h3>From Database</h3>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Name</th>
			<th>Type</th>
		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="people in data">
			<td><% people.name %></td>
			<td><% people.type %></td>
		</tr>
	</tbody>
</table>