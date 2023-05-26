<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Enquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $name_txt;
    public $phone_txt;
    public $email_txt;
    public $division_select;
    public $company_txt;
    public $product_check;
    public $sub_prod_check;
    public $comment_question_txt;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name_txt, $phone_txt, $email_txt, $division_select, $company_txt, $product_check, $sub_prod_check, $comment_question_txt)
    {
        $this->name_txt = $name_txt;
        $this->phone_txt = $phone_txt;
        $this->email_txt = $email_txt;
        $this->division_select = $division_select;
        $this->company_txt = $company_txt;
        $this->product_check = $product_check;
        $this->sub_prod_check = $sub_prod_check;
        $this->comment_question_txt = $comment_question_txt;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.enquiry')->subject('Enquiry Form : ' . $this->product_check);
    }
}
