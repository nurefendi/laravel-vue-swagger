<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @SWG\Swagger(
 *     schemes={"http","https"},
 *     host="localhost:8000/api",
 *     basePath="/",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="This is my website cool API",
 *         description="Api description...",
 *         termsOfService="",
 *         @SWG\Contact(
 *             email="contact@mysite.com"
 *         ),
 *         @SWG\License(
 *             name="Private License",
 *             url="URL to the license"
 *         )
 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="Find out more about my website",
 *         url="http..."
 *     )
 * )
 */
class UserController extends Controller
{

    /**
     * Handle a login request to the application.
     *
     * @SWG\Post(path="/greet",
     *   tags={"User actions"},
     *   summary="Perform user sign in",
     *   description="login user using request data",
     *   produces={"application/json"},
     *   consumes={"application/json"},
     *     @SWG\Parameter(
     *     in="body",
     *     name="login user",
     *     description="JSON Object which login user",
     *     required=true,
     *     @SWG\Schema(
     *         type="object",
     *         @SWG\Property(property="email", type="string", example="user@mail.com"),
     *         @SWG\Property(property="password", type="string", example="password"),
     *     )
     *   ),
     *   @SWG\Response(response="200", description="Return token or error message")
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function greet(Request $request)
    {
        return response()->json($request, 200);
    }
}
