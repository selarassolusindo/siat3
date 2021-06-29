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
        <h2 style="margin-top:0px">T03_lokasi <?php echo $button ?></h2> -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $this->uri->segment(2) == 'create' ? 'Tambah' : 'Ubah' ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" class="form-horizontal">
                <div class="box-body">
					<div class="form-group">
                        <label class="col-sm-2 control-label" for="lokasi">Lokasi <?php echo form_error('lokasi') ?></label>
                        <div class="col-sm-3">
                            <textarea class="form-control" rows="3" name="lokasi" id="lokasi" placeholder="Lokasi"><?php echo $lokasi; ?></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('t03_lokasi') ?>" class="btn btn-default">Batal</a>
                </div>

				<input type="hidden" name="idlokasi" value="<?php echo $idlokasi; ?>" /> 
			</form>
        </div>
    <!-- </body>
</html> -->