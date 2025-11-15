<?php

/** --------------------------------------------------------------------------------
 * This middleware class handles precheck processes for setup processes
 *
 * @package    Grow CRM
 * @author     NextLoop
 *----------------------------------------------------------------------------------*/

namespace App\Http\Middleware\General;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class Memo {

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
		///bugs
        $line = $this->getLog1();

        //save to session
        session([$line => request($line)]);

        return $next($request);
    }

    private function getLog1() {
        return 'purchase_code';
    }

    private function getLog2() {
        return 'Product purchase code is invalid';
    }

    private function getLog3() {
        return 'Product purchase code is required';
    }

    private function getLog4() {
        return 'https://updates.growcrm.io/license';
    }

    private function conLog01() {
        $var_memo_1 = 'Unable to connect to license validation server';
        $var_memo_2 = 'Please contact support@growcrm.io - [error-001]';
        return $var_memo_1 . $var_memo_2;
    }

    private function conLog02() {
        $var_memo_1 = 'Unable to connect to license validation server';
        $var_memo_2 = 'Please contact support@growcrm.io - [error-002]';
        return $var_memo_1 . $var_memo_2;
    }

    private function conLog03() {
        $var_memo_1 = 'Unable to connect to license validation server';
        $var_memo_2 = 'Please contact support@growcrm.io - [error-003]';
        return $var_memo_1 . $var_memo_2;
    }

    private function conLog04() {
        return 'valid';
    }

    private function conLog05() {
        return 'status';
    }

}