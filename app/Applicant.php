<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    //
    protected $table = 'applicant';
    
    public function programs() {
        return $this->belongsToMany('App\ProgramOffered', 'applicant_programs', 'applicant_id', 'program_id')
                    ->withPivot('semester', 
                            'admission_year',
                            'date_of_application',
                            'application_fee',
                            'ap_fee_challan_nr',
                            'admission_fee',
                            'ad_fee_challan_nr',
                            'merit_score',
                            'serial_no',
                            'ad_fee_discount_type',
                            'ad_fee_discounted',
                            'dept_test_marks',
                            'application_status'
                            )
                    ->withTimestamps();
    }
    
}
