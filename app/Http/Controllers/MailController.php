<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail($email_adress)
    {
        $details = [
            'title' => 'Mail from Larpcons',
            'body' => "Moin liebe Teilnehmer*in, \r\n
Dankeschön, dass Sie sich für 'Zeitalter des Handels 3' angemeldet haben.<br>
Hier folgend sehen Sie die Kosten der Con und das Konto auf welches das Geld in den folgenden 14 Tagen überwiesen werden soll. \n
Die Kosten belaufen sich in der ersten Staffel, bis zum 31.03., für SCs auf 50€ und für NSCs auf 20€ und in der zweiten Staffel, bis zum 30.04., für SCs auf 55€ und für NSCs auf 20€.\n
Die letzte Staffel geht bis zum 05.08. und beläuft sich für SCs auf 60€ und für NSCs auf 25€.\n
\n
Konto:\n
Erik Kömpe\n
DE29 2105 0170 1003 4617 28\n
BIC: NOLADE21KIE\n
\n
Wir freuen uns auf euch\n
Die Rusalka Orga"
        ];

        Mail::to($email_adress)->send(new Testmail($details));
        return "Email sent";
    }
}
