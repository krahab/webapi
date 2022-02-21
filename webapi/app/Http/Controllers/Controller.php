<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
    * @OA\Info(
        * version="1.0.0",
        * title="ProjectDocumentation",
        * description="Description of my api",
        * @OA\License(
            * name="Apache 2.0",
            * url="http://www.apache.org/licenses/LICENSE-2.0.html"
        * )
    * )
    *
    * @OA\Server(
        * url="http://localhost:8000/",
        * description="Serveur local"
    * ),
    * @OA\SecurityScheme(
        * type="http",
        * in="header",
        * scheme="bearer",
        * securityScheme="bearerAuth",
        * name="Token in Authorization header",
        * description="/api/login and set the token in the box",
    * ),
    * @OA\SecurityScheme(
        * type="oauth2",
        * securityScheme="Oauth2Password",
        * name="Password Based",
        * scheme="bearer",
        * description="Utilisez client_id / client_secret et votre courriel / mot de passe pour obtenir un jeton d'authentification.",
        * in="header",
        * @OA\Flow(
            * flow="password",
            * authorizationUrl="/oauth/authorize",
            * tokenUrl="/oauth/token",
            * refreshUrl="/oauth/token/refresh",
            * scopes={}
        * )
    * ),
*/
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
