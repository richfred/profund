
<div id="background">
    <div id="main_bg">
        <div class="row-fluid bg">
            <div class="span12 main_content_bg">
                <div class="row dashboard" style="margin-left: 50px;">
                   
                    <div class="span12" id="user_menu2">
                        <div id="program_status">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="">Click on action item to select Program</a>
                                </li>
                            </ul>
                        </div>
                        
<div class='row-fluid'>
    <div class='span11' style="margin-left: 40px;">
        <h3>The list of programs </h3>
        <table class='table table-bordered table-striped' id="programme_table">
            <thead>
                <tr>
                    <th>Program Title</th>
                    <th>Program Code</th>
                    <!--<th>Objective</th>-->
                    <th>Program Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($programs as $programs_item): ?>
                <tr>
                    <td><?php echo $programs_item['program_title'] ?></td>
                    <td><?php echo $programs_item['program_code'] ?></td>
                    <!--<td><?php echo $programs_item['program_objective'] ?></td>-->                
                    <td><?php echo $programs_item['program_amount'] ?></td>
                    
                    <td><a href="<?php echo base_url();?>index.php/programs/show/<?php echo $programs_item['program_code'] ?>">View</a> | <a href='#'>Edit</a> | <a href="programs/delete/<?php echo $programs_item['program_title'] ?>">Delete</a></td>
                    <!--<a href="<?php echo base_url();?>index.php/view_program">-->
                </tr>
                
                <?php endforeach ?>
                
                
                
                    
            </tbody>
        </table>
    </div>
</div>
                        <!--<div id="req_footer">-->
<!--                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="btn btn-danger" data-toggle="modal" href="program_summary" style="margin-left: 30px;">
                                                <i class="icon-white icon-search"></i>&nbsp;Preview
                                            </a>
                                            <button class="btn btn-success">Next&nbsp;<i class="icon-arrow-right icon-white"></i></button>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>