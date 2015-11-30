<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-1"></div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <?php $this->load->view('includes\content_header'); ?>
            <?php $this->load->view('includes\main_menu'); ?>

            <div class="master-content">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 mCustomScrollbar magic-scroller" style="height: 70vh; overflow-y: scroll" data-mcs-theme="minimal-dark">
                            <div id="sumbitted_values" style="display:block">
                                <textarea name="input_kra1_target1"><?= $this->input->post('input_kra1_target1'); ?></textarea>
                                <?php
                                if($this->input->post('input_kra1_target2'))
                                {
                                    echo '<textarea name="input_kra1_target2">'.$this->input->post('input_kra1_target2').'</textarea>';
                                }
                                if($this->input->post('input_kra1_target3'))
                                {
                                    echo '<textarea name="input_kra1_target3">'.$this->input->post('input_kra1_target3').'</textarea>';
                                }
                                if($this->input->post('input_kra1_target4'))
                                {
                                    echo '<textarea name="input_kra1_target4">'.$this->input->post('input_kra1_target4').'</textarea>';
                                }
                                if($this->input->post('input_kra1_target5'))
                                {
                                    echo '<textarea name="input_kra1_target5">'.$this->input->post('input_kra1_target5').'</textarea>';
                                }
                                ?>
                                <textarea name="input_kra2_target1"><?= $this->input->post('input_kra2_target1'); ?></textarea>
                                <?php
                                if($this->input->post('input_kra2_target2'))
                                {
                                    echo '<textarea name="input_kra2_target2">'.$this->input->post('input_kra2_target2').'</textarea>';
                                }
                                if($this->input->post('input_kra2_target3'))
                                {
                                    echo '<textarea name="input_kra2_target3">'.$this->input->post('input_kra2_target3').'</textarea>';
                                }
                                if($this->input->post('input_kra2_target4'))
                                {
                                    echo '<textarea name="input_kra2_target4">'.$this->input->post('input_kra2_target4').'</textarea>';
                                }
                                if($this->input->post('input_kra2_target5'))
                                {
                                    echo '<textarea name="input_kra2_target5">'.$this->input->post('input_kra2_target5').'</textarea>';
                                }
                                ?>
                                <textarea name="input_kra3_target1"><?= $this->input->post('input_kra3_target1'); ?></textarea>
                                <?php
                                if($this->input->post('input_kra3_target2'))
                                {
                                    echo '<textarea name="input_kra3_target2">'.$this->input->post('input_kra3_target2').'</textarea>';
                                }
                                if($this->input->post('input_kra3_target3'))
                                {
                                    echo '<textarea name="input_kra3_target3">'.$this->input->post('input_kra3_target3').'</textarea>';
                                }
                                if($this->input->post('input_kra3_target4'))
                                {
                                    echo '<textarea name="input_kra3_target4">'.$this->input->post('input_kra3_target4').'</textarea>';
                                }
                                if($this->input->post('input_kra3_target5'))
                                {
                                    echo '<textarea name="input_kra3_target5">'.$this->input->post('input_kra3_target5').'</textarea>';
                                }
                                ?>
                                <textarea name="input_kra4_target1"><?= $this->input->post('input_kra4_target1'); ?></textarea>
                                <?php
                                if($this->input->post('input_kra4_target2'))
                                {
                                    echo '<textarea name="input_kra4_target2">'.$this->input->post('input_kra4_target2').'</textarea>';
                                }
                                if($this->input->post('input_kra4_target3'))
                                {
                                    echo '<textarea name="input_kra4_target3">'.$this->input->post('input_kra4_target3').'</textarea>';
                                }
                                if($this->input->post('input_kra4_target4'))
                                {
                                    echo '<textarea name="input_kra4_target4">'.$this->input->post('input_kra4_target4').'</textarea>';
                                }
                                if($this->input->post('input_kra4_target5'))
                                {
                                    echo '<textarea name="input_kra4_target5">'.$this->input->post('input_kra4_target5').'</textarea>';
                                }
                                ?>
                                <textarea name="input_kra5_target1"><?= $this->input->post('input_kra5_target1'); ?></textarea>
                                <?php
                                if($this->input->post('input_kra5_target2'))
                                {
                                    echo '<textarea name="input_kra5_target2">'.$this->input->post('input_kra5_target2').'</textarea>';
                                }
                                if($this->input->post('input_kra5_target3'))
                                {
                                    echo '<textarea name="input_kra5_target3">'.$this->input->post('input_kra5_target3').'</textarea>';
                                }
                                if($this->input->post('input_kra5_target4'))
                                {
                                    echo '<textarea name="input_kra5_target4">'.$this->input->post('input_kra5_target4').'</textarea>';
                                }
                                if($this->input->post('input_kra5_target5'))
                                {
                                    echo '<textarea name="input_kra5_target5">'.$this->input->post('input_kra5_target5').'</textarea>';
                                }
                                ?>
                                <textarea name="input_kra6_target1"><?= $this->input->post('input_kra6_target1'); ?></textarea>
                                <?php
                                if($this->input->post('input_kra6_target2'))
                                {
                                    echo '<textarea name="input_kra6_target2">'.$this->input->post('input_kra6_target2').'</textarea>';
                                }
                                if($this->input->post('input_kra6_target3'))
                                {
                                    echo '<textarea name="input_kra6_target3">'.$this->input->post('input_kra6_target3').'</textarea>';
                                }
                                if($this->input->post('input_kra6_target4'))
                                {
                                    echo '<textarea name="input_kra6_target4">'.$this->input->post('input_kra6_target4').'</textarea>';
                                }
                                if($this->input->post('input_kra6_target5'))
                                {
                                    echo '<textarea name="input_kra6_target5">'.$this->input->post('input_kra6_target5').'</textarea>';
                                }
                                ?>
                                <textarea name="input_kra7_target1"><?= $this->input->post('input_kra7_target1'); ?></textarea>
                                <?php
                                if($this->input->post('input_kra7_target2'))
                                {
                                    echo '<textarea name="input_kra7_target2">'.$this->input->post('input_kra7_target2').'</textarea>';
                                }
                                if($this->input->post('input_kra7_target3'))
                                {
                                    echo '<textarea name="input_kra7_target3">'.$this->input->post('input_kra7_target3').'</textarea>';
                                }
                                if($this->input->post('input_kra7_target4'))
                                {
                                    echo '<textarea name="input_kra7_target4">'.$this->input->post('input_kra7_target4').'</textarea>';
                                }
                                if($this->input->post('input_kra7_target5'))
                                {
                                    echo '<textarea name="input_kra7_target5">'.$this->input->post('input_kra7_target5').'</textarea>';
                                }
                                ?>
                                <textarea name="input_kra8_target1"><?= $this->input->post('input_kra8_target1'); ?></textarea>
                                <?php
                                if($this->input->post('input_kra8_target2'))
                                {
                                    echo '<textarea name="input_kra8_target2">'.$this->input->post('input_kra8_target2').'</textarea>';
                                }
                                if($this->input->post('input_kra8_target3'))
                                {
                                    echo '<textarea name="input_kra8_target3">'.$this->input->post('input_kra8_target3').'</textarea>';
                                }
                                if($this->input->post('input_kra8_target4'))
                                {
                                    echo '<textarea name="input_kra8_target4">'.$this->input->post('input_kra8_target4').'</textarea>';
                                }
                                if($this->input->post('input_kra8_target5'))
                                {
                                    echo '<textarea name="input_kra8_target5">'.$this->input->post('input_kra8_target5').'</textarea>';
                                }
                                ?>
                                <input type="hidden" name="input_kra1_split" value="<?= $this->input->post('input_kra1_split'); ?>">
                                <input type="hidden" name="input_kra2_split" value="<?= $this->input->post('input_kra2_split'); ?>">
                                <input type="hidden" name="input_kra3_split" value="<?= $this->input->post('input_kra3_split'); ?>">
                                <input type="hidden" name="input_kra4_split" value="<?= $this->input->post('input_kra4_split'); ?>">
                                <input type="hidden" name="input_kra5_split" value="<?= $this->input->post('input_kra5_split'); ?>">
                                <input type="hidden" name="input_kra6_split" value="<?= $this->input->post('input_kra6_split'); ?>">
                                <input type="hidden" name="input_kra7_split" value="<?= $this->input->post('input_kra7_split'); ?>">
                                <input type="hidden" name="input_kra8_split" value="<?= $this->input->post('input_kra8_split'); ?>">
                            </div>
                            <div>
                                <h3>Review your bi-annual submission</h3><hr>
                                <div>
                                    <h4>KRA 1: Achievement of Individual Business / Operating / Support functional plan</h4>
                                    <div style="padding-left:15px">
                                    <strong>Target 1</strong><br/>
                                    <?= $this->input->post('input_kra1_target1'); ?>
                                    <br/>
                                    <?php
                                    if($this->input->post('input_kra1_target2'))
                                    {
                                        echo '<strong>Target 2</strong><br/>';
                                        echo $this->input->post('input_kra1_target2').'<br/>';
                                    }
                                    if($this->input->post('input_kra1_target3'))
                                    {
                                        echo '<strong>Target 3</strong><br/>';
                                        echo $this->input->post('input_kra1_target3').'<br/>';
                                    }
                                    if($this->input->post('input_kra1_target4'))
                                    {
                                        echo '<strong>Target 4</strong><br/>';
                                        echo $this->input->post('input_kra1_target4').'<br/>';
                                    }
                                    if($this->input->post('input_kra1_target5'))
                                    {
                                        echo '<strong>Target 5</strong><br/>';
                                        echo $this->input->post('input_kra1_target5').'<br/>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div><br/>
                                    <h4>KRA 2: Operational improvements with timelines</h4>
                                    <div style="padding-left:15px">
                                    <strong>Target 1</strong><br/>
                                    <?= $this->input->post('input_kra2_target1'); ?><br/>
                                    <?php
                                    if($this->input->post('input_kra2_target2'))
                                    {
                                        echo '<strong>Target 2</strong><br/>';
                                        echo $this->input->post('input_kra2_target2').'<br/>';
                                    }
                                    if($this->input->post('input_kra2_target3'))
                                    {
                                        echo '<strong>Target 3</strong><br/>';
                                        echo $this->input->post('input_kra2_target3').'<br/>';
                                    }
                                    if($this->input->post('input_kra2_target4'))
                                    {
                                        echo '<strong>Target 4</strong><br/>';
                                        echo $this->input->post('input_kra2_target4').'<br/>';
                                    }
                                    if($this->input->post('input_kra2_target5'))
                                    {
                                        echo '<strong>Target 5</strong><br/>';
                                        echo $this->input->post('input_kra2_target5').'<br/>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div><br/>
                                    <h4>KRA 3: Fixed cost control at 95% of budgeted costs</h4>
                                    <div style="padding-left:15px">
                                    <strong>Target 1</strong><br/>
                                    <?= $this->input->post('input_kra3_target1'); ?><br/>
                                    <?php
                                    if($this->input->post('input_kra3_target2'))
                                    {
                                        echo '<strong>Target 2</strong><br/>';
                                        echo $this->input->post('input_kra3_target2').'<br/>';
                                    }
                                    if($this->input->post('input_kra3_target3'))
                                    {
                                        echo '<strong>Target 3</strong><br/>';
                                        echo $this->input->post('input_kra3_target3').'<br/>';
                                    }
                                    if($this->input->post('input_kra3_target4'))
                                    {
                                        echo '<strong>Target 4</strong><br/>';
                                        echo $this->input->post('input_kra3_target4').'<br/>';
                                    }
                                    if($this->input->post('input_kra3_target5'))
                                    {
                                        echo '<strong>Target 5</strong><br/>';
                                        echo $this->input->post('input_kra3_target5').'<br/>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div><br/>
                                    <h4>KRA 4: Performance review and Management / Success</h4>
                                    <div style="padding-left:15px">
                                    <strong>Target 1</strong><br/>
                                    <?= $this->input->post('input_kra4_target1'); ?><br/>
                                    <?php
                                    if($this->input->post('input_kra4_target2'))
                                    {
                                        echo '<strong>Target 2</strong><br/>';
                                        echo $this->input->post('input_kra4_target2').'<br/>';
                                    }
                                    if($this->input->post('input_kra4_target3'))
                                    {
                                        echo '<strong>Target 3</strong><br/>';
                                        echo $this->input->post('input_kra4_target3').'<br/>';
                                    }
                                    if($this->input->post('input_kra4_target4'))
                                    {
                                        echo '<strong>Target 4</strong><br/>';
                                        echo $this->input->post('input_kra4_target4').'<br/>';
                                    }
                                    if($this->input->post('input_kra4_target5'))
                                    {
                                        echo '<strong>Target 5</strong><br/>';
                                        echo $this->input->post('input_kra4_target5').'<br/>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div><br/>
                                    <h4>KRA 5: Specific Projects and its on time completion</h4>
                                    <div style="padding-left:15px">
                                    <strong>Target 1</strong><br/>
                                    <?= $this->input->post('input_kra5_target1'); ?><br/>
                                    <?php
                                    if($this->input->post('input_kra5_target2'))
                                    {
                                        echo '<strong>Target 2</strong><br/>';
                                        echo $this->input->post('input_kra4_target2').'<br/>';
                                    }
                                    if($this->input->post('input_kra5_target3'))
                                    {
                                        echo '<strong>Target 3</strong><br/>';
                                        echo $this->input->post('input_kra5_target3').'<br/>';
                                    }
                                    if($this->input->post('input_kra5_target4'))
                                    {
                                        echo '<strong>Target 4</strong><br/>';
                                        echo $this->input->post('input_kra5_target4').'<br/>';
                                    }
                                    if($this->input->post('input_kra5_target5'))
                                    {
                                        echo '<strong>Target 5</strong><br/>';
                                        echo $this->input->post('input_kra5_target5').'<br/>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div><br/>
                                    <h4>KRA 6: Innovative / New ideas and implementation</h4>
                                    <div style="padding-left:15px">
                                    <strong>Target 1</strong><br/>
                                    <?= $this->input->post('input_kra6_target1'); ?><br/>
                                    <?php
                                    if($this->input->post('input_kra6_target2'))
                                    {
                                        echo '<strong>Target 2</strong><br/>';
                                        echo $this->input->post('input_kra6_target2').'<br/>';
                                    }
                                    if($this->input->post('input_kra6_target3'))
                                    {
                                        echo '<strong>Target 3</strong><br/>';
                                        echo $this->input->post('input_kra6_target3').'<br/>';
                                    }
                                    if($this->input->post('input_kra6_target4'))
                                    {
                                        echo '<strong>Target 4</strong><br/>';
                                        echo $this->input->post('input_kra6_target4').'<br/>';
                                    }
                                    if($this->input->post('input_kra6_target5'))
                                    {
                                        echo '<strong>Target 5</strong><br/>';
                                        echo $this->input->post('input_kra6_target5').'<br/>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div><br/>
                                    <h4>KRA 7: Team work / Cross functional working relationships to be evaluated at each level by the superior</h4>
                                    <div style="padding-left:15px">
                                    <strong>Target 1</strong><br/>
                                    <?= $this->input->post('input_kra7_target1'); ?><br/>
                                    <?php
                                    if($this->input->post('input_kra7_target2'))
                                    {
                                        echo '<strong>Target 2</strong><br/>';
                                        echo $this->input->post('input_kra6_target2').'<br/>';
                                    }
                                    if($this->input->post('input_kra7_target3'))
                                    {
                                        echo '<strong>Target 3</strong><br/>';
                                        echo $this->input->post('input_kra7_target3').'<br/>';
                                    }
                                    if($this->input->post('input_kra7_target4'))
                                    {
                                        echo '<strong>Target 4</strong><br/>';
                                        echo $this->input->post('input_kra7_target4').'<br/>';
                                    }
                                    if($this->input->post('input_kra7_target5'))
                                    {
                                        echo '<strong>Target 5</strong><br/>';
                                        echo $this->input->post('input_kra7_target5').'<br/>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div><br/>
                                    <h4>KRA 8: Any other objectives</h4>
                                    <div style="padding-left:15px">
                                    <strong>Target 1</strong><br/>
                                    <?= $this->input->post('input_kra8_target1'); ?><br/>
                                    <?php
                                    if($this->input->post('input_kra8_target2'))
                                    {
                                        echo '<strong>Target 2</strong><br/>';
                                        echo $this->input->post('input_kra8_target2').'<br/>';
                                    }
                                    if($this->input->post('input_kra8_target3'))
                                    {
                                        echo '<strong>Target 3</strong><br/>';
                                        echo $this->input->post('input_kra8_target3').'<br/>';
                                    }
                                    if($this->input->post('input_kra8_target4'))
                                    {
                                        echo '<strong>Target 4</strong><br/>';
                                        echo $this->input->post('input_kra8_target4').'<br/>';
                                    }
                                    if($this->input->post('input_kra8_target5'))
                                    {
                                        echo '<strong>Target 5</strong><br/>';
                                        echo $this->input->post('input_kra8_target5').'<br/>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <code><?php print_r($this->input->post()); ?></code>
                                <hr/>
                                <code><?php print_r($supervisor); ?></code>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 mCustomScrollbar magic-scroller" style="height: 70vh; overflow-y: scroll" data-mcs-theme="minimal-dark">
                            <div  style="padding-top:30px;">
                                    <h4>Submission details:</h4>
                                    <div class="row"  id="calculation-feedback">
                                        <div class="col-md-12">
                                            <strong>Submitted by:</strong> <?= $this->session->session_userFirstName.' '.$this->session->session_userLastName; ?><br/>
                                            <strong>Department:</strong> <?= $this->session->session_userGroup; ?><br/>
                                            <strong>Submit to:</strong> <?= $supervisor['name'].' '.$supervisor['surname']; ?><br/>
                                            <input type="hidden" name="input_supervisor_adid" value="<?= $supervisor['adid']; ?>">
                                            <input type="hidden" name="input_supervisor_email" value="<?= $supervisor['email']; ?>">
                                            <strong>Year:</strong> <?= date('Y'); ?><br/><br/>
                                        </div>
                                    </div>
                                    <div class="row"  id="calculation-feedback">
                                        <div class="col-md-12">
                                            <label for="input_annual_comments">Comments:</label>
                                            <textarea class="form-control" rows="4" id="input_annual_comments" name="input_annual_comments"></textarea>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="input_draft"  id="input_draft" value="1"> Save as draft
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:30px;" id="annual-wings-submit-button">
                                        <button type="submit"  id="btn_annual_submit" name="annual_submit_confirm" value="submit" class="btn btn-block btn-primary"><span class="fa fa-envelope-o"></span> Submit for review</button>
                                    </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="hidden-xs hidden-sm col-md-1"></div>
    </div>
</div>




