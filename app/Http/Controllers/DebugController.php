<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DebugController extends Controller
{
    public function isException($text)
    {
        $exceptions = ['updateSlidesClasses', "Cannot read property 'test' of null", '_AutofillCallbackHandler'];

        $isException = false;

        foreach ($exceptions as $exception) {
            if (Str::contains($text, $exception)) {
                $isException = true;
                break;
            }
        }

        return $isException;
    }

    public function telegram(Request $request)
    {
        $token = '1148786597:AAGQEX0ckV17fkooU1SethzeNlXeT9Dz37E';

        if ($token) {
            if ($this->isException($request->text) == false) {
                if ($request->text) {
                    if (mb_strlen($request->text, 'utf-8') > 4000) {
                        $text_arr = str_split($request->text, 4000);
                        foreach ($text_arr as $text) {
                            Http::post('https://api.telegram.org/bot' . $token . '/sendMessage', [
                                'chat_id' => -1001627016366,
                                'text' => $text
                            ]);
                        }
                    } else {
                        Http::post('https://api.telegram.org/bot' . $token . '/sendMessage', [
                            'chat_id' => -1001627016366,
                            'text' => $request->text
                        ]);
                    }
                }
            }
        }

        return ['success' => true];
    }
}
