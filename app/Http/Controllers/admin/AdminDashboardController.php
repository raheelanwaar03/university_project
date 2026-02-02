<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function pending()
    {
        $users = User::where('status', 'pending')->get();
        return view('admin.users.pending', compact('users'));
    }

    public function approve($id)
    {
        $user = User::where('id', $id)->first();
        $user->status = 'approved';
        $user->save();
        return redirect()->back()->with('success', 'Team has been approved');
    }

    public function approvedTeam()
    {
        $users = User::where('status', 'approved')->get();
        return view('admin.users.approved',compact('users'));
    }

    public function pendingTeam($id)
    {
        $user = User::where('id', $id)->first();
        $user->status = 'pending';
        $user->save();
        return redirect()->back()->with('success', 'Team has been pending');
    }

}
