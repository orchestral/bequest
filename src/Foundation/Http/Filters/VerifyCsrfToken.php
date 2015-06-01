<?php namespace Orchestra\Foundation\Http\Filters;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Session\TokenMismatchException;
use Symfony\Component\Security\Core\Util\StringUtils;

class VerifyCsrfToken
{
    /**
     * The encrypter implementation.
     *
     * @var \Illuminate\Contracts\Encryption\Encrypter
     */
    protected $encrypter;

    /**
     * Create a new filter instance.
     *
     * @param  \Illuminate\Contracts\Encryption\Encrypter  $encrypter
     */
    public function __construct(Encrypter $encrypter)
    {
        $this->encrypter = $encrypter;
    }

    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @param  \Illuminate\Http\Request  $request
     *
     * @return mixed
     *
     * @throws \Illuminate\Session\TokenMismatchException
     */
    public function filter(Route $route, Request $request)
    {
        if (! $this->tokensMatch($request)) {
            throw new TokenMismatchException();
        }
    }

    /**
     * Determine if the session and input CSRF tokens match.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return bool
     */
    protected function tokensMatch($request)
    {
        $token = $request->input('_token') ?: $request->header('X-CSRF-TOKEN');

        if (! $token && $header = $request->header('X-XSRF-TOKEN')) {
            $token = $this->encrypter->decrypt($header);
        }

        return StringUtils::equals($request->session()->token(), $token);
    }
}
