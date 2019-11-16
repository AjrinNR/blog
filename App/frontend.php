<?php 
    class Frontend extends Database{
        public function index(){
            $blog = mysqli_query(
                $this->koneksi,"SELECT artikel.id,artikel.judul,artikel.slug,artikel.foto,
                kategori.nama as nama_kategori, users.nama as penulis 
                from ((artikel JOIN  kategori on kategori.id = artikel.id_kategori)
                JOIN users on users.id = artikel.id_user)");
            return $blog;
        }
    }
?>