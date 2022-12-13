<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>
	
	<?php foreach($barang as $brg): ?>
	
	<form method= "post" action="<?php echo base_url(). 'admin/data_barang/update' ?>">
		
		<div class="for-group">
			<label>Nama Barang</label>
			<input type="text" name="name" class="form-control"
			value="<?php echo $brg->name ?>">
		</div>
		
		<div class="for-group">
			<label>Kategori</label>
			<input type="hidden" name="id" class="form-control"
			value="<?php echo $brg->id ?>">
			<input type="text" name="category" class="form-control"
			value="<?php echo $brg->category ?>">
		</div>
		
		<div class="for-group">
			<label>Harga</label>
			<input type="text" name="price" class="form-control"
			value="<?php echo $brg->price ?>">
		</div>
		
		<div class="for-group">
			<label>Stok</label>
			<input type="text" name="stock" class="form-control"
			value="<?php echo $brg->stock ?>">
		</div>
		
		<button type="submit" class="btn btn-primary btn-sm mt-3"> Save</button>
		
	</form>
		
	<?php endforeach; ?>
	
</div>