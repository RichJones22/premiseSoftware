<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\CorrespondenceEmail;
use App\Mail\ReplyConfirmReceiptEmail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;

/**
 * Class ContactUsEmailController.
 */
class ContactUsEmailController extends Controller
{
    /** @var CorrespondenceEmail */
    private $correspondenceEmail;
    /**
     * @var ReplyConfirmReceiptEmail
     */
    private $confirmReceiptEmail;
    /**
     * @var Mailer
     */
    private $mailer;

    /**
     * ContactUsEmailController constructor.
     *
     * @param ReplyConfirmReceiptEmail $confirmReceiptEmail
     * @param CorrespondenceEmail      $correspondenceEmail
     * @param Mailer                   $mailer
     */
    public function __construct(
        ReplyConfirmReceiptEmail $confirmReceiptEmail,
        CorrespondenceEmail $correspondenceEmail,
        Mailer $mailer
    ) {
        $this->setReplyConfirmReceiptEmail($confirmReceiptEmail);
        $this->setCorrespondenceEmail($correspondenceEmail);
        $this->setMailer($mailer);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contactUsEmail(Request $request)
    {
        // send reply to user
        $this->sendReplyEmail($request);

        // forward email to me.
        $this->sendEmailToMe($request);

        return redirect()->back();
    }

    /**
     * @param Request $request
     */
    protected function sendEmailToMe(Request $request)
    {
        $email = $this->buildCorrespondenceEmail($request);

        // send/queue the email
        $this->getMailer()
            ->to('jones_rich@yahoo.com') // send to jones_rich@yahoo.com
            ->queue($email);
    }

    /**
     * @param Request $request
     */
    protected function sendReplyEmail(Request $request): void
    {
        $email = $this->buildReplyConfirmReceiptEmail();

        // send/queue the email
        $this->getMailer()
            ->to($request->get('email'))
            ->queue($email);
    }

    /**
     * @return ReplyConfirmReceiptEmail
     */
    protected function buildReplyConfirmReceiptEmail(): ReplyConfirmReceiptEmail
    {
        $email = $this->getReplyConfirmReceiptEmail();
        $email->setFromEmailAddress(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $email->subject('Thanks for reaching out');

        return $email;
    }

    /**
     * @param Request $request
     *
     * @return CorrespondenceEmail
     */
    protected function buildCorrespondenceEmail(Request $request)
    {
        $email = $this->getCorrespondenceEmail();
        $email->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));

        $body = "From: '".$request->get('email')."'\n\n".$request->get('message');
        $email->setBody($body);

        $email->subject('Premise Software Correspondence');

        return $email;
    }

    /**
     * @return CorrespondenceEmail
     */
    private function getCorrespondenceEmail(): CorrespondenceEmail
    {
        return $this->correspondenceEmail;
    }

    /**
     * @param CorrespondenceEmail $correspondenceEmail
     *
     * @return ContactUsEmailController
     */
    private function setCorrespondenceEmail(CorrespondenceEmail $correspondenceEmail): ContactUsEmailController
    {
        $this->correspondenceEmail = $correspondenceEmail;

        return $this;
    }

    /**
     * @return ReplyConfirmReceiptEmail
     */
    private function getReplyConfirmReceiptEmail(): ReplyConfirmReceiptEmail
    {
        return $this->confirmReceiptEmail;
    }

    /**
     * @param ReplyConfirmReceiptEmail $confirmReceiptEmail
     *
     * @return ContactUsEmailController
     */
    private function setReplyConfirmReceiptEmail(ReplyConfirmReceiptEmail $confirmReceiptEmail): ContactUsEmailController
    {
        $this->confirmReceiptEmail = $confirmReceiptEmail;

        return $this;
    }

    /**
     * @return Mailer
     */
    private function getMailer(): Mailer
    {
        return $this->mailer;
    }

    /**
     * @param Mailer $mailer
     *
     * @return ContactUsEmailController
     */
    private function setMailer(Mailer $mailer): ContactUsEmailController
    {
        $this->mailer = $mailer;

        return $this;
    }
}
