<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">


<?php $this->load->view('admin/common/css');?>


<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] Ebd -->

    <!-- [ Layout wrapper ] Start -->
      <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <?php $this->load->view('admin/common/leftnav');?>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <?php $this->load->view('admin/common/topbar');?>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                      <div class="layout-content">

                    <!-- [ content ] Start -->
                     <div class="container-fluid flex-grow-1 container-p-y">
                       
                        <div class="nav-tabs-top">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#user-edit-account">cirliance Incident Report List</a>
                                </li>
                            </ul>
                            <div class="card spaced-card">
                                    <div class="card-header card-header-flex">
                                        <div>
                                            <div class="flex-right-button">
                                                <a href="<?=base_url();?>admin/create_cir?token=<?= $access_token ?>" class="btn btn-info btn-sm"><i class="ion ion-ios-add-circle text-white"></i> Create CIR</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="card-datatable table-responsive">
                                        <table class="datatables-demo table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Report Number</th>
                                                    <th>Adviser</th>
                                                    <th>Company Representative</th>
                                                    <th>Sent Date</th>
                                                    <th>Due Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if($cir_list){ ?>
                                            <?php foreach($cir_list as $cir){ ?>
                                            <tr>
                                                <td>
                                                    CH20201<?=$cir['report_number'] ?> 
                                                </td>
                                                <td>
                                                    <?=$cir['adv_name'] ?> 
                                                </td>
                                                <td>
                                                    <?=$cir['name'] ?> 
                                                </td>
                                                 <td>
                                                    <?=$cir['send_date'] ?> 
                                                </td>
                                                <td>
                                                    <?=$cir['due_date'] ?> 
                                                </td>
                                                <td>
                                                     <?php if($cir['status'] == 0){ ?>
                                                    <span class="badge badge-warning ml-1">Not Completed</span>
                                                    <?php } else { ?>
                                                    <span class="badge badge-success ml-1">Completed</span>
                                                    <?php } ?>          
                                                </td>
                                                
                                                <td>
                                                    <a href="<?=base_url()?>admin/Compliance_Report?report_number=<?=$cir['report_number'] ?>" class="btn icon-btn btn-sm btn-outline-primary" title="View CIR" >
                                                        <span class="feather icon-eye"></span>
                                                    </a>
                                                    <a href="<?=base_url()?>admin/Compliance_Report?report_number=<?=$cir['report_number'] ?>&download=1" class="btn icon-btn btn-sm btn-outline-primary" title="Download CIR" >
                                                        <span class="feather icon-download"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        <?php } ?>                        
                                            </tbody>
                                        </table>
                                    </div>
                                </div>  
                            </div> 
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                    <?php $this->load->view('admin/common/footer');?>
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper ] end -->

    <!-- Core scripts -->
    <?php $this->load->view('admin/common/js');?>
    <script src="<?=base_url();?>assets/admin/js/pages/forms_pickers.js"></script>
   
</body>
</html>












