<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NotifyController extends Controller
{
    public function telegram(Request $request)
    {
        $token = '1148786597:AAGQEX0ckV17fkooU1SethzeNlXeT9Dz37E';

        if ($token) {
            if ($request->text) {
                if (mb_strlen($request->text, 'utf-8') > 4000) {
                    $text_arr = str_split($request->text, 4000);
                    foreach ($text_arr as $text) {
                        Http::post('https://api.telegram.org/bot' . $token . '/sendMessage', [
                            'parse_mode' => 'html',
                            'chat_id' => -1001407047653,
                            'text' => '<b>' . config('app.name') . '</b>' . "\n" . $text
                        ]);
                    }
                } else {
                    Http::post('https://api.telegram.org/bot' . $token . '/sendMessage', [
                        'parse_mode' => 'html',
                        'chat_id' => -1001407047653,
                        'text' => '<b>' . config('app.name') . '</b>' . "\n" . $request->text
                    ]);
                }
            }
        }

        return ['success' => true];
    }
}
