<div class="container-fluid">

	<div class="card">
		<h5 class="card-header">Detail Produk</h5>
		<div class="card-body">
			
			<?php foreach($barang as $brg): ?>

			<div class="row">
				<div class="col-md-4">
						<img src="<?php echo base_url().'/uploads
							/'.$brg->image ?>" class="card-img-top">
				</div>
				<div class="col-md-8"> 
					<table class="table">
					
						<tr>
							<td>Nama Produk</td>
							<td><strong><?php echo $brg->name ?></strong></td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td><strong><?php echo $brg->category ?></strong></td>
						</tr>
						<tr>
							<td>Stok</td>
							<td><strong><?php echo $brg->stock ?></strong></td>
						</tr>
						<tr>
							<td>Harga</td>
							<td><strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($brg->price, 0,',','.') ?></div></strong></td>
						</tr>

					</table>
					<?php echo anchor('admin/data_barang/','<div class="btn btn-sm btn-danger">Back</div>')?>

				</div>	
			</div>
						<?php endforeach; ?>

		</div>
	</div>
</div>