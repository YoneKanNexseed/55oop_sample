<?php

// ピカチュウの設計図が書かれたファイルの読み込み
require_once(' Pikachu.php');

// ピカチュウの設計図をもとに、実体を作成
// インスタンス化（ new クラス名() ）
$pikachu1 = new Pikachu(200, 100);

// クラスをもとに作ったピカチュウの操作
// プロパティとかメソッドの使い方

// ピカチュウ1にHP100を設定する
$pikachu1->hp = 100;

// ピカチュウ1にMP50を設定する
$pikachu1->mp = 50;

// 画面にピカチュウのHPとMPを表示
echo 'ピカチュウのHPは';
echo $pikachu1->hp;
echo '<br>';

echo 'ピカチュウのMPは';
echo $pikachu1->mp;
echo '<br>';

// メソッド（振る舞い）の実行
// サンダーボルトの実行
$pikachu1->thunderVolt();

// アイアンテールの実行
$pikachu1->ironTail();


$pikachu2 = new Pikachu(400, 200);
$pikachu2->hp = 500;
$pikachu2->mp = 1500;

echo 'ピカチュウ1のHPは';
echo $pikachu1->hp;

echo '<br>';

echo 'ピカチュウ2のHPは';
echo $pikachu2->hp;


echo '<br>';

require_once('Bulbasaur.php');

$bulbasaur = new Bulbasaur();
$bulbasaur->cry();
// echo '<img src="'. $bulbasaur->img .'">';

echo '<br>';

// ピカチュウ3の作成
$pikachu3 = new Pikachu(999, 40);

echo 'ピカチュウ3のHPは';
echo $pikachu3->hp;