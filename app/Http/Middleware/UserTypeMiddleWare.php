<?php

namespace App\Http\Middleware;

use Closure;

class UserTypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$objectToAccess)
    {
        $usertype = $request->user()->userType->type;
        if($objectToAccess == 'usertype' || $objectToAccess == 'homeownermember' || $objectToAccess == 'settings'){
            if($usertype === 'Administrator' || $usertype === 'Tester')
                return $next($request);
        }elseif($objectToAccess == 'reports' || $objectToAccess == 'journal' 
                || $objectToAccess == 'asset' || $objectToAccess == 'accounttitle'
                || $objectToAccess == 'accountinformation' || $objectToAccess == 'vendor'
                || $objectToAccess == 'items') {
            if($usertype === 'Administrator' || $usertype === 'Accountant' || $usertype === 'Tester')
                return $next($request);
        }elseif($objectToAccess == 'receipts' || $objectToAccess == 'expense'
                || $objectToAccess == 'homeownerinfo') {
            if($usertype === 'Administrator' || $usertype === 'Accountant' || $usertype === 'Cashier' || $usertype === 'Tester')
                return $next($request);
        }elseif($objectToAccess == 'announcement' || $objectToAccess == 'map' || $objectToAccess == 'users'){
            if($usertype === 'Administrator' || $usertype === 'Guest' || $usertype === 'Tester' )
                return $next($request);
        }elseif($objectToAccess == 'invoice'){
            if($usertype === 'Administrator' || $usertype === 'Accountant' || $usertype === 'Cashier'|| $usertype === 'Guest' || $usertype === 'Tester')
                return $next($request);
        }elseif($objectToAccess == 'reservation'){
            if($usertype === 'Administrator' || $usertype === 'Accountant' || $usertype === 'Cashier' || $usertype === 'Guest' || $usertype === 'Tester')
                return $next($request);
        }

        return view('errors.404');
        
    }
}