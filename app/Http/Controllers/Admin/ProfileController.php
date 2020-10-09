<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

use App\ProfileHistories;

use Carbon\Carbon;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, ProfileHistories::$rules);
        
        $profile = new ProfileHistories;
        $form = $request->all();
        
        unset($form['_token']);
        
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/profile/create');
    }
    
    public function edit(Request $request)
    {
        $profile = ProfileHistories::find($request->id);
        if(empty($profile)){
            abort(404);
        }
        return view('admin.profile.edit', ['profile_form' => $profile]);
    }
    
    public function update()
    {
        $profilehistories = new ProfileHistories;
        $profilehistories->profile_id = $profile->id;
        $profilehistories->edited_at = Carbon::now();
        $profilehistories->save();
        
        return redirect('admin/profile/edit');
    }
}
