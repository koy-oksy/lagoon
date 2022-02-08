<?php

namespace App\Controllers;

// сюда нужно вписать токен вашего бота
define('TELEGRAM_TOKEN', '2131782424:AAHHgRwvBNWh_Qr6IHGLqKFGTMSDEfemhA4');

// сюда нужно вписать ваш внутренний айдишник, свой айдишник в телеграмм
define('TELEGRAM_CHATID', '559455901');

// 559455901 - Ксюша
// 829335791 - Дима
// 360418950 - Артем

class Contact extends BaseController
{
    public function index()
    {
        $request = \Config\Services::request();
        $firstname = $request->getVar('firstname');
        $phone = $request->getVar('phone');

        $email = \Config\Services::email();

        $email->setFrom('your@example.com', 'Your Name'); // от кого письмо
        $email->setTo('someone@example.com'); // абонент
        $email->setCC('another@another-example.com'); // копия письма
        $email->setBCC('them@their-example.com'); // скрытая копию

        $email->setSubject('Запрос на консультацию');
        $message = 'Пользователь ' . $firstname . ' запрашивает консультацию по телефону ' . $phone;
        $email->setMessage($message);

        $email->send();

        $this->message_to_telegram($message);
        
    }

    function message_to_telegram($text)
    {
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_POSTFIELDS => array(
                    'chat_id' => TELEGRAM_CHATID,
                    'text' => $text,
                ),
            )
        );
        curl_exec($ch);
    }
}
