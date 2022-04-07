        <!-- --------------------------------------------------------------------------------------------------------------------- -->
		<!-- Main Box -->
		<!-- --------------------------------------------------------------------------------------------------------------------- -->

        <div id="mainbox">

            <div id="header">

                <div id="titlelogo">

                    <img src="img/icon.png"/>

                </div>

                <div id="title">

                    <div id="titlemain">Sistem Informasi Jabfung Pengadaan Barang dan Jasa</div>
                    <div id="titlesub">Tugas PJJ Pemrograman Web Angkatan I 2022 - Kelompok 1</div>

                </div>

				<div id="welcomemsg">
					Selamat datang!<br><x><?php echo $_SESSION["user"]; ?></x>
				</div>

                <div id="clearfloat"></div>

            </div>

		<!-- --------------------------------------------------------------------------------------------------------------------- -->
		<!-- Menu -->
		<!-- --------------------------------------------------------------------------------------------------------------------- -->

			<div id="menu">

				<a href="sipbangjquery.php">Home</a>
				<a href="javascript:;" onclick="MenuDataPengguna()"> Data Pengguna</a>
				<a href="sipbangjquery.php">Data Paket</a>
				<a href="sipbangjquery.php">Penugasan</a>
				<a href="sipbangjquery.php">Kelola Paket</a>

				<div id="maindrop">

					<button id="subdrop1">
						Laporan
            		</button>

					<div id="submenu">
						<a href="sipbangjquery.php">Kinerja Jabfung</a>
						<a href="sipbangjquery.php">Paket Berjalan</a>
						<a href="sipbangjquery.php">Paket Selesai</a>
					</div>

				</div>

				<a id="logoutbtn" href="javascript:;" onclick="bLogout()">Sign Out</a>

			</div>

		<!-- --------------------------------------------------------------------------------------------------------------------- -->
		<!-- Content -->
		<!-- --------------------------------------------------------------------------------------------------------------------- -->

            <div id="content">

                <div id="isicontent">
                    <!-- Selamat datang, <?php echo $_SESSION["user"]; ?>! -->
                </div>

            </div>

		<!-- --------------------------------------------------------------------------------------------------------------------- -->
		<!-- Footer -->
		<!-- --------------------------------------------------------------------------------------------------------------------- -->

            <div id="footercontainer">

				<div id="footer">

					<div id="namaaplikasi">

						<img id="thumb" src="img/thumbup1.png"/>
						&nbsp;SIPBANG
						<div id="foot1">
							Sistem Informasi Jabfung<br>Pengadaan Barang dan Jasa
						</div>
						<div id="signature">Kelompok 1 | 2022</div>

						<div id="sosmed">
							<a href="#"><img id="instagram" src="img/instagram.png" value="Instagram"></a>
							<a href="#"><img id="facebook" src="img/facebook.png" value="Facebook"></a>
							<a href="#"><img id="twitter" src="img/twitter.png" value="Twitter"></a>
							<a href="#"><img id="telegram" src="img/telegram.png" value="Telegram"></a>
						</div>

					</div>

					<div id="vl"></div>

					<div id="contactus">
						
						<div class="info1">
							<img src="img/pin.png" alt="" width="20px">
							SIPBang Kemenkeu
						</div>

						<div class="info1">
							<img src="img/mail.png" alt="" width="20px">
							sipbang@kemenkeu.go.id
						</div>

						<div class="info1">
							<img src="img/tel.png" alt="" width="20px">
							021-0000000 / 0000000
						</div>

						<div class="info1">
							<img src="img/chat.png" alt="" width="20px">
							08000000000 (Call/ SMS/ WhatsApp)
						</div>

					</div>

				</div>

            </div>

        </div>

		<!-- --------------------------------------------------------------------------------------------------------------------- -->
		<!-- end of mainpage -->
		<!-- --------------------------------------------------------------------------------------------------------------------- -->

		<!-- --------------------------------------------------------------------------------------------------------------------- -->
		<!-- popups -->
		<!-- --------------------------------------------------------------------------------------------------------------------- -->

		<!-- --------------------------------------------------------------------------------------------------------------------- -->
		<!-- add -->
		<!-- --------------------------------------------------------------------------------------------------------------------- -->

		<div id="pnlDPAdd" class="modal">
			<div class="modal-content">
				<span id="btnDPAddClose" class="btnModalClose" >x</span>
				<b>Tambah Data</b>
				<table>
					<tr>
						<td>NIP</td>
						<td><input type="text" id="DPNIPA" /></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" id="DPNamaA" /></td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td><input type="text" id="DPJabatanA" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="button" id="badd" value="Simpan" class="btnClick" /></td>
					</tr>
				</table>
			</div>
		</div>

		<!-- --------------------------------------------------------------------------------------------------------------------- -->
		<!-- edit -->
		<!-- --------------------------------------------------------------------------------------------------------------------- -->

		<div id="pnlDPEdit" class="modal">
			<div class="modal-content">
				<span id="btnEditDPClose" class="btnModalClose" >x</span>
				<b>Edit Data</b>
				<table>
					<tr>
						<td>NIP</td>
						<td><input type="text" id="DPNIPE" /></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" id="DPNamaE" /></td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td><input type="text" id="DPJabatanE" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="button" id="bDPedit" value="Edit" class="btnClick" /></td>
					</tr>
				</table>
				<input type="hidden" id="DPUIDE" />
			</div>
		</div>

		<!-- --------------------------------------------------------------------------------------------------------------------- -->
		<!-- delete -->
		<!-- --------------------------------------------------------------------------------------------------------------------- -->

		<div id="pnlDPDelete" class="modal">
			<div class="modal-content">
				<span id="btnDPDeleteClose" class="btnModalClose" >x</span>
				<b>Delete Data</b>
				<table>
					<tr>
						<td>NIP</td>
						<td><input type="text" id="DPNIPD" /></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" id="DPNamaD" /></td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td><input type="text" id="DPJabatanD" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="button" id="bdel" value="Hapus" class="btnClick" /></td>
					</tr>
				</table>
				<input type="hidden" id="DPUIDD" />
			</div>
		</div>

		<!-- --------------------------------------------------------------------------------------------------------------------- -->
		<!-- end of popups -->
		<!-- --------------------------------------------------------------------------------------------------------------------- -->