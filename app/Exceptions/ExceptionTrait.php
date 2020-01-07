<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKarnel\Exception\NotFoundHttpException;

trait ExceptionTrait
{

    public function apiException($request, $e)
    {


          if($e instanceof ModelNotFoundException){
              return response()->json([ 'errors' => 'product Model not found'],Response::HTTP_NOT_FOUND);

          }

          if($e instanceof NotFoundHttpException){
                return response()->json([ 'errors' => 'Incorrect Route'],Response::HTTP_NOT_FOUND);

          }

    //  return response()->json([ 'errors' => 'product Model not found'],Response::HTTP_NOT_FOUND);

    //  return response('Model Not found',404);

    }
}
