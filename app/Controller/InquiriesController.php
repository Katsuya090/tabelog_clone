<?php

class InquiriesController extends AppController {

    public function index() {
      $this->set('inquiries');

      if ($this->request->is('post')) {
        $this->Inquiry->create();

        if ($this->Inquiry->save($this->request->data)) {
          return $this->redirect(['action' => 'thanks']);
        }
      }

    }
}





















