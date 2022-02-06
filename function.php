<?php
$conn  = mysqli_connect("localhost","root", "", "uas_1904030064");

if($conn){
    echo 'berhasil';
}

function query($query)
{
    global $conn;

    //mengambil seluruh data pada tabel
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) ==1 ){
        return mysqli_fetch_assoc($result);
    }

    //pemanggilan elemen data dengan rapih
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

// menambah pengajar
if(isset($_POST['add'])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];

    $addtotable = mysqli_query($conn, "insert into pengajar (nip, nama, jenis_kelamin, alamat, foto) values('$nip', '$nama', '$jeniskelamin', '$alamat', '$foto')");
    if($addtotable){
        header('location:pengajar.php');
    }else{
        echo 'gagal';
        header('location:pengajar.php');

    }
}
// menambah pelajaran
if(isset($_POST['addpelajaran'])){
    $id = $_POST['id'];
    $namapelajaran = $_POST['nama_pelajaran'];
    $jenispelajaran = $_POST['jenis_pelajaran'];
    $keterangan = $_POST['keterangan'];

    $addtotable = mysqli_query($conn, "insert into pelajaran (id, nama_pelajaran, jenis_pelajaran, keterangan) values('$id', '$namapelajaran', '$jenispelajaran', '$keterangan')");
    if($addtotable){
        header('location:pelajaran.php');
    }else{
        echo 'gagal';
        header('location:pelajaran.php');

    }
}

//mengupdate pengajar
if(isset($_POST['editpengajar'])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];

    $update= mysqli_query($conn, "update pengajar set nama='$nama', jenis_kelamin='$jeniskelamin', alamat='$alamat', foto='$foto' where nip='$nip'" );
    if($update){
        header('location:pengajar.php');
    }else{
        echo 'gagal';
        header('location:pengajar.php');

    }
}
//agar tidak bisa masuk ke pengetikan manual pada url




//update pelajaran
if(isset($_POST['editpelajaran'])){
    $id = $_POST['id'];
    $namapelajaran = $_POST['nama_pelajaran'];
    $jenispelajaran = $_POST['jenis_pelajaran'];
    $keterangan = $_POST['keterangan'];

    $update = mysqli_query($conn, "update pelajaran set nama_pelajaran='$namapelajaran', jenis_pelajaran='$jenispelajaran', keterangan='$keterangan' where id='$id'");
    if($update){
        header('location:pelajaran.php');
    }else{
        echo 'gagal';
        header('location:pelajaran.php');

    }
}


?>
