        <?php $this->load->view('inc/header_view'); ?>

        <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h5 class="txt-dark">Portfolio</h5>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <ol class="breadcrumb">
                    <li><a href="#">Portfolio Management</a></li>
                  </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <button class="btn btn-success btn-lable-wrap left-label" data-toggle="modal" data-target="#add_modal">
                                    <span class="btn-label"><i class="fa fa-plus"></i></span>
                                    <span class="btn-text">Add New Portfolio</span>
                                </button>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <!-- ADD Modal Statrt -->
                                <div id="add_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <form id="add_portfolio_form" autocomplete="off" method="post" action="">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title">Add New Portfolio</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center" id="add_error" style="display: none;"></div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Portfolio Title:<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="portfolio_title" id="portfolio_title" placeholder="Portfolio Title">
                                                    </div>

                                                    <div class="form-group mb-30">
                                                        <label class="control-label mb-10 text-left">Portfolio Image</label>
                                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                            <span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
                                                            <input type="file" name="portfolio_image" id="portfolio_image">
                                                            </span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label mb-10 text-left">Portfolio Short Description:</label>
                                                        <textarea class="form-control" rows="5" name="portfolio_short_description" id="portfolio_short_description" placeholder="Portfolio Short Description"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label mb-10 text-left">Portfolio Description:</label>

                                                        <div class="col-md-12">
                                                            <div class="panel panel-default card-view">      
                                                                <div class="panel-wrapper collapse in">
                                                                    <div class="panel-body">
                                                                        <div class="summernote"></div>
                                                                    </div>
                                                                </div>
                                                                <textarea name="portfolio_description" id="portfolio_description" style="display: none"></textarea>
                                                            </div>
                                                        </div>

                                                        
                                                    </div>

                                                    

                                                    
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success submit_form">ADD</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- ADD Modal End -->
                                
                                
                                
                                <!-- UPDATE modal start -->
                                <div id="update_modal" class="modal fade update_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <form id="update_portfolio_form" method="" action="">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title">Change Portfolio</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center" id="up_error" style="display: none;"></div>
                                                    <input type="hidden" id="edit_hidden_id" name="edit_hidden_id">
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Portfolio Title:<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="e_portfolio_title" id="e_portfolio_title" placeholder="Portfolio Title">
                                                    </div>

                                                    <div class="form-group mb-30">
                                                        <label class="control-label mb-10 text-left">Portfolio Image</label>
                                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                            <div class="form-control" data-trigger="fileinput"> 
                                                                <i class="glyphicon glyphicon-file fileinput-exists"></i> 
                                                                <span class="fileinput-filename portfolio_image"></span>
                                                            </div>
                                                            <span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
                                                            <input type="file" name="e_portfolio_image" id="e_portfolio_image">
                                                            </span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label mb-10 text-left">Portfolio Short Description:</label>
                                                        <textarea class="form-control" rows="5" name="e_portfolio_short_description" id="e_portfolio_short_description" placeholder="Portfolio Short Description"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label mb-10 text-left">Portfolio Description:</label>

                                                        <div class="col-md-12">
                                                            <div class="panel panel-default card-view">      
                                                                <div class="panel-wrapper collapse in">
                                                                    <div class="panel-body">
                                                                        <div class="summernote"></div>
                                                                    </div>
                                                                </div>
                                                                <textarea name="e_portfolio_description" id="e_portfolio_description" style="display: none"></textarea>
                                                            </div>
                                                        </div>

                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success up_btn">UPDATE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- UPDATE modal end -->
                                
                                
                                
                                <!-- DELETE modal start -->
                                <div id="delete_modal" class="modal fade bs-example-modal-sm delete_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                    <form id="delete_client_form" method="post" >
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="mySmallModalLabel">Delete Portfolio</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" id="delete_hidden_id" name="delete_hidden_id">
                                                    <div class="text-center" id="del_error" style="display: none;"></div>
                                                    <h5>Are you want to delete <br> <u><span id="del_span"></span></u> ?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger del_btn">DELETE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- DELETE modal end -->
                                
                                <div class="table-wrap mt-40">
                                    <div class="table-responsive">
                                      <table id="datable_1" class="table table-hover display table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Sl No.</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Short Description</th>
                                            <th>Description</th>
                                            <th>Created at</th>
                                            <th class="text-nowrap">Action</th>
                                          </tr>
                                        </thead>

                                        <tfoot>
                                             <tr>
                                                <th>Sl No.</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Short Description</th>
                                                <th>Description</th>
                                                <th>Created at</th>
                                                <th class="text-nowrap">Action</th>
                                              </tr>
                                        </tfoot>

                                        <tbody>
                                            <?php
                                            $x = 1;
                                            foreach($portfolio as $row){
                                            ?>
                                            <tr>
                                                <td><?= $x++; ?></td>
                                                <td><?= $row['portfolio_title']; ?></td>
                                                <td><img src="./uploads/portfolio/<?= $row['portfolio_image']; ?>" style="width:100px;height:100px"></td>
                                                <td><?= substr($row['portfolio_short_description'], 0, 100);  ?></td>
                                                <td><?= $row['portfolio_description']  ?></td>

                                                <td><?php echo date_format(date_create($row['created_at']), 'd/m/Y h:ia'); ?></td>
                                                
                                                <td class="text-nowrap">
                                                    <a href="#" class="mr-25 edit" data-toggle="modal" data-target="#update_modal" data-bind="<?= $row['id']; ?>" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i></a>
                                                    <a href="#" class="mr-25 delete" data-toggle="modal" data-target="#delete_modal" data-bind="<?= $row['id']; ?>" data-original-title="Delete"> <i class="fa fa-close text-danger m-r-10"></i></a>
                                                </td>
                                            </tr>
                                            
                                            <!--<input id="contain" type="text" name="" value="<?php// $biker['biker_pincode'] ?>">-->
                                            <?php 
                                            
                                            // $arr[] = $biker['biker_pincode'];
                                            } 
                                            
                                            /*$calls = (object)array($arr);
                                            print_r($calls);*/      
                                            
                                            ?>
                                        </tbody>
                                        
                                      </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('inc/footer_view'); ?>





        <script>
            function isNumber(evt) {
                var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
                if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
                    return false;
                return true;
            }
        </script>


        <script type="text/javascript">
            $(document).ready(function(){
                $("#add_portfolio_form").click(function()
                {
                    $('textarea#portfolio_description').text($('div.note-editable').html());
                })
            })
        </script>




        <script>
        $(document).ready(function() {
        $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true
        });
        });
        </script>

        





        <script type="text/javascript">
            $(document).ready(function(){
                $('input.timepicker').datetimepicker({
                  format:'d.m.Y H:i',
                  lang:'ru',
                  step:15,
                });
            });
        </script>

        

<!-- ###########################################TO ADD NEW PORTFOLIO ON ######################################-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.pull-left').click(function(){
                    $("div.note-editable").html('');
                })
            })
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('form#add_portfolio_form').submit(function(e) {
                    e.preventDefault();
                    $('div#add_error').hide();
                    $('.submit_form').text('LOADING...');
                    $('.submit_form').prop("disabled", true);

                    $.ajax({
                        url:"<?= base_url('portfolio/addportfolio') ?>", 
                        method:"POST",  
                        data:new FormData(this),  
                        contentType: false,  
                        cache: false,  
                        processData:false, 
                        success: function(o) {
                        if (o.result == 1) {
                            swal({
                                title: "Done",
                                text: "Portfolio Successfully Added",
                                icon: "success",
                                type: "success",
                                showCancelButton: false,
                                showConfirmButton: false
                            });
                            window.setTimeout(function() {
                                window.location.reload();
                            }, 1000);
                        }
                        
                        else {
                            $('.submit_form').text('Submit');
                            $('.submit_form').prop("disabled", false);
                            var output = '<ul style="list-style: none" >';
                            for (var key in o.error)
                            {
                                var value = o.error[key];
                                output += '<li>' + value + '</li>';
                            }
                            output += '</ul>';
                            $('div#add_error').show().addClass('text-danger').html(output);

                            
                        }
                    }
                });

                });
            });
        </script>


<!-- ######################################## TO FETCH ALL DATA ON UPDATE MODEL####################################### -->
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.edit').click(function(){
                var id = $(this).data('bind');
                var url = '<?= base_url('portfolio/get_single_portfolio') ?>' + '/' + id;
                $.post(url, function(o){
                    console.log("get Details", o.data);

                    $('#edit_hidden_id').val(o.data[0]['id']);
                    $('#e_portfolio_title').val(o.data[0]['portfolio_title']);
                    $(".portfolio_image").html(o.data[0]['portfolio_image']);
                    $('#e_portfolio_short_description').val(o.data[0]['portfolio_short_description']);
                    $("div.note-editable").html(o.data[0]['portfolio_description']);

                }, 'json');
            })
        });
    </script>




     <!--######################## update_service_form #########################-->

    <script type="text/javascript">
        $(document).ready(function(){
            $('#update_portfolio_form').click(function(){
                $('textarea#e_portfolio_description').text($('div.note-editable').html());
            });
        });
    </script>

    <script type="text/javascript">
            $(document).ready(function() {
                $('form#update_portfolio_form').submit(function(e) {
                    e.preventDefault();
                    $('div#up_error').hide();
                    $('.up_btn').text('LOADING...');
                    $('.up_btn').prop("disabled", true);

                    $.ajax({
                        url:"<?= base_url('portfolio/updatePortfolio') ?>", 
                        method:"POST",  
                        data:new FormData(this),  
                        contentType: false,  
                        cache: false,  
                        processData:false, 
                        success: function(o) {
                        if (o.result == 1) {
                            swal({
                                title: "Done",
                                text: "Portfolio Successfully Updated",
                                icon: "success",
                                type: "success",
                                showCancelButton: false,
                                showConfirmButton: false
                            });
                            window.setTimeout(function() {
                                window.location.reload();
                            }, 1000);
                        }
                        
                        else {
                            $('.up_btn').text('UPDATE');
                            $('.up_btn').prop("disabled", false);
                            var output = '<ul style="list-style: none" >';
                            for (var key in o.error)
                            {
                                var value = o.error[key];
                                output += '<li>' + value + '</li>';
                            }
                            output += '</ul>';
                            $('div#up_error').show().addClass('text-danger').html(output);                            
                        }
                    }
                });

                });
            });
        </script>


















<!-- ################################################ TO DELETE PORTFOLIO ########################## -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.delete').click(function(){
                    var id = $(this).data('bind');
                        $('#delete_hidden_id').val(id);
                })
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function(){
                $('div#del_error').hide();
                $('form#delete_client_form').submit(function(e){
                    e.preventDefault();
                    $('.del_btn').text('LOADING...');
                    $('.del_btn').prop("disabled", true);

                    $.ajax({

                    url:"<?= base_url('portfolio/deleteportfolio') ?>", 
                        method:"POST",  
                        data:new FormData(this),  
                        contentType: false,  
                        cache: false,  
                        processData:false, 
                        success: function(o) {
                            if(o.result == 1){
                            swal({ 
                                title: "Done",
                                text: "Portfolio Successfully Deleted", 
                                icon: "success", 
                                type: "success", 
                                showCancelButton: false, 
                                showConfirmButton: false
                            });
                            window.setTimeout(function ()
                            {
                                window.location.reload();
                            }, 1000);
                        }else{
                            $('.del_btn').text('DELETE');
                            $('.del_btn').prop("disabled", false);
                            $('div#del_error').show().addClass('text-danger').text('Failed to delete! Please try again.');
                        }
                    }
                 });
                });
            });
        </script>




        <script type="text/javascript">
            $(document).ready(function() {
                $('#portfolio').click();
                $('#portfolio').addClass('active');
            });
        </script>

        </body>

        </html>