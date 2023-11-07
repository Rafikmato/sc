<?php 
include '../function/connect.php';
session_start();

$aa = mysqli_query($koneksi, "SELECT * FROM pengaturan");
while ($bb = mysqli_fetch_array($aa)) {
  $nama_website = $bb['nama_website'];
  $logo = $bb['logo'];
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$provider = $_GET['provider'];

	$query = mysqli_query($koneksi, "SELECT * FROM game WHERE id = '$id' AND provider = '$provider' ");
	while ($data = mysqli_fetch_array($query)) {
		$link = $data['link'];
		$provider1 = $data['provider'];
		
		?>
		<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Main Slot Dari <?php echo $nama_website; ?></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<style>
			body {
				margin: 0;
				background-color: black;
			}

			iframe {
				position: fixed;
				top: 0;
				left: 0;
				bottom: 0;
				right: 0;
				width: 100%;
				height: 100%;
				border: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				margin-top: 40px;
				padding-bottom: 40px;
			}

			.tmpt {
				background-color: black;
				text-align: center;
				margin-top: 5px;
				z-index: 9999999999999;
			}

		</style>
	</head>

	<body>
		<?php 	
			if ($provider1 == "pragmaticplay") {
				?>
					<iframe src="https://demogamesfree-asia.pragmaticplay.net/gs2c/openGame.do?lang=id&cur=IDR&gameSymbol=<?php echo $data['link'] ?>&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99" frameborder="0" scrolling="no"></iframe>
				<?php
			}else if ($provider1 == "pgsoft") {
				?>
				<script type="text/javascript">
					window.location = "<?php echo $data['link'] ?>"
				</script>
				<?php
			}else{
				?>
					<script type="text/javascript">
						alert('Gagal Membuka Game');
						window.location = "../index.php";
					</script>
				<?php
			}
		?>
		
	</body>

	</html>
		<?php
	}

}
?>