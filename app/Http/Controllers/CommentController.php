<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'required|image|mimes:png|max:10240', // กำหนดให้เป็นไฟล์ png และขนาดไม่เกิน 10MB
        ]);

        // เพิ่มการตรวจสอบเพิ่มเติมก่อนบันทึก
        if ($request->file('image')->extension() !== 'png') {
            return back()->withErrors(['image' => 'กรุณาอัปโหลดไฟล์ PNG เท่านั้น']);
        }

        if ($request->file('image')->getSize() > 10240) {
            return back()->withErrors(['image' => 'ขนาดไฟล์ต้องไม่เกิน 10 MB']);
        }

        $imagePath = $request->file('image')->store('public/comments');

        Comment::create([
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'ขอบคุณสำหรับความคิดเห็นของคุณ');
    }
}