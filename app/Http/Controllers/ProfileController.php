<?php


namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {

        if($request->id!==null)
        {
            $id = $request->id;
            $profile = Profile::find($id);       
            if($profile !== null)
            {
                return view('profile.index',['profile'=>$profile]);
            }
            else
            {
                $profiles = Profile::all();
                return view('profile.list',['profiles'=>$profiles]);
            }
        } 
        else
        {
            $profiles = Profile::all();
            return view('profile.list',['profiles'=>$profiles]);
        }
    }

    public function add(Request $request)
    {
          return view('profile.add');
    }
    public function create(Request $request)
    {
        $this->validate($request,Profile::$rules);
        $profile = new Profile();
        $form = $request->all();
        unset($form['_token']);
        $profile->fill($form);

        $img_url = $request->pic->storeAs('public/upload', 'testup' . '.jpg');
        $profile->mainphoto = str_replace('public/', 'storage/', $img_url);

        $profile->save();
        return redirect()->route('profile.index');   
    }
    public function edite(Request $request)
    {
          return view('profile.edit');
    }
    public function update(Request $request)
    {
        $this->validate($request,Profile::$rules);
        $profile = Profile::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $profile->fill($form);
        $img_url = $request->pic->storeAs('public/upload', 'testup' . '.jpg');
        $profile->mainphoto = str_replace('public/', 'storage/', $img_url);
        $profile->save();
        return redirect()->route('profile.index');   
    }
    public function delete(Request $request)
    {   
        if($request->id!==null)
        {
            $id = $request->id;
            $profile = Profile::find($id);       
            if($profile !== null)
            {
                return view('profile.del',['profile'=>$profile]);
            }   
        } 
        return redirect()->route('profile.index');   
    }
    public function remove(Request $request)
    {
        Profile::find($request->id)->delete();
        return redirect()->route('profile.index');   
    }
}
