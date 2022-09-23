<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\Role;
use Modules\Project\Entities\Project;
use Illuminate\Contracts\Support\Renderable;
use Modules\Pengajuan\Entities\PengajuanProjek;
use Modules\Pengajuan\Entities\HistoriPengajuanProjek;


class PengajuanProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        return view('pengajuan::PengajuanProjek.projek_masuk.manager', [
            'role' => $role->role_id,
            'projects' => Project::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        return view('pengajuan::PengajuanProjek.lihat_pengajuan.index', [
            'role' => $role->role_id,
            'pengajuanprojeks' => PengajuanProjek::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {

        $hitung = PengajuanProjek::select()->get()->count();
        $id = $hitung + 1;

        PengajuanProjek::create([

            'keterangan' => $request->keterangan,
            'no_projek' => $request->no_projek,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'divisi' => $request->divisi,
            'catatan' => $request->catatan,
            'user_id' => auth::user()->id,


        ]);

        HistoriPengajuanProjek::create([
            'pengajuan_projek_id' => $id,
            'user_id' => auth::user()->id,
            'status' => 5,
            'catatan' => $request->catatan,
        ]);

        return redirect('/pengajuan/pengajuanProjek/lihat_pengajuan/index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('pengajuan::show');
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
