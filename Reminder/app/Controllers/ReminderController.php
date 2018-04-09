<?php

namespace App\Controllers;

use App\Models\Reminder;
use App\Controllers\Controller;
use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

class ReminderController extends Controller
{
    public function index(Request $request, Response $response, $args)
    {
        $reminders = Reminder::latest()->get();

        return $this->c->view->render($response, 'reminders/index.twig', [
          'reminders' => $reminders
        ]);
    }
}
