<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleDeleat extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        foreach (glob(storage_path('texts').'/*') as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }

        return redirect('/sample/events');
    }
}
