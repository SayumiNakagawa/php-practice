<?php
// Q1 変数と文字列
$name = '中川';
echo '私の名前は「' . $name . '」です。'

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2;

// Q3 日付操作
$date = date('Y年m月d日 H時i分s秒');
echo '現在時刻は、' . $date . 'です。'

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
   echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 25;
$message = ($age > 18) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列
$array = [
    '東京都',
    '神奈川県',
    '埼玉県',
    '栃木県',
    '千葉県',
    '群馬県',
    '茨城県'
    ];
echo $array[3] . 'と' . $array[4] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$city = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
    ];
foreach ($city as $value) {
    echo $value. "\n";
}

// Q8 連想配列-2
$city = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
    ];
$都道府県名 = '埼玉県';
if($都道府県名 === '埼玉県') {
    echo $都道府県名 . 'の県庁所在地は、' . $city['埼玉県'] . 'です。';
}

// Q9 連想配列-3
$city = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
    ];
$city['愛知県'] = '名古屋市';
$city['大阪府'] = '大阪市';
foreach($city as $ken => $shi)
{
    if($ken === '東京都' || $ken === '神奈川県' || $ken === '千葉県' || $ken === '埼玉県' || $ken ===  '栃木県' || $ken === '群馬県' || $ken === '茨城県')
    {echo $ken . 'の県庁所在地は' . $shi . 'です。' . "\n";
} else {
    echo $ken . 'は関東地方ではありません。' . "\n";}
}

// Q10 関数-1
function hello($name)
{
    echo $name . 'さん、こんにちは。' . "\n";
}
hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price = 1000)
{
    return $price *= 1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込み価格は' . $taxInPrice . '円です。'

// Q12 関数とif文
function distinguishNum($number) {
if($number % 2 === 0) {
    return $number . 'は偶数です。';
} else {
    return $number . 'は奇数です。';
}
}
echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";

// Q13 関数とswitch文
function evaluateGrade($grade){
    switch($grade){
        case 'A':
        case 'B':
            echo '合格です。';
            break;
        case 'C':
            echo '合格ですが追加課題があります。';
            break;
        case 'D':
            echo '不合格です。';
            break;
        default:
            echo '判定不明です。講師に問い合わせてください。';
    }
}
evaluateGrade('A');
echo "\n";
evaluateGrade('E');

?>