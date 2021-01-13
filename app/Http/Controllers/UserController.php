<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return "<h1>Listagem do usuário com o código 1</h1>";
    }

    public function getData() {
        return "<h1>Disparou a ação de GET</h1>";
    }

    public function postData() {
        return "<h1>Disparou a ação de POST</h1>";
    }
}
