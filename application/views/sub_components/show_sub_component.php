
<div id="background">
    <div id="main_bg">
        <div class="row-fluid bg">
            <div class="span12 main_content_bg">
                <div class="row dashboard" style="margin-left: 50px;">
                   
                    <div class="span12" id="user_menu2">
                       
                        
<div class='row-fluid'>
    <div class='span11' style="margin-left: 40px;">

        
        <h3>Sub-component details </h3>
       
      
        <table class='table table-bordered table-striped' id="programme_table3">
            <thead>
                <tr>
                    <th>Sub-component Title</th>
                    <th>Component Code</th>
                    <th>Donor cost</th>
                    <th>Local cost</th>                 
                    
                </tr>
            </thead>
            <tbody>
 
               
                <tr>
                    <td><?php echo $sub_component_details['sub_component_title']; ?></td>
                    <td><?php echo $sub_component_details['component_code']; ?></td>
                    <td><?php echo $sub_component_details['donor_cost'] ?></td>                
                    <td><?php echo $sub_component_details['local_cost'] ?></td> 
                   
                </tr>
     
            </tbody>
        </table>
        
        <?php $this->session->set_userdata('sub_component_title', $sub_component_details['sub_component_title']);
              $this->session->set_userdata('sub_component_code', $sub_component_details['sub_component_code']); ?>
        
        
        
        <h3>Contracts </h3>
        <table class='table table-bordered table-striped' id="programme_table3">
            <thead>
                <tr>
                    <th>Contract Title</th>
                    <th>Sub_component Code</th>
                    <th>Activity Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contract_list as $contract_item): ?>
 
                <tr>
                    <td><?php echo $contract_item['contract_title']; ?></td>
                    <td><?php echo $contract_item['sub_component_code']; ?></td>
                    <td><?php echo $contract_item['activity_type'] ?></td>                
                    <td><?php echo $contract_item['status'] ?></td> 
                    <td><a href="<?php echo base_url();?>index.php/contracts/show/<?php echo $contract_item['contract_code']  ?>">View</a> | <a href='#'>Edit</a> | <a href="components/delete/<?php  ?>">Delete</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
          <ul class="nav nav-pills">
                         
                                <li class="active">
                                    <a href="<?php echo base_url();?>index.php/contracts/create/<?php echo 'new';   ?>" style="margin-left: 40px;">Create new contract</a> 

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