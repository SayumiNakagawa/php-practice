<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します' . "\n";
for($i = 1; $i <= 100; $i ++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo 'tic-tac'. "\n";
    } elseif($i % 4 === 0) {
        echo 'tic' . "\n";
    } elseif($i % 5 === 0) {
        echo 'tac' . "\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
問題１
foreach($personalInfos as $infos){
    if($infos ["name"] === 'Bさん'){
    echo $infos["name"] . 'さんの電話番号は' . $infos["tel"] . 'です。';
    }
}

問題２
$count = 1;
foreach ($personalInfos as $index => $infos) {
    $num = $index + 1;
    echo $num . '番目の' . $infos['name'] . 'さんのメールアドレスは' . 
    $infos['mail'] . 'で、電話番号は' . $infos['tel'] . 'です。' . "\n";
}

問題３
$ageList = [25, 30, 18];
$updateInfos = [];
foreach($personalInfos as $index => $info) {
    $info['age'] = $ageList[$index];
    $updatedInfos[] = $info;
}
$personalInfos = $updatedInfos;
var_dump($personalInfos);


// Q3 オブジェクト-1
$yamada = new Student(120, '山田');{
    echo '学籍番号'. $yamada -> studentId . '番の生徒は' . $yamada -> studentName . 'です。';
}
var_dump($yamada);

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this -> studentName . 'は' . $subject . 'の授業に出席しました。学籍番号：' . $this -> studentId;
    }
}
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
問題１
$date = new DateTime('now');
$date->modify('-1 month');
echo $date->format('Y-m-d');

問題２
$date1 = new DateTime('now');
$date2 = new DateTime('1992-04-25');
echo 'あの日から' . $date1 -> diff($date2)->days . '日経過しました。';
?>