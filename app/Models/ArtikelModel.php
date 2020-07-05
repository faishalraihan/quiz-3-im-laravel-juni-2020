<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class ArtikelModel
{
        public static function get_all_artikel()
        {
                $artikel = DB::table('artikel')->get();
                return $artikel;
        }
        public static function create_artikel($data)
        {
                $new_artikel = DB::table('artikel')->insert($data);
                return $new_artikel;
        }
        public static function get_artikel($id)
        {
                $artikel = DB::table('artikel')->where("id", $id)->get();
                return $artikel;
        }
        public static function find_artikel($id)
        {
                $artikel = DB::table('artikel')->where("id", $id)->first();
                return $artikel;
        }
        public static function update_artikel($id, $data)
        {
                $artikel = DB::table('artikel')
                        ->where("id", $id)
                        ->update([
                                'judul' => $data['judul'],
                                'isi' => $data['isi'],
                                'slug' => $data['slug'],
                                'tag' => $data['tag'],
                                'updated_at' => $data['updated_at']
                        ]);
                return $artikel;
        }
        public static function delete_artikel($id)
        {
                $artikel = DB::table('artikel')
                        ->where("id", $id)
                        ->delete();
                return $artikel;
        }
}
