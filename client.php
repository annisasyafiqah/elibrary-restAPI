<?php
error_reporting(1); 

// url server
$url = "http://192.168.43.221/.perpus/server/server.php";
// buat objek baru dari class Client
$anggota = new clientAnggota($url);
$buku = new clientBuku($url);
$peminjaman = new clientPeminjaman($url);

class clientAnggota
{	private $url;

	//function pertama kali di-load saat classdipanggil
	public function __construct($url)
	{	
		$this->url = $url;
		unset($url);
	}

	public function filter($data)
	{
		$data = preg_replace('/[^a-zA-Z0-9]/','',$data);
		return $data;
		unset($data);
	}

	public function tampil_semua_data()
	{	
        $client = curl_init($this->url."?aksi=tampil_semua_anggota");
		curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
		$response = curl_exec($client);
		curl_close($client);
		$data = json_decode($response);
		return $data;
		unset($data,$client,$response);
	}

	public function tampil_data($id_anggota)
	{	
        $id_anggota = $this->filter($id_anggota);
		$client = curl_init($this->url."?aksi=tampil&id_anggota=".$id_anggota);
		curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
		$response = curl_exec($client);
		curl_close($client);
		$data = json_decode($response);
		return $data;
		unset($id_anggota,$data,$client,$response);
	}

	public function tambah_data($data)
	{	
        $data = '{  "id_anggota" : "'.$data['id_anggota'].'",
					"nama_anggota" : "'.$data['nama_anggota'].'",
                    "no_hp" : "'.$data['no_hp'].'",
                    "email" : "'.$data['email'].'",
                    "alamat" : "'.$data['alamat'].'",
					"aksi" : "'.$data['aksi'].'"
				}';
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL,$this->url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($c, CURLOPT_POST,true);
		curl_setopt($c, CURLOPT_POSTFIELDS,$data);
		$response = curl_exec($c);
		curl_close($c);
		unset($data,$c,$response);
	}

	public function ubah_data($data)
	{	
        $data = '{  "id_anggota" : "'.$data['id_anggota'].'",
					"nama_anggota" : "'.$data['nama_anggota'].'",
                    "no_hp" : "'.$data['no_hp'].'",
                    "email" : "'.$data['email'].'",
                    "alamat" : "'.$data['alamat'].'",
					"aksi" : "'.$data['aksi'].'"
		}';
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL,$this->url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($c, CURLOPT_POST,true);
		curl_setopt($c, CURLOPT_POSTFIELDS,$data);
		$response = curl_exec($c);
		curl_close($c);
		unset($data,$c,$response);
	}

	public function hapus_data($data)
	{	
        $id_anggota = $this->filter($data['id_anggota']);
		$data = '{  "id_anggota" : "'.$id_anggota.'",
					"aksi" : "'.$data['aksi'].'"
		}';
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL,$this->url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($c, CURLOPT_POST,true);
		curl_setopt($c, CURLOPT_POSTFIELDS,$data);
		$response = curl_exec($c);
		curl_close($c);
		unset($id_anggota,$data,$c,$response);
	}

    public function __destruct()
    {
        unset($this->url);
    }
}


class clientBuku
{	
    private $url;
	public function __construct($url)
	{	
		$this->url = $url;
		unset($url);
	}

	public function filter($data)
	{
		$data = preg_replace('/[^a-zA-Z0-9]/','',$data);
		return $data;
		unset($data);
	}

	public function tampil_semua_data()
	{	
        $client = curl_init($this->url."?aksi=tampil_semua_buku");
		curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
		$response = curl_exec($client);
		curl_close($client);
		$data = json_decode($response);
		return $data;
		unset($data,$client,$response);
	}

	public function tampil_data($id_buku)
	{	
        $id_buku = $this->filter($id_buku);
		$client = curl_init($this->url."?aksi=tampil&id_buku=".$id_buku);
		curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
		$response = curl_exec($client);
		curl_close($client);
		$data = json_decode($response);
		return $data;
		unset($id_buku,$data,$client,$response);
	}

	public function tambah_data($data)
	{	
        $data = '{  "id_buku" : "'.$data['id_buku'].'",
					"judul_buku" : "'.$data['judul_buku'].'",
                    "penulis" : "'.$data['penulis'].'",
                    "tahun" : "'.$data['tahun'].'",
                    "penerbit" : "'.$data['penerbit'].'",
					"aksi" : "'.$data['aksi'].'"
				}';
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL,$this->url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($c, CURLOPT_POST,true);
		curl_setopt($c, CURLOPT_POSTFIELDS,$data);
		$response = curl_exec($c);
		curl_close($c);
		unset($data,$c,$response);
	}

	public function ubah_data($data)
	{	
        $data = '{  "id_buku" : "'.$data['id_buku'].'",
					"judul_buku" : "'.$data['judul_buku'].'",
                    "penulis" : "'.$data['penulis'].'",
                    "tahun" : "'.$data['tahun'].'",
                    "penerbit" : "'.$data['penerbit'].'",
					"aksi" : "'.$data['aksi'].'"
		}';
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL,$this->url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($c, CURLOPT_POST,true);
		curl_setopt($c, CURLOPT_POSTFIELDS,$data);
		$response = curl_exec($c);
		curl_close($c);
		unset($data,$c,$response);
	}

	public function hapus_data($data)
	{	
        $id_buku = $this->filter($data['id_buku']);
		$data = '{  "id_buku" : "'.$id_buku.'",
					"aksi" : "'.$data['aksi'].'"
		}';
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL,$this->url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($c, CURLOPT_POST,true);
		curl_setopt($c, CURLOPT_POSTFIELDS,$data);
		$response = curl_exec($c);
		curl_close($c);
		unset($id_buku,$data,$c,$response);
	}

    public function __destruct()
    {
        unset($this->url);
    }
}


class clientPeminjaman
{	
    private $url;
	public function __construct($url)
	{	
		$this->url = $url;
		unset($url);
	}

	public function filter($data)
	{
		$data = preg_replace('/[^a-zA-Z0-9]/','',$data);
		return $data;
		unset($data);
	}

	public function tampil_semua_data()
	{	
        $client = curl_init($this->url."?aksi=tampil_semua_peminjaman");
		curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
		$response = curl_exec($client);
		curl_close($client);
		$data = json_decode($response);
		return $data;
		unset($data,$client,$response);
	}

	public function tampil_data($id_peminjaman)
	{	
        $id_peminjaman = $this->filter($id_peminjaman);
		$client = curl_init($this->url."?aksi=tampil&id_peminjaman=".$id_peminjaman);
		curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
		$response = curl_exec($client);
		curl_close($client);
		$data = json_decode($response);
		return $data;
		unset($id_peminjaman,$data,$client,$response);
	}

	public function tambah_data($data)
	{	
        $data = '{  "id_peminjaman" : "'.$data['id_peminjaman'].'",
					"id_anggota" : "'.$data['id_anggota'].'",
                    "id_buku" : "'.$data['id_buku'].'",
                    "tgl_pinjam" : "'.$data['tgl_pinjam'].'",
                    "tgl_kembali" : "'.$data['tgl_kembali'].'",
					"aksi" : "'.$data['aksi'].'"
				}';
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL,$this->url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($c, CURLOPT_POST,true);
		curl_setopt($c, CURLOPT_POSTFIELDS,$data);
		$response = curl_exec($c);
		curl_close($c);
		unset($data,$c,$response);
	}

	public function ubah_data($data)
	{	
        $data = '{  "id_peminjaman" : "'.$data['id_peminjaman'].'",
					"id_anggota" : "'.$data['id_anggota'].'",
                    "id_buku" : "'.$data['id_buku'].'",
                    "tgl_pinjam" : "'.$data['tgl_pinjam'].'",
                    "tgl_kembali" : "'.$data['tgl_kembali'].'",
					"aksi" : "'.$data['aksi'].'"
		}';
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL,$this->url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($c, CURLOPT_POST,true);
		curl_setopt($c, CURLOPT_POSTFIELDS,$data);
		$response = curl_exec($c);
		curl_close($c);
		unset($data,$c,$response);
	}

	public function hapus_data($data)
	{	
        $id_peminjaman = $this->filter($data['id_peminjaman']);
		$data = '{  "id_peminjaman" : "'.$id_peminjaman.'",
					"aksi" : "'.$data['aksi'].'"
		}';
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL,$this->url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($c, CURLOPT_POST,true);
		curl_setopt($c, CURLOPT_POSTFIELDS,$data);
		$response = curl_exec($c);
		curl_close($c);
		unset($id_peminjaman,$data,$c,$response);
	}

    public function __destruct()
    {
        unset($this->url);
    }
}


?>