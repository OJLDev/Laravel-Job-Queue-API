<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SubmissionSaved
{
    use Dispatchable, SerializesModels;

    public $submissionData;

    public function __construct($data)
    {
        $this->submissionData = $data;
    }
}
