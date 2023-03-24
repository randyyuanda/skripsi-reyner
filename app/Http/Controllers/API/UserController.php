<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PDO;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
  public function deleteUser($id)
  {
    $user = User::find($id)->delete();
    return response()->json($user);
  }

  public function changePassword(Request $request, $id)
  {
    $request->validate([
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
    $user = User::where('id', $id)->first();
    $user->password = Hash::make($request->get('password'));
    $user->save();
    return response()->json($user);
  }
}
