<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TbPartnerResearches;
use Illuminate\Support\Facades\Validator;

class TbPartnerResearchesController extends Controller
{
    public function index() {
        $tb_partner_researches = TbPartnerResearches::all();
        return view('pages.admin.partner_researches.index', ["data" => $tb_partner_researches]);
    }

    public function add() {
        return view('pages.admin.partner_researches.add');
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'company_name' => ['required'],
            'level' => ['required', 'in:Internasional,Nasional,Wilayah/Lokal'],
            'partner_type' => ['required'],
            'benefits' => ['required'],
            'duration_time' => ['required'],
            'partner_proven' => ['required'],
            'end_year' => ['required'],
            'link_drive' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Kesalahan saat mengisi data')->withInput()->withErrors($validator);
        }

        TbPartnerResearches::create($request->all());

        return redirect()->route('admin.partner_researches.index')->with('success', 'Berhasil menambah data');
    } 

    public function edit($id) {
        $tb_partner_researches = TbPartnerResearches::findOrFail(decode($id));
        return view('pages.admin.partner_researches.edit', ["tb_partner_researches" => $tb_partner_researches]);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'company_name' => ['required'],
            'level' => ['required', 'in:Internasional,Nasional,Wilayah/Lokal'],
            'partner_type' => ['required'],
            'benefits' => ['required'],
            'duration_time' => ['required'],
            'partner_proven' => ['required'],
            'end_year' => ['required'],
            'link_drive' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Kesalahan saat mengisi data')->withInput()->withErrors($validator);
        }

        $tb_partner_researches = TbPartnerResearches::findOrFail(decode($id));
        $tb_partner_researches->update($request->all());

        return redirect()->route('admin.partner_researches.index')->with('success', 'Berhasil mengubah data');
    }

    public function delete($id) {
        $tb_partner_researches = TbPartnerResearches::findOrFail(decode($id));
        $tb_partner_researches->delete();

        return redirect()->route('admin.partner_researches.index')->with('success', 'Berhasil menghapus data');
    }
}
