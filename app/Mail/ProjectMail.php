<?php

namespace App\Mail;

use App\Models\Industry;
use App\Models\Nomination;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProjectMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $industry = Industry::select('name')->where('id', $this->request['industry_id'])->first();
        $nomination = Nomination::select('name')->where('id', $this->request['nomination_id'])->first();

        $type = $this->request->has('is_organization') && $this->request['is_organization']
            ? 'ПРОФ.ОРГАНИЗАЦИЯ'
            : 'ЧЛЕН ГИЛЬДИИ';

        $message = $this->subject('Новая заявка ' . $type)
            ->view('mail.new_project', [
                'industry' => $industry,
                'nomination' => $nomination,
            ]);

        $presentation = $this->request->file('presentation');
        if ($presentation) {
            $message->attach(
                $presentation->getRealPath(),
                array(
                    'as' => $presentation->getClientOriginalName(),
                    'mime' => $presentation->getMimeType()
                )
            );
        }

        return $message;
    }
}
