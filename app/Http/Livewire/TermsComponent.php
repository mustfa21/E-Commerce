<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Setting;

class TermsComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.terms-component',['setting'=> $setting ])->layout('layouts.base');
    }
}