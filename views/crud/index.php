<h2>Users</h2>
<?php if($users) : ?>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php foreach ($users as $user) : ?>
    <tr>
        <td><?php echo $user->id; ?></td>
        <td><a href="/crud/show/<?php echo $user->id; ?>"><?php echo $user->username; ?></a></td>
        <td><?php echo $user->password; ?></td>
        <td><a href="/crud/edit/<?php echo $user->id; ?>"><span class="glyphicon glyphicon-edit edit"></span></a></td>
        <td><a href="/crud/delete/<?php echo $user->id; ?>"><span class="glyphicon glyphicon-remove remove"></span></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <h3>There are no users</h3>
<?php endif; ?>
<br>
<a href="/crud/create" class="btn btn-success">New user</a>