<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div>
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?= __('Users') ?>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href='<?= $this->request->webroot . 'admin/Users/add'; ?>'>Add Users</a></li>
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
                                            <th scope="col"><?= $this->Paginator->sort('user_type') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('user_type') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                          <?php foreach ($users as $user): ?>
                                            <tr>
                                                <td><?= $this->Number->format($user->id) ?></td>
                                                <td><?= h($user->user_type) ?></td>
                                                <td><?= h($user->first_name) ?></td>
                                                <td><?= h($user->last_name) ?></td>
                                                <td><?= h($user->username) ?></td>
                                                <td><?= h($user->email) ?></td>
                                                <td><?= h($user->password) ?></td>
                                                <td><?= h($user->phone) ?></td>
                                                <td><?= h($user->city) ?></td>
                                                <td><?= h($user->state) ?></td>
                                                <td><?= h($user->zip) ?></td>
                                                <td><?= h($user->country) ?></td>
                                                <td class="actions">

                                                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                       
                                        
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>