<?php

namespace DCAS\Traits;

use Exception;
use Log;

/**
 * Trait LogHttpError
 *
 * @package DCAS\Traits
 */
trait LogHttpError
{

    /**
     * @param            $request
     * @param            $errorCode
     * @param \Exception $exception
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    private function outputHttpError($request, $errorCode, Exception $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => $exception->getMessage()], $errorCode);
        }

        $this->logHttpError($errorCode, $exception);

        session()->flash('warning', $exception->getMessage());

        return redirect()->route('home');
    }

    /**
     * @param            $errorCode
     * @param \Exception $exception
     */
    private function logHttpError($errorCode, Exception $exception)
    {
        Log::channel('http_exceptions')->warning('[error ' . $errorCode . '] "' . $exception->getMessage() . '" on line ' . $exception->getTrace()[0]['line'] . ' of file ' . $this->securedFileName($exception));
    }

    /**
     * @param \Exception $exception
     *
     * @return null|string|string[]
     */
    private function securedFileName(Exception $exception)
    {
        return preg_replace('/vendor\/laravel\/framework\/src/', '**LARAVEL_FRAMEWORK_SRC_DIR**', preg_replace('/\/home\/[a-z0-9]+/', '~', $exception->getTrace()[0]['file']));
    }
}
