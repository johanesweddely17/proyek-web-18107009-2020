<?php
  require_once "koneksi.php";
  $cari=$_GET['id'];
  $sql = "SELECT * FROM tb_mahasiswa WHERE NIM = '$cari'";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_row($result);
?> 
<html>  
  <head>        
   <title>Update Data Mahasiswa</title>
  </head>
  <body>
   <h1>Update Data Mahasiswa</h1>
   <form action="ctrl_mahasiswa.php?act=update" method ="POST"> 
    <table border ="0">
     <input type="hidden" name="idn" 
            value="<?php echo $data[0]; ?>">
     <tr> 
       <td> NIM </td> 
       <td> : <input type="text" name="int_NIM"
                     value="<?php echo $data[0]; ?>"
                     >
       </td>
     </tr>
     <tr> 
       <td> Nama_mhs </td> 
       <td> : <input type="text" name="txt_Nama_mhs" 
                     value="<?php echo $data[1]; ?> ">
       </td>
     </tr>
     <tr> 
       <td> tempat_lahir </td> 
       <td> : <input type="text" name="txt_tempat_lahir" 
                     value="<?php echo $data[2]; ?>">
       </td>
     </tr>
     <tr> 
       <td> tanggal_lahir </td> 
       <td> : <input type="date" name="int_tanggal_lahir" 
              value="<?php echo $data[3]; ?>"> 
       </td>
     </tr>
     <tr> 
       <td> fakultas </td> 
       <td> : <input type="text" name="txt_fakultas" 
                     value="<?php echo $data[4]; ?>"> 
       </td>
     </tr>
     <tr> 
       <td> jurusan </td> 
       <td> : <input type="text" name="txt_jurusan" 
                     value="<?php echo $data[5]; ?>"> 
       </td>
     </tr>
     <tr> 
       <td> ipk </td> 
       <td> : <input type="int" name="int_ipk" 
                     value="<?php echo $data[6]; ?>"> 
       </td>
     </tr>
     <tr> 
       <td> <input type="submit" value="Save">   
            <input type=button value=Back onclick=self.history.back()> 
       </td>
     </tr>
   </table>            
  </form>
 </body>
</html>
