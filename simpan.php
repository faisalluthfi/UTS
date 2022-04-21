<?php  
 /*  
 source: belajarwebpedia.com  
 */  
 $nama= trim($_POST['nama']);  
 $positif = trim($_POST['positif']);
 $dirawat = trim($_POST['rawat']);
 $sembuh = trim($_POST['sembuh']);
 $wilayah = trim($_POST['wilayah']);
 $meninggal = trim($_POST['meninggal']);
 $nim = trim($_POST['nim']);
 date_default_timezone_set("Asia/Jakarta");
 $date = date('d F Y,  h:i:s ');
 $buka = fopen("db.html", 'a');
 fwrite($buka, '<!DOCTYPE html>
      <html lang="en">
 
      <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="style.css">
      </head>
 
      <body>
      <div class="atas">
           <h2>Data Pemantauan Covid19 Wilayah "' . $wilayah . '"</h2>
 
           <h2>Per "' . $date . '"</h2>
           <h2>"' . $nama . '" / "' . $nim . '"</h2>
      </div>
      <table width="100%" border="">
           <tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
 
           </tr>
           <tr>
                <td>"' . $positif . '"</td>
                <td>"' . $dirawat . '"</td>
                <td>"' . $sembuh . '"</td>
                <td>"' . $meninggal . '"</td>
           </tr>
      </table>
      </body>
 
      </html>');
 fclose($buka);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
     <div class="atas">
         <h2>Data Pemantauan Covid19 Wilayah <?php echo "$wilayah" ?></h2>
         
         <h2>Per <?php echo date('d F Y,  h:i:s '); ?> </h2>
         <h2><?php echo"$nama" ?> / <?php echo "$nim" ?></h2>
         </div>
         <table width="100%" border="1" cellpadding="10" colspan="2">
             <tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                
             </tr>
             <tr>
                <td><?php echo "$positif" ?></td>
                <td><?php echo "$dirawat" ?></td>
                <td><?php echo "$sembuh" ?></td>
                <td><?php echo "$meninggal" ?></td>
             </tr>
         </table>
 </body>
 </html>

 <?php
 echo "<br>";
 echo "Hasil : <a href='db.html'> db.html </a>"; 
 ?>
