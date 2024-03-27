<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function createAnnouncement(?Category $category = null)
    {
        if (!auth()->check()) {
            return redirect('/')->with('access.denied', 'Attenzione! Solo gli utenti loggati hanno accesso a questa page, Puoi creare un annuncio accedendo o registrandoti.');
        }

        if ($category)return view('announcements.create', ['category'=>$category->id]);

        return view('announcements.create', compact('category'));
    }

    public function showAnnouncement(Announcement $announcement)
    {
        if (!auth()->check()) {
            return redirect('/')->with('access.denied', 'Attenzione! Solo gli utenti loggati hanno accesso a questa page, Puoi visualizzare gli annunci accedendo o registrandoti.');
        }

        return view('announcements.show', compact('announcement'));
    }

    public function indexAnnouncement()
    {
        $announcements = Announcement::where('is_accepted', true)->paginate(6); 

        // $announcements = Announcement::paginate(6);

        return view('announcements.index', compact('announcements'));
    }
}

// 16:01
