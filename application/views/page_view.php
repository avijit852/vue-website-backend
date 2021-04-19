        <?php $this->load->view('inc/header_view'); ?>

        <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h5 class="txt-dark">New Page</h5>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <ol class="breadcrumb">
                    <li><a href="#">New Page Management</a></li>
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
                                    <span class="btn-text">Add New Page</span>
                                </button>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <!-- ADD Modal Statrt -->
                                <div id="add_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <form id="add_page_form">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title">Add New Page</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center" id="add_error" style="display: none;"></div>


                                                    
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Name:<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Page Name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Meta Title:<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Page Meta Title">
                                                    </div>

                                                    
                                                     <div class="form-group">
                                                        <label class="control-label mb-10 text-left">Meta Keyword:</label>
                                                        <textarea class="form-control" rows="5" name="meta_keyword" id="meta_keyword" placeholder="Page Meta Keyword"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label mb-10 text-left">Meta Description:</label>
                                                        <textarea class="form-control" rows="5" name="meta_description" id="meta_description" placeholder="Page Meta Description"></textarea>
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
                                    <form id="update_page_form" method="" action="">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title">Change Page Detail</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center" id="up_error" style="display: none;"></div>
                                                    <input type="hidden" id="edit_hidden_id" name="edit_hidden_id">
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Name:<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="e_name" id="e_name" placeholder="Page Name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Meta Title:<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="e_meta_title" id="e_meta_title" placeholder="Page Meta Title">
                                                    </div>

                                                    
                                                     <div class="form-group">
                                                        <label class="control-label mb-10 text-left">Meta Keyword:</label>
                                                        <textarea class="form-control" rows="5" name="e_meta_keyword" id="e_meta_keyword" placeholder="Page Meta Keyword"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label mb-10 text-left">Meta Description:</label>
                                                        <textarea class="form-control" rows="5" name="e_meta_description" id="e_meta_description" placeholder="Page Meta Description"></textarea>
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
                                                    <h5 class="modal-title" id="mySmallModalLabel">Delete Page</h5>
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
                                            <th>Name</th>
                                            <th>Page Slug</th>
                                            <th>Meta Title</th>
                                            <th>Meta Keyword</th>
                                            <th>Meta Description</th>
                                            <th>Created at</th>
                                            <th class="text-nowrap">Action</th>
                                          </tr>
                                        </thead>

                                        <tfoot>
                                             <tr>
                                                <th>Sl No.</th>
                                                <th>Name</th>
                                                <th>Page Slug</th>
                                                <th>Meta Title</th>
                                                <th>Meta Keyword</th>
                                                <th>Meta Description</th>
                                                <th>Created at</th>
                                                <th class="text-nowrap">Action</th>
                                              </tr>
                                        </tfoot>

                                        
                                         <tbody>
                                            <?php
                                            $x = 1;
                                            foreach($pages as $row){
                                            ?>
                                            <tr>
                                                <td><?= $x++; ?></td>
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['page_slug']; ?></td>
                                                <td><?= $row['meta_title']; ?></td>
                                                <td><?= $row['meta_keyword']; ?></td>
                                                <td><?= substr($row['meta_description'], 0, 100);  ?></td>

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

<!-- 
        <script type="text/javascript">
            $(document).ready(function(){
                $("#add_portfolio_form").click(function()
                {
                    $('textarea#portfolio_description').text($('div.note-editable').html());
                })
            })
        </script> -->




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

        

<!-- ########################### Add to page ######################### -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('form#add_page_form').submit(function(e) {
                    e.preventDefault();
                    $('div#add_error').hide();
                    $('.submit_form').text('LOADING...');
                    $('.submit_form').prop("disabled", true);

                    $.ajax({
                        url:"<?= base_url('page/addpage') ?>", 
                        method:"POST",  
                        data:new FormData(this),  
                        contentType: false,  
                        cache: false,  
                        processData:false, 
                        success: function(o) {
                        if (o.result == 1) {
                            swal({
                                title: "Done",
                                text: "Page Successfully Added",
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

<!-- ######################################## This is use for update service show model####################################### -->
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.edit').click(function(){
                var id = $(this).data('bind');
                var url = '<?= base_url('page/get_single_page') ?>' + '/' + id;
                $.post(url, function(o){
                    console.log("get Details", o.data);

                    $('#edit_hidden_id').val(o.data[0]['id']);
                    $('#e_name').val(o.data[0]['name']);
                    $('#e_meta_title').val(o.data[0]['meta_title']);
                    $("#e_meta_keyword").html(o.data[0]['meta_keyword']);
                    $("#e_meta_description").html(o.data[0]['meta_description']);

                }, 'json');
            })
        });
    </script>


<!--################################ update_page_form ##################################-->
       <script type="text/javascript">
            $(document).ready(function() {
                $('form#update_page_form').submit(function(e) {
                    e.preventDefault();
                    $('div#up_error').hide();
                    $('.up_btn').text('LOADING...');
                    $('.up_btn').prop("disabled", true);

                    $.ajax({
                        url:"<?= base_url('page/updatePage') ?>", 
                        method:"POST",  
                        data:new FormData(this),  
                        contentType: false,  
                        cache: false,  
                        processData:false, 
                        success: function(o) {
                        if (o.result == 1) {
                            swal({
                                title: "Done",
                                text: "Page Successfully Updated",
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


        <!-- ##################################### For Delete page ###################3 -->
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

                    url:"<?= base_url('page/deletepage') ?>", 
                        method:"POST",  
                        data:new FormData(this),  
                        contentType: false,  
                        cache: false,  
                        processData:false, 
                        success: function(o) {
                            if(o.result == 1){
                            swal({ 
                                title: "Done",
                                text: "Page Successfully Deleted", 
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
                $('#addPages').click();
                // $('#pages').classList.add("active")
                $('#pages').addClass('active');
                // $('#pages').removeClass('active');
                $('#addPages').addClass('active');
            });
        </script>

        </body>

        </html>