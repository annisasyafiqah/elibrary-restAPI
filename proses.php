<?php
include "client.php";

if ($_POST['aksi']=='tambah')
{
    $data = array(  "id_anggota"=>$_POST['id_anggota'],
                    "nama_anggota"=>$_POST['nama_anggota'],
                    "no_hp"=>$_POST['no_hp'],
                    "email"=>$_POST['email'],
                    "alamat"=>$_POST['alamat'],
                    "aksi"=>$_POST['aksi']);
    $anggota->tambah_data($data);
    header('location:dt_anggota.php?page=daftar-data');

} else if ($_POST['aksi']=='ubah')
{
    $data = array(  "id_anggota"=>$_POST['id_anggota'],
                    "nama_anggota"=>$_POST['nama_anggota'],
                    "no_hp"=>$_POST['no_hp'],
                    "email"=>$_POST['email'],
                    "alamat"=>$_POST['alamat'],
                    "aksi"=>$_POST['aksi']);
    $anggota->ubah_data($data);
    header('location:dt_anggota.php?page=daftar-data');

} else if ($_GET['aksi']=='hapus')
{
    $data = array(  "id_anggota"=>$_GET['id_anggota'],
                    "aksi"=>$_GET['aksi']);
    $anggota->hapus_data($data);
    header('location:dt_anggota.php?page=daftar-data');


    
} else if ($_POST['aksi']=='tambah-buku')
{
    $dataBuku = array(  "id_buku"=>$_POST['id_buku'],
                    "judul_buku"=>$_POST['judul_buku'],
                    "penulis"=>$_POST['penulis'],
                    "tahun"=>$_POST['tahun'],
                    "penerbit"=>$_POST['penerbit'],
                    "aksi"=>$_POST['aksi']);
    $buku->tambah_data($dataBuku);
    header('location:dt_buku.php?page=daftar-data');

} else if ($_POST['aksi']=='ubah-buku')
{
    $dataBuku = array(  "id_buku"=>$_POST['id_buku'],
                    "judul_buku"=>$_POST['judul_buku'],
                    "penulis"=>$_POST['penulis'],
                    "tahun"=>$_POST['tahun'],
                    "penerbit"=>$_POST['penerbit'],
                    "aksi"=>$_POST['aksi']);
    $buku->ubah_data($dataBuku);
    header('location:dt_buku.php?page=daftar-data');

} else if ($_GET['aksi']=='hapus-buku')
{
    $dataBuku = array(  "id_buku"=>$_GET['id_buku'],
                    "aksi"=>$_GET['aksi']);
    $buku->hapus_data($dataBuku);
    header('location:dt_buku.php?page=daftar-data');


} elseif ($_POST['aksi']=='tambah-peminjaman')
{
    $data = array(  "id_peminjaman"=>$_POST['id_peminjaman'],
                    "id_anggota"=>$_POST['id_anggota'],
                    "id_buku"=>$_POST['id_buku'],
                    "tgl_pinjam"=>$_POST['tgl_pinjam'],
                    "tgl_kembali"=>$_POST['tgl_kembali'],
                    "aksi"=>$_POST['aksi']);
    $peminjaman->tambah_data($data);
    header('location:dt_peminjaman.php?page=daftar-data');

} else if ($_POST['aksi']=='ubah-peminjaman')
{
    $data = array(  "id_peminjaman"=>$_POST['id_peminjaman'],
                    "id_anggota"=>$_POST['id_anggota'],
                    "id_buku"=>$_POST['id_buku'],
                    "tgl_pinjam"=>$_POST['tgl_pinjam'],
                    "tgl_kembali"=>$_POST['tgl_kembali'],
                    "aksi"=>$_POST['aksi']);
    $peminjaman->ubah_data($data);
    header('location:dt_peminjaman.php?page=daftar-data');

} else if ($_GET['aksi']=='hapus-peminjaman')
{
    $data = array(  "id_peminjaman"=>$_GET['id_peminjaman'],
                    "aksi"=>$_GET['aksi']);
    $peminjaman->hapus_data($data);
    header('location:dt_peminjaman.php?page=daftar-data');
}

unset($anggota,$data);
?>
