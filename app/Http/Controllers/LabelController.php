<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index(): View
    {
        $label = Label::query()->get();

        return view('label.index', [
            'label' => $label
        ]);
    }
}
