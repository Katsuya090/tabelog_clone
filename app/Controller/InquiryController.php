<?php

class InquiryController extends AppController {
    public $uses = ['House'];
    public function index($houseId) {
      // $this->set('inquiries');
      // var_dump($houseId);

      if ($this->request->is('post')){
        $this->Inquiry->create();

        if ($this->Inquiry->save($this->request->data)) {
          $this->Flash->success('お問い合わせしました。');
          return $this->redirect(['action' => 'thanks']);
        }

      }
    }

    public function thanks() {

    }

    public function check() {
      $this->set('inquiries', $this->Inquiry->find('all'));
    }
}



















