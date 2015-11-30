<div class="master-menu">
    <nav class="navbar navbar-default" style="border-radius: 0px">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#wings_menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="wings_menu">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= base_url(); ?>index.php/inbox">INBOX <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">MONTHLY WINGS</a></li>
                    <li><a href="<?= base_url(); ?>index.php/wings/annual">BI-ANNUAL WINGS</a></li>
                    <?php if ($this->session->session_userReports) { ?>
                        <li><a href="#">REPORTINGS</a></li>
                    <?php } ?>
                    <?php if ($this->session->session_userHR) { ?>
                        <li><a href="#">HR</a></li>
                    <?php } ?>
                    <?php if ($this->session->session_userAdmin) { ?>
                        <li><a href="#">ADMINISTRATION</a></li>
                    <?php } ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><button type="button" class="btn btn-danger navbar-btn" id="btn_logout" onclick="location.href = '<?= base_url().'index.php/logout'; ?>';"><i class="fa fa-sign-out"></i> LOG OUT</button></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
