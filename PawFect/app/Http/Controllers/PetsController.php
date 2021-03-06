<?php

namespace App\Http\Controllers;

use App\Models\SiteUsers;
use Illuminate\Http\Request;
use App\Models\SitePosts;

class PetsController extends Controller
{
    public function searchForPet(Request $request)
    {

        $PetName=$request->get('searchPetForUser');
        //$Pets = SitePosts::all();

        $Posts = SitePosts::where('PostName', 'LIKE',"$PetName%")->get();
        //print $UsersPosts;
        if($Posts == '[]')
        {
            return view('landing_notFound');
        }
        /*return URL::signedRoute('Admin.admin_static', ['searchTag' => $UsrName], [
            'UsersPosts' =>  $UsersPosts,
            'UsersPets' => $UsersPets
        ]);*/
        return view('landing', [
            //'UsersPosts' =>  $Pets,
            'PostPet' => $Posts
        ]);
    }
    public function showAllPets()
    {

        $pets = new SitePosts;

        return view("landing",['PostPet' => $pets->all()]);
    }


    public function showPostDetail($id)
    {
        $pets= SitePosts::find($id);
        $user = SiteUsers::find($pets->SiteUsers_id);


        return view("order-page",['PostDetails'=>$pets , 'user'=>$user->Username,'phone'=>$user->PhoneNumber]);
    }

    public function sortByCategory($category)
    {
        $pets= SitePosts::where('Type',$category)->get();
        return view("landing",['PostPet' => $pets]);


    }

}
