<?php

namespace Webkul\Iyzico\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OnboardingController extends Controller
{
    /**
     * Display the Iyzico onboarding (pre-application) form.
     */
    public function index()
    {
        if (! core()->getConfigData('sales.payment_methods.iyzico.sandbox')) {
            abort(404);
        }

        return view('iyzico::onboarding.index');
    }
}
