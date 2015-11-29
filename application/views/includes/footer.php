<script src="<?= base_url(); ?>assets/third-party/jquery/jquery-1.11.3.min.js"></script>
<script src="<?= base_url(); ?>assets/third-party/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/third-party/charts_js/Chart.min.js"></script>
<script src="<?= base_url(); ?>assets/third-party/malihu_scroller/jquery.mCustomScrollbar.concat.min.js"></script>

<script>
//apply the scroll bar plugin to 
    $(".magic-scroller").mCustomScrollbar({
        axis: "y" // vertical  scrollbar
    });
//*********    control of ANNUAL KRA'a target buttons and input fields *****/
    //***  MINUS BUTTONS ***//
    //kra1 minus button decrement number
    $("#btn_kra1_less").click(function () {
        var targetsNo = parseInt($("#kra1_targets_no").val());
        var newValue;
        newValue = targetsNo - 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra1_targets_no").val(newValue); //set new value in the control
            $("#kra1_target" + targetsNo).hide(); //hide the div with the target 2 input form
            $("#input_kra1_target" + targetsNo).prop('disabled', true); //disable the control
        }
    });

    //kra2 minus button decrement number
    $("#btn_kra2_less").click(function () {
        var targetsNo = parseInt($("#kra2_targets_no").val());
        var newValue;
        newValue = targetsNo - 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra2_targets_no").val(newValue); //set new value in the control
            $("#kra2_target" + targetsNo).hide(); //hide the div with the target 2 input form
            $("#input_kra2_target" + targetsNo).prop('disabled', true); //disable the control
        }
    });

    //kra3 minus button decrement number
    $("#btn_kra3_less").click(function () {
        var targetsNo = parseInt($("#kra3_targets_no").val());
        var newValue;
        newValue = targetsNo - 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra3_targets_no").val(newValue); //set new value in the control
            $("#kra3_target" + targetsNo).hide(); //hide the div with the target 2 input form
            $("#input_kra3_target" + targetsNo).prop('disabled', true); //disable the control
        }
    });

    //kra4 minus button decrement number
    $("#btn_kra4_less").click(function () {
        var targetsNo = parseInt($("#kra4_targets_no").val());
        var newValue;
        newValue = targetsNo - 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra4_targets_no").val(newValue); //set new value in the control
            $("#kra4_target" + targetsNo).hide(); //hide the div with the target 2 input form
            $("#input_kra4_target" + targetsNo).prop('disabled', true); //disable the control
        }
    });

    //kra5 minus button decrement number
    $("#btn_kra5_less").click(function () {
        var targetsNo = parseInt($("#kra5_targets_no").val());
        var newValue;
        newValue = targetsNo - 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra5_targets_no").val(newValue); //set new value in the control
            $("#kra5_target" + targetsNo).hide(); //hide the div with the target 2 input form
            $("#input_kra5_target" + targetsNo).prop('disabled', true); //disable the control
        }
    });

    //kra6 minus button decrement number
    $("#btn_kra6_less").click(function () {
        var targetsNo = parseInt($("#kra6_targets_no").val());
        var newValue;
        newValue = targetsNo - 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra6_targets_no").val(newValue); //set new value in the control
            $("#kra6_target" + targetsNo).hide(); //hide the div with the target 2 input form
            $("#input_kra6_target" + targetsNo).prop('disabled', true); //disable the control
        }
    });

    //kra7 minus button decrement number
    $("#btn_kra7_less").click(function () {
        var targetsNo = parseInt($("#kra7_targets_no").val());
        var newValue;
        newValue = targetsNo - 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra7_targets_no").val(newValue); //set new value in the control
            $("#kra7_target" + targetsNo).hide(); //hide the div with the target 2 input form
            $("#input_kra7_target" + targetsNo).prop('disabled', true); //disable the control
        }
    });

    //kra8 minus button decrement number
    $("#btn_kra8_less").click(function () {
        var targetsNo = parseInt($("#kra8_targets_no").val());
        var newValue;
        newValue = targetsNo - 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra8_targets_no").val(newValue); //set new value in the control
            $("#kra8_target" + targetsNo).hide(); //hide the div with the target 2 input form
            $("#input_kra8_target" + targetsNo).prop('disabled', true); //disable the control
        }
    });

    //*** PLUS BUTTONS ***//
    //kra1 plus button increment number
    $("#btn_kra1_more").click(function () {
        var targetsNo = parseInt($("#kra1_targets_no").val());
        var newValue;
        newValue = targetsNo + 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra1_targets_no").val(newValue);
            $("#kra1_target" + newValue).show(); //show the div with the target 2 input form
            $("#input_kra1_target" + newValue).prop('disabled', false); //enable the control
        }
    });

    //kra2 plus button increment number
    $("#btn_kra2_more").click(function () {
        var targetsNo = parseInt($("#kra2_targets_no").val());
        var newValue;
        newValue = targetsNo + 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra2_targets_no").val(newValue);
            $("#kra2_target" + newValue).show(); //show the div with the target 2 input form
            $("#input_kra2_target" + newValue).prop('disabled', false); //enable the control
        }
    });

    //kra3 plus button increment number
    $("#btn_kra3_more").click(function () {
        var targetsNo = parseInt($("#kra3_targets_no").val());
        var newValue;
        newValue = targetsNo + 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra3_targets_no").val(newValue);
            $("#kra3_target" + newValue).show(); //show the div with the target 2 input form
            $("#input_kra3_target" + newValue).prop('disabled', false); //enable the control
        }
    });

    //kra4 plus button increment number
    $("#btn_kra4_more").click(function () {
        var targetsNo = parseInt($("#kra4_targets_no").val());
        var newValue;
        newValue = targetsNo + 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra4_targets_no").val(newValue);
            $("#kra4_target" + newValue).show(); //show the div with the target 2 input form
            $("#input_kra4_target" + newValue).prop('disabled', false); //enable the control
        }
    });
    //kra5 plus button increment number
    $("#btn_kra5_more").click(function () {
        var targetsNo = parseInt($("#kra5_targets_no").val());
        var newValue;
        newValue = targetsNo + 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra5_targets_no").val(newValue);
            $("#kra5_target" + newValue).show(); //show the div with the target 2 input form
            $("#input_kra5_target" + newValue).prop('disabled', false); //enable the control
        }
    });

    //kra6 plus button increment number
    $("#btn_kra6_more").click(function () {
        var targetsNo = parseInt($("#kra6_targets_no").val());
        var newValue;
        newValue = targetsNo + 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra6_targets_no").val(newValue);
            $("#kra6_target" + newValue).show(); //show the div with the target 2 input form
            $("#input_kra6_target" + newValue).prop('disabled', false); //enable the control
        }
    });

    //kra7 plus button increment number
    $("#btn_kra7_more").click(function () {
        var targetsNo = parseInt($("#kra7_targets_no").val());
        var newValue;
        newValue = targetsNo + 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra7_targets_no").val(newValue);
            $("#kra7_target" + newValue).show(); //show the div with the target 2 input form
            $("#input_kra7_target" + newValue).prop('disabled', false); //enable the control
        }
    });

    //kra8 plus button increment number
    $("#btn_kra8_more").click(function () {
        var targetsNo = parseInt($("#kra8_targets_no").val());
        var newValue;
        newValue = targetsNo + 1;
        if (newValue == 0 || newValue > 5)
        {
            return false;
        } else
        {
            $("#kra8_targets_no").val(newValue);
            $("#kra8_target" + newValue).show(); //show the div with the target 2 input form
            $("#input_kra8_target" + newValue).prop('disabled', false); //enable the control
        }
    });
//*********    end of control for ANNUAL KRA'a target buttons and input fields *****/

// chart.js charting for annual krs percentage split
//chart data
    function drawDohoughtChartAnnualWINGS()
    {
        var kra1 = $("#input-kra1-chart").val();
        var kra2 = $("#input-kra2-chart").val();
        var kra3 = $("#input-kra3-chart").val();
        var kra4 = $("#input-kra4-chart").val();
        var kra5 = $("#input-kra5-chart").val();
        var kra6 = $("#input-kra6-chart").val();
        var kra7 = $("#input-kra7-chart").val();
        var kra8 = $("#input-kra8-chart").val();

        var annualOption = {
            segmentShowStroke: false
        };

        var annualKraData = [
            {
                value: kra1,
                color: "#FFFF88",
                highlight: "#FFFF88",
                label: "KRA 1"
            },
            {
                value: kra2,
                color: "#CDEB8B",
                highlight: "#CDEB8B",
                label: "KRA 2"
            },
            {
                value: kra3,
                color: "#C3D9FF",
                highlight: "#C3D9FF",
                label: "KRA 3"
            },
            {
                value: kra4,
                color: "#FF1A00",
                highlight: "#FF1A00",
                label: "KRA 4"
            },
            {
                value: kra5,
                color: "#FF7400",
                highlight: "#FF7400",
                label: "KRA 5"
            },
            {
                value: kra6,
                color: "#4096EE",
                highlight: "#4096EE",
                label: "KRA 6"
            },
            {
                value: kra7,
                color: "#FF0084",
                highlight: "#FF0084",
                label: "KRA 7"
            },
            {
                value: kra8,
                color: "#6BBA70",
                highlight: "#6BBA70",
                label: "KRA 8"
            }
        ];
        //draw the chart
        var buyers = document.getElementById('annual-kra-split-chart').getContext('2d');
        new Chart(buyers).Doughnut(annualKraData, annualOption);
    }

//when updating any of the annual kra percents check if total value does not exceed 100
//if yes show alert and revert changes

    $(".annual-percent").blur(function () {
        //get all values
        var kra1 = parseInt($("#input-kra1-chart").val());
        var kra2 = parseInt($("#input-kra2-chart").val());
        var kra3 = parseInt($("#input-kra3-chart").val());
        var kra4 = parseInt($("#input-kra4-chart").val());
        var kra5 = parseInt($("#input-kra5-chart").val());
        var kra6 = parseInt($("#input-kra6-chart").val());
        var kra7 = parseInt($("#input-kra7-chart").val());
        var kra8 = parseInt($("#input-kra8-chart").val());
        
        var sum;
        sum = kra1+kra2+kra3+kra4+kra5+kra6+kra7+kra8;
        
        if(sum < 100) //show message and hide submit button
        {
            var diff = 100-sum;
            $("#calculation-feedback").html('<div class="alert alert-info" role="alert"><strong>The percentage calcualtion does not add-up.</strong><br/>You have '+diff+'% left to spare. Please adjust your numbers</div>');
            $("#annual-wings-submit-button").hide();
        }
        else if(sum > 100)
        {
            var  diff = sum-100;
            $("#calculation-feedback").html('<div class="alert alert-info" role="alert"><strong>The percentage calcualtion does not add-up.</strong><br/>You are '+diff+'% over. Please adjust your numbers</div>');
            $("#annual-wings-submit-button").hide();
        }
        else
        {
           $("#calculation-feedback").html('');
           $("#annual-wings-submit-button").show();
        }
    });

//things to do when document is ready
$(document).ready(function(){
  
  // draw the annual WINGS KRA percentage split chart if chart canvas detected
  if($('#annual-kra-split-chart').length !== 0)
  {
      drawDohoughtChartAnnualWINGS();
  }
        
  
  
});
</script>
</body>
</html>
<?php
/* * *  UNCOMMENT BELOW LINE TO ENABLE DEBUGGING ** */
//$this->output->enable_profiler(TRUE);
?>
