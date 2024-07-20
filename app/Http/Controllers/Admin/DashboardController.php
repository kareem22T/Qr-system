<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\License;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
        return view("Admin.dashboard");
    }

    public function edit($id) {
        $license = License::find($id);

        return view("Admin.edit", compact('license'));
    }

    public function delete($id) {
        $license = License::find($id);
        if ($license)
        $license->delete();
        return redirect()->route('admin.dashboard');
    }
}
