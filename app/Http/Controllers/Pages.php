<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function showSignUp() {
        return View('signUp');
    }

    public function showLogin() {
        return View('login');
    }

    public function showSubjects() {
        return View('subjects');
    }

    public function showSubjectPweb() {
        return View('subjectsPweb');
    }

    public function showForum() {
        return View('forum');
    }

    public function showForumQuestion() {
        return View('forumQuestion');
    }
}
