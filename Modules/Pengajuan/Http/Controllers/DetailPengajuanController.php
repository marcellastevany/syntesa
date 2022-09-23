<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\LampiranPengajuanBiasa;
use Modules\Pengajuan\Entities\Pencairan;
use Modules\Pengajuan\Entities\Role;
use Modules\Pengajuan\Entities\PengajuanBiasa;

class DetailPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        // return view('pengajuan::formp.detailPengajuan', [
        //     'role' => $role->role_id,
        // ]);
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
      
        foreach ($request->lampiran as $key => $value) {
            if ($value['lampiran']) {
                $lampiran = $value['lampiran']->store('lampiran-pengajuan_biasa');
            }
            // $lampiranpengajuanbiasa = $request->file('lampiran')->store('lampiran-pengajuan_biasa');
            LampiranPengajuanBiasa::create([
                'pengajuan_biasa_id' => $id,
                'note_lampiran' => $value['note_lampiran'],
                'lampiran' => $lampiran,
            ]);
    }}

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        $detail= PengajuanBiasa::find($id);
        $lampiran_cair = Pencairan::select()->where('pengajuan_biasa_id',  $detail->id)->get();
        $pengajuanlampiran = LampiranPengajuanBiasa::select()->where('pengajuan_biasa_id',  $detail->id)->get();
        return view('pengajuan::PengajuanBiasa.detail_pengajuan.index', compact('detail'), [
            'role' => $role->role_id,
            'details' => PengajuanBiasa::select()->where('id',$detail->pengajuan_biasa_id)->get(),
            'pengajuanlampirans' =>  $pengajuanlampiran,
           
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
       //
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
