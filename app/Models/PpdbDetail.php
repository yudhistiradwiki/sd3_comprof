<?php

namespace App\Models;

use App\Models\Ppdb;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PpdbDetail extends Model
{
    use HasFactory;

    protected $table = 'ppdbs_details';

    protected $fillable = [
        'ppdbs_id',
        'title',
        'description',
    ];

    /**
     * Get the user  that owns the Ppdb
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ppdb()
    {
        return $this->belongsTo(Ppdb::class);
    }
}
