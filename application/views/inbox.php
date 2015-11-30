<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-1"></div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <?php $this->load->view('includes\content_header'); ?>
            <?php $this->load->view('includes\main_menu'); ?>

            <div class="master-content">
                <div class="row">
                    <div class="col-md-2" id="inbox-menu" style="padding:0;height: 70vh;background-color: #fff;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">My WINGS</h3>
                            </div><br/>
                                <button type="button" id="btn-inbox-active" class="btn btn-block btn-default btn-no-radius"><i class="fa fa-inbox"></i> Active</button>
                                <button type="button" id="btn-inbox-drafts" class="btn btn-block btn-default btn-no-radius"><i class="fa fa-file-text-o"></i> Drafts</button>
                                <button type="button" id="btn-inbox-completed" class="btn btn-block btn-default btn-no-radius"><i class="fa fa-check-square-o"></i> Completed</button>
                            </div>
                            
                                


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">My Team</h3>
                            </div>
                            <div class="panel-body" style="padding: 15px 0 0 0">
                                <button type="button" id="btn-inbox-team" class="btn btn-block btn-default btn-no-radius"><i class="fa fa-users"></i> Team Members</button>
                                <button type="button" id="btn-inbox-pending" class="btn btn-block btn-default btn-no-radius"><i class="fa fa-clock-o"></i> Awaiting review</button>
                            </div>
                        </div>
                        <button type="button" id="btn-inbox-trash" class="btn btn-block btn-default btn-no-radius"><i class="fa fa-trash-o"></i> Trash</button>
                    </div>
                    <div class="col-md-10 mCustomScrollbar magic-scroller" style="background-color: #fff;height: 70vh; overflow-y: scroll" data-mcs-theme="minimal-dark" id="inbox-content">
                        <div id="container-active" style="display:block">
                        <?php $this->load->view('inbox/active'); ?>
                        </div>
                        <div id="container-drafts" style="display:none">
                        <?php $this->load->view('inbox/drafts'); ?>
                        </div>
                        <div id="container-completed" style="display:none">
                        <?php $this->load->view('inbox/completed'); ?>
                        </div>
                        <div id="container-team" style="display:none">
                        <?php $this->load->view('inbox/team'); ?>
                        </div>
                        <div id="container-pending" style="display:none">
                        <?php $this->load->view('inbox/pending'); ?>
                        </div>
                        <div id="container-trash" style="display:none">
                        <?php $this->load->view('inbox/trash'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-xs hidden-sm col-md-1"></div>
    </div>
</div>




