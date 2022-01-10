<?php
include("../includes/navbar.php");
include("../includes/topbar.php");
?>
<div class="container-fluid">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertModal">
        Tambah Menu
    </button>
    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModalLabel">Tambah Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="menu">
                                Nama Menu
                            </label>
                            <input type="text" class="form-control" id="inputmenu" placeholder="Masukkan nama menu">
                        </div>
                        <div class="form-group">
                            <label for="harga">
                                Harga
                            </label>
                            <input type="text" class="form-control" id="inputharga" placeholder="Masukkan harga">
                        </div>
                        <div class="form-group">
                            <label for="gambar">
                                Gambar
                            </label>
                            <div class="custom-file">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                                <input type="file" class="custom-file-input" id="filegambar" placeholder="Masukkan harga">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive" style="text-align: center;">
        <table class="table table-hover">
            <caption style="caption-side:top">List Menu</caption>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Bakso 1</td>
                    <td>100000</td>
                    <td>image</td>
                    <td>
                        <a href="#"><button class="btn btn-success btn-xs">Details</button></a>
                        <a href="#"><button class="btn btn-info btn-xs">Update</button></a>
                        <a href="#"><button class="btn btn-danger btn-xs">Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bakso 2</td>
                    <td>200000</td>
                    <td>image</td>
                    <td>
                        <a href="#"><button class="btn btn-success btn-xs">Details</button></a>
                        <a href="#"><button class="btn btn-info btn-xs">Update</button></a>
                        <a href="#"><button class="btn btn-danger btn-xs">Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Bakso 3</td>
                    <td>300000</td>
                    <td>image</td>
                    <td>
                        <a href="#"><button class="btn btn-success btn-xs">Details</button></a>
                        <a href="#"><button class="btn btn-info btn-xs">Update</button></a>
                        <a href="#"><button class="btn btn-danger btn-xs">Delete</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
    include("../includes/footer.php");
    include("../includes/script.php");
    ?>
</div>