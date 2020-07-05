<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
        public function index()
        {
                $items = ArtikelModel::get_all_artikel();

                return view('content.index', compact('items'));
        }
        public function create()
        {
                return view('content.create');
        }
        public function store(Request $request)
        {
                $data = $request->all();
                unset($data['_token']);
                $data['slug'] = $this->get_slug($data['judul']);
                $item = ArtikelModel::create_artikel($data);

                if ($item) {
                        return redirect('/artikel');
                }
        }
        public function show($id)
        {
                $items = ArtikelModel::find_artikel($id);

                return view('content.show', compact('items'));
        }
        public function edit($id)
        {
                $items = ArtikelModel::find_artikel($id);
                return view('content.edit', compact('items'));
        }
        public function update($id, Request $request)
        {
                $data = $request->all();
                unset($data['_token']);
                $data['slug'] = $this->get_slug($data['judul']);
                $item = ArtikelModel::update_artikel($id, $data);

                if ($item) {

                        return redirect('/artikel');
                }
        }
        public function delete($id)
        {
                $item = ArtikelModel::delete_artikel($id);
                if ($item) {
                        return redirect('artikel');
                }
        }
        private function get_slug($str)
        {
                return preg_replace("/[^A-Za-z0-9]/", '-', strtolower($str));
        }
}
