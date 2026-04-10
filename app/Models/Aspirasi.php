<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    public const STATUS_SUBMITTED = 'submitted';
    public const STATUS_UNDER_REVIEW = 'under_review';
    public const STATUS_VERIFIED = 'verified';
    public const STATUS_FORWARDED = 'forwarded';
    public const STATUS_AWAITING_ANSWER = 'awaiting_answer';
    public const STATUS_ANSWERED = 'answered';
    public const STATUS_CLOSED = 'closed';

    public const STATUSES = [
        self::STATUS_SUBMITTED,
        self::STATUS_UNDER_REVIEW,
        self::STATUS_VERIFIED,
        self::STATUS_FORWARDED,
        self::STATUS_AWAITING_ANSWER,
        self::STATUS_ANSWERED,
        self::STATUS_CLOSED,
    ];

    public const STATUS_LABELS = [
        self::STATUS_SUBMITTED => 'Submitted',
        self::STATUS_UNDER_REVIEW => 'Under Review',
        self::STATUS_VERIFIED => 'Verified',
        self::STATUS_FORWARDED => 'Forwarded',
        self::STATUS_AWAITING_ANSWER => 'Awaiting Answer',
        self::STATUS_ANSWERED => 'Answered',
        self::STATUS_CLOSED => 'Closed',
    ];

    protected $table = 'aspirasi';  
    protected $fillable = [
        'name',
        'email',
        'angkatan',
        'id_line',
        'message',
        'tipe_aspirasi_id',
        'status',
        'answer',
        'is_actived',
        'is_deleted',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'is_actived' => 'boolean',
        'is_deleted' => 'boolean',
    ];

    public function tipe_aspirasi()
    {
        return $this->belongsTo(TipeAspirasi::class);
    }

}
