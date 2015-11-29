<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-1"></div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <?php $this->load->view('includes\content_header'); ?>
            <?php $this->load->view('includes\main_menu'); ?>

            <div class="master-content">
                <samp>
                    <?php
                    print_r($this->input->post());
                    ?>
                </samp>
            </div>
        </div>
        <div class="hidden-xs hidden-sm col-md-1"></div>
    </div>
</div>




