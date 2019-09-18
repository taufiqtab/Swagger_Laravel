<?php
namespace App\Http\Controllers;
use http\Env\Response;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="/greet",
     *     tags={"greeting"},
     *     summary="WOI TESTING",
     *     description="asdasdasd",
     *     operationId="greet",
     *     @OA\Parameter(
     *          name="firstname",
     *          description="nama depan",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="lastname",
     *          description="nama belakang",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function greet(Request $request)
    {
        $userData = $request->only([
            'firstname',
            'lastname',
        ]);
        if (empty($userData['firstname']) && empty($userData['lastname'])) {
            return new \Exception('Missing data', 404);
        }
        return 'Halo ' . $userData['firstname'] . ' ' . $userData['lastname'];
    }

    /**
     * @OA\Get(
     *     path="/greet2",
     *     tags={"greeting"},
     *     summary="WOI TESTING 2",
     *     description="asdasdasd",
     *     operationId="greet",
     *     @OA\Parameter(
     *          name="firstname",
     *          description="nama depan",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="lastname",
     *          description="nama belakang",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function greet2(Request $request)
    {
        $userData = $request->only([
            'firstname',
            'lastname',
        ]);
        if (empty($userData['firstname']) && empty($userData['lastname'])) {
            return new \Exception('Missing data', 404);
        }
        return 'Halo ' . $userData['firstname'] . ' ' . $userData['lastname'];
    }
}