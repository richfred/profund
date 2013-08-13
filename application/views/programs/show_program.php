<div id="background">
    <div id="main_bg">
        <div class="row-fluid bg">
            <div class="span12 main_content_bg">
                <div class="row dashboard" style="margin-left: 50px;">
                   
                    <div class="span12" id="user_menu2">
                        
                        
<div class='row-fluid'>
    <h3 style="margin-left: 40px;">Program details </h3>
    <div class='span11' style="margin-left: 0px;">
        
      
        
                    <table style="margin-left: 40px; border:1px solid grey;" class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Program Title: </td>
                                <td><h4><?php echo $program_details['program_title']; ?></h4></td>
                            </tr>
                            <tr>
                                <td>Program Code: </td>
                                <td><h4><?php echo $program_details['program_code']; ?></h4></td>
                            </tr>
                            <tr>
                                <td>Commencement Date: </td>
                                <td><h4><?php echo $program_details['program_amount'] ?></h4></td>
                            </tr>
                            <tr>
                                <td>Start Date: </td>
                                <td><h4><?php echo $program_details['start_date'] ?></h4></td>
                            </tr>

                            <tr>
                                <td>End Date: </td>
                                <td><h4><?php echo $program_details['end_date'] ?></h4></td>
                            </tr>

                            <tr>
                                <td>Currency: </td>
                                <td><h4>US Dollars</h4></td>
                            </tr>
                            <tr>
                                <td>Program Amount </td>
                                <td><h4><?php echo $program_details['program_amount'] ?></h4></td>
                            </tr>
                            <tr>
                                <td>Program Objective: </td>
                                <td><h4><?php echo $program_details['program_objective'] ?></h4></td>
                            </tr>
                        </tbody>
                    </table>

       
        
        
        
        <h3 style="margin-left: 40px;">Program components </h3>
        <table class='table table-bordered table-striped' id="programme_table3"   style="margin-left: 40px;">
            
            <thead>
                <tr>
                    <th>Program Title</th>
                    <th>Component Code</th>
                    <th>Implementing Agency</th>
                    <th>Program Amount</th>
                    
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
               <?php foreach ($program_components as $programs_comp): ?>
                <tr>
                    <td><?php echo $programs_comp['component_title']; ?></td>
                    <td><?php echo $programs_comp['component_code']; ?></td>
                    <td><?php echo $programs_comp['implementing_agency'] ?></td>                
                    <td><?php echo $programs_comp['component_amount'] ?></td> 
                    <td><a href="<?php echo base_url();?>index.php/components/show/<?php echo $programs_comp['component_code']  ?>">View</a> | <a href='#'>Edit</a> | <a href="components/delete/<?php  ?>">Delete</a></td>
                </tr>
               <?php endforeach ?>
                
                    
            </tbody>
        </table>
        
        <?php $this->session->set_userdata('program_title', $program_details['program_title']);
              $this->session->set_userdata('program_code',$program_details['program_code']);
              $this->session->set_userdata('program_amount',$program_details['program_amount']); ?>

        <div id="program_status" style=" width:1000px;">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="<?php echo base_url();?>index.php/components/create/<?php echo 'new';  ?>" style="margin-left: 40px;">Create a new component</a> 
        
                                </li>
                            </ul>
                        </div>
       
    </div>
    
    
</div>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>