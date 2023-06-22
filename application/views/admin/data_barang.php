<div class="container-fluid">

  <button class="btn btn-sm btn-primary  mb-3" data-toggle="modal" data-target="#tambah_barang"> <i class="fas fa-plus fa-sm "></i> Tambah Barang</button>
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
           <?= anchor('admin/data_barang/edit/'.$brg->id_brg,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?>
          
        </td>
        <td class="text-center"><?= anchor('admin/data_barang/hapus/'.$brg->id_brg,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>
          
        </td>
      </tr>
    <?php endforeach; ?>


  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= base_url() . 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_brg" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Kategori</label>
            <select name="kategori" id="" class="form-control">
              <option nama="elektronik"value="elektronik">Elektronika</option>
              <option nama="pakaian pria"value="pakaian pria">Pakaian Pria</option>
              <option nama="pakaian wanita"value="pakaian wanita">Pakaian Wanita</option>
              <option nama="pakaian anak-anak"value="pakaian anak-anak">Pakaian Anak-anak</option>
              <option nama="peralatan olahraga"value="peralatan olahraga">Peralatan Olahraga</option>
            </select>
            
          </div>
          <div class="form-group">
            <label for="">Harga</label>
            <input type="text" name="harga" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Stok</label>
            <input type="text" name="stok" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Gambar Produk</label>
            <input type="file" name="gambar" id="" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>


        </form>
      </div>

    </div>
  </div>
</div>