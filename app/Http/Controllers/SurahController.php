<?php

namespace App\Http\Controllers;

use App\Models\Surah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SurahController extends Controller
{
    // عرض جميع السور
    public function index()
    {
        // جلب السور مع Pagination
        $surahs = Surah::paginate(10); // 10 سور لكل صفحة
        // التحقق من صلاحية المستخدم
        $isAdmin = Auth::check() && Auth::user()->email === 'admin@mail.com';

        return view('surahs.index', compact('surahs', 'isAdmin'));
    }
    // عرض نموذج إنشاء سورة جديدة
    public function create()
    {
        return view('surahs.create');
    }
    // حفظ السورة الجديدة في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:surahs,name',
        ]);
    
        Surah::create([
            'name' => $request->name,
        ]);
    
        return redirect()->route('surahs.index')->with('success', 'تمت إضافة السورة بنجاح!');
    }
    // public function show(Surah $surah)
    // {
    //     return view('surahs.show', compact('surah'));
    // }
    public function destroy($id)
    {
        // التحقق من وجود السورة
        $surah = Surah::find($id);

        if (!$surah) {
            return redirect()->route('surahs.index')->with('error', 'السورة غير موجودة.');
        }

        // التحقق من صلاحية المستخدم
        if (!Auth::check() || Auth::user()->email !== 'admin@mail.com') {
            return redirect()->route('surahs.index')->with('error', 'غير مصرح لك بحذف السورة.');
        }

        // حذف السورة
        $surah->delete();

        return redirect()->route('surahs.index')->with('success', 'تم حذف السورة بنجاح.');
    }

}
