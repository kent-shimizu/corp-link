<?php
/**
 * Copyright (c) 2016. Arsaga Partners, Inc.
 */

namespace App\Repositories\Backend\Admin;



use App\Models\Applicant;

/**
 * Class EloquentApplicantRepository
 * @package App\Repositories\Backend\Admin
 */
class EloquentApplicantRepository implements ApplicantContract
{
    /**
     * EloquentApplicantRepository constructor.
     * @param ApplicantContract $accountant
     */
    public function __construct(ApplicantContract $applicant)
    {
        $this->applicant = $applicant;
    }

    /**
     * @param
     * @return
     */
    public function getRecruit()
    {
        return Applicant::where('selection_status', 0)->get();
    }


}
