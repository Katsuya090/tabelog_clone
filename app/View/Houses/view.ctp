<div style="width: 100%; height: 80%;">
  <span style="float: left;"><h2><?= $house['House']['name']; ?></h2></span>

</div>

<div>
  <span>物件情報</span>
  <table>
    <tbody>
      <tr>
        <td style="width: 25%;">建物名</td>
        <td style="width: 75%;"><?= $house['House']['name'];?></td>
      </tr>
      <tr>
        <td>住所</td>
        <td><?= $house['House']['addr'] ;?></td>
      </tr>
      <tr>
        <td>交通</td>
        <td><?= $house['House']['traffic'] ;?></td>
      </tr>
      <tr>
        <td>構造</td>
        <td><?= $house['House']['construction'] ;?></td>
      </tr>
      <tr>
        <td>築年月</td>
        <td><?= $house['House']['year'] ;?></td>
      </tr>
      <tr>
        <td>総階数</td>
        <td><?= $house['House']['floor'] ;?></td>
      </tr>
      <tr>
        <td>総戸数</td>
        <td><?= $house['House']['room'] ;?></td>
      </tr>
      <tr>
        <td>家賃</td>
        <td><?= $house['House']['price'] ;?></td>
      </tr>
      <tr>
        <td>管理費</td>
        <td><?= $house['House']['manegedprice'] ;?></td>
      </tr>
      <tr>
        <td>保険</td>
        <td><?= $house['House']['insurance'] ;?></td>
      </tr>
      <tr>
        <td>保証会社</td>
        <td><?= $house['House']['company'] ;?></td>
      </tr>
      <tr>
        <td>面積</td>
        <td><?= $house['House']['area'] ;?></td>
      </tr>
      <tr>
        <td>間取り</td>
        <td><?= $house['House']['floorplan'] ;?></td>
      </tr>
      <tr>
        <td>敷金</td>
        <td><?= $house['House']['deposit'] ;?></td>
      </tr>
      <tr>
        <td>礼金</td>
        <td><?= $house['House']['keymoney'] ;?></td>
      </tr>
      <tr>
        <td>特徴</td>
        <td><?= $house['House']['features'] ;?></td>
      </tr>
      <tr>
        <td>設備</td>
        <td><?= $house['House']['accommodation'] ;?></td>
      </tr>
      <tr>
        <td>備考</td>
        <td><?= $house['House']['note'] ;?></td>
      </tr>
    </tbody>
  </table>

</div>