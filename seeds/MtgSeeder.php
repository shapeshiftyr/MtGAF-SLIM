<?php

use App\Migration\Seed;

class MtgSeeder extends Seed
{
    public function run()
    {
        ini_set('memory_limit', '-1');
        $data = json_decode(file_get_contents('http://mtgjson.com/json/AllSets.json'));
        foreach ($data as $set) {
            echo 'Seeding: ' . $set->name . PHP_EOL;
            $setData = $this->normalizeSetData($set);
            unset($setData['cards']);
            $magicSet = App\Models\Set::create($setData);
            foreach($set->cards as $card) {
                $cardData = $this->normalizeCardData($card, $magicSet);
                $magicCard = new App\Models\Card($cardData);
                $magicCard->save();
            }
        }
    }

    protected function normalizeSetData($set) {
        $arr = [];
        foreach ($set as $key => $value) {
            $arr[snake_case($key)] = $value;
        }
        return $arr;
    }

    protected function normalizeCardData($card, $magicSet) {
        $arr = [];
        foreach($card as $key => $value) {
            $arr[snake_case($key)] = $value;
        }
        $arr['set_id'] = $magicSet->id;
        return $arr;
    }
}
