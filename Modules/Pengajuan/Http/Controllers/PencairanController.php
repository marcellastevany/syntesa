<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\HistoriPengajuanBiasa;
use Modules\Pengajuan\Entities\LampiranPengajuanBiasa;
use Modules\Pengajuan\Entities\Pencairan;
use Modules\Pengajuan\Entities\PengajuanBiasa;
use Modules\Pengajuan\Entities\Role;

class PencairanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
            
            return view('pengajuan::PengajuanBiasa.pencairan.selesai', [
            'role' => $role->role_id,
            'pengajuanbiasas'=> PengajuanBiasa::all(),
         
            ]); 
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
    
        return view('pengajuan::PengajuanBiasa.pencairan.masuk', [
        'role' => $role->role_id,
        'pengajuanbiasas' => PengajuanBiasa::all(),
        
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
            $detail= PengajuanBiasa::find($id);
            $pengajuanlampiran = LampiranPengajuanBiasa::select()->where('pengajuan_biasa_id',  $detail->id)->get();
            $lampiran_cair = Pencairan::select()->where('pengajuan_biasa_id',  $detail->id)->get();
           
            
            if ($role->divisi_id==1 && $role->jabatan_id==7) {
            return view('pengajuan::PengajuanBiasa.pencairan.detail', compact('detail'), [
                'role' => $role->role_id,
                'details' => PengajuanBiasa::select()->where('id',$detail->pengajuan_biasa_id)->get(),
                'pengajuanlampirans' =>  $pengajuanlampiran,
                'lampiran_cairs' =>  $lampiran_cair,
            ]); }
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
