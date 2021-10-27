<?php

namespace App\Responses;

use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class WorkerRegisterResponse implements RegisterResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        return $request->wantsJson()
            ? new JsonResponse('', 201)
            : redirect()->intended('worker/dashboard'); 
            // ログイン後に遷移させたいリダイレクト先を指定
    }
}