<!DOCTYPE HTML>
<html lang="en">
<head>
<title><?=$site_title?></title>
<meta name="descrition" content="<?=$site_title?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?=$config->baseURL . 'images/favicon.png?r='.time()?>" />
<link rel="stylesheet" type="text/css" href="<?=$config->baseURL . 'vendors/bootstrap/css/bootstrap.min.css?r='.time()?>"/>
<link rel="stylesheet" type="text/css" href="<?=$config->baseURL . 'vendors/fontawesome/css/all.css?r='.time()?>"/>
<link rel="stylesheet" type="text/css" href="<?=$config->baseURL . 'vendors/sweetalert2/sweetalert2.min.css?r=' . time()?>"/>
<link rel="stylesheet" type="text/css" href="<?=$config->baseURL . 'themes/modern/builtin/css/fonts/'.$setting['font_family'].'.css?r='.time()?>"/>
<link rel="stylesheet" type="text/css" href="<?=$config->baseURL . 'themes/modern/css/layar-show.css?r='.time()?>"/>
<link rel="stylesheet" type="text/css" href="<?=$config->baseURL . 'themes/modern/css/layar-antrian-show.css?r='.time()?>"/>
<link rel="stylesheet" type="text/css" href="<?=$config->baseURL . 'themes/modern/css/layar-monitor-show-'.$setting['color_scheme'].'.css?r='.time()?>"/>
<?php
if (@$styles) {
	foreach($styles as $file) {
		echo '<link rel="stylesheet" type="text/css" href="'.$file.'?r='.time().'"/>' . "\n";
	}
}
?>
<link rel="stylesheet" type="text/css" href="<?=$config->baseURL . 'themes/modern/css/layar-monitor-show-'.$setting['color_scheme'].'.css?r='.time()?>"/>
<style>
/* Bootbox */
.bootbox-close-button {
	border: 0;
    background: none;
    font-size: 25px;
    color: #8c8d91;
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: .75rem 1.25rem;
    color: inherit;
}
button.close {
	background-color: transparent;
    border: 0;
    -webkit-appearance: none;
}

.close {
    float: right;
    font-size: 1.5rem;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
}

.bootbox-body {
	color: #212529;
}
/*-- Bootbox */
</style>

<script type="text/javascript" src="<?=$config->baseURL . 'vendors/jquery/jquery.min.js?r='.time()?>"></script>
<script type="text/javascript" src="<?=$config->baseURL . 'vendors/bootstrap/js/bootstrap.min.js?r='.time()?>"></script>
<script type="text/javascript" src="<?=$config->baseURL . 'vendors/bootbox/bootbox.min.js'?>"></script>
<script type="text/javascript" src="<?=$config->baseURL . 'vendors/sweetalert2/sweetalert2.min.js?r=' . time()?>"></script>
<script type="text/javascript" src="<?=$config->baseURL . 'themes/modern/js/antrian.js?r='.time()?>"></script>
<script type="text/javascript">
	var base_url = "<?=base_url()?>/"
	bootbox.setDefaults({
		animate: false,
		centerVertical : true
	});
</script>
<?php
if (@$scripts) {
	foreach($scripts as $file) {
		if (is_array($file)) {
			if ($file['print']) {
				echo '<script type="text/javascript">' . $file['script'] . '</script>' . "\n";
			}
		} else {
			echo '<script type="text/javascript" src="'.$file.'?r='.time().'"></script>' . "\n";
		}
	}
}
// echo '<pre>'; print_r($urut); die;
?>

</head>
<body>
	<div class="block-container">
		<header class="shadow-sm">
			<div class="header-left-container">
				<div class="logo">
					<img src="<?=base_url()?>/images/<?=$identitas['file_logo']?>">
				</div>
				<div class="detail">
					<div class="logo-text">
						<?=$identitas['nama']?>
					</div>
					<div class="alamat">
						<p><?=$identitas['alamat']?></p>
						<p>Telp: <?=$identitas['no_hp']?></p>
					</div>
				</div>
			</div>
			<div class="header-right-container">
				<div class="tanggal">
					<?=format_tanggal(date('Y-m-d'))?>
				</div>
				<div class="waktu">
					<span id="live_jam"><?=date('H:i:s')?></span>
				</div>
			</div>
		</header>
		<div class="content-container">
    <div class="ambil-antrian-container">
        <h1 class="title">Ambil Antrian</h1>
        <div class="form-container">
            <!-- Foto di sebelah kiri -->
            <div class="left-section">
                <img src="path/to/your/image.jpg" alt="Foto" class="image">
            </div>
            <!-- Textfield dan button cek di sebelah kanan -->
            <div class="right-section">
                <div class="form-group">
                    <input type="text" class="form-control" id="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" id="btn-cek">Cek</button>
                </div>
                <!-- Dropdown 1 -->
                <div class="form-group">
                    <select class="form-control" id="dropdown1">
                        <option value="">Pilihan 1</option>
                        <option value="">Pilihan 2</option>
                        <option value="">Pilihan 3</option>
                    </select>
                </div>
                <!-- Dropdown 2 -->
                <div class="form-group">
                    <select class="form-control" id="dropdown2">
                        <option value="">Pilihan 1</option>
                        <option value="">Pilihan 2</option>
                        <option value="">Pilihan 3</option>
                    </select>
                </div>
                <!-- Button Daftar -->
                <div class="form-group">
                    <button type="button" class="btn btn-success" id="btn-daftar">Daftar</button>
                </div>
            </div>
        </div>
    </div>
</div>

		<footer>
			<div><?=$setting['text_footer']?></div>
		</footer>
	</div>
</body>
<style>
    .btn {
        margin-right: 50px; /* Menambahkan jarak antara tombol */
        font-size: 50px; /* Memperbesar ukuran teks tombol */
        padding: 50px 70px; /* Menambahkan padding ke tombol */
    }
</style>
</html>