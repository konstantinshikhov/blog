<?php

namespace App\Http\Controllers;

use App\Services\ImageUploader;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.users.index',compact('user'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @param ImageUploader $imageUploader
     * @return void
     */
    public function update(Request $request, User $user, ImageUploader $imageUploader)
    {

        $input = $request->all();
        $input['custom_info'] = $request->list ?? null;
        if ($request->file('avatar')) {
            $input['avatar'] = $imageUploader->upload($request->file('avatar'));
        }else{
            unset($input['avatar']);
        }

        $user->update($input);

        return redirect()->route('users.index')->with('completed', 'Сотрудник обновлен');
    }

}
