<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
  public function authenticate(Request $request)
  {
      // grab credentials from the request
      \Validator::make($request->all(), [
        'cedula' => 'required|min:6|max:9|exists:Persona,cedula_Persona',
        'clave' => 'required|min:4'
      ])->validate();
      $persona = \App\Persona::where('cedula_Persona', $request->cedula)->first();
      $usuario = \App\Usuario::where('id_Persona_Usuario', $persona->id_Persona)->first();
      if (!empty($usuario)){
        $credentials = ['id_Usuario' => $usuario->id_Usuario, 'password' => $request->clave];
      }
      try {
          // attempt to verify the credentials and create a token for the user
          if (! $token = JWTAuth::attempt($credentials)) {
              return response()->json(['error' => 'invalid_credentials'], 401);
          }
      } catch (JWTException $e) {
          // something went wrong whilst attempting to encode the token
          return response()->json(['error' => 'could_not_create_token'], 500);
      }
      // all good so return the token
      return response(view('admin.index'))->cookie('token', $token);
      //return response()->json(compact('token'));
  }
  public function getAuthenticatedUser()  {
    try {
      if (! $usuario = JWTAuth::parseToken()->authenticate()) {
        return response()->json(['user_not_found'], 404);
      }
    }
    catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
      return response()->json(['token_expired'], $e->getStatusCode());
    }
    catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
      return response()->json(['token_invalid'], $e->getStatusCode());
    }
    catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
      return response()->json(['token_absent'], $e->getStatusCode());
    }
    // the token is valid and we have found the user via the sub claim
    return response()->json(compact('usuario'));
  }
  protected function login()  {
    return view('admin.auth.login');
  }
  public function logout()
  {
    $value = $request->bearerToken();
       $id= (new Parser())->parse($value)->getHeader('jti');

       $token=  DB::table('oauth_access_tokens')
           ->where('id', '=', $id)
           ->update(['revoked' => true]);

       $this->guard()->logout();

       $request->session()->flush();

       $request->session()->regenerate();

       $json = [
           'success' => true,
           'code' => 200,
           'message' => 'You are Logged out.',
       ];
       return response()->json($json, '200');
  }
}
