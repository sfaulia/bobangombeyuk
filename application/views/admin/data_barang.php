<div class= "container-fluid">
	<button class="btn btn-sm btn-primary mb-3"data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>
	
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php
		$id=1;
		Foreach($barang as $brg): ?>
		
		<tr>
			<td><?php echo $id++ ?></td>
			<td><?php echo $brg->name ?></td>
			<td><?php echo $brg->category ?></td>
			<td><?php echo $brg->price ?></td>
			<td><?php echo $brg->stock ?></td>
			<td> <?php echo anchor('admin/data_barang/detail/' .$brg->id, 
			'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
			<td><?php echo anchor('admin/data_barang/edit/' .$brg->id,
			'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
			<td><?php echo anchor ('admin/data_barang/hapus/'.$brg->id, 
			'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		<?php endforeach; ?>		

		</tr>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUCT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi';?>" method="post"
		enctype="multipart/form-data">
		
			<div class="from-group">
				<label>Nama Barang</label>
				<input type="text" name="name" class= "form-control">
			</div>
			
			<div class="from-group">
				<label>Kategori</label>
				<select class="form-control" name="category">
					<option>Boba Milk tea </option>
					<option>Boba Fruit </option>
					<option>Boba Milk </option>
					<option>Boba Mix </option>

				</select>
			</div>
			
			<div class="from-group">
				<label>Harga</label>
				<input type="text" name="price" class= "form-control">
			</div>
			
			<div class="from-group">
				<label>Stok</label>
				<input type="text" name="stock" class= "form-control">
			</div>
			
			<div class="from-group">
				<label>Gambar Produk</label>
				<input type="file" name="image" class= "form-control">
			</div>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  
	  </form>
	  
    </div>
  </div>
</div>