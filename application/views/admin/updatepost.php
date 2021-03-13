<?php $this->load->view('admin/include/header'); ?>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    Posts <a href="<?php echo base_url('adminpanel/shairings'); ?>">
                    <button type="button" class="btn btn-primary btn-sm">Show Table</button></a>
                </div>
                <div class="panel-body">
                <form role="form" action='<?php echo base_url('adminpanel/updatepostt/');echo ''.$info->id.''; ?>' method='post'>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input class="form-control" name="category" value="<?php echo $info->category; ?>">
                                            <p class="help-block">Example: Sport, Medical, Formula 1, Design etc.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" value="<?php echo $info->title; ?>" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label>Post Text</label>
                                            <textarea class="form-control" rows="6" name="text"><?php echo $info->text; ?></textarea>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Share</button>
                                        <button type="reset" class="btn btn-success">Reset</button>
                                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/include/footer'); ?>
