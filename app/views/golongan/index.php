<h2>Golongan</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn">
 <img src="<?php echo AST; ?>/img/log-in.png" alt="Input Golongan" width="20">Input Golongan</a>

<table>
      <tr>
                  <th>NO</th>
                  <th>KODE</th>
                  <th>NAMA</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
           <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['gol_kode']; ?></td>
                        <td><?php echo $row['gol_nama']; ?></td>
<td>
    <a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn edit">
        <img src="<?php echo AST; ?>/img/pen.png" alt="Edit Golongan" width="40">
    </a>
</td>
<td>
    <a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btn delete" onclick="return confirm('Apakah Anda yakin?')">
        <img src="<?php echo AST; ?>/img/delete.png" alt="Hapus Golongan" width="40">
    </a>
</td>
                  </tr>
      <?php $no++;
      } ?>

</table>