<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('pages.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'nullable|numeric|digits_between:0,20',
            'unit' => 'nullable|max:255'
        ]);
        $user->update($request->only(['name', 'unit', 'phone']));

        return redirect()->back()->with([
            'level' => 'success',
            'message' => 'Berhasil disimpan'
        ]);
    }

    public function password(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'new_password' => 'required|min:6',
            'new_password_confirm' => 'same:new_password'
        ]);
        $user->update([
            'password' => \Hash::make($request->new_password)
        ]);

        return redirect()->back()->with([
            'level' => 'success',
            'message' => 'Berhasil disimpan'
        ]);
    }

    public function photo(Request $request)
    {

        // Get the image from the request
        $image = $request->file('image');

        if ($image->getMimeType() != 'image/png' && $image->getMimeType() != 'image/jpeg') {
            return redirect()->back()->with([
                'modal' => '#ubah-foto-modal',
                'error' => 'Foto tidak valid'
            ]);
        }
        
        // Generate a unique filename
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();

        // Store the image using the Intervention/Image library
        $path = public_path('uploads/' . $filename);
        $img = \Image::make($image->getRealPath());
        $size = $img->height() < $img->width() ? $img->height() : $img->width();
        $img->crop($size, $size)->resize(300, 300)->save($path);

        $user = auth()->user();
        if($user->image && file_exists(public_path($user->image))) {
            unlink(public_path($user->image));
        }
        $user->update([
            'image' => 'uploads/'.$filename
        ]);

        // Return a response to the user
        return redirect()->back()->with('success', 'Foto berhasil diupload.');
    }
}
