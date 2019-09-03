<?php

// クラス（設計図）の構文
// class クラス名 {

// }

// ピカチュウクラス（ピカチュウの設計図）
class Pikachu
{

  // 属性：プロパティとも言う（変数）
  // - HP
  // - MP

  // 振る舞い：メソッドとも言う（関数）
  // - サンダーボルト
  // - アイアンテール

  // HP
  public $hp;

  // MP
  public $mp;


  // コンストラクタ
  // インスタンス化した時に呼ばれる
  // new Pikachu() をした時に呼ばれる
  public function __construct($hp, $mp) {
    echo 'ピカチュウが生まれた';
    echo '<br>';

    // $this：インスタンスのことを指している
    // 今回の場合、生まれたピカチュウ
    $this->hp = $hp;
    $this->mp = $mp;
  }

  // サンダーボルト
  function thunderVolt()
  {
    echo 'サンダーボルトを発動した';
    echo '<br>';
  }

  // アイアンテール
  function ironTail()
  {
    echo 'アイアンテールを発動した';
    echo '<br>';
  }
}