<?php

namespace App\Http\Controllers;

use App\Models\Dashboard\Me;
use Illuminate\Http\Request;
use App\Models\Dashboard\Main;
use App\Models\Dashboard\Skill;
use App\Models\Dashboard\Contact;
use App\Models\Dashboard\Project;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function acceuil(){
        $main = Main::first();
        $me = Me::first();
        $project = Project::first();
        $skill = Skill::first();
        $contact = Contact::first();

        return view('accueil.index', compact('main','me','project', 'skill', 'contact'));
    }

    public function dashboard(){
        $user = Auth()->user();
        return view('dashboard.index', compact('user'));
    }
}

