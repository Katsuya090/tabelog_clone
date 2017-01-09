<?php

class HomeController extends AppController {

  public function index(){
      $this->set('homes', $this->Home->find('all'));

  }
}

