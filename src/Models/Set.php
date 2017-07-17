<?php
namespace App\Models;
class Set extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'sets';

    protected $guarded = ['id','created_at','updated_at'];

    public function cards() {
        return $this->hasMany('App\Models\Card', 'set_id');
    }

    public function setBoosterAttribute($value) {
        $this->attributes['booster'] = (! empty($value)) ? json_encode($value) : '';
    }
    public function setTranslationsAttribute($value) {
        $this->attributes['translations'] = (! empty($value)) ? json_encode($value) : '';
    }
    public function setMagicRaritiesCodesAttribute($value) {
        $this->attributes['magic_rarities_codes'] = (! empty($value)) ? json_encode($value) : '';
    }
    public function setAlternativeNamesAttribute($value) {
        $this->attributes['alternative_names'] = (! empty($value)) ? json_encode($value) : '';
    }

    public function getBoosterAttribute($value) {
        return json_decode($value);
    }
    public function getTranslationsAttribute($value) {
        return json_decode($value);
    }
    public function getMagicRaritiesCodesAttribute($value) {
        return json_decode($value);
    }
    public function getAlternativeNamesAttribute($value) {
        return json_decode($value);
    }
}