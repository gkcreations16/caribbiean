<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {

        $botman = app('botman');
        $botman->hears('{message}', function ($botman, $message) {
            if ($message == 'hello') {
                $this->askName($botman);
            } elseif ($message == 'i have a query') {
                $this->askemail($botman);
            } elseif ($message == 'i have a question') {
                $this->question($botman);
            } else {
                $botman->reply("Say ! 'hello First ' for Query...");
            }
        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */

    public function askName($botman)
    {

        $botman->ask('Hello! What is your Name?', function (Answer $answer) {
            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }
    public function askemail($botman)
    {

        $botman->ask('Enter your Email?', function (Answer $answer) {
            $name = $answer->getText();

            $this->say('How Can i Help You ! ');
        });
    }
    public function question($botman)
    {

        $botman->ask('What Kind of information are you Looking for ?', function (Answer $answer) {
            $name = $answer->getText();

            $this->say('our technical support team fix your query shortly!! ');
        });
    }
}
