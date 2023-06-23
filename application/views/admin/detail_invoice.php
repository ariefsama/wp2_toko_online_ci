<div class="container-fluid">

    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id ?></div> </h4>

    <table class="table table-bordered table-hover table-striped">

      <tr>
        <th>ID BARANG</th>
        <th>NAMA PRODUK</th>
        <th>JUMLAH PESANAN</th>
        <th>HARGA SATUAN</th>
        <th>SUB-TOTAL</th>
      </tr>

      <?php 
        $total = 0;
        
        foreach ($pesanan as $psn) :
          $subtotal = $psn->jumlah * $psn->harga;
          $total += $subtotal;
        ?>

      

       <tr>
         <td><?= $psn->id_brg ?></td>
         <td><?= $psn->nama_brg ?></td>
         <td><?= $psn->jumlah ?></td>
         <td><?= number_format($psn->harga ,0,',','.') ?></td>
         <td><?= number_format($subtotal ,0,',','.') ?></td>
       </tr>

        <?php endforeach; ?>

    </table>
</div>
