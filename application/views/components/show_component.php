
<div id="background">
    <div id="main_bg">
        <div class="row-fluid bg">
            <div class="span12 main_content_bg">
                <div class="row dashboard" style="margin-left: 50px;">
                   
                    <div class="span12" id="user_menu2">
                       
                        
<div class='row-fluid'>
    <div class='span11' style="margin-left: 40px;">

        
        <h3>Component details </h3> 

       
        
        <table class='table table-bordered table-striped' id="programme_table3">
            <thead>
                <tr>
                    <th>Component Title</th>
                    <th>Component Code</th>
                    <th>Implementing Agency</th>
                    <th>Component Amount</th>
                    
                    
                </tr>
            </thead>
            <tbody>
 
                <tr>
                    <td><?php echo $component_details['component_title']; ?></td>
                    <td><?php echo $component_details['component_code']; ?></td>
                    <td><?php echo $component_details['implementing_agency'];
                          $this->session->set_userdata('implementing_agency', $component_details['implementing_agency']);
                
                    ?></td>                
                    <td><?php echo $component_details['component_amount'];
                    $this->session->set_userdata('component_amount', $component_details['component_amount']);
//                    $this->session->set_userdata('unallocatedr', '0');
                          
                    
                    ?></td> 
                </tr>
      
            </tbody>
            
        </table>
        
        
            <?php $this->session->set_userdata('component_title', $component_details['component_title']);
              $this->session->set_userdata('component_code', $component_details['component_code']); ?>
        
        <?php
                if ($component_funds != null){ ?>
        <h4>Component funds </h4>
        
        <table class='table table-bordered table-striped' id="programme_table3">
            <thead>
                <tr>

                    <th>Donor</th>
                    <th>Year(years)</th>
                    <th>Amount</th>
                    
                </tr>
            </thead>
            <tbody>
                
                 <?php foreach ($component_funds as $component_f): ?>
 
                <tr>
                    <td><?php echo $component_f['fund_donor']; ?></td>
                    <td><?php echo $component_f['fund_years']; ?></td>
                    <td><?php echo $component_f['fund_amount'] ?></td>                
                    <!--<td><a href="/PROFUND/index.php/sub_components/show/<?php echo $sub_component_item['sub_component_code']  ?>">View</a> | <a href='#'>Edit</a> | <a href="components/delete/<?php  ?>">Delete</a></td>-->
                </tr>
                <?php endforeach ?>
                
                <?php } ?>
            </tbody>
        </table>
        <ul class="nav nav-pills">
                         
                                <li class="active">
                                    <a href="<?php echo base_url();?>index.php/funds/allocate/<?php echo 'new';  ?>" style="margin-left: 40px;">Allocate fund</a> 

                                </li>
                            </ul>
        <hr/>
        
        <h3>Program sub-components </h3>
        
        <table class='table table-bordered table-striped' id="programme_table3">
            <thead>
                <tr>
                    <th>Sub-component Title</th>
                    <th>Sub-component Code</th>
               
                    <th>Sub-component Amount</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($component_sub_components as $sub_component_item): ?>
 
                <tr>
                    <td><?php echo $sub_component_item['sub_component_title']; ?></td>
                    <td><?php echo $sub_component_item['sub_component_code']; ?></td>
                    <td><?php 
                    
                         echo   $total_amount = $sub_component_item['donor_cost'] + $sub_component_item['local_cost'];
                    
                    ?></td>                
 
                    <td><a href="<?php echo base_url();?>index.php/sub_components/show/<?php echo $sub_component_item['sub_component_code']  ?>">View</a> | <a href='#'>Edit</a> | <a href="components/delete/<?php  ?>">Delete</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="<?php echo base_url();?>index.php/sub_components/create/<?php echo 'new';  ?>" style="margin-left: 40px;">Create a new sub-component</a> 
        
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