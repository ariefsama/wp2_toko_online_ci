<div class="container-fluid">

  <h4>Keranjang Belanja</h4>
  <table class="table table-bordered table-striped table-hover">

    <tr>
      <th>NO</th>
      <th>Nama Produk</th>
      <th>Jumlah</th>
      <th> Harga</th>
      <th>Sub-Total</th>

    </tr>

    <?php 
    $no=1;
    foreach($this->cart->contents() as $item) : ?>

      
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $item['name']?></td>
        <td><?= $item['qty']?></td>
        <td>Rp. <?= number_format($item['price'], 0,',','.')?></td>
        <td  align="right">Rp. <?= number_format($item['subtotal'], 0,',','.') ?></td>
      </tr>


    <?php endforeach; ?>

    <tr>
        <td ><b>TOTAL</b> </td>
        <td></td>
        <td></td>
        <td align="right" colspan="3">Rp. <?= number_format($this->cart->total(), 0,',','.')?></td>
      </tr>
  </table>
  <div align="right">
    <a href="<?= base_url().'dashboard/hapus_keranjang'?>"><div class="btn btn-sm btn-danger" >Hapus Keranjang</div></a>
    <a href="<?= base_url()?>"><div class="btn btn-sm btn-primary" >Lanjutkan Belanja</div></a>
    <a href="<?= base_url().'dashboard/pembayaran'?>"><div class="btn btn-sm btn-success" >Pembayaran</div></a>

  </div>
      
</div>