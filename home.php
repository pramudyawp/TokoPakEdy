<?php
include "koneksi.php";
include "helper.php";

$dataProduct = mysqli_query($koneksi, "SELECT * FROM product ORDER BY product ASC");

?>

<div class="content">
		<div class="container">
			<div class="row">
				<?php while($row =  mysqli_fetch_object($dataProduct)) { ?> 
				<div class="col-md-3 col-sm-6 mt-2">
					<div class="card">
						<img class="card-img-top" src="<?= $row->image ?>" alt="<?= $row->image ?>">
						<div class="card-body">
							<h4 class="card-title"><?= $row->product ?></h4>
							<h1class="card-title"><?= $row->kategori ?></h1>
							<p class="card-text">Rp <?= rupiah($row->price) ?></p>
						</div>
						<div class="card-footer">
							<button class="btn btn-block btn-primary" onclick="addCart(<?= $row->idProduct ?>)">Tambah Pesanan</button>
						</div>
					</div>
				</div>
                <?php } ?>
			</div>
		</div>
	</div>