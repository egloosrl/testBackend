<?php

class User {
  function __construct($data) {
    $this->data = $data;
    $this->errors = [];
  }

  static function find($username) {
    // ...ricerca utente
  }

  function save() {
    // ...salvataggio utente
  }

  function register() {
    // ...validazione dati

    if (empty($this->errors)) {
      $user = User::find($this->data['username']);

      if ($user) {
        if ($user->username == $this->data['username']) $this->errors['username'] = 'Username già in uso';
        if ($user->email == $this->data['email']) $this->errors['email'] = 'Email già in uso';

        throw new Exception('Utente già registrato', 400);
      }

      // ...registrazione utente
      $this->data->password = password_hash($this->data->password, PASSWORD_DEFAULT);

      $this->data->id = $this->save();
      $this->data->loyalty = new Loyalty($this->data);

      return $this->data;
    }

    throw new Exception('Dati non validi', 400);
  }
}
