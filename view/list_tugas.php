<?php
include '../model/tugas_harian.php';
$data = select("SELECT * FROM tugas_harian");
$data2 = select("SELECT * FROM tugas_mingguan");
?>
<!-- Header -->
<?php include '../layout/header.php'; ?>
<!-- Header -->

<h1>List Tugas</h1>
<a href="tambah_tugas.php" class="btn btn-primary">Tambah Tugas</a>
<!-- Table Tugas Harian -->
<table class="table table-striped" id="dataTablesHarian">
    <thead>
        <tr>
            <td>No</td>
            <td>Mata Kuliah</td>
            <td>Tugas</td>
            <td>Deadline</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row["matkul"]; ?></td>
                <td><?= $row["tugas"]; ?></td>
                <td><?= date("l, d-M-Y", strtotime($row["deadline"])); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br><br>
<!-- table tugas mingguan -->
<table class="table table-striped">
    <thead>
        <tr>
            <td>No</td>
            <td>Mata Kuliah</td>
            <td>Tugas</td>
            <td>Deadline</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data2 as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row["matkul"]; ?></td>
                <td><?= $row["tugas"]; ?></td>
                <td><?= date("l, d-M-Y", strtotime($row["deadline"])); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Footer -->
<?php include '../layout/footer.php'; ?>
<!-- Footer -->