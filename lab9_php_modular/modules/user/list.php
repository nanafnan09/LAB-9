<?php 
if (!isset($conn)) {
    include 'config/database.php';
}

$sql = "SELECT * FROM data_barang";
$result = mysqli_query($conn, $sql);
?>

<div class="content-body">
    <h2>Daftar Barang (User List)</h2>
    <div class="action-bar">
        <a href="index.php?page=user/add" class="tambah-link">Tambah Barang Baru</a>
    </div>

    <div class="main">
        <table>
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td>
                    <img src="<?= $row['gambar'];?>" alt="<?= $row['nama'];?>">
                </td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['kategori'];?></td>
                <td><?= number_format($row['harga_jual'], 0, ',', '.');?></td>
                <td><?= number_format($row['harga_beli'], 0, ',', '.');?></td>
                <td><?= $row['stok'];?></td>
                <td class="aksi">
                    <a href="index.php?page=user/edit&id=<?= $row['id_barang'];?>">Ubah</a>
                    <a href="index.php?page=user/hapus&id=<?= $row['id_barang'];?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
        </table>
    </div>
</div>