<div style="width: 100%; height: 80px;">
  <span style="float: left;"><h2><?= $house['House']['name']; ?></h2></span>

</div>

<div id="house">
  <span>物件情報</span>
  <table>
    <tbody>
      <tr>

            <td colspan="4">
              <?=  $this->House->photoImage($house,['style' => 'width:300px']); ?>
            </td>
      </tr>

      <tr>
        <td style="width: 25%;">建物名</td>
        <td style="width: 25%;"><?= $house['House']['name'];?></td>
        <td style="width: 25%">住所</td>
        <td style="width: 25%"><?= $house['House']['addr'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%;">交通</td>
        <td style="width: 25%;"><?= $house['House']['traffic'] ;?></td>
        <td style="width: 25%;">構造</td>
        <td style="width: 25%;"><?= $house['House']['construction'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%;">築年月</td>
        <td style="width: 25%;"><?= $house['House']['year'] ;?></td>
        <td style="width: 25%;">総階数</td>
        <td style="width: 25%;"><?= $house['House']['floor'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%;">総戸数</td>
        <td style="width: 25%;"><?= $house['House']['room'] ;?></td>
        <td style="width: 25%;">家賃</td>
        <td style="width: 25%;"><?= $house['House']['price'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%;">管理費</td>
        <td style="width: 25%;"><?= $house['House']['manegedprice'] ;?></td>
        <td style="width: 25%;">保険</td>
        <td style="width: 25%;"><?= $house['House']['insurance'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%;">保証会社</td>
        <td style="width: 25%;"><?= $house['House']['company'] ;?></td>
        <td style="width: 25%;">面積</td>
        <td style="width: 25%;"><?= $house['House']['area'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%;">間取り</td>
        <td style="width: 25%;"><?= $house['House']['floorplan'] ;?></td>
        <td style="width: 25%;">敷金</td>
        <td style="width: 25%;"><?= $house['House']['deposit'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%;">礼金</td>
        <td style="width: 25%;"><?= $house['House']['keymoney'] ;?></td>
        <td style="width: 25%;">特徴</td>
        <td style="width: 25%;"><?= $house['House']['features'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%;">設備</td>
        <td style="width: 25%;"><?= $house['House']['accommodation'] ;?></td>
        <td style="width: 25%;">備考</td>
        <td style="width: 25%;"><?= $house['House']['note'] ;?></td>
      </tr>
    </tbody>
  </table>


  <?= $this->Html->link(
                            'お問い合わせ',
                            ['controller' => 'inquiry', 'action' => 'index', $house['House']['id']]
                        ); ?>
</div>