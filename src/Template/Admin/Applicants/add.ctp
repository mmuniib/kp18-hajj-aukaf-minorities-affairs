<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Applicant $applicant
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Applicants
                </h2>
            </div>
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add Applicants</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href='<?= $this->request->webroot . 'admin/Applicants'; ?>'>View Applicants</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="body">
                            <?= $this->Form->create($applicant, ['type' => 'file']) ?>
                                
                               
                            
                                <div class="form-group form-float">
                                    <div class="form-line">
                                       <?php echo $this->Form->text('Applicants.name',['class'=>'form-control']);?>
                                       <label class="form-label">Applicants Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                       <?php echo $this->Form->text('Applicants.father_or_husband_name',['class'=>'form-control']);?>
                                        <label class="form-label">Father Name OR Husband Name</label>
                                    </div>
                                </div>
                               <div class="form-group form-float">
                                   
                                    <div class="form-line">
                                        <?php echo $this->Form->control('Applicants.religion_id', ['empty' => 'Select Religion', 'options' => $religions,'class'=>'form-control show-tick','label'=>false]);?>
                                       
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                       <?php echo $this->Form->text('Applicants.cnic',['class'=>'form-control']);?>
                                        <label class="form-label">CNIC</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <div class="form-line">
                                       <?php echo $this->Form->text('Applicantaddresses.current_address',['class'=>'form-control','label'=>false]);?>
                                        <label class="form-label">Current Address</label>
                                    </div>
                                  
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <?php echo $this->Form->text('Applicantaddresses.permenent_address',['class'=>'form-control','label'=>false]);?>
                                        <label class="form-label">Permanent Address</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <?php echo $this->Form->text('Applicantaddresses.city',['class'=>'form-control','label'=>false]);?>
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>
                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <?php echo $this->Form->text('Applicantaddresses.postal_address',['class'=>'form-control','label'=>false]);?>
                                        <label class="form-label">Postal Code</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <?php echo $this->Form->text('Applicantaddresses.zip_code',['class'=>'form-control','label'=>false]);?>
                                        <label class="form-label">Zip Code</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <?php echo $this->Form->text('Applicantcontacts.mob_number',['class'=>'form-control','label'=>false]);?>
                                        <label class="form-label">Mobile Number</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <?php echo $this->Form->text('Applicantcontacts.tel_number',['class'=>'form-control','label'=>false]);?>
                                        <label class="form-label">Telephone Number</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <?php echo $this->Form->text('Applicantincomes.monthly_income',['class'=>'form-control','label'=>false]);?>
                                        <label class="form-label">Monthly Income</label>
                                    </div>
                                </div>
                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <?php echo $this->Form->text('Applicantprofessions.profession',['class'=>'form-control','label'=>false]);?>
                                        <label class="form-label">Profession</label>
                                    </div>
                                </div>
                            
                                <div class="form-group form-float">
                                    <div class="form">
                                        <label class="form-label">Attachment</label>
                                      <?php echo $this->Form->control('ApplicantAttachments.attachments[]', ['class'=>'form-control','secure' => false, 'type' => 'file', 'multiple' => true,'label'=>false]);?>
                                        
                                    </div>
                                </div>
                              
                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <?php echo $this->Form->text('ApplicantHouseholdDetails.dependent_family_members',['class'=>'form-control','label'=>false]);?>
                                        <label class="form-label">Number of family members</label>
                                    </div>
                                </div>
                            
                            
                                
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
           
            
        </div>
</section>
    



