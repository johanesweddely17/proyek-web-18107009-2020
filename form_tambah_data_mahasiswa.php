<html> 
 <head>        
  <title>Tambah Data Mahasiswa</title>
 </head>
 <body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="ctrl_mahasiswa.php?act=tambah" method ="POST"> 
   <table border ="0">
    
    <tr> 
     <td> NIM </td> 
     <td> : <input type="text" name="int_NIM"></td>
    </tr>
    <tr> 
     <td> Nama_mhs </td> 
     <td> : <input type="text" name="txt_Nama_mhs"></td>
     </td>
    </tr>
    <tr> 
     <td> tempat_lahir </td> 
     <td> : <input type="text" name="txt_tempat_lahir"> </td>
    </tr>
    <tr> 
     <td> tanggal_lahir </td> 
     <td> : <input type="date" name="int_tanggal_lahir"> </td>
    </tr>
    <tr> 
     <td> fakultas </td> 
     <td> : <input type="text" name="txt_fakultas"> </td>
    </tr>
    <tr> 
     <td> jurusan </td> 
     <td> : <input type="text" name="txt_jurusan"> </td>
    </tr>
    <tr> 
     <td> ipk </td> 
     <td> : <input type="text" name="int_ipk"> </td>
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
