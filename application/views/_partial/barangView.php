<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Master Barang </h3>
                        <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Barang</a></div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Nama</th>
                                    <th>Kelompok</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Reseller</th>
                                    <th>Status</th>
                                    <th style="text-align: right;">Aksi</th>
                                </tr>
                                </thead>
                                <tbody id="show_data">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- MODAL ADD -->
<div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Barang</label>
                        <div class="col-xs-9">
                            <input name="kode" id="kode" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Barang</label>
                        <div class="col-xs-9">
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kelompok</label>
                        <div class="col-xs-9">
                            <input name="kel" id="kel" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga Beli</label>
                        <div class="col-xs-9">
                            <input name="beli" id="beli" class="form-control" type="text" placeholder="Harga Beli" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xss-3" >Harga Jual</label>
                        <div class="col-xs-9">
                            <input name="jual" id="jual" class="form-control" type="text" placeholder="Harga Jual" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Reseller</label>
                        <div class="col-xs-9">
                            <input name="seller" id="seller" class="form-control" type="text" placeholder="Reseller" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status Barang</label>
                        <div class="col-xs-9">
                            <input name="status" id="status" class="form-control" type="text" placeholder="Status Barang" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL ADD-->

<!-- MODAL EDIT -->
<div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Barang</label>
                        <div class="col-xs-9">
                            <input name="id_barang" id="id_barang1" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Barang</label>
                        <div class="col-xs-9">
                            <input name="nama_barang" id="nama_barang1" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Barang</label>
                        <div class="col-xs-9">
                            <input name="kelompok" id="kelompok1" class="form-control" type="text" placeholder="Kelompok Barang" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga Beli</label>
                        <div class="col-xs-9">
                            <input name="harga_beli" id="harga_beli1" class="form-control" type="text" placeholder="Harga Beli" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga Jual</label>
                        <div class="col-xs-9">
                            <input name="harga_jual" id="harga_jual1" class="form-control" type="text" placeholder="Harga Jual" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga Reseller</label>
                        <div class="col-xs-9">
                            <input name="reseller" id="reseller1" class="form-control" type="text" placeholder="Status" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Status Barang</label>
                        <div class="col-xs-9 ">
                            <input name="status_barang" id="status_barang1" class="form-control" type="text" placeholder="Status Barang" style="width: 335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL EDIT-->


<!--MODAL HAPUS-->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <input type="hidden" name="kode" id="textkode" value="">
                    <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL HAPUS-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();	//pemanggilan fungsi tampil barang.

        $('#example1').dataTable();

        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>/barang/data_barang',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                            '<td>'+data[i].id_bar+'</td>'+
                            '<td>'+data[i].nama_bar+'</td>'+
                            '<td>'+data[i].id_kel+'</td>'+
                            '<td>'+data[i].harga_beli+'</td>'+
                            '<td>'+data[i].harga_jual+'</td>'+
                            '<td>'+data[i].reseller+'</td>'+
                            '<td>'+data[i].status_bar+'</td>'+
                            '<td style="text-align:right">'+
                            '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id_bar+'">Edit</a>'+' '+
                            '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_bar+'">Hapus</a>'+
                            '</td>'+
                            '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/barang/get_barang')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(id_bar, nama_bar, id_kel, harga_beli, harga_jual, reseller, status_bar){
                        $('#ModalaEdit').modal('show');
                        $('[name="id_barang"]').val(data.id_bar);
                        $('[name="nama_barang"]').val(data.nama_bar);
                        $('[name="kelompok"]').val(data.id_kel);
                        $('[name="harga_beli"]').val(data.harga_beli);
                        $('[name="harga_beli"]').val(data.harga_jual);
                        $('[name="reseller"]').val(data.reseller);
                        $('[name="status_bar"]').val(data.status_bar);
                    });
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

        //Simpan Barang
        $('#btn_simpan').on('click',function(){
            var kode=$('#kode').val();
            var nama=$('#nama').val();
            var kel=$('#kel').val();
            var beli=$('#beli').val();
            var jual=$('#jual').val();
            var seller=$('#seller').val();
            var status=$('#status').val()
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/simpan_barang')?>",
                dataType : "JSON",
                data : {kode:kode , nama:nama, kel:kel, beli:beli, jual:jual, seller:seller, status:status},
                success: function(data){
                    $('[name="kode"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="kel"]').val("");
                    $('[name="beli"]').val("");
                    $('[name="jual"]').val("");
                    $('[name="seller"]').val("");
                    $('[name="status"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click',function(){
            var kobar=$('#id_barang1').val();
            var nabar=$('#nama_barang1').val();
            var kel=$('#kelompok1').val();
            var beli=$('#harga_beli1').val();
            var jual=$('#harga_jual1').val();
            var seller=$('#reseller1').val();
            var status=$('#status_barang1').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/update_barang')?>",
                dataType : "JSON",
                data : {kobar:kobar , nabar:nabar, kel:kel, beli:beli, jual:jual, seller:seller, status:status},
                success: function(data){
                    $('[name="id_barang"]').val("");
                    $('[name="nama_barang"]').val("");
                    $('[name="kelompok"]').val("");
                    $('[name="harga_beli"]').val("");
                    $('[name="harga_jual"]').val("");
                    $('[name="reseller"]').val("");
                    $('[name="status_barang"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/hapus_barang')?>",
                dataType : "JSON",
                data : {kode: kode},
                success: function(data){
                    $('#ModalHapus').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

    });

</script>