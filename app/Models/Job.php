<?php
/**
 * Created by PhpStorm.
 * User: alexandro
 * Date: 4/12/18
 * Time: 04:31 AM
 */

namespace App\Models;


class Job
{
    protected $table = 'jobs';

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;

        return "Job duration: $years years $extraMonths months";
    }
}