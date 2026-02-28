<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class TaskCompletedMail extends Mailable
{
    public function build()
    {
        return $this->subject('Task Completed ')
                    ->view('emails.task_completed');
    }
}