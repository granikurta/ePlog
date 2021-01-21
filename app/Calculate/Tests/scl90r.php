<?php
namespace App\Calculate\Tests;

class scl90r
{
    private $answer;

    public function setAnswer(array $answer)
    {
        $this->answer = $answer;
    }
    public function calculate()
    {
        $som = array(
            'key'=> [1, 4, 12, 27, 40, 42, 48, 49, 52, 53, 56, 58],
            'name' => 'Соматизация'
          );
          $obsessive = array(
           'key'=> [3, 9, 10, 28, 38, 45, 46, 51, 55, 65],
           'name' => 'Навязчивости'
          );
          $sensitivity = array(
              'key'=>  [6, 21, 34, 36, 37, 41, 61, 69, 73],
              'name' => 'Сенситивность'
          );
          $depression = array(
              'key'=> [5, 14, 15, 20, 22, 26, 29, 30, 31, 32, 54, 71, 79],
              'name' => 'Депрессия'
          );
          $anxiety = array(
              'key'=> [2, 17, 23, 33, 39, 57, 72, 78, 80, 86],
              'name' => 'Тревожность'
          );
          $hos = array(
              'key'=>  [11, 24, 63, 67, 74, 81],
              'name' => 'Враждебность'
          );
          $phob =  array(
              'key'=>  [13, 25, 47, 50, 70, 75, 82],
              'name' => 'Фобия'
          );
          $par =  array(
              'key'=>  [8, 18, 43, 68, 76, 83],
              'name' => 'Паранойяльные'
          );
          $psy =  array(
              'key'=>    [7, 16, 35, 62, 77, 84, 85, 87, 88, 90],
              'name' => 'Психотизм'
          );
          $scale = compact('som', 'obsessive', 'sensitivity', 'depression', 'anxiety', 'hos', 'phob', 'par', 'psy');
          $resp = [];
          foreach ($scale as $key => $item) {
            $resp[] = ['label' =>$item['name'], 'value'=> $this->calculateByScale($item, $this->answer)];
          }
          return $resp;
    }
    private function som()
    {

    }
    private function calculateByScale(array $scale, $data)
    {
        $resp = 0;
        foreach ($scale['key'] as $value) {
            $resp += $data[$value-1];
        }
        $resp = $resp/ count($scale['key']);
        return $resp;
    }
}