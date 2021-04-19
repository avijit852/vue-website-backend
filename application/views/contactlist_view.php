        <?php $this->load->view('inc/header_view'); ?>

        <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h5 class="txt-dark">Contact List </h5>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <ol class="breadcrumb">
                    <li><a href="#">Contact List Management</a></li>
                  </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <!-- <div class="panel-heading">
                            <div class="pull-left">
                                <button class="btn btn-success btn-lable-wrap left-label" data-toggle="modal" data-target="#add_modal">
                                    <span class="btn-label"><i class="fa fa-plus"></i></span>
                                    <span class="btn-text">Add New Service</span>
                                </button>
                            </div>
                        </div> -->
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <!-- ADD Modal Statrt -->
                               <!--  <div id="add_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <form id="add_service_form" autocomplete="off" method="post" action="">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title">Add New Service</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center" id="add_error" style="display: none;"></div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Service Title:<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="service_title" id="service_title" placeholder="Service Title">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label mb-10 text-left">Service Description:</label>
                                                        <textarea class="form-control" rows="5" name="service_description" id="service_description" placeholder="Service Description"></textarea>
                                                    </div>

                                                    <div class="form-group mb-30">
                                                        <label class="control-label mb-10 text-left">Service Image</label>
                                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                            <span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
                                                            <input type="file" name="service_image" id="service_image">
                                                            </span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-30">
                                                        <label class="control-label mb-10 text-left">Background Icon</label>
                                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                            <span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
                                                            <input type="file" name="service_bg_icon" id="service_bg_icon">
                                                            </span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-30">
                                                        <label class="control-label mb-10 text-left">Service Icon</label>
                                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                            <span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
                                                            <input type="file" name="service_icon" id="service_icon">
                                                            </span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
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
                                </div> -->
                                <!-- ADD Modal End -->
                                
                                <!-- UPDATE modal start -->
                                <div id="update_modal" class="modal fade update_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                         
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title">All Details a single email</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="table-wrap mt-40">
                                                        <div class="table-responsive">
                                                              <table id="datable_2" class="table table-hover display pb-30 table-bordered">
                                                                <thead>
                                                                  <tr>
                                                                    <th>Sl No.</th>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Phone</th>
                                                                    <th>Subject</th>
                                                                    <th>Message</th>
                                                                    <th>Create At</th>
                                                                    <th>To Reply</th>
                                                                  </tr>
                                                                </thead>
                                                                
                                                                <tbody id="getmsgDetails">
                                                                   
                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success up_btn">UPDATE</button>
                                                </div> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- UPDATE modal end -->
                                
                                                               
                                
                                
                                <!-- DELETE modal start -->
                                <div id="replymsg_modal" class="modal fade bs-example-modal-sm replymsg_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                    <form id="delete_client_form" method="post">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="mySmallModalLabel">Reply The Message</h5>
                                                </div>
                                                <form id="add_blogs_form" autocomplete="off" method="post" action="">
                                                <div class="modal-body">
                                                    <input type="text" name="reply_id" id="reply_id">
                                                      <div class="form-group">
                                                            <label class="control-label mb-10 text-left">To Reply :<span class="text-danger">*</span></label>
                                                            <textarea class="form-control" rows="5" name="reply_message" id="reply_message" placeholder=""></textarea>
                                                     </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger del_btn">DELETE</button>
                                                </div>
                                                </form>

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
                                            <th>Email</th>
                                            <th>View All</th>
                                            <th>Created at</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                             <tr>
                                                <th>Sl No.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>View All</th>
                                                <th>Created at</th>
                                              </tr>
                                        </tfoot>

                                        <tbody>
                                                <?php
                                                $x = 1;
                                                foreach($contactList as $row){
                                                ?>
                                                <tr>
                                                    <td><?= $x++; ?></td>
                                                    <td><?= $row['cd_name']; ?></td>
                                                    <td><?= $row['cd_email']; ?></td>
                                                    <td>
                                                         <a href="#" class="mr-25 edit" data-toggle="modal" data-target="#update_modal" data-bind="<?= $row['cd_email']; ?>" data-original-title="Edit"> <i class="zmdi zmdi-eye text-inverse m-r-10"></i></a>
                                                    </td> 
                                                    <td><?php echo date_format(date_create($row['created_at']), 'd/m/Y'); ?></td>
                                                    
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
                $("#did_not_work_today").click(function(){

                    if($(this).is(":checked")){
                        $("#form_details").hide();
                        $("#add_travel").hide();
                        $("#add_new_job").hide();
                       
                    }else{
                        $("#form_details").show();
                        $("#add_travel").show();
                        $("#add_new_job").show();
                        
                    }
                })
            })
        </script>



<!-- ############################To Featch the All  Message is the single Querys ########################## -->

    <script type="text/javascript">
            $(document).ready(function(){
               $('.edit').click(function(e){
                    var email = $(this).data('bind');
                    // console.log("The Id is",id);
                    let formData = new FormData();
                    formData.append('email', email);

                    $.ajax({
                            url:"<?= base_url('contact/fetchOneEmailData') ?>", 
                            method:"POST",  
                            data:formData,
                            contentType: false,  
                            cache: false,  
                            processData:false, 
                            success: function(o) {
                                if(o.result == 1){
                                var c=0;
                                var output = '';
                                console.log("All Data single email ", o.data);
                                for (var key in o.data ){
                                    c++;
                                    // for(var i=0; i<o.data.length; i++)
                                    // {
                                        // var output = '<tr>';
                                        console.log("This is key " ,key)
                                        var value = o.data[key];

                                        var date = new Date(value.created_at);

                                        var day = date.getDate();
                                        var month = date.getMonth()+1;
                                        
                                        var dateformate = (day<10 ? '0' : '') + day + '/' + (month<10 ? '0' : '') + month +'/' + date.getFullYear() ;

                                        // console.log(dateformate);

                                        output +='<tr>';
                                        output += '<td>' + c + '</td>';
                                        output += '<td>' + value.cd_name + '</td>';
                                        output += '<td>' + value.cd_email + '</td>';
                                        output += '<td>' + value.cd_phone + '</td>';
                                        output += '<td>' + value.cd_sub + '</td>';
                                        output += '<td>' + value.cd_message + '</td>';
                                        output += '<td>' + dateformate + '</td>';
                                        output += '<td><a href="#" class="mr-25 msg" data-bind="'+ value.id +'" data-toggle="modal" data-target="#replymsg_modal"> <i class="fa fa-pencil text-primary m-r-10"></i> </a></td>';
                                        output += '</tr>';

                                    // }
                                    
                                }

                                $('#getmsgDetails').html(output);


                            }else{
                                $('div#del_error').show().addClass('text-danger').text('Failed to delete! Please try again.');
                            }
                         }
                     });
               })
            });
        </script>
        
        <!-- <?php //echo base_url('query/msgReply/') ?>'+ value.id +' -->

        <!-- #################To Reply Message fetch id ########### -->
        



<!-- ######################################## This is use for delete service ####################################### -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.delete').click(function(){
                    var id = $(this).data('bind');

                })
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $(".msg").click(function(){
                    alert("ook work");
                    var id = $(this).data('bind');
                    console.log("Id is");
                    // $('#reply_id').val(id);
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
                            url:"<?= base_url('service/deleteservice') ?>", 
                            method:"POST",  
                            data:new FormData(this),  
                            contentType: false,  
                            cache: false,  
                            processData:false, 
                            success: function(o) {
                                if(o.result == 1){
                                swal({ 
                                    title: "Done",
                                    text: "Service Successfully Deleted", 
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
            $(document).ready(function(){

                var d = new Date();
                var month = d.getMonth()+1;
                var day = d.getDate();

                // var output = d.getFullYear() + '/' +
                //     (month<10 ? '0' : '') + month + '/' +
                //     (day<10 ? '0' : '') + day;

                var output = (day<10 ? '0' : '') + day + '/' + (month<10 ? '0' : '') + month +'/' + d.getFullYear() ;

                console.log("ok",output); 

                $('#today_date').val(output);
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

        <script type="text/javascript">
            $(document).ready(function(){


                $("#connectionfiledform").validate({

                    rules:{
                        'job_name':{
                            required: true,
                        },

                        'phase':{
                            required: true,
                        },
                        'category':{
                            required: true,
                        },
                        'work_ticket':{
                            required: true,
                        },
                        'start_work':{
                            required: true,
                        },
                        'end_work':{
                            required: true,
                        },
                        'description':{
                            required: true,
                        }
                    },

                    messages:{
                        'job_name':{
                            required: "*job name is mandatory!",
                        },
                        'phase':{
                            required: "*phase type is mandatory!",
                        },
                        'category':{
                            required: "*category is mandatory!",
                        },
                        'work_ticket':{
                            required: "*work ticket is mandatory!",
                        },
                        'start_work':{
                            required: "*start work is mandatory!",
                        },
                        'end_work':{
                            required: "*end work is mandatory!",
                        },
                        'description':{
                            required: "*description is mandatory!",
                        }
                    }
                });
            });
        </script>
        

<!-- ######################################## This is use for Add new  service ####################################### -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('form#add_service_form').submit(function(e) {
                    e.preventDefault();
                    $('div#add_error').hide();
                    $('.submit_form').text('LOADING...');
                    $('.submit_form').prop("disabled", true);

                    $.ajax({
                        url:"<?= base_url('service/addservice') ?>", 
                        method:"POST",  
                        data:new FormData(this),  
                        contentType: false,  
                        cache: false,  
                        processData:false, 
                        success: function(o) {
                        if (o.result == 1) {
                            swal({
                                title: "Done",
                                text: "Service Successfully Added",
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


        <script type="text/javascript">
            $(document).ready(function() {
                $('#contact').click();
                $('#contact').addClass('active');
            });
        </script>

        </body>

        </html>