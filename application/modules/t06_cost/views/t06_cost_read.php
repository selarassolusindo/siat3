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
        <h2 style="margin-top:0px">T06_cost Read</h2>
        <table class="table">
	    <tr><td>Cost</td><td><?php echo $cost; ?></td></tr>
	    <tr><td>Idakun</td><td><?php echo $idakun; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('t06_cost') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>