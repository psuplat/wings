<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-1"></div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <?php $this->load->view('includes\content_header'); ?>
            <?php $this->load->view('includes\main_menu'); ?>

            <div class="master-content">
                <?php
                if($query_results['transaction_result'] == '1')
                {
                    echo '<h2><i class="fa fa-check-circle-o fa-6 text-success"></i> Your annual WINGS has been successfully submitted.</h2>';
                    echo '<br/><br/>';
                    echo '<h4>You can check the status of all your new and past submission in your inbox.</h4>';
                }
                ?>
            </div>
        </div>
        <div class="hidden-xs hidden-sm col-md-1"></div>
    </div>
</div>




