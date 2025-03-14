<?php

namespace App\Controllers;

use App\Application\Views\View;
use App\Exceptions\ViewNotFoundException;

class PagesController
{
    /**
     * @throws ViewNotFoundException
     */
    public function home(): void
    {
        View::show('pages/home', [
            'title' => 'Home page',
        ]);
    }

    /**
     * @throws ViewNotFoundException
     */
    public function about(): void
    {
        View::show('pages/about', [
            'title' => 'About page',
        ]);
    }

    /**
     * @throws ViewNotFoundException
     */
    public function contacts(): void
    {
        View::show('pages/contacts', [
            'title' => 'Contacts page',
        ]);
    }

    /**
     * @throws ViewNotFoundException
     */
    public function login(): void
    {
        View::show('pages/login', [
            'title' => 'Login',
        ]);
    }

    /**
     * @throws ViewNotFoundException
     */
    public function register(): void
    {
        View::show('pages/register', [
            'title' => 'Register',
        ]);
    }
}