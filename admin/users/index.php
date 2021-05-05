<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php"; ?>
<?php date_default_timezone_set("America/Chicago"); ?>

<h1>Users</h1>

<br /><br /><br />

<table id="user-table" class="ui table">
<thead>
  <tr> <th>User ID</th> <th>Username</th> <th>Full Name</th> <th>Last Login</th> <th>Role</th> <th></th></tr>
</thead>
<tbody>
<?php
    $mysql->query("USE muhostin_acm");
    $sql = "SELECT * FROM users ORDER BY uid";
    $res = $mysql->query($sql);

    while($row = $res->fetch_assoc()) {
        $uid = $row['uid'];
        $username = $row['username'];
        $name = $row['full_name'];
        $last_login = $row['last_login_date'];
        $role = $row['role'];

        echo "<tr> <td>$uid</td> <td>$username</td> <td>$name</td> <td>$last_login</td> <td>$role</td>";
        echo "<td>";
        echo "<button class='ui inverted secondary icon button'><i class='pencil icon'></i></button>";
        echo "<button class='ui inverted red icon button' onclick='deleteUser($uid)'><i class='trash icon'></i></button>";
        echo "</td></tr>";
    }

    echo '<tr> <td colspan=5 style="text-align: center"> <a href="">Create New User</a></td> </tr>';
?>
<tbody />
</table>
<script>
    function deleteUser(uid){
        fetch('/admin/users/delete', {
            method: 'DELETE',
            body: uid
        }).then(resp => {
            if(resp.ok) {
                location.reload();
            } else {
                swal({
                    title: 'Error',
                    text: 'The user was not deleted successfully!',
                    icon: 'error',
                    buttons: {
                        confirm: {
                            text: 'OK',
                            color: '#3085D6'
                        }
                    }
                });
            }
        });
    }
    function addUser(){
        document.querySelector('#user-table tbody').appendChild(makeTeamRow(team))
    }
</script>
