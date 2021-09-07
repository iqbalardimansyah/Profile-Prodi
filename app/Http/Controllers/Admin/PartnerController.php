<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    public function index() {
        $partners = Partner::all();
        return view('pages.admin.partner.index', ["data" => $partners]);
    }

    public function add() {
        return view('pages.admin.partner.add');
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

        Partner::create($request->all());

        return redirect()->route('admin.partner.index')->with('success', 'Berhasil menambah data');
    } 

    public function edit($id) {
        $partner = Partner::findOrFail(decode($id));
        return view('pages.admin.partner.edit', ["partner" => $partner]);
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

        $partner = Partner::findOrFail(decode($id));
        $partner->update($request->all());

        return redirect()->route('admin.partner.index')->with('success', 'Berhasil mengubah data');
    }

    public function delete($id) {
        $partner = Partner::findOrFail(decode($id));
        $partner->delete();

        return redirect()->route('admin.partner.index')->with('success', 'Berhasil menghapus data');
    }
}
