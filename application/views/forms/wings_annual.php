<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-1"></div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <?php $this->load->view('includes\content_header'); ?>
            <?php $this->load->view('includes\main_menu'); ?>

            <div class="master-content">
                <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 mCustomScrollbar magic-scroller" style="height: 70vh; overflow-y: scroll" data-mcs-theme="minimal-dark">
                            <div style="padding-top:30px;">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#kra1" aria-controls="KRA1" role="tab" data-toggle="tab">KRA 1</span></a></li>
                                    <li role="presentation"><a href="#kra2" aria-controls="KRA2" role="tab" data-toggle="tab">KRA 2</a></li>
                                    <li role="presentation"><a href="#kra3" aria-controls="KRA3" role="tab" data-toggle="tab">KRA 3</a></li>
                                    <li role="presentation"><a href="#kra4" aria-controls="KRA4" role="tab" data-toggle="tab">KRA 4</a></li>
                                    <li role="presentation"><a href="#kra5" aria-controls="KRA5" role="tab" data-toggle="tab">KRA 5</a></li>
                                    <li role="presentation"><a href="#kra6" aria-controls="KRA6" role="tab" data-toggle="tab">KRA 6</a></li>
                                    <li role="presentation"><a href="#kra7" aria-controls="KRA7" role="tab" data-toggle="tab">KRA 7</a></li>
                                    <li role="presentation"><a href="#kra8" aria-controls="KRA8" role="tab" data-toggle="tab">KRA 8</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="kra1">
                                        <div class="row"><!-- header and target control form -->
                                            <div class="col-lg-9">
                                                <h4>Achievement of Individual Business / Operating / Support functional plan</h4>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">Targets no.</label>
                                                <div class="input-group">

                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra1_less"><i class="fa fa-minus-circle"></i></button>
                                                    </span>
                                                    <input type="text" class="form-control text-center" id="kra1_targets_no" value="1" readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra1_more"><i class="fa fa-plus-circle"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><!-- input forms -->
                                            <div class="col-xs-12">
                                                <div id="kra1_target1">
                                                    <label for="input_kra1_target1">Target 1</label>
                                                    <textarea class="form-control" rows="3" id="input_kra1_target1" name="input_kra1_target1"></textarea>
                                                </div><br/>
                                                <div id="kra1_target2" style="display:none">
                                                    <label for="input_kra1_target2">Target 2</label>
                                                    <textarea class="form-control" rows="3" id="input_kra1_target2" name="input_kra1_target2" disabled></textarea>
                                                </div><br/>
                                                <div id="kra1_target3" style="display:none">
                                                    <label for="input_kra1_target3">Target 3</label>
                                                    <textarea class="form-control" rows="3" id="input_kra1_target3" name="input_kra1_target3" disabled></textarea>
                                                </div><br/>
                                                <div id="kra1_target4" style="display:none">
                                                    <label for="input_kra1_target4">Target 4</label>
                                                    <textarea class="form-control" rows="3" id="input_kra1_target4" name="input_kra1_target4" disabled></textarea>
                                                </div><br/>
                                                <div id="kra1_target5" style="display:none">
                                                    <label for="input_kra1_target5">Target 5</label>
                                                    <textarea class="form-control" rows="3" id="input_kra1_target5" name="input_kra1_target5" disabled></textarea>
                                                </div><br/>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="kra2">
                                        <div class="row"><!-- header and target control form -->
                                            <div class="col-lg-9">
                                                <h4>Operational improvements with timelines</h4>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">Targets no.</label>
                                                <div class="input-group">

                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra2_less"><i class="fa fa-minus-circle"></i></button>
                                                    </span>
                                                    <input type="text" class="form-control text-center" id="kra2_targets_no" value="1" readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra2_more"><i class="fa fa-plus-circle"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><!-- input forms -->
                                            <div class="col-xs-12">
                                                <div id="kra2_target1">
                                                    <label for="input_kra2_target1">Target 1</label>
                                                    <textarea class="form-control" rows="3" id="input_kra2_target1" name="input_kra2_target1"></textarea>
                                                </div><br/>
                                                <div id="kra2_target2" style="display:none">
                                                    <label for="input_kra2_target2">Target 2</label>
                                                    <textarea class="form-control" rows="3" id="input_kra2_target2" name="input_kra2_target2" disabled></textarea>
                                                </div><br/>
                                                <div id="kra2_target3" style="display:none">
                                                    <label for="input_kra2_target3">Target 3</label>
                                                    <textarea class="form-control" rows="3" id="input_kra2_target3" name="input_kra2_target3" disabled></textarea>
                                                </div><br/>
                                                <div id="kra2_target4" style="display:none">
                                                    <label for="input_kra2_target4">Target 4</label>
                                                    <textarea class="form-control" rows="3" id="input_kra2_target4" name="input_kra2_target4" disabled></textarea>
                                                </div><br/>
                                                <div id="kra2_target5" style="display:none">
                                                    <label for="input_kra2_target5">Target 5</label>
                                                    <textarea class="form-control" rows="3" id="input_kra2_target5" name="input_kra2_target5" disabled></textarea>
                                                </div><br/>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="kra3">
                                        <div class="row"><!-- header and target control form -->
                                            <div class="col-lg-9">
                                                <h4>Fixed cost control at 95% of budgeted costs</h4>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">Targets no.</label>
                                                <div class="input-group">

                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra3_less"><i class="fa fa-minus-circle"></i></button>
                                                    </span>
                                                    <input type="text" class="form-control text-center" id="kra3_targets_no" value="1" readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra3_more"><i class="fa fa-plus-circle"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><!-- input forms -->
                                            <div class="col-xs-12">
                                                <div id="kra3_target1">
                                                    <label for="input_kra3_target1">Target 1</label>
                                                    <textarea class="form-control" rows="3" id="input_kra3_target1" name="input_kra3_target1"></textarea>
                                                </div><br/>
                                                <div id="kra3_target2" style="display:none">
                                                    <label for="input_kra3_target2">Target 2</label>
                                                    <textarea class="form-control" rows="3" id="input_kra3_target2" name="input_kra3_target2" disabled></textarea>
                                                </div><br/>
                                                <div id="kra3_target3" style="display:none">
                                                    <label for="input_kra3_target3">Target 3</label>
                                                    <textarea class="form-control" rows="3" id="input_kra3_target3" name="input_kra3_target3" disabled></textarea>
                                                </div><br/>
                                                <div id="kra3_target4" style="display:none">
                                                    <label for="input_kra3_target4">Target 4</label>
                                                    <textarea class="form-control" rows="3" id="input_kra3_target4" name="input_kra3_target4" disabled></textarea>
                                                </div><br/>
                                                <div id="kra3_target5" style="display:none">
                                                    <label for="input_kra3_target5">Target 5</label>
                                                    <textarea class="form-control" rows="3" id="input_kra3_target5" name="input_kra3_target5" disabled></textarea>
                                                </div><br/>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="kra4">
                                        <div class="row"><!-- header and target control form -->
                                            <div class="col-lg-9">
                                                <h4>Performance review and Management / Success</h4>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">Targets no.</label>
                                                <div class="input-group">

                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra4_less"><i class="fa fa-minus-circle"></i></button>
                                                    </span>
                                                    <input type="text" class="form-control text-center" id="kra4_targets_no" value="1" readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra4_more"><i class="fa fa-plus-circle"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><!-- input forms -->
                                            <div class="col-xs-12">
                                                <div id="kra4_target1">
                                                    <label for="input_kra4_target1">Target 1</label>
                                                    <textarea class="form-control" rows="3" id="input_kra4_target1" name="input_kra4_target1"></textarea>
                                                </div><br/>
                                                <div id="kra4_target2" style="display:none">
                                                    <label for="input_kra4_target2">Target 2</label>
                                                    <textarea class="form-control" rows="3" id="input_kra4_target2" name="input_kra4_target2" disabled></textarea>
                                                </div><br/>
                                                <div id="kra4_target3" style="display:none">
                                                    <label for="input_kra4_target3">Target 3</label>
                                                    <textarea class="form-control" rows="3" id="input_kra4_target3" name="input_kra4_target3" disabled></textarea>
                                                </div><br/>
                                                <div id="kra4_target4" style="display:none">
                                                    <label for="input_kra4_target4">Target 4</label>
                                                    <textarea class="form-control" rows="3" id="input_kra4_target4" name="input_kra4_target4" disabled></textarea>
                                                </div><br/>
                                                <div id="kra4_target5" style="display:none">
                                                    <label for="input_kra4_target5">Target 5</label>
                                                    <textarea class="form-control" rows="3" id="input_kra4_target5" name="input_kra4_target5" disabled></textarea>
                                                </div><br/>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="kra5">
                                        <div class="row"><!-- header and target control form -->
                                            <div class="col-lg-9">
                                                <h4>Specific Projects and its on time completion</h4>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">Targets no.</label>
                                                <div class="input-group">

                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra5_less"><i class="fa fa-minus-circle"></i></button>
                                                    </span>
                                                    <input type="text" class="form-control text-center" id="kra5_targets_no" value="1" readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra5_more"><i class="fa fa-plus-circle"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><!-- input forms -->
                                            <div class="col-xs-12">
                                                <div id="kra5_target1">
                                                    <label for="input_kra5_target1">Target 1</label>
                                                    <textarea class="form-control" rows="3" id="input_kra5_target1" name="input_kra5_target1"></textarea>
                                                </div><br/>
                                                <div id="kra5_target2" style="display:none">
                                                    <label for="input_kra5_target2">Target 2</label>
                                                    <textarea class="form-control" rows="3" id="input_kra5_target2" name="input_kra5_target2" disabled></textarea>
                                                </div><br/>
                                                <div id="kra5_target3" style="display:none">
                                                    <label for="input_kra5_target3">Target 3</label>
                                                    <textarea class="form-control" rows="3" id="input_kra5_target3" name="input_kra5_target3" disabled></textarea>
                                                </div><br/>
                                                <div id="kra5_target4" style="display:none">
                                                    <label for="input_kra5_target4">Target 4</label>
                                                    <textarea class="form-control" rows="3" id="input_kra5_target4" name="input_kra5_target4" disabled></textarea>
                                                </div><br/>
                                                <div id="kra5_target5" style="display:none">
                                                    <label for="input_kra5_target5">Target 5</label>
                                                    <textarea class="form-control" rows="3" id="input_kra5_target5" name="input_kra5_target5" disabled></textarea>
                                                </div><br/>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="kra6">
                                        <div class="row"><!-- header and target control form -->
                                            <div class="col-lg-9">
                                                <h4>Innovative / New ideas and implementation</h4>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">Targets no.</label>
                                                <div class="input-group">

                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra6_less"><i class="fa fa-minus-circle"></i></button>
                                                    </span>
                                                    <input type="text" class="form-control text-center" id="kra6_targets_no" value="1" readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra6_more"><i class="fa fa-plus-circle"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><!-- input forms -->
                                            <div class="col-xs-12">
                                                <div id="kra6_target1">
                                                    <label for="input_kra6_target1">Target 1</label>
                                                    <textarea class="form-control" rows="3" id="input_kra6_target1" name="input_kra6_target1"></textarea>
                                                </div><br/>
                                                <div id="kra6_target2" style="display:none">
                                                    <label for="input_kra6_target2">Target 2</label>
                                                    <textarea class="form-control" rows="3" id="input_kra6_target2" name="input_kra6_target2" disabled></textarea>
                                                </div><br/>
                                                <div id="kra6_target3" style="display:none">
                                                    <label for="input_kra6_target3">Target 3</label>
                                                    <textarea class="form-control" rows="3" id="input_kra6_target3" name="input_kra6_target3" disabled></textarea>
                                                </div><br/>
                                                <div id="kra6_target4" style="display:none">
                                                    <label for="input_kra6_target4">Target 4</label>
                                                    <textarea class="form-control" rows="3" id="input_kra6_target4" name="input_kra6_target4" disabled></textarea>
                                                </div><br/>
                                                <div id="kra6_target5" style="display:none">
                                                    <label for="input_kra6_target5">Target 5</label>
                                                    <textarea class="form-control" rows="3" id="input_kra6_target5" name="input_kra6_target5" disabled></textarea>
                                                </div><br/>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="kra7">
                                        <div class="row"><!-- header and target control form -->
                                            <div class="col-lg-9">
                                                <h4>Team work / Cross functional working relationships to be evaluated at each level by the superior</h4>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">Targets no.</label>
                                                <div class="input-group">

                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra7_less"><i class="fa fa-minus-circle"></i></button>
                                                    </span>
                                                    <input type="text" class="form-control text-center" id="kra7_targets_no" value="1" readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra7_more"><i class="fa fa-plus-circle"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><!-- input forms -->
                                            <div class="col-xs-12">
                                                <div id="kra7_target1">
                                                    <label for="input_kra7_target1">Target 1</label>
                                                    <textarea class="form-control" rows="3" id="input_kra7_target1" name="input_kra7_target1"></textarea>
                                                </div><br/>
                                                <div id="kra7_target2" style="display:none">
                                                    <label for="input_kra7_target2">Target 2</label>
                                                    <textarea class="form-control" rows="3" id="input_kra7_target2" name="input_kra7_target2" disabled></textarea>
                                                </div><br/>
                                                <div id="kra7_target3" style="display:none">
                                                    <label for="input_kra7_target3">Target 3</label>
                                                    <textarea class="form-control" rows="3" id="input_kra7_target3" name="input_kra7_target3" disabled></textarea>
                                                </div><br/>
                                                <div id="kra7_target4" style="display:none">
                                                    <label for="input_kra7_target4">Target 4</label>
                                                    <textarea class="form-control" rows="3" id="input_kra7_target4" name="input_kra7_target4" disabled></textarea>
                                                </div><br/>
                                                <div id="kra7_target5" style="display:none">
                                                    <label for="input_kra7_target5">Target 5</label>
                                                    <textarea class="form-control" rows="3" id="input_kra7_target5" name="input_kra7_target5" disabled></textarea>
                                                </div><br/>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="kra8">
                                        <div class="row"><!-- header and target control form -->
                                            <div class="col-lg-9">
                                                <h4>Any other objectives</h4>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">Targets no.</label>
                                                <div class="input-group">

                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra8_less"><i class="fa fa-minus-circle"></i></button>
                                                    </span>
                                                    <input type="text" class="form-control text-center" id="kra8_targets_no" value="1" readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" id="btn_kra8_more"><i class="fa fa-plus-circle"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><!-- input forms -->
                                            <div class="col-xs-12">
                                                <div id="kra8_target1">
                                                    <label for="input_kra8_target1">Target 1</label>
                                                    <textarea class="form-control" rows="3" id="input_kra8_target1" name="input_kra8_target1"></textarea>
                                                </div><br/>
                                                <div id="kra8_target2" style="display:none">
                                                    <label for="input_kra8_target2">Target 2</label>
                                                    <textarea class="form-control" rows="3" id="input_kra8_target2" name="input_kra8_target2" disabled></textarea>
                                                </div><br/>
                                                <div id="kra8_target3" style="display:none">
                                                    <label for="input_kra8_target3">Target 3</label>
                                                    <textarea class="form-control" rows="3" id="input_kra8_target3" name="input_kra8_target3" disabled></textarea>
                                                </div><br/>
                                                <div id="kra8_target4" style="display:none">
                                                    <label for="input_kra8_target4">Target 4</label>
                                                    <textarea class="form-control" rows="3" id="input_kra8_target4" name="input_kra8_target4" disabled></textarea>
                                                </div><br/>
                                                <div id="kra8_target5" style="display:none">
                                                    <label for="input_kra8_target5">Target 5</label>
                                                    <textarea class="form-control" rows="3" id="input_kra8_target5" name="input_kra8_target5" disabled></textarea>
                                                </div><br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 mCustomScrollbar magic-scroller" style="height: 70vh; overflow-y: scroll" data-mcs-theme="minimal-dark">
                            <div  style="padding-top:30px;">
                                <h4>KRA's split</h4>
                                <!-- chart -->
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <canvas id="annual-kra-split-chart" width="200" height="200"></canvas><br/><br/>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:2px;">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="color: #fff;background-color: #5bc0de;border-color: #46b8da;">KRA 1</span>
                                            <input type="text" id="input-kra1-chart" class="form-control annual-percent" value="40" style="text-align: right">
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="color: #fff;background-color: #5bc0de;border-color: #46b8da;">KRA 2</span>
                                            <input type="text" id="input-kra2-chart" class="form-control annual-percent" value="10" style="text-align: right">
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:2px;">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="color: #fff;background-color: #5bc0de;border-color: #46b8da;">KRA 3</span>
                                            <input type="text" id="input-kra3-chart" class="form-control annual-percent" value="10" style="text-align: right">
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="color: #fff;background-color: #5bc0de;border-color: #46b8da;">KRA 4</span>
                                            <input type="text" id="input-kra4-chart" class="form-control annual-percent" value="10" style="text-align: right">
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:2px;">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="color: #fff;background-color: #5bc0de;border-color: #46b8da;">KRA 5</span>
                                            <input type="text" id="input-kra5-chart" class="form-control annual-percent" value="5" style="text-align: right">
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="color: #fff;background-color: #5bc0de;border-color: #46b8da;">KRA 6</span>
                                            <input type="text" id="input-kra6-chart" class="form-control annual-percent" value="5" style="text-align: right">
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:2px;">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="color: #fff;background-color: #5bc0de;border-color: #46b8da;">KRA 7</span>
                                            <input type="text" id="input-kra7-chart" class="form-control annual-percent" value="10" style="text-align: right">
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="color: #fff;background-color: #5bc0de;border-color: #46b8da;">KRA 8</span>
                                            <input type="text" id="input-kra8-chart" class="form-control annual-percent" value="10" style="text-align: right">
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:30px;" id="calculation-feedback">
                                    
                                </div>
                                <div class="row" style="margin-top:30px;" id="annual-wings-submit-button">
                                    <button type="submit" name="annual_submit_review" value="submit" class="btn btn-block btn-primary">Continue <span class="fa fa-arrow-circle-o-right"></span></button>
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
