<?php

namespace Packages\Idanieldrew\SendSms\src;

use Illuminate\Support\Facades\Http;

class SendSms
{
    // ghasedak sms
    public function Send($lines,$to)
    {
        $ss = Http::withHeaders([
            'apikey' => config('sms.apikey')
        ])->asForm()->post('https://api.ghasedak.me/v2/sms/send/simple',[
            'message' =>$lines[0],
            'receptor' =>$to,
            'linenumber' => config('sms.linenumber')
        ]);

        return $ss->json();
    }
}