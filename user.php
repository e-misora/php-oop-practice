<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理プログラム</title>
</head>
<body>
    <h1>ユーザー管理プログラム</h1>
    <?php
    echo "<h2>自己紹介</h2>";

    // Userクラスの定義
    class User
    {
        public string $name;
        public int $age;

        // コンストラクタで名前と年齢を初期化
        public function __construct(string $name, int $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function introduce():string
        {
            return "こんにちは、私は" . $this->name . "です。" .$this->age . "歳です。";
        }

        public function isAdult():bool
        {
            if($this->age >= 18){
                echo $this->name . "さんは成人です。";
                return true;
            } else {
                echo $this->name . "さんは未成年です。";
                return false;
            }
        }

    }

    // 自己紹介を表示
    $user1 = new User("田中太郎",25);
    echo $user1->introduce() . "<br>";
    $user2 = new User("佐藤花子",17);
    echo $user2->introduce() . "<br>";
    $user3 = new User("鈴木一郎",30);
    echo $user3->introduce() . "<br>";

    echo "<h2>成人判定</h2>";

    // 成人かどうかを判定
    echo $user1->isAdult() . "<br>";
    echo $user2->isAdult() . "<br>";
    echo $user3->isAdult() . "<br>";

    ?>
</body>
</html>