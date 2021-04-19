        <?php $this->load->view('inc/header_view'); ?>

        <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h5 class="txt-dark">Slider Position</h5>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <ol class="breadcrumb">
                    <li><a href="#">Slider Management</a></li>
                  </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                    
 
                    <div class="alert icon-alert with-arrow alert-success form-alter" role="alert">
                        <i class="fa fa-fw fa-check-circle"></i>
                        <strong> Success ! </strong> <span class="success-message"> Post Order has been updated successfully </span>
                    </div>
                    <div class="alert icon-alert with-arrow alert-danger form-alter" role="alert">
                        <i class="fa fa-fw fa-times-circle"></i>
                        <strong> Note !</strong> <span class="warning-message"> Empty list cant be ordered </span>
                    </div>
                       

                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                
                                <div class="table-wrap mt-40">
                                    <div class="table-responsive">
                                      <table id="datable_1" class="table table-hover display pb-30 table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Sl No.</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Created at</th>
                                          </tr>
                                        </thead>

                                        <tfoot>
                                             <tr>
                                                <th>Sl No.</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Created at</th>
                                              </tr>
                                        </tfoot>

                                        <tbody class="list-unstyled" id="post_list">
                                            <?php
                                            $x = 1;
                                            foreach($slider as $row){
                                            ?>
                                            <tr data-id="<?php echo $row["id"]; ?>">
                                                <div class="li-post-group">
                                                <td class="li-post-title"><?= $x++; ?></td>
                                                <td class="li-post-title"><?= $row['slider_title']; ?></td>
                                                <td class="li-post-desc"><?= substr($row['slider_description'], 0, 100);  ?></td>
                                                <td class="li-post-desc"><img src="<?= base_url() ?>./uploads/slider/<?= $row['slider_img']; ?>" style="width:100px;height:100px"></td>
                                                
                                                <td class="li-post-desc"><?php echo date_format(date_create($row['created_at']), 'd/m/Y h:ia'); ?></td>
                                                </div>
                                                
                                            </tr>
                                            
                                            <?php 
                                            }               
                                            ?>
                                        </tbody>

                                        <!-- <ul class="list-unstyled" id="post_list">
                                            <?php
                                            //get rows query
                                                if($slider){   
                                                $x = 1;
                                                foreach($slider as $row){
                                                ?>
                                                    <li data-post-id="<?php echo $row["id"]; ?>">
                                                        <div class="li-post-group">
                                                            <h5 class="li-post-title"><?php echo $row["id"].') '.ucfirst($row["slider_title"]); ?></h5>
                                                            <p class="li-post-desc"><img src="<?= base_url(); ?>./uploads/slider/<?= $row['slider_img']; ?>" style="width:100px;height:100px"></p>
                                                            <p class="li-post-desc"><?php echo ucfirst($row["slider_description"]); ?></p>
                                                        </div>
                                                    </li>
                                            <?php 
                                            }}?>
                                        </ul>
                                         -->
                                       
                                        
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

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
            function isNumber(evt) {
                var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
                if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
                    return false;
                return true;
            }
        </script>

        <script type="text/javascript">
            $(".alert-danger").hide();
            $(".alert-success ").hide();
            $( "#post_list" ).sortable({
                placeholder : "ui-state-highlight",
                update  : function(event, ui)
                {
                    var post_order_ids = new Array();
                    $('#post_list tr').each(function(){
                        post_order_ids.push($(this).data("id"));
                        console.log("id", post_order_ids)
                    });
                    $.ajax({
                        url:"<?php echo base_url('slider/updatePosition') ?>",
                        method:"POST",
                        data:{post_order_ids:post_order_ids},
                        success:function(data)
                        {
                         if(data.result == 1){
                            $(".alert-danger").hide();
                            $(".alert-success ").show();
                         }else{
                            $(".alert-success").hide();
                            $(".alert-danger").show();
                         }
                        }
                    });
                }
            });
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
            $(document).ready(function() {
                $('#sliderPosition').click();
                $('#slider').addClass('active');
                $('#sliderPosition').addClass('active');
            });
        </script>

        </body>

        </html>