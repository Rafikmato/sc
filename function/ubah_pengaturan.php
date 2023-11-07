<?php 
	include 'connect.php';

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$nama_website = $_POST['nama_website'];
		$ekstensi_diperbolehkan	= array('png','jpg','gif');
		$nama = $_FILES['file']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];	

		if ($nama == "") {
			$query = mysqli_query($koneksi, "UPDATE pengaturan SET nama_website = '$nama_website' WHERE id = '$id' ");
			if ($query) {
				?>
					<script type="text/javascript">
						alert('Data Berhasil Diubah');
						window.location = "../pengaturan.php";
					</script>
				<?php
			}else{
				?>
					<script type="text/javascript">
						alert('Data Gagal Diubah');
						window.location = "../pengaturan.php";
					</script>
				<?php
			}
		}else{
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../admin/assets/images/'.$nama);
					$query = mysqli_query($koneksi, "UPDATE pengaturan SET nama_website = '$nama_website', logo = '$nama' WHERE id = '$id' ");
					if($query){
						?>
							<script type="text/javascript">
								alert('Data Berhasil Di Ubah');
								window.location = "../pengaturan.php";
							</script>
						<?php
					}else{
						?>
							<script type="text/javascript">
								alert('Gagal Mengubah Gambar');
								window.location = "../pengaturan.php";
							</script>
						<?php
					}
				}else{
					?>
							<script type="text/javascript">
								alert('Ukuran File Terlalu Besar');
								window.location = "../pengaturan.php";
							</script>
						<?php
				}
			}else{
				?>
					<script type="text/javascript">
						alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');
						window.location = "../pengaturan.php";
					</script>
				<?php

			}
		}
	}
?>