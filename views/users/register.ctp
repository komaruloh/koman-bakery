<?php
    echo $session->flash('auth');
    echo $this->Form->create('User', array('action' => 'register'));
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->input('password_confirm', array('type' => 'password'));
    echo $this->Form->end('Register');
?>
