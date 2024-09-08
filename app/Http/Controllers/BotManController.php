<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}',function($botman,$message){

            if ($message == 'hello' || $message == 'hi' ) {
                $this->askName($botman);
                // $this->qu($botmam);
            }else{
                $botman->reply("write 'hi or hello' for testing...");
            }

        });

        $botman->listen();
    }

    public function askName($botman)
    {
        $botman->ask("Hello! What is Your Name?",function(Answer $answer){
            $name = $answer->getText();

            $this->say('Nice to meet you '.$name);

        });
       
    }
    public function qu($botman)
    {
        $botman->ask("What are you looking for?",function(Answer $answer){
            $name = $answer->getText();

            $this->say('Thanks for your Equery. We Reply you leter..');
        });
    }
}
