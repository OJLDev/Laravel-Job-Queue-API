<?php

namespace App\Jobs;

use App\Models\Submission;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessSubmission implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $submissionData;

    public function __construct($data)
    {
        $this->submissionData = $data;
    }

    public function handle()
    {
        // Save the data to the database
        Submission::create($this->submissionData);

        // Dispatch the event
        event(new \App\Events\SubmissionSaved($this->submissionData));
    }
}
