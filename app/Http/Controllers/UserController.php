<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Sewakafe;
  
class UserController extends Controller
{
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewakafes = Sewakafe::get();
        return view('users',compact('sewakafes'));
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        $sewakafe = Sewakafe::find($request->sewakafe_id);
        $sewakafe->status = $request->status;
        $sewakafe->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
