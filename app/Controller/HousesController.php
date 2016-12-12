<?php

class HousesController extends AppController {

  public $components = [
      'Paginator' => [
        'Limit' => 10,
        'order' => ['created' => 'desc']
      ]
  ];


  public function index(){
    // $this->set('houses', $this->House->find('all'));
    $this->set('houses', $this->Paginator->paginate());

  }

  public function view($id = null){
    if (!$this->House->exists($id)) {
      throw new NotFoundException('物件が見つかりません。');
    }

    $this->set('house', $this->House->findById($id));
  }

  public function add() {
    if ($this->request->is('post')){
      $this->House->create();

      if ($this->House->save($this->request->data)) {
        $this->Flash->success('物件を登録しました。');
        return $this->redirect(['action' => 'index']);
      }
    }
  }

  public function edit($id = null) {
    if (!$this->House->exists($id)) {
      throw new NotFoundException('物件がみつかりません。');
    }

    if ($this->request->is(['post', 'put'])) {
      if ($this->House->save($this->request->data)) {
        $this->Flash->success('物件を更新しました。');
        return $this->redirect(['action' => 'index']);
      }
    } else {
        $this->request->data = $this->House->findById($id);
    }

  }

  public function delete($id = null) {
    if (!$this->House->exists($id)) {
      throw new NotFoundException('物件がみつかりません');
    }

    $this->request->allowMethod('post', 'delete');

    if ($this->House->delete($id)) {
    $this->Flash->success('物件を削除しました');
    } else {
        $this->Flash->error('物件を削除できませんでした');
    }

    return $this->redirect(['action' => 'index']);

  }
}





















