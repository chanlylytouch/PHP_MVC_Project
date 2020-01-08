<?php
    include "dashboard/dasboard.php";
?>
<h1 class="text-center text-primary">List Of Club</h1>
<a href="index.php?action=add"><img src="img/add.png" alt="" style="width:50px; height:50px;" ></a>
<table class="table table-dark mt-3">
    <thead>
        <tr>
            <th>Club Id</th>
            <th>Leader Club</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Email</th>
            <th>ClubName</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
    if (isset($data['club_data'])) {
        $id = 1;
        foreach ($data['club_data'] as $rows) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $rows['username']; ?></td>
                    <td><?php echo $rows['gender']; ?></td>
                    <td><?php echo $rows['age']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><?php echo $rows['clubName']; ?></td>
                    <td><?php echo $rows['decription']; ?></td>
                    <td>
                        <a href="index2.php?action=viewUser&id=<?php echo $rows['clubID']; ?>"><i class="material-icons">remove_red_eye</i></a>
                        <a href="index.php?action=edit&id=<?php echo $rows['clubID']; ?>"><i class="material-icons text-success">edit</i></a>
                        <a href="index.php?action=delete&id=<?php echo $rows['clubID']; ?>" onclick="return confirm('Are you sure to delete it??')"><i class="material-icons text-danger">delete</i></a>
                    </td>
                </tr>
            </tbody>
    <?php
            $id++;
        }
    }
    ?>
</table>