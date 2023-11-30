<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

</head>

<body>

    <h2>Users</h2>

    <a href="<?php echo URL; ?>/users/input" class="btn">
        <img src="<?php echo AST; ?>/img/log-in.png" alt="Input User" width="20"> Input User
    </a>

    <table class="inputs">
        <thead>
            <tr>
                <th style="background-color: #4CAF50;">NO</th>
                <th style="background-color: #4CAF50;">EMAIL</th>
                <th style="background-color: #4CAF50;">PASSWORD</th>
                <th style="background-color: #4CAF50;">NAMA</th>
                <th style="background-color: #4CAF50;">ALAMAT</th>
                <th style="background-color: #4CAF50;">NO HP</th>
                <th style="background-color: #4CAF50;">KODE POS</th>
                <th style="background-color: #4CAF50;">ROLE</th>
                <th style="background-color: #4CAF50;">ACTIVE</th>
                <th style="background-color: #4CAF50;">EDIT</th>
                <th style="background-color: #4CAF50;">DELETE</th>
            </tr>
        </thead>
        <tbody class="inputs">
            <?php
            $no = 1;
            foreach ($data['rows'] as $row) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['user_email']; ?></td>
                    <td><?php echo $row['user_password']; ?></td>
                    <td><?php echo $row['user_nama']; ?></td>
                    <td><?php echo $row['user_alamat']; ?></td>
                    <td><?php echo $row['user_hp']; ?></td>
                    <td><?php echo $row['user_pos']; ?></td>
                    <td><?php echo $row['user_role']; ?></td>

<td>
    <?php if ($row['user_aktif'] == 1) : ?>
        <img src="<?php echo AST; ?>/img/active-user.png" alt="Aktif" width="35">
    <?php elseif ($row['user_aktif'] == 2) : ?>
        <img src="<?php echo AST; ?>/img/userx.png" alt="Nonaktif" width="35">
    <?php endif; ?>
</td>

                    <td>
                        <a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btn edit">
                            <img src="<?php echo AST; ?>/img/pen.png" alt="Edit User" width="40">
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btn delete" onclick="return confirm('Are you sure?')">
                            <img src="<?php echo AST; ?>/img/delete.png" alt="Delete User" width="40">
                        </a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>

</body>

</html>
