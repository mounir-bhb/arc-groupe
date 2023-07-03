<?php


namespace App\Models\Dugusan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
/* use Jenssegers\Mongodb\Eloquent\Model; */
use Illuminate\Database\Eloquent\Model;
use App\Models\MultiLanguageModel;

class CabineTranslation extends Model
{

    use HasFactory;
    /* protected $collection; */

    protected $guarded = [];

    protected $fillable=[
        'local',
        'back_wall',
        'ceiling',
        'floor',
        'accessories',
        'handrail',
        'side_walls',
    ];

    /* protected $multiLanguageFields = 
    [
        'back_wall',
        'ceiling',
        'floor',
        'accessories',
        'handrail',
        'side_walls',
    ]; */

    protected $casts = [
        'cabine_id' => 'integer',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        if(session('locale', config('app.locale'))){
            $this->table = 'cabine_translations_' . session('locale', config('app.locale'));
        }
    }

    public function cabine()
    {
        /* $locale= session('locale', config('app.locale')); */
        /* return $this->belongsTo(Cabine::class, '_id', 'cabine_id')->setTable('cabines_' . $locale); */
        return $this->belongsTo(Cabine::class, '_id', 'cabine_id');
    }
}
