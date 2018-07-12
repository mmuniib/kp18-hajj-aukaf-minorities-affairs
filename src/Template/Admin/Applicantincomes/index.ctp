<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Applicantincome[]|\Cake\Collection\CollectionInterface $applicantincomes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Applicantincome'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="applicantincomes index large-9 medium-8 columns content">
    <h3><?= __('Applicantincomes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('applicant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monthly_income') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applicantincomes as $applicantincome): ?>
            <tr>
                <td><?= $this->Number->format($applicantincome->id) ?></td>
                <td><?= $applicantincome->has('applicant') ? $this->Html->link($applicantincome->applicant->name, ['controller' => 'Applicants', 'action' => 'view', $applicantincome->applicant->id]) : '' ?></td>
                <td><?= h($applicantincome->monthly_income) ?></td>
                <td><?= h($applicantincome->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $applicantincome->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $applicantincome->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $applicantincome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicantincome->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
