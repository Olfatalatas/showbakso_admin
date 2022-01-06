<?php
include("../includes/navbar.php");
include("../includes/topbar.php");
?>
<div class="container-fluid">
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