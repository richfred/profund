
<div id="background">
    <div id="main_bg">
        <div class="row-fluid bg">
            <div class="span12 main_content_bg">
                <div class="row dashboard" style="margin-left: 50px;">
                   
                    <div class="span12" id="user_menu2">
                       
                        
<div class='row-fluid'>
    <div class='span11' style="margin-left: 40px;">

        <h3>Operating Expenses Contract </h3>
        <table class='table table-bordered table-striped' id="programme_table3">
            <thead>
                <tr>
                    <th>Contract Title</th>
                    <th>Contract Code</th>
                    <th>Sub_component Code</th>                   
                    <th>Activity Type</th>
                    <th>Status</th>
                 
                    
                </tr>
            </thead>
            <tbody>
         
 
                <tr>
                    <td><?php echo $contract_details['contract_title']; ?></td>
                    <td><?php echo $contract_details['contract_code']; ?></td>
                    <td><?php echo $contract_details['sub_component_code']; ?></td>
                    <td><?php echo $contract_details['activity_type'] ?></td>                
                    <td><?php echo $contract_details['status'] ?></td> 
               
                </tr>
             
            </tbody>
        </table>
        
        <?php $this->session->set_userdata('contract_title', $contract_details['contract_title']);
              $this->session->set_userdata('contract_code', $contract_details['contract_code']); ?>
        
          <h3>Contract details </h3>
        <table class='table table-bordered table-striped' id="programme_table3">
            <thead>
                <tr>

                    <th>Date of agreement</th>
                    <th>Date of commencement</th>
                    <th>Date of completion</th>
                    <th>Payment terms</th>
                    
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contract_type_details as $contract_td): ?>
 
                <tr>
                    <td><?php echo $contract_td['date_of_agreement']; ?></td>
                    <td><?php echo $contract_td['date_of_commencement']; ?></td>
                    <td><?php echo $contract_td['date_of_completion']; ?></td>
                    <td><?php echo $contract_td['payment_terms']; ?></td>
   
                    <!--<td><a href="/PROFUND/index.php/contracts/show/<?php  ?>">View</a> | <a href='#'>Edit</a> | <a href="components/delete/<?php  ?>">Delete</a></td>-->
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
       
    </div>
    
    
</div>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>