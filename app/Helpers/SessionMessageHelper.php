<?php

namespace App\Helpers;

class SessionMessageHelper {

    public static function success($request, $status = null, $msg = null) {

        return $request->session()->flash('success_' . $status, 'Event was successfully ' . $msg);

    }

    public static function failed($request, $status = null, $msg = null) {

        return $request->session()->flash('failed_' . $status, 'Event was unsuccessfully ' . $msg);

    }

}