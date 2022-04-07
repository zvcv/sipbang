<?php
	session_start();

	include "lib/dbconnectsipbang.php";

	$sql = "SELECT * FROM pengguna";
	$res = runsqltext($sql);
	$numrow = mysqli_num_rows($res);

	if ($numrow < 1) {
		echo "Data pengguna tidak tersedia";
	} else {
		echo "

			  <div class='dpengguna'>
				  Daftar Pengguna
			  </div>
			
			  <div class='buttoncontainer'>
				  <div class='buttonz'>
				  	  <button id='btnTambahPengguna' title='Tambah'>
				  		  <img src='img/add.png' alt='' width='20px'>
				  	  </button>
					  <button id='btnEditPengguna' title='Edit'>
						  <img src='img/pencil.png' alt='' width='20px'>
					  </button>
					  <button id='btnHapusPengguna' title='Hapus'>
						  <img src='img/trash.png' alt='' width='20px'>
					  </button>
					  <button id='Refresh' title='Refresh'>
						  <img src='img/reload.png' alt='' width='20px'>
					  </button>
				  </div>
			  </div>

			  <table id='tblDataPengguna' class='display' style='width:100%'>
				<thead>
					<tr>
                        <td>#</td>
                        <td>NIP</td>
                        <td>Nama</td>
                        <td>Jabatan</td>
					</tr>
				</thead>
				<tbody>
			 ";

		while ($row = mysqli_fetch_row($res)) {
			echo "
				 <tr>
					<td width='20px'><input type='radio' name='rdoDP' value=".$row[0]." /></td>
                    <td>".$row[1]."</td>
					<td>".$row[2]."</td>
					<td>".$row[3]."</td>
				</tr>
				 ";
		}

		echo "</tbody>
			</table>";
	}
?>