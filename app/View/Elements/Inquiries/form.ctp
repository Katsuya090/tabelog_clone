<?= $this->Form->create('Inquiry'); ?>
<?= $this->Form->input('name', ['label' => 'お名前']); ?>
<?= $this->Form->input('email', ['label' => 'メールアドレス']); ?>
<?= $this->Form->input('tel', ['label' => '電話番号']); ?>
<?= $this->Form->input('kind', ['label' => 'ご希望の連絡方法']); ?>
<?= $this->Form->input('when', ['label' => '入居希望時期']); ?>
<?= $this->Form->input('note', ['label' => '備考欄', 'type' => 'textarea']); ?>
<?= $this->Form->end($submitLabel); ?>
