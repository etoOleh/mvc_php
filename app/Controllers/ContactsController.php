<?php

namespace App\Controllers;

use App\Application\Router\Redirect;
use App\Models\Report;

class ContactsController
{
    public function submit(array $data): void
    {
        //TODO Сделать валидацию
        $report = new Report();
        $report->setEmail($data['email']);
        $report->setSubject($data['subject']);
        $report->setMessage($data['message']);
        $report->store();
        Redirect::to('/contacts');
    }
}