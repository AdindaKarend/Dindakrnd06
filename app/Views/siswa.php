<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>
    <h3>Data Siswa</h3>
    <table class="table-bordered table-striped">
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Tanggal Lahir</th>
        </tr>
        <tr>
            <td>Adinda Karend Rahma</td>
            <td>101</td>
            <td>2007-03-04</td>
        </tr>
        <tr>
        <td>Aikal Baihaki</td>
        <td>102</td>
        <td>2007-08-17</td>
        </tr>
    </table>
<?= $this->endSection(); ?>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>

<?php if(session()->get('role') === 'admin' ) : ?>
    <h3>Data Siswa</h3>
    <table class="table-bordered table-striped">
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Tanggal Lahir</th>
        </tr>
        <tr></
        <td>Adinda Karend Rahma</td>
        <td>101</td>
        <td>2007-03-04</td>
        </tr>
        <tr>
            <td>Aikal Baihaki</td>
            <td>102</td>
            <td>2007-08-17</td>
        </tr>
    </table>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Anda tidak memiliki akses untuk melihat data ini
        </div>
        <?php endif; ?>