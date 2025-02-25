<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandelController extends Controller
{
    function store(Request $request)
    {
        $item = [
            'ten-phong' => $request->get('ten-phong'),
            'mo-ta' => $request->get('mo-ta'),
            'gia' => $request->get('gia'),
        ];

        if ($request->hasFile('hinh-anh')) {
            $file = $request->file('hinh-anh');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/assets/uploads', $fileName);
            $item['hinh-anh'] = 'storage/assets/uploads/' . $fileName;
        }
        $list = session()->get('list', []);
        $list[] = $item;

        session()->put('list', $list);
        return redirect()->back()->with('success', 'Dữ liệu đã được lưu vào session.');
    }

    function shows()
    {
        $list = session()->get('list', []);
        return view('home', compact('list'));
    }
}
