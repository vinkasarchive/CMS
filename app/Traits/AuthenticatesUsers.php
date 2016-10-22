<?php

namespace App\Traits;

trait AuthenticatesUsers
{

  protected function getSeverUrl() {
    return url(config('auth.server_url'));
  }

  public function login() {
    $loginUrl = $this->getSeverUrl() . '/login';
    return redirect($loginUrl);
  }

  public function register() {
    $registerUrl = $this->getSeverUrl() . '/register';
    return redirect($registerUrl);
  }

  public function logout() {
    \Auth::logout();
    return redirect('/');
  }

}
