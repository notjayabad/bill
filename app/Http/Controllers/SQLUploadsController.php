<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SQLUploadsController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'sql_file' => 'required|mimes:sql,zip|max:40000',
        ]);

        // Store the uploaded file
        $path = $request->file('sql_file')->storeAs('public/sql_uploads', 'uploaded_file.sql');

        // Get the file's contents
        $sql = Storage::get($path);

        // Execute the SQL file
        try {
            DB::unprepared($sql);
            return redirect()->back()->with('success', 'Database updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error executing SQL file: ' . $e->getMessage());
        }
    }
}
