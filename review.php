<?php

// 関数名：echoHello
// 処理：画面に"Hello"と出力する
function echoHello() {
  echo 'Hello';
}

// echoHelloを実行
echoHello();


// 関数名：echoUserName
// 引数：名前
// 処理：「私は〇〇です」を出力する
function echoUserName($name) {
  echo '私は' . $name . 'です';
}

// echoUserNameを実行
echoUserName('Yoneda');


// クラス：Human
// プロパティ：name
// メソッド：echoUserName
  // - 処理：「私は〇〇（自分の名前）です」を出力する