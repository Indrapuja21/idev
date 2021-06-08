
<div class="container-fliud">


	<div class="right text-center">


		<?php foreach ($barang as $brg) :?>


			<div class="card" style="width: 15rem;">
              
        <img src="<?php echo base_url().'/uploads/'.$brg->gambar?>"class="card-img-top" alt="...">

          <div class="card-body">

            <h5 class="card-title"><?php echo $brg->nama_brg?></h5>

            <small><?php echo $brg->keterangan?></small><br>

            <span class="badge rounded-pill bg-success">Rp.<?php echo $brg->harga?></span>

            <a href="#" class="btn btn-sm btn-primary">Tambah ke keranjang</a>

            <a href="#" class="btn btn-sm btn-success">Detail</a>

        </div>
     </div>
        
		<?php endforeach;?>
	</div>
</div>
