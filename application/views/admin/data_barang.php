<div class="container-fluid">

  <button class="btn btn-sm btn-primary  mb-3" > <i class="fas fa-plus fa-sm "></i> Tambah Barang</button>
  <table class="table table-bordered">
    <tr>
      <th>NO</th>
      <th>NAMA BARANG</th>
      <th>KETERANGAN</th>
      <th>KATEGORI</th>
      <th>HARGA</th>
      <th>STOK</th>
      <th colspan="2" class="text-center">AKSI</th>
    </tr>

    <?php
    $no = 1;
    foreach ($barang as $brg) : ?>


      <tr>
        <td><?= $no++ ?></td>
        <td><?= $brg->nama_brg ?></td>
        <td><?= $brg->keterangan ?></td>
        <td><?= $brg->kategori ?></td>
        <td><?= $brg->harga ?></td>
        <td><?= $brg->stok ?></td>
        
        <td class="text-center">
          <div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div> 
        </td>

        <td class="text-center">
          <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div> 
         </td>
      </tr>
      
    <?php endforeach; ?>


  </table>
</div>