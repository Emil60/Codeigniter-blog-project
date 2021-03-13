<?php $this->load->view('admin/include/header'); ?>
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Posts</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $this->session->flashdata('info_post'); ?>
                             Posts <a href="<?php echo base_url('adminpanel/addpost'); ?>">
                             <button type="submit" class="btn btn-primary btn-sm">Add post</button></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Views</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($info as $info) { ?>
                                        <tr class="odd gradeX">
                                        
                                            <td><?php echo $info->id; ?></td>
                                            <td><?php echo $info->title; ?></td>
                                            <td><?php echo $info->date; ?></td>
                                            <td class="center"><?php echo $info->views; ?></td>
                                            <td class="center">
                                                <a href="<?php echo base_url('adminpanel/updatepost/'); echo ''.$info->id.'';?>">
                                                <button type="button" class="btn btn-warning btn-sm">Update</button></a>
                                                <a href="<?php echo base_url('adminpanel/deletepost/'); echo ''.$info->id.''; ?>">
                                                <button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                                            </td>
                                        </tr>
                                    <?php } ?>    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
    
    <?php $this->load->view('admin/include/footer'); ?>

