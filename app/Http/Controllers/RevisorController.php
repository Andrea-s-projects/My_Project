<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;


class RevisorController extends Controller
{
    public function index()
    {
        $announcements_to_check = Announcement::where('is_accepted', null)->paginate(3);
        $rejected_announcements = Announcement::where('is_accepted', false)->paginate(3);

        // commento
        $comments_to_check = Comment::where('status', null)->paginate(5); 


        return view('revisor.index', compact('announcements_to_check', 'rejected_announcements', 'comments_to_check'));
        // commento
    }


    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
    }

    public function removeAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(null);
        foreach($announcement->comments as $comment ){
            $comment->delete();
        }
        return redirect()->back()->with('message', 'Hai rimosso l\'annuncio');
    }

    public function recheckAnnouncement(Announcement $announcement)
    {
        // Imposta lo stato dell'annuncio come non accettato
        $announcement->setAccepted(null);

        return redirect()->back()->with('message', 'L\'annuncio è stato riportato in revisione');
    }

    public function becomeRevisor()
    {
        return view('work-with-us.work-with-us');
    }

    public function sendRevisor(Request $request)
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $request->get('description')));
        return redirect()->back()->with('message', 'Complimenti! Hai richiesto di diventare revisore');
    }

    public function MakeRevisor(User $user)
    {
        $user->is_revisor = true;
        $user->save();

        return redirect('/')->with('message', 'Complimenti! L\'utente è diventato un revisore');
    }
}
