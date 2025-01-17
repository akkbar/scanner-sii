<style>
@-webkit-keyframes tewas {
  from { background-color: red; }
  to { background-color: inherit; }
}
@-moz-keyframes tewas {
  from { background-color: red; }
  to { background-color: inherit; }
}
@-o-keyframes tewas {
  from { background-color: red; }
  to { background-color: inherit; }
}
@keyframes tewas {
  from { background-color: red; }
  to { background-color: inherit; }
}
.tewas {
  -webkit-animation: tewas 1s infinite; /* Safari 4+ */
  -moz-animation:    tewas 1s infinite; /* Fx 5+ */
  -o-animation:      tewas 1s infinite; /* Opera 12+ */
  animation:         tewas 1s infinite; /* IE 10+ */
}

@-webkit-keyframes hampir {
  from { background-color: orange; }
  to { background-color: inherit; }
}
@-moz-keyframes hampir {
  from { background-color: orange; }
  to { background-color: inherit; }
}
@-o-keyframes hampir {
  from { background-color: orange; }
  to { background-color: inherit; }
}
@keyframes hampir {
  from { background-color: orange; }
  to { background-color: inherit; }
}
.hampir {
  -webkit-animation: hampir 1s infinite; /* Safari 4+ */
  -moz-animation:    hampir 1s infinite; /* Fx 5+ */
  -o-animation:      hampir 1s infinite; /* Opera 12+ */
  animation:         hampir 1s infinite; /* IE 10+ */
}

</style>
<div class="content-wrapper">
	<section class="content-header">
		<div class="content-fluid">
			<div class="row">
				<div class="col-12">
					<h1>
						<i class="fa fa-tachometer-alt"></i> Dashboard
					</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="content-fluid">
			<div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $open_manifest; ?></h3>
                            <p>Jalankan Manifest</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-running"></i>
                        </div>
                        <a href="<?php echo base_url(); ?>shiroki_manifest_run" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $all_manifest; ?></h3>
                            <p>Upload Manifest</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-upload"></i>
                        </div>
                        <a href="<?php echo base_url(); ?>shiroki_manifest_input" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $all_user; ?></h3>
                            <p>Daftar User</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="<?php echo base_url(); ?>shiroki_setting" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $all_kanban; ?></h3>
                            <p>Daftar Kanban</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-clipboard-list"></i>
                        </div>
                        <a href="<?php echo base_url(); ?>shiroki_master_data" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Realtime Manifest Monitor</h3>
                            <div class="card-tools">
                                <a href="<?php echo base_url(); ?>shiroki_manifest_log_data"><i class="fa fa-clipboard-check"></i> Detail</a>
                            </div>
                        </div>
                        <div class="card-body">
							<table id="table" class="table" cellspacing="0" width="100% " style="white-space:nowrap;">
								<thead>
									<tr>
                                        <th>NO.</th>
                                        <th>MANIFEST</th>
                                        <th></th>
                                        <th>PROGRESS</th>
                                        <th>ETD</th>
                                        <th>DOCK CODE</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Realtime Scan Monitor</h3>
                            <div class="card-tools">
                                <a href="<?php echo base_url(); ?>shiroki_log_data"><i class="fa fa-clipboard-list"></i> Detail</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="table2" class="table" cellspacing="0" width="100% " style="white-space:nowrap;">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th>Scan Time</th>
										<th>Result</th>
										<th>Manifest</th>
										<th>Kanban Customer</th>
										<th>Kanban Shiroki</th>
										<th>Note</th>
										<th>Scan by</th>
										<th>Part Name</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</div>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<link href="<?php echo base_url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>" rel="stylesheet">
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script>
    var table;
    // $(document).ready(function() {
        table = $('#table').DataTable({ 
            processing: true,
            serverSide: true,
            order: [],
            stateSave: true,
            ajax: {
                url: "<?php echo site_url('shiroki_monitor_manifest_ajax')?>",
                type: "POST",
                data: function ( data ) {
                }
            },
			columnDefs: [
                { orderable: false, targets: [ 0, 1, 2, 5] }
            ],
            aoColumns: [
                null,
                null,
                null,
                null,
                null,
                null
                ],
            dom:
            "<'row'<'col-lg-6 col-md-6 col-sm-12 col-12'l><'col-lg-6 col-md-6 col-sm-12 col-12'f>>" +
            "<'row'<'col-lg-12 col-md-12 col-12 table-responsive'tr>>" +
            "<'row'<'col-lg-5 col-md-5 col-12'i><'col-lg-7 col-md-7 col-12'p>>",
                fade: false,
            language: {
                buttons: {
                    colvis: 'Columns'
                },
                searchPlaceholder: "Search records",
                search: ""
            },
            createdRow: function( row, data, dataIndex ) {
                var part1 = data[4].split(' ');
                var part2 = part1[0].split('-');
                var ddate = part2[2] + '-' + part2[1] + '-' + part2[0] + 'T' + part1[1] + ':00Z';
                var unix = Date.parse(ddate);
                var ts = Math. round((new Date()). getTime() + <?php echo GMT_HOUR*3600000; ?>);
                var xx = unix - ts;
                console.log(unix + ' ' + ts);
                if(xx > 0 && xx <= 1800000){
                    $(row).addClass('hampir');
                }else if(xx <= 0){
                    $(row).addClass('tewas');
                }
            }
        });
    // });
    // var table2;
    // // $(document).ready(function() {
    //     table2 = $('#table2').DataTable({ 
    //         processing: true,
    //         serverSide: true,
    //         order: [],
    //         stateSave: true,
    //         ajax: {
    //             url: "<?php echo site_url('shiroki_log_data_ajax')?>",
    //             type: "POST",
    //             data: function ( data ) {
                    
    //             }
    //         },
	// 		columnDefs: [
    //             // { visible: false, targets: [ 4, 13, 14] },
    //             { orderable: false, targets: [ 0, 6] }
    //         ],
    //         aoColumns: [
    //             null,
    //             null,
    //             null,
    //             null,
    //             null,
    //             null,
    //             null,
    //             null,
    //             null
    //             ],
    //         dom:
    //         "<'row'<'col-lg-6 col-md-6 col-sm-12 col-12'l><'col-lg-6 col-md-6 col-sm-12 col-12'f>>" +
    //         "<'row'<'col-lg-12 col-md-12 col-12 table-responsive'tr>>" +
    //         "<'row'<'col-lg-5 col-md-5 col-12'i><'col-lg-7 col-md-7 col-12'p>>",
    //             fade: false,
    //         language: {
    //             buttons: {
    //                 colvis: 'Columns'
    //             },
    //             searchPlaceholder: "Search records",
    //             search: ""
    //         }
    //     });
    // });
    load_manifest();
    function load_manifest(){
        table.ajax.reload();
        // table2.ajax.reload();
    }
    setInterval(function(){
        load_manifest();
    }, 10000);
</script>