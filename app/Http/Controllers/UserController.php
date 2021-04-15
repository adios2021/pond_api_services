<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /** @var App\Services\UserService */
    protected $userService;

    /**
     * UserController constructor.
     *
     * @param App\Services\UserService $userService
     */
    public function __construct(UserService $userService)
    {
        parent::__construct();

        $this->userService = $userService;
    }

    /**
     * Retrieves the List of Users
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserRequest $request)
    {
        //
    }

    /**
     * Creates a new user.
     *
     * @param App\Http\Requests\CreateUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateUserRequest $request)
    {
        // $request->validated();

        // try {
        //     $formData = [
        //         'actor_id' => $request->getActorId(),
        //         'first_name' => $request->getFirstName(),
        //         'last_name' => $request->getLastName(),
        //         'email' => $request->getEmail(),
        //         'password' => $request->getPassword(),
        //     ];
        //     $user = $this->userService->create($formData);
        //     $this->response['data'] = new UserResource($user);
        // } catch (Exception $e) { // @codeCoverageIgnoreStart
        //     $this->response = [
        //         'error' => $e->getMessage(),
        //         'code' => 500,
        //     ];
        // } // @codeCoverageIgnoreEnd

        // return response()->json($this->response, $this->response['code']);
    }

    public function login(Request $request)
    {
        // try {
        //     $user = $this->userService->attemptLogin($request->all());
        //     $user['user'] = new UserResource($this->userService->getUser($request->email));
        //     $this->response['data'] = $user;
        // } catch (Exception $e) {
        //     $error = [];
        //     $error['error'] = $e->getMessage();
        //     if (isset($e->errorType)) {
        //         $error['errorType'] = $e->errorType ? $e->errorType : null;
        //     }
        //     $error['code'] = 500;

        //     $this->response = $error;
        // }

        // return response()->json($this->response, $this->response['code']);
    }

    public function register(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken]);
    }

}
