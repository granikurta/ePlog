<?php
namespace App\Calculate\Tests;

class coc
{
    private $answer;

    public function setAnswer(array $answer)
    {
        $this->answer = $answer;
    }
    public function calculate()
    {
        $fatigue = array(
            'key'=> [1, 8, 15, 22, 29, 36],
            'name' => 'Психофизическая усталост'
          );
        $will = array(
            'key'=> [2, 9, 16, 23, 30, 37],
            'name' => 'Нарушение воли'
          );
        $instability = array(
            'key'=> [3, 10, 17, 24, 31, 38],
            'name' => 'Эмоциональная неустойчивость'
          );
        $vegetative = array(
            'key'=> [4, 11, 18, 25, 32, 39],
            'name' => 'Вегетативная неустойчивость'
          );
        $fear = array(
            'key'=> [6, 13, 20, 27, 34, 41],
            'name' => 'Тревога и страхи'
          );
        $addiction = array(
            'key'=> [1, 8, 15, 22, 29, 36],
            'name' => 'склонность к зависимости'
          );
        $sleep = array(
            'key'=> [5, 12, 19, 26, 33, 40],
            'name' => 'Нарушения сна'
          );
          $scale = compact('fatigue', 'will', 'instability', 'vegetative', 'fear', 'addiction', 'sleep');
          $resp = [];
          foreach ($scale as $key => $item) {
            $resp['scales'][] = ['label' =>$item['name'], 'value'=> $this->calculateByScale($item, $this->answer)];
        }
        $resp['other'] = $this->mainScale();
        return $resp;
    }
    private function calculateByScale(array $scale, $data)
    {
        $resp = 0;
        foreach ($scale['key'] as $value) {
            $resp += $data[$value-1];
        }
        return $resp;
    }  
    private function mainScale()
    {
        $resp = 0;
        $result = [];
        foreach ($this->answer as $val) {
            $resp += $val;
        }
        if($resp <= 15){
            $result = ['main' => $resp, 'description' => 'Высокий уровень психологической устойчивости к экстремальным условиям, состояние хорошей адаптированности.'];
        }elseif($resp > 16 && $resp <= 26){
            $result = ['main' => $resp, 'description' => 'Средний уровень психологической устойчивости к экстремальным условиям, состояние удовлетворительной адаптированности.'];
        }else{
            $result = ['main' => $resp, 'description' => 'Низкая стрессоустойчивость, высокий риск патологических стрессреакций и невротических расстройств, состояние дезадаптации.'];
        }
        return $result;
    }
}
