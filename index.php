<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h2>Input Data Pasien Covid19</h2>
     <hr>
     <div class="tengah">
     <form action="simpan.php" method="post">  
          Nama wilayah :
          <select name="wilayah" id="">
               <option value="DKI Jakarta">DKI Jakarta</option>
               <option value="Jawa Barat">Jawa Barat</option>
               <option value="Banten">Banten</option>
               <option value="Jawa Tengah">Jawa Tengah</option>
          </select>

          <br>
          Jumlah Positif :
          <input type="text" name="positif" required>
          <br>
          Jumlah Dirawat :
          <input type="text" name="rawat" required>
          <br>
          Jumlah Sembuh :
          <input type="text" name="sembuh" required>
          <br>
          Jumlah Meninggal :
          <input type="text" name="meninggal" required>
          <br>
          Nama Operator :
          <input type="text" name="nama" required>
          <br>
          NIM Mahasiswa :
          <input type="text" name="nim" required>
          <br>
          <td><input type="submit" value="simpan"></td>
          </div>  
 </tr>  
 </table>  
 </form>       
</body>
</html>
