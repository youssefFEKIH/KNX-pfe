<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class reponse extends Mailable
{
    use Queueable, SerializesModels;

    public $detail;

    /**
     * Create a new messages instance.
     *
     * @return void
     */
    public function __construct($detail)
    {
      return $this->detail =$detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Réponse à vos questions')->view('Admin.reponse'); 
        
    }
}
