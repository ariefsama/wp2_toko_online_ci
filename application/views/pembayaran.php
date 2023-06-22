<div class="container-fluid">

  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="btn btn-sm btn-success">
        <?php
        $grand_total = 0;
        if ($keranjang = $this->cart->contents()) {
          foreach ($keranjang as $item) {
            $grand_total = $grand_total + $item['subtotal'];
          }

          echo "<h5>Total Belanja Anda: Rp." . number_format($grand_total, 0, ',', '.');
               ?>


      </div>

      <h3>Input Alamat Pengiriman dan Pembayaran</h3>

      <form action=" <?= base_url() . 'dashboard/proses_pesanan' ?>" method="post">
        <div class="form-group">
          <label for="">Nama Lengkap</label>
          <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Alamat Lengkap</label>
          <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">No. Telepon</label>
          <input type="text" name="no_telp" placeholder="No Telepon Anda" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Jasa Pengiriman</label>
          <select name="" id="" class="form-control">
            <option value="">JNE</option>
            <option value="">POS Indonesia</option>
            <option value="">J&T</option>
            <option value="">GOJEK</option>
          </select>
        </div>
        <div class="form-group ">
          <label for="">Pilih BANK</label>
          <select name="" id="" class="form-control">
            <option value="">BRI - xxxxxxx</option>
            <option value="">BCA - xxxxxxx</option>
            <option value="">BNI - xxxxxxx</option>
            <option value="">MANDIRI - xxxxxxx</option>
          </select>
        </div>

        <button type="submit" class="btn btn-sm btn-primary mt-3">Pesan</button>

      </form>
      <?php 
        }else echo "<h3>Keranjang Belanja Anda masih Kosong<h3>"
      
      ?>


    </div>
    <div class="col-md-2"></div>
  </div>

</div>