<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class verifyInfoProducts
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if ($request->method() == "GET" or $request->method() == "DELETE") {
            return $next($request);
        }

        if ($request->method() == "POST" OR $request->method() == "PUT" ) {

            $this->validateNotElementsHTML($request);

            if (
                $request->input('nombre') != "" and
                $request->input('descripcion') != "" and
                $request->input('precio_unidad') != ""
            ) {

                return $next($request);
            } else {

                $request->session()->flash('incorrectData', 'Ningun campo puede quedar vacio ');
                return redirect()->back()->withInput();
            }




            return $next($request);
        }
    }



    public function validateNotElementsHTML(&$request)
    {
        $request->merge([
            'nombre' => strip_tags($request->input('nombre')),
            'descripcion' => strip_tags($request->input('descripcion')),
            'precio_unidad' => strip_tags($request->input('precio_unidad')),
        ]);
    }
}
