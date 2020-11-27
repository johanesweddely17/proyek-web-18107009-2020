<?php 
  require_once "koneksi.php";	
  $act = $_GET['act'];
  
  if($act == "tambah") {
    $sql = "INSERT INTO tb_mahasiswa 
              (NIM, Nama_mhs, tempat_lahir, tanggal_lahir, fakultas, jurusan, ipk) 
	          VALUES 
		          ('$_POST[int_NIM]', '$_POST[txt_Nama_mhs]', 
               '$_POST[txt_tempat_lahir]', '$_POST[int_tanggal_lahir]', '$_POST[txt_fakultas]', '$_POST[txt_jurusan]', '$_POST[int_ipk]')";	 					
    
    mysqli_query($con, $sql); 

    // Menutup koneksi
    db_disconnect($con);
  } 

  if($act == "update") {
    $sql = "UPDATE tb_mahasiswa SET							 	        
            NIM = '$_POST[int_NIM]',
            Nama_mhs 	  = '$_POST[txt_Nama_mhs]',
            tempat_lahir 	  = '$_POST[txt_tempat_lahir]',
            tanggal_lahir 	  = '$_POST[int_tanggal_lahir]',
            fakultas        = '$_POST[txt_fakultas]', 
            jurusan       = '$_POST[txt_jurusan]',
            ipk         =   '$_POST[int_ipk]',				  	
            WHERE NIM = '$_POST[idn]'"; 
				
    mysqli_query($con, $sql);

	  // Menutup koneksi
	  db_disconnect($con);
  }
  if($act == "hapus") {
    $sql = "DELETE FROM tb_mahasiswa WHERE NIM = $_GET[idm]";
    mysqli_query($con, $sql);

    // Menutup koneksi
    db_disconnect($con);
  }
  header('location:tampil_data_mahasiswa3.php'); 
?>
