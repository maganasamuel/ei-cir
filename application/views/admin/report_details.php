<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">


<!-- pages_authentication_password-reset.html  13:35:20 GMT -->
<head>
    <title>Compliance Investigation Report</title>

    <link rel="stylesheet" href="<?=base_url();?>assets/admin/fonts/fontawesome.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/fonts/ionicons.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/fonts/linearicons.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/fonts/open-iconic.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/bootstrap-material.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/shreerang-material.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/select2/select2.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link href="<?=base_url();?>assets/admin/css/sweetalert.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/datatables/datatables.css">
    
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/quill/typography.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/quill/editor.css">

    <!-- Page -->
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/pages/messages.css">
    <!-- Page -->
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/pages/account.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/pages/users.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/pages/chat.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/ladda/ladda.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/growl/growl.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/toastr/toastr.css">



    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/bootstrap-multiselect/bootstrap-multiselect.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/select2/select2.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link href="<?=base_url();?>assets/admin/css/buttonLoader.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/bootstrap-material-datetimepicker/bootstrap-material-datetimepicker.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/timepicker/timepicker.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/libs/minicolors/minicolors.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/pages/authentication.css">

</head>

<body class="bg-white" style="padding: 40px;">
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-white"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ content ] Start -->
    <div class="row">
        <div class="col-md-6">
            <div id="accordion2">
                <div class="card mb-2">
                    <div class="card-header">
                        <a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion2-1" style="color:black; font-weight: bold;">Compliance Investigation Report (CIR) <div class="collapse-icon"></div></a>
                    </div>
                    <div id="accordion2-1" class="collapse show" data-parent="#accordion2">
                        <div class="card-body">
                            <div class="row p-3">
                               <div class="col-md-3">
                                   <label class="label-control" style="color:black; font-weight: bold;">Adviser</label>
                               </div>
                               <div class="col-md-3">
                                   <label class="label-control"><?= $report_details_cir['name']?></label>
                               </div>
                           </div>
                           <div class="row p-3" style="background-color: #aac9fa;">
                               <div class="col-md-3">
                                   <label class="label-control" style="color:black; font-weight: bold;">Company Representative</label>
                               </div>
                               <div class="col-md-3">
                                   <label class="label-control"><?= $comp_rep['name']?></label>
                               </div>
                           </div>
                           <div class="row p-3">
                               <div class="col-md-3">
                                   <label class="label-control" style="color:black; font-weight: bold;">Report Number</label>
                               </div>
                               <div class="col-md-3">
                                   <label class="label-control">CIR2021<?= $cir_max['report_number'] ?></label>
                                   <input type="hidden" id="report_number" value="<?= $_GET['report_number'] ?>">
                               </div>
                           </div>
                            <div class="row p-3" style="background-color: #aac9fa;">
                               <div class="col-md-3">
                                   <label class="label-control" style="color:black; font-weight: bold;">Date Sent and Due</label>
                               </div>
                               <div class="col-md-3">
                                   <label class="label-control">Sent: <?= $report_details_cir['send_date'] ?></label>
                               </div>
                               <div class="col-md-3">
                                   <label class="label-control">Due: <?= $report_details_cir['due_date'] ?></label>
                               </div>
                           </div>
                            <div class="row" style="padding: 1rem 1rem 0 1rem">
                               <div class="col-md-3">
                                   <label class="label-control" style="color:black; font-weight: bold;">Adviser Compliance History</label>
                               </div>
                               <div class="col-md-9">
                                   <label class="label-control">
                                     <?php if($reportHistory){ ?>
                                        <?php foreach($reportHistory as $rep){ ?>
                                    <label>CH2021<?=  $rep['report_number'] ?></label>
                                      <?php } ?>
                                  <?php } ?> 

                                   </label>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>                       
            </div>
            <div id="accordion3">
                <div class="card mb-2">
                    <div class="card-header">
                        <a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion3-1" style="color:black; font-weight: bold;">Issue Identified<div class="collapse-icon"></div></a>
                    </div>
                    <div id="accordion3-1" class="collapse show" data-parent="#accordion3">
                        <div class="card-body">
                            <?php if($report_details_identified){ $i = 0; ?>
                                <?php foreach($report_details_identified as $rep){ $i++?>
                                    <p><?= $i . '. ' . $rep['issue_identified']?></p>
                                <?php } ?>
                            <?php } ?> 
                        </div>
                    </div>
                </div>                       
            </div>
            <div id="accordion4">
                <div class="card mb-2">
                    <div class="card-header">
                        <a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion4-1" style="color:black; font-weight: bold;">Investigation Information<div class="collapse-icon"></div></a>
                    </div>
                    <div id="accordion4-1" class="collapse show" data-parent="#accordion4">
                        <div class="card-body">
                            <label><?= $report_details_cir['investigation_information'] ?></label>
                        </div>
                    </div>
                </div>                       
            </div>
            
            <div id="accordion8"  <?= (empty($report_details_cir['adv_response'])) ? 'style="display:none;"' : '' ?> >
                <div class="card mb-2">
                    <div class="card-header">
                        <a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion8-1" style="color:black; font-weight: bold;">Action Taken By Company Representative<div class="collapse-icon"></div></a>
                    </div>
                    <div id="accordion8-1" class="collapse show" data-parent="#accordion8">
                       <div class="card-body">
                             <?php if($report_details_cir['rep_action'] == ""){ ?>
                             <textarea class="form-control" id="action_response" rows="5" cols="15"></textarea>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="label-control">Has the CIR been completed satisfactorily?</label>
                                    <select class="form-select mt-2" id="satisfactorily" onchange="getval(this);">
                                      <option value="1">Yes</option>
                                      <option value="2">No</option>
                                    </select>
                                    <hr>
                                    <div class="ifnot">
                                    <label class="label-control">If not, what outstanding action/s is required by Eliteinsure Ltd. to be followed up with the 
Company Representative? </label>
                                    <textarea class="form-control" id="if_not" rows="10" cols="20"></textarea>
                                    </div>
                                    <div class="row">
                                <div class="col-6">
                                    <label class="font-weight-normal mt-2">Add Signature</label>
                                    <div class="wrapper" style="margin-bottom: 5px;">
                                      <canvas style="border-bottom: 1px solid #ced4da;" id="signature-pad-rep" class="signature-pad" width=310 height=100></canvas>
                                    </div>
                                    <button type="button" id="clear-rep">Clear</button>
                                </div>
                            </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="label-control">Finalisation</label>
                                    <br>
                                    <label class="label-control">Reviewed the Information</label>
                                    <select class="form-select mt-2" name="finalisation[]" aria-label="Default select example">
                                      <option value="1">Yes</option>
                                      <option value="2">No</option>
                                    </select>
                                    <br>
                                    <label class="label-control">Appropriate Adviser Action Taken</label>
                                    <select class="form-select mt-2" name="finalisation[]" aria-label="Default select example">
                                      <option value="1">Yes</option>
                                      <option value="2">No</option>
                                    </select>
                                    <br>
                                    <label class="label-control">Customer’s Position Rectified</label>
                                    <select class="form-select mt-2" name="finalisation[]" aria-label="Default select example">
                                      <option value="1">Yes</option>
                                      <option value="2">No</option>
                                    </select>
                                    <br>
                                    <label class="label-control">Add to Learning Points (Complaints or Business L/P)</label>
                                    <select class="form-select mt-2" name="finalisation[]" aria-label="Default select example">
                                      <option value="1">Yes</option>
                                      <option value="2">No</option>
                                    </select>
                                    <br>
                                    <label class="label-control">Requested Additional Information</label>
                                    <select class="form-select mt-2" name="finalisation[]" aria-label="Default select example">
                                      <option value="1">Yes</option>
                                      <option value="2">No</option>
                                    </select>
                                    <br>
                                    <label class="label-control">Finalised the Incident Report </label>
                                    <select class="form-select mt-2" name="finalisation[]" aria-label="Default select example">
                                      <option value="1">Yes</option>
                                      <option value="2">No</option>
                                    </select>
                                    <br>
                                    <label class="label-control">Notified Insurer/FMA/Regulatory Body</label>
                                    <select class="form-select mt-2" name="finalisation[]" aria-label="Default select example">
                                      <option value="1">Yes</option>
                                      <option value="2">No</option>
                                    </select>
                                    <br>
                                    <label class="label-control">Updated Complaint Register (Where Applicable)</label>
                                    <select class="form-select mt-2" name="finalisation[]" aria-label="Default select example">
                                      <option value="1">Yes</option>
                                      <option value="2">No</option>
                                    </select>
                                     <label class="label-control">Completed other Action</label>
                                    <select class="form-select mt-2" name="finalisation[]" aria-label="Default select example">
                                      <option value="1">Yes</option>
                                      <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                            <?php if($_GET['user_type'] == 0){ ?>
                            <button type="submit" class="btn btn-primary mt-3" id="saveActionTaken" onclick="saveActionTaken()">Submit</button>&nbsp;
                            <?php } ?>
                            <?php }else{ ?>
                            <p class="lead ml-3"><?= $report_details_cir['rep_action']?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>                       
            </div>
        </div>


        <div class="col-md-6">
            <div id="accordion5">
                <div class="card mb-2">
                    <div class="card-header">
                        <a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion5-1" style="color:black; font-weight: bold;">Issues to be addressed by the Company Representative<div class="collapse-icon"></div></a>
                    </div>
                    <div id="accordion5-1" class="collapse show" data-parent="#accordion5">
                        <div class="card-body">
                            <?php if($report_details_address){ $i = 0; ?>
                                <?php foreach($report_details_address as $rep){ $i++?>
                                    <p><?= $i . '. ' . $rep['issue_address']?></p>

                                    <?php if($report_details_cir['to_address'] == 0){ ?>
                                    <input type="hidden" class="form-control" name="id_question[]" value="<?= $rep['id_question'] ?>" placeholder="Please enter your answer">
                                    <input type="text" class="form-control" name="answer_question[]" placeholder="Please enter your answer">
                                    <?php }else{ ?>

                                    <p class="lead ml-3"><?= $rep['adviser_answer']?></p>

                                    <?php } ?>


                                <?php } ?>
                            <?php } ?> 

                            <button type="submit" id="answer_submit" class="btn btn-primary mt-3" onclick="answer_submit()" <?= (empty($report_details_cir['to_address'])) ? '' : 'style="display:none;"' ?>>Submit</button>&nbsp;
                        </div>
                    </div>
                </div>                       
            </div>
          
            <div id="accordion6" <?= (empty($report_details_cir['to_address'])) ? 'style="display:none;"' : '' ?> >
                <div class="card mb-2">
                    <div class="card-header">
                        <a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion6-1" style="color:black; font-weight: bold;">Company Representative Response<div class="collapse-icon"></div></a>
                    </div>
                    <div id="accordion6-1" class="collapse show" data-parent="#accordion6">
                        <div class="card-body">
                            <?php if($report_details_cir['rep_response'] == ""){ ?>
                            <?php if($_GET['user_type'] == 0){ ?>
                            <textarea class="form-control" rows="5" cols="15" id="company_response"></textarea>
                            <button type="submit" class="btn btn-primary mt-3" id="copResponseSave" onclick="copResponseSave()">Submit</button>&nbsp;
                            <?php } ?>
                            <?php }else{ ?>
                            <p class="lead ml-3"><?= $report_details_cir['rep_response']?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>                       
            </div>
            <div id="accordion7" <?= (empty($report_details_cir['rep_response'])) ? 'style="display:none;"' : '' ?>>
                <div class="card mb-2">
                    <div class="card-header">
                        <a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion7-1" style="color:black; font-weight: bold;">Contracted Adviser's Response<div class="collapse-icon"></div></a>
                    </div>
                    <div id="accordion7-1" class="collapse show" data-parent="#accordion7">
                        <div class="card-body">
                            <?php if($report_details_cir['adv_response'] == ""){ ?>
                              <?php if($_GET['user_type'] == 1){ ?>
                             <textarea class="form-control" id="adviser_response" rows="5" cols="15"></textarea>
                             <div class="row">
                                <div class="col-3">
                                   <label class="font-weight-normal mt-2">Add Signature</label>
                                    <div class="wrapper" style="margin-bottom: 5px;">
                                      <canvas style="border-bottom: 1px solid #ced4da;" id="signature-pad" class="signature-pad" width=310 height=100></canvas>
                                    </div>
                                    <button type="button" id="clear">Clear</button>
                                    <input type="hidden" name="signature" id="imageUrl-adv">
                                    <input type="hidden" name="signature" id="imageUrl-rep">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3" id="saveContacted" onclick="saveContacted()">Submit</button>&nbsp;
                             <?php } ?>
                             <?php }else{ ?>
                            <p class="lead ml-3"><?= $report_details_cir['adv_response']?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>                       
            </div>
            
        </div>
    </div>
    <input type="hidden" id="base_url" value="<?=base_url();?>">
    <!-- [ content ] End -->

    <!-- Core scripts -->
    <script src="<?=base_url();?>assets/admin/js/pace.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/popper/popper.js"></script>

    <script src="<?=base_url();?>assets/admin/js/sidenav.js"></script>
    <script src="<?=base_url();?>assets/admin/js/layout-helpers.js"></script>
    <script src="<?=base_url();?>assets/admin/js/material-ripple.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.core.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.min.js"></script>

    <!-- Libs -->
    <script src="<?=base_url();?>assets/admin/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/eve/eve.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/flot/flot.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/flot/curvedLines.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/chart-am4/core.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/chart-am4/charts.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/chart-am4/animated.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/chartjs/chartjs.js"></script>

    <!-- Demo -->
    <script src="<?=base_url();?>assets/admin/js/demo.js"></script>

    <script src="<?=base_url();?>assets/admin/js/analytics.js"></script>
    <script src="<?=base_url();?>assets/admin/js/pages/dashboards_index.js"></script>

    <!-- Library -->
    <script src="<?=base_url();?>assets/admin/libs/spin/spin.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/ladda/ladda.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/select2/select2.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/datatables/datatables.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/growl/growl.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/toastr/toastr.js"></script>
    <script src="<?=base_url();?>assets/admin/js/bootstrap.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/select2/select2.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/markdown/markdown.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/bootstrap-markdown/bootstrap-markdown.js"></script>

    <!-- Js -->
    <script src="<?=base_url();?>assets/admin/js/pages/misc_ladda.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.buttonLoader.min.js"></script>
    <script src="<?=base_url();?>assets/admin/js/sweetalert.min.js"></script>
    <script src="<?=base_url();?>assets/admin/js/pages/tables_datatables.js"></script>
    <script src="<?=base_url();?>assets/admin/js/pages/ui_notifications.js"></script>
    <script src="<?=base_url();?>assets/admin/js/pages/forms_selects.js"></script>
    <script src="<?=base_url();?>assets/admin/js/pages/forms_editors.js"></script>

    <script src="<?=base_url();?>assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/moment/moment.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/bootstrap-material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/timepicker/timepicker.js"></script>
    <script src="<?=base_url();?>assets/admin/libs/minicolors/minicolors.js"></script>


    <script src="<?=base_url();?>assets/admin/js/pages/pages_chat.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

    <script type="text/javascript">
      var base_url = $('#base_url').val();

      <?php 
      if($report_details_cir['adv_response'] != ""){

          echo "var canvas = document.getElementById('signature-pad-rep');

          document.getElementById('clear-rep').addEventListener('click', function () {
          signaturePad.clear();
      });

          ";

      }else{
          echo "var canvas = document.getElementById('signature-pad');
          document.getElementById('clear').addEventListener('click', function () {
          signaturePad.clear();
      });

          ";
      }
      ?>
    
      function resizeCanvas() {
          var ratio =  Math.max(window.devicePixelRatio || 1, 1);
          canvas.width = canvas.offsetWidth * ratio;
          canvas.height = canvas.offsetHeight * ratio;
          canvas.getContext("2d").scale(ratio, ratio);
      }

      window.onresize = resizeCanvas;
      resizeCanvas();

      var signaturePad = new SignaturePad(canvas, {
        backgroundColor: 'rgba(255, 255, 255, 0)',
        penColor: 'rgb(0, 0, 0)'
      });
     

          function answer_submit(){
              $("#answer_submit").buttonLoader('start');
            var id_question = $("input[name='id_question[]']").map(function(){return $(this).val();}).get();
            var answer_question = $("input[name='answer_question[]']").map(function(){return $(this).val();}).get();

            //UPDATE TO_ADDRESS IN CIR

            $.ajax({
                    url: base_url+'Admin/answer_question',
                    type: 'POST',
                    data: {
                        id_question: id_question,
                        answer_question: answer_question,
                        report_number: $("#report_number").val(),
                        token:$("#token").val()
                    },
                    success: (res) => {
                        console.log(res);
                        $("#answer_submit").buttonLoader('stop');
                        if(res==1){
                            swal({ 
                                title: "Sent", 
                                text: "Answer submitted. Wait for Company Representative response",
                                type: "success" 
                            },function(ret) {
                              location.href = 'provide_password?report_number='+$("#report_number").val()+'&user_type=1'; 
                            })
                        }else{
                            swal("Failed", "Password Invalid,Please try again!", "error");
                        }
                    }
               });
        }

        function copResponseSave(){
           $("#copResponseSave").buttonLoader('start');
            $.ajax({
                    url: base_url+'Admin/company_response',
                    type: 'POST',
                    data: {
                        company_response: $("#company_response").val(),
                        report_number: $("#report_number").val(),
                        token:$("#token").val()
                    },
                    success: (res) => {
                        $("#copResponseSave").buttonLoader('stop');
                        console.log(res);
                        if(res==1){
                            swal({ 
                                title: "Sent", 
                                text: "Your reponse successfully submitted",
                                type: "success" 
                            },function(ret) {
                              location.href = 'provide_password?report_number='+$("#report_number").val()+'&user_type=0'; 
                            })
                        }else{
                            swal("Failed", "Password Invalid,Please try again!", "error");
                        }
                    }
               });
        }

        function saveContacted(){
           var data = signaturePad.toDataURL('image/png');
           $("#saveContacted").buttonLoader('start');
           $("#imageUrl-adv").val(data);
           console.log(data);
            $.ajax({
                    url: base_url+'Admin/adviser_response',
                    type: 'POST',
                    data: {
                        adviser_response: $("#adviser_response").val(),
                        report_number: $("#report_number").val(),
                        adv_signature:  $("#imageUrl-adv").val(),
                        token:$("#token").val()
                    },
                    success: (res) => {
                        $("#saveContacted").buttonLoader('stop');
                        console.log(res);
                        if(res==1){
                            swal({ 
                                title: "Sent", 
                                text: "Your response successfully submitted",
                                type: "success" 
                            },function(ret) {
                              location.href = 'provide_password?report_number='+$("#report_number").val()+'&user_type=1'; 
                            })
                        }else{
                            swal("Failed", "Password Invalid,Please try again!", "error");
                        }
                    }
               });
        }
         function saveActionTaken(){
             var data = signaturePad.toDataURL('image/png');
              $("#saveActionTaken").buttonLoader('start');
              $("#imageUrl-rep").val(data);
              var satisfactorily = $("#satisfactorily").val()
              var if_not = $("#if_not").val();
              var finalisation = $("select[name='finalisation[]']").map(function(){return $(this).val();}).get();
              console.log(finalisation.toString());
             $.ajax({
                    url: base_url+'Admin/action_response',
                    type: 'POST',
                    data: {
                        action_response: $("#action_response").val(),
                        report_number: $("#report_number").val(),
                        satisfactorily: satisfactorily,
                        if_not: if_not,
                        finalisation: finalisation.toString(),
                        signature:data
                    },
                    success: (res) => {
                        console.log(res);
                        $("#saveActionTaken").buttonLoader('stop');
                        if(res==1){
                            swal({ 
                                title: "CIR Completed", 
                                text: "Your CIR is successfully completed and already sent to managing director. Thank You!",
                                type: "success" 
                            },function(ret) {
                              location.href = 'provide_password?report_number='+$("#report_number").val()+'&user_type=0'; 
                            })
                        }else{
                            swal("Failed", "Password Invalid,Please try again!", "error");
                        }
                    }
               });   
         }
         $(".ifnot").hide();
         function getval(id){ 
          if(id.value == 1)
            {
              $(".ifnot").hide();
            }else{
              $(".ifnot").show();
            }
         }

    </script>
</body>
</html>
