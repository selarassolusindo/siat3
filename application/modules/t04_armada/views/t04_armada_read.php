<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">T04_armada Read</h2>
        <table class="table">
	    <tr><td>Merk</td><td><?php echo $merk; ?></td></tr>
	    <tr><td>Tipe</td><td><?php echo $tipe; ?></td></tr>
	    <tr><td>Tahun Pembuatan</td><td><?php echo $tahun_pembuatan; ?></td></tr>
	    <tr><td>Nomor Polisi</td><td><?php echo $nomor_polisi; ?></td></tr>
	    <tr><td>Nomor Rangka</td><td><?php echo $nomor_rangka; ?></td></tr>
	    <tr><td>Nomor Mesin</td><td><?php echo $nomor_mesin; ?></td></tr>
	    <tr><td>Tanggal Pembelian</td><td><?php echo $tanggal_pembelian; ?></td></tr>
	    <tr><td>Tanggal Jatuh Tempo Pajak</td><td><?php echo $tanggal_jatuh_tempo_pajak; ?></td></tr>
	    <tr><td>Tanggal Jatuh Tempo Kir</td><td><?php echo $tanggal_jatuh_tempo_kir; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('t04_armada') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>