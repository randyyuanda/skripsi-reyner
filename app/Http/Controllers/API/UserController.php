<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PDO;

class UserController extends Controller
{
  public function deleteUser($id)
  {
    $user = User::find($id)->delete();
    return response()->json($user);
  }
}
