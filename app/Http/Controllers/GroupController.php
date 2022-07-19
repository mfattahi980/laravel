<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GroupController extends Controller
{
    /***************************************************
     * Function for add group ( name , description )
     ****************************************************/

    function allGroups(Request $request)
    {
        $groups = DB::table('groups')->get();
        return view("groups.index",["groups"=>$groups]);

    }
    /***************************************************
     * Function for add group ( name , description )
     ****************************************************/

    function showCreateForm(Request $request)
    {
        return view("groups.create");

    }

    /***************************************************
     * Function for add group ( name , description )
     ****************************************************/

    function createGroup(Request $request)
    {
//        DB::table('groups')->insert([
//            'name' => request('name'),
//            'description' => request('description'),
//        ]);


        Group::create([
            'name' => request('name'),
            'description' => request('description'),
        ]);

        return redirect("/groups");

    }

    /***************************************************
     * Function for delete a group
     ****************************************************/
    function deleteGroup($id)
    {

        $group= Group::findOrFail($id);
        $group->delete();
        return redirect("/groups");
//        return back();
    }
    /***************************************************
     * Function for modify Group , ( name , description )
     ****************************************************/
    function showEditForm($id, Request $request)
    {
        $group= Group::findOrFail($id);

        return view("groups.edit",["group"=>$group]);
    }
    /***************************************************
     * Function for modify Group , ( name , description )
     ****************************************************/
    function modifyGroup($id, Request $request)
    {
        $group= Group::findOrFail($id);

       // Group::where()->update
        $group->update([
            'name' => request('name'),
            'description' => request('description'),
        ]);

        return redirect("/groups");
    }
}
