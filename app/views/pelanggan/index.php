<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">
 <img src="<?php echo AST; ?>/img/log-in.png" alt="Input Pelanggan" width="20">Input Pelanggan</a>

<table class="inputs" id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>GOLONGAN</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>HP</th>
                  <th>KTP</th>
                  <th>SERI</th>
                  <th>METERAN</th>
                  <th>AKTIF</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody class="inputs">
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['gol_nama']; ?></td>
                        <td><?php echo $row['pel_nama']; ?></td>
                        <td><?php echo $row['pel_alamat']; ?></td>
                        <td><?php echo $row['pel_hp']; ?></td>
                        <td><?php echo $row['pel_ktp']; ?></td>
                        <td><?php echo $row['pel_seri']; ?></td>
                        <td><?php echo $row['pel_meteran']; ?></td>
                  <?php if ($row['pel_aktif'] == 'Y') : ?>
                  <td> <img src="<?php echo AST; ?>/img/active-user.png" alt="Active" width="35"></td>
                  <?php else : ?>
                  <td><img src="<?php echo AST; ?>/img/userx.png" alt="Inactive" width="35"></td>
                  <?php endif; ?>
<td>
    <a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn edit">
        <img src="<?php echo AST; ?>/img/pen.png" alt="Edit Pelanggan" width="40">
    </a>
</td>
<td>
    <a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn delete" onclick="return confirm('Apakah Anda yakin?')">
        <img src="<?php echo AST; ?>/img/delete.png" alt="Hapus Pelanggan" width="40">
    </a>
</td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>