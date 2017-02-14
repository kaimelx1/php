<h2><?php echo $user->username; ?></h2>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->password; ?></td>
        </tr>
</table>
<br>
<a href="/crud" class="btn btn-success">Back to list</a>