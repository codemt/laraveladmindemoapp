<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\CreateAdmissionEvent;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Jobs\CreateAdmissionJob;


class CreateAdmissionListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    use DispatchesJobs , InteractsWithQueue;
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CreateAdmissionEvent $event)
    {
        //
        $admission_data = $event->admission_data;
        \Log::info($admission_data);


       $admission_detail = $this->dispatch(new CreateAdmissionJob($admission_data));

      //  dd(print_r($admission_data));


        
    }
}
