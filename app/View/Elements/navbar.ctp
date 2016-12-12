<div id="navbar">
  <ul>
    <li><?= $this->Html->link('食べログクローン', '/'); ?></li>
    <li>
    <?= $this->Html->link(
      'レストラン一覧',
      ['controller' => 'shops', 'action' => 'index']
    );?>
    </li>
    <li>
    <?= $this->Html->link(
      '物件一覧',
      ['controller' => 'houses', 'action' => 'index']
    );?>
    </li>
  </ul>
</div>