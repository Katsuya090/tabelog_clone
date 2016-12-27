<?php

class InquiryController extends AppController {

    public function index() {
      // $this->set('inquiries');

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



















