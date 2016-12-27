<h2>物件一覧</h2>

<table>
    <tbody style="border: solid 1px #000">
    <?php foreach ($houses as $house) : ?>
        <tr>
            <td style="width: 10%">
                <?= $this->Html->link(
                    $this->House->photoImage($house, ['style' => 'width: 100%']),
                    ['action' => 'view', $house['House']['id']],
                    ['escape' => false]
                    ); ?>
            </td>
            <td style="width: 80%">
            <?= $this->Html->link(
                $house['House']['name'],
                ['action' => 'view', $house['House']['id']]
            );?>
            </td>
            <td style="width: 5%">
                <?= $this->Html->link(
                    '編集',
                    ['action' => 'edit', $house['House']['id']]
                    ); ?>
            </td>
            <td style="width: 5%">
                <?= $this->Form->postLink(
                    '削除',
                    ['action' => 'delete', $house['House']['id']],
                    ['confirm' => '本当に削除してよろしいですか？']
                ); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<div style="text-align: center ">
    <?= $this->Paginator->prev('< 前へ'); ?>&nbsp;
    <?= $this->Paginator->numbers(); ?>&nbsp;
    <?= $this->Paginator->next('次へ >'); ?>

</div>
