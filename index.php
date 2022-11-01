
<?php
include "proses.php";

$a=new Biodata();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&amp;display=swap" rel="stylesheet">
	<link href="assets/datepicker/css/datepicker.css" rel="stylesheet">
</head>
<body>
<div class="container">
		<div class="text-center">
		  	<div class="card mb-3" style="border-radius: 20px 20px 35px 35px;">
			  <div class="row no-gutters">
			    <div class="col-sm-12 mt-2">
			    	<h5 style="color: #7a00cc !important;"><strong>&nbsp;Berikut adalah data yang kami terima:&nbsp;</strong></h5>
			    </div>
				    <div class="table-responsive-sm col-sm-10 offset-sm-1">
					    <div class="text-left" style="font-weight: bold;">
					    	<table class="table table-hover">
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <th>Nama </th>
							      <td>:</td>
							      <td><?php echo $a->nama()?></td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <th>sekolah</th>
							      <td>:</td>
							      <td><?php echo $a->sklh() ?></td>
							    </tr>
							    <tr>
							      <th scope="row">3</th>
							      <th>kelas</th>
							      <td>:</td>
							      <td><?php echo $a->kelas(); ?></td>
							    </tr>
							    <tr>
							      <th scope="row">4</th>
							      <th>jurusan</th>
							      <td>:</td>
							      <td><?php echo $a->jrsn() ?></td>
							    </tr>
							    <tr>
							      <th scope="row">5</th>
							      <th>Alamat</th>
							      <td>:</td>
							      <td><?php echo $a->almt(); ?></td>
							    </tr>
							    <tr>
							      <th scope="row">6</th>
							      <th>Jenis kelamin</th>
							      <td>:</td>
							      <td><?php echo $a->jnkl(); ?></td>
							    </tr>
							    <tr>
							      <th scope="row">7</th>
							      <th>No.HP</th>
							      <td>:</td>
							      <td><?php echo $a->nhp(); ?></td>
							    </tr>
							    <tr>
							      <th scope="row">8</th>
							      <th>Email</th>
							      <td>:</td>
							      <td><?php echo $a->emaill(); ?></td>
							    </tr>
							  </tbody>
							</table>
						</div>
				    </div>
			   
			    <div class="col-sm-2"></div>
			  </div>
			</div>
		</div>
	</div>
  
 


</body>
</html>



