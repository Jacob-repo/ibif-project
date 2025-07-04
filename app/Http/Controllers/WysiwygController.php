<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WysiwygContent;

class WysiwygController extends Controller
{
    public function index()
    {
        $content = WysiwygContent::latest()->first()?->content ?? '';
        return view('wysiwyg', compact('content'));
    }

    public function save(Request $request)
    {
        WysiwygContent::create([
            'content' => $request->input('content'),
        ]);

        return response()->json(['success' => true]);
    }
}

