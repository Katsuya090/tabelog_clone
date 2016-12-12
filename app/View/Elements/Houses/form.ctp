
    <?= $this->Form->create('House'); ?>
    <?= $this->Form->input('name', ['label' => '店名']); ?>
    <?= $this->Form->input('addr', ['label' => '住所']); ?>
    <?= $this->Form->input('year', ['label' => '年数']); ?>
    <?php if (!empty($this->request->data)) : ?>
    <?= $this->Form->hidden('id'); ?>
    <?php endif; ?>
    <?= $this->Form->end('登録する'); ?>
