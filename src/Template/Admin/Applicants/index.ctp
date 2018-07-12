<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                     Applicants
                    
                </h2>
            </div>
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?= __('View Applicant') ?>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href='<?= $this->request->webroot . 'admin/Applicants/add'; ?>'>Add Applicants</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                            
                                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('father_or_husband_name') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('religion_id') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('cnic') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('groom_or_bride_name') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                                         
                                    </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           
                                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('father_or_husband_name') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('religion_id') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('cnic') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('groom_or_bride_name') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                        
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($applicants as $applicant): 
                                           // debug($applicant['applicantcontacts'][0][id]);
                                            ?>
                                        <tr>
                                            <td><?= $this->Number->format($applicant->id) ?></td>
                                            <td><?= h($applicant->name) ?></td>
                                            <td><?= h($applicant->father_or_husband_name) ?></td>
                                            <td><?= $applicant->has('religion') ? $this->Html->link($applicant->religion->id, ['controller' => 'Religions', 'action' => 'view', $applicant->religion->id]) : '' ?></td>
                                            <td><?= h($applicant->cnic) ?></td>
                                            <td><?= h($applicant->groom_or_bride_name) ?></td>
                                            <td><?= h($applicant->created) ?></td>
                                            <td><?= h($applicant->modified) ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), ['action' => 'view', $applicant->id],array('escape' => false)) ?>
                                                <?= $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), ['action' => 'edit', $applicant->id],array('escape' => false)) ?>
                                                <?= $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), ['action' => 'delete', $applicant->id],array('escape' => false), ['confirm' => __('Are you sure you want to delete # {0}?', $applicant->id)]) ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>