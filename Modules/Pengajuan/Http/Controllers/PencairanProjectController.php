<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\Role;
use Modules\Project\Entities\Project;
use Illuminate\Contracts\Support\Renderable;

class PencairanProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    
        {
            $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
                
                return view('pengajuan::PengajuanProjek.pencairan.selesai', [
                'role' => $role->role_id,
                'projects'=> Project::all(),
             
                ]); 
        }
    

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
    
        return view('pengajuan::PengajuanProjek.pencairan.detailcair', [
        'role' => $role->role_id,
        'projects' => Project::all(),
        
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
    
        return view('pengajuan::PengajuanProjek.pencairan.masuk', [
        'role' => $role->role_id,
        'projects' => Project::all(),
        
        ]); 

    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('pengajuan::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
