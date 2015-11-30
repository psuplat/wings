<h3>Active</h3>
<?php
    if(isset($active['no_data']))
    {
        echo '<h4>Empty folder</h4>';
    }
    else
    {
        echo '<div class="row">';
        echo '<div class="col-md-2"><button id="btn-active-trash" type="button" class="btn btn-block btn-default btn-sm" data-container="body" data-toggle="popover" data-placement="bottom" data-content="You need to select at least one item"><i class="fa fa-trash"></i> Move to trash</button></div>';
        echo '<div class="col-md-2"><button id="btn-active-details" type="button" class="btn btn-block btn-default btn-sm"><i class="fa fa-eye"></i> View details</button></div>';
        echo '<div class="col-md-2"><button id="btn-active-action" type="button" class="btn btn-block btn-default btn-sm"><i class="fa fa-cogs"></i> Take action</button></div>';
        echo '<div class="col-md-6" id="button-responses"></div>';
        echo '</div>';
        echo '<br/><table id="inbox-active-table" class="table table-stripped table-condensed table-hover tablesorter">'; 
        echo '<thead><tr><td></td><th>WINGS type <i class="fa fa-sort"></i></th><th>Submitted on <i class="fa fa-sort"></i></th><th>Last Modified <i class="fa fa-sort"></i></th><th>Status <i class="fa fa-sort"></i></th><th>Stage <i class="fa fa-sort"></i></th></tr></thead>'; 
        echo '<tbody>';
        foreach($active as $row)
        {
            $submited_timestamp = explode(' ',$row->dCreated);
            $submited_time = substr($submited_timestamp[1], 0, -4);
            $submited_date = explode('-', $submited_timestamp[0]);
            $submited_date = $submited_date[2].'/'.$submited_date[1].'/'.$submited_date[0];
            $submited = $submited_date.' '.$submited_time;
            
            if(strlen($row->dModified) > 0)
            {
                $modified_timestamp = explode(' ',$row->dModified);
                $modified_time = substr($modified_timestamp[1], 0, -4);
                $modified_date = explode('-', $modified_timestamp[0]);
                $modified_date = $modified_date[2].'/'.$modified_date[1].'/'.$modified_date[0];
                $modified = $submited_date.' '.$modified_time;
            }
            else
            {
                $modified = '';
            }
            
            echo '<tr>';
            echo '<td><input type="checkbox" id="'.$row->iID.'" value="'.$row->iID.'" class="tick-inbox-active"></td>';
            echo '<td>'.$row->c50TypeLabel.'</td>';
            echo '<td>'.$submited.'</td>';
            echo '<td>'.$modified.'</td>';
            echo '<td>'.$row->c50StatusLabel.'</td>';
            echo '<td>'.$row->c50StageLabel.'</td>';
            echo '<tr>';
        }
        echo '</tbody>';
        echo '</table>';
        
    }
?>
