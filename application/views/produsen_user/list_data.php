<?php
foreach ($dataProdusen as $produsen) {
  ?>
  <tr>
    <td style="min-width:230px;"><?php echo $produsen->npwp; ?></td>
    <td><?php echo $produsen->nama_perusahaan; ?></td>
    <td><?php echo $produsen->pimpinan; ?></td>
    <td><?php echo $produsen->alamat_perusahaan; ?></td>
    <td><?php echo $produsen->jenis_usaha; ?></td>
    <td class="text-center" style="min-width:230px;">
      <button class="btn btn-warning update-dataProdusen-user" data-id="<?php echo $produsen->id_produsen; ?>"><i class="glyphicon glyphicon-edit"></i> Update Profil</button>
    </td>
  </tr>
<?php
}
?>