<?php

namespace App\Domains\Auth\Models\Traits\Relationship;

use App\Domains\Auth\Models\PasswordHistory;

/**
 * Class UserRelationship.
 */
trait UserRelationship
{
    /**
     * @return mixed
     */
    public function passwordHistories()
    {
        return $this->morphMany(PasswordHistory::class, 'model');
    }

    public function biodata(){
        return $this->hasOne('App\Domains\BioData\Models\Biodata');
    }

    public function support(){
        return $this->hasOne('App\Domains\Support\Models\Support');
    }
}
