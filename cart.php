<?php
include "koneksi.php";
include "helper.php";

$dataCart = mysqli_query($koneksi, "SELECT * FROM cart c JOIN product p ON c.idProduct = p.idProduct ORDER BY p.product ASC");

?>
<div class="content">
    <div class="container">
      <h1 class="cart-title">Produk Cart</h1>
      <table class="table table-striped ">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
        <?php $subtotal = 0; $total = 0; while($row =  mysqli_fetch_object($dataCart)) { ?> 
          <tr>
            <td><button class="btn btn-sm btn-danger" onclick="deleteCart(<?= $row->idProduct ?>)"><i class="fa fa-close"></i></button></td>
            <td><?= $row->product ?></td>
            <td>Rp <?= rupiah($row->price) ?></td>
            <td><?= $row->qty ?></td>
            <td>Rp <?php $subtotal = $row->price * $row->qty; echo rupiah($subtotal); ?></td>
          </tr>
        <?php $total += $subtotal;} ?>
        </tbody>
      </table>

      <div class="card-checkout">
        <div class="card border-primary">
          <div class="card-body">
            <h4 class="card-title">Checkout</h4>
            <p class="card-text">Total : Rp <?php echo rupiah($total); ?></p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalCenter">
              Checkout
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Checkout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="card-text">Silahkan bayar di kasir. Total : Rp <?php echo rupiah($total); ?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
