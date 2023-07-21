<?php $no=1; ?>
<?php foreach($pengguna as $data) : ?>
<tr>
  <td><?= $no++; ?></td>
  <td><?= $data['nama_pegawai']; ?></td>
  <td><?= $data['email']; ?></td>
  <td><?= $data['nohp']; ?></td>
  <td>
    <a href="javascript:void(0);" onClick="showForm(<?= $data['id_pegawai']; ?>)"><u>EDIT</u></a>
    <a href="javascript:void(0);" class="form-delete" data-id="<?= $data['id_pegawai']; ?>" data-nama="<?= $data['nama_pegawai']; ?>"><u>HAPUS</u></a>
  </td>
</tr>
<?php endforeach; ?>