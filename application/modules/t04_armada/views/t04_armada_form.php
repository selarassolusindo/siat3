<!-- <!doctype html>
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
        <h2 style="margin-top:0px">T04_armada <?php echo $button ?></h2> -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $this->uri->segment(2) == 'create' ? 'Tambah' : 'Ubah' ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" class="form-horizontal">
                <div class="box-body">
					<div class="form-group">
                        <label class="col-sm-2 control-label" for="varchar">Merk <?php echo form_error('merk') ?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="merk" id="merk" placeholder="Merk" value="<?php echo $merk; ?>" />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label" for="varchar">Tipe <?php echo form_error('tipe') ?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tipe" id="tipe" placeholder="Tipe" value="<?php echo $tipe; ?>" />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label" for="varchar">Tahun Pembuatan <?php echo form_error('tahun_pembuatan') ?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tahun_pembuatan" id="tahun_pembuatan" placeholder="Tahun Pembuatan" value="<?php echo $tahun_pembuatan; ?>" />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label" for="varchar">Nomor Polisi <?php echo form_error('nomor_polisi') ?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nomor_polisi" id="nomor_polisi" placeholder="Nomor Polisi" value="<?php echo $nomor_polisi; ?>" />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label" for="varchar">Nomor Rangka <?php echo form_error('nomor_rangka') ?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nomor_rangka" id="nomor_rangka" placeholder="Nomor Rangka" value="<?php echo $nomor_rangka; ?>" />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label" for="varchar">Nomor Mesin <?php echo form_error('nomor_mesin') ?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nomor_mesin" id="nomor_mesin" placeholder="Nomor Mesin" value="<?php echo $nomor_mesin; ?>" />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label" for="date">Tanggal Pembelian <?php echo form_error('tanggal_pembelian') ?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tanggal_pembelian" id="tanggal_pembelian" placeholder="Tanggal Pembelian" value="<?php echo $tanggal_pembelian; ?>" />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label" for="date">Tanggal Jatuh Tempo Pajak <?php echo form_error('tanggal_jatuh_tempo_pajak') ?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tanggal_jatuh_tempo_pajak" id="tanggal_jatuh_tempo_pajak" placeholder="Tanggal Jatuh Tempo Pajak" value="<?php echo $tanggal_jatuh_tempo_pajak; ?>" />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label" for="date">Tanggal Jatuh Tempo Kir <?php echo form_error('tanggal_jatuh_tempo_kir') ?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tanggal_jatuh_tempo_kir" id="tanggal_jatuh_tempo_kir" placeholder="Tanggal Jatuh Tempo Kir" value="<?php echo $tanggal_jatuh_tempo_kir; ?>" />
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('t04_armada') ?>" class="btn btn-default">Batal</a>
                </div>

				<input type="hidden" name="idarmada" value="<?php echo $idarmada; ?>" /> 
			</form>
        </div>
    <!-- </body>
</html> -->