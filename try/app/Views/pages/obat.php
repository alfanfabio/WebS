<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="col">
    <form class="example center" action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

</div>

<div class="container-fluid">

    <div style="overflow-y: scroll;">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Data Obat</h1>
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr class="header">
                            <th scope="col">No.</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Jenis Obat</th>
                            <th scope="col">Jumlah Obat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>

                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>AC Swabs</td>
                            <td>Obat APBD</td>
                            <td>16 Box</td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>Alat Suntik Sekali Pakai 10 ml</td>
                            <td>Obat APBD</td>
                            <td> 18 Pack</td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>Alat Suntik Sekali Pakai 3 ml</td>
                            <td>Obat APBD</td>
                            <td> 9 Kotak)</td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>Alat Suntik Sekali Pakai 5 ml</td>
                            <td>Obat APBD</td>
                            <td> 93 Kotak)</td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>Asm Sling Comfort</td>
                            <td>Obat APBD</td>
                            <td> 93 Pack)</td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>Aximed Female Cateter No 16</td>
                            <td>Obat APBD</td>
                            <td> 1980 Pack)</td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>Aximed Female Cateter No 18</td>
                            <td>Obat APBD</td>
                            <td> 370 Pack)</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>