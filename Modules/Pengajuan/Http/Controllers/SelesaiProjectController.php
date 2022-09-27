<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\Role;
use Modules\Project\Entities\Project;
use Illuminate\Contracts\Support\Renderable;

class SelesaiProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('pengajuan::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('pengajuan::create');
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

        if ($role->divisi_id==3 && $role->jabatan_id==4) {
            return view('pengajuan::PengajuanProjek.projek_selesai.manager', [
                'role' => $role->role_id,
                'projects' => Project::all(),
            ]);}
    
            if ($role->divisi_id==3 && $role->jabatan_id==3) {
                return view('pengajuan::PengajuanProjek.projek_selesai.dirop', [
                    'role' => $role->role_id,
                    'projects' => Project::all(),
                ]);}
                if ($role->divisi_id==1 && $role->jabatan_id==4) {
                    return view('pengajuan::PengajuanProjek.projek_selesai.mankeu', [
                        'role' => $role->role_id,
                        'projects' => Project::all(),
                    ]);}
                    if ($role->divisi_id==4 && $role->jabatan_id==2) {
                        return view('pengajuan::PengajuanProjek.projek_selesai.dirkeu', [
                            'role' => $role->role_id,
                            'projects' => Project::all(),
                        ]);}
                        if ($role->divisi_id==4 && $role->jabatan_id==1) {
                            return view('pengajuan::PengajuanProjek.projek_selesai.dirut', [
                                'role' => $role->role_id,
                                'projects' => Project::all(),
                            ]);}
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
