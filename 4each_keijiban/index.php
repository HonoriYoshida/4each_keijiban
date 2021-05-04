<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet"type="text/css"href="style.css">
    </head>
   
    <body>
    <div class="wrapper">    
    
    <?php
    mb_internal_encoding("utf8");
    $pdo= new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
    $stmt = $pdo->query("SELECT * FROM 4each_keijiban");
    
        
    ?>
        

    <img src="4eachblog_logo.jpg" whdth="200" height="50">
    
    <header>
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
        

        
    </header>
    
        <div class="left"> 
           
            
        <h1>プログラミングに役立つ掲示板</h1>
        
     
        
        <form method="post" action="insert.php">
            <h2>入力フォーム</h2>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text"size="30"name="handlename">
            </div>
            
            <div>
                <label>タイトル</label>
                 <br>
                <input type="text"class="text"size="30"name="title">
            </div>
            
            <div>
                <label>コメント</label>
                <br>
                <textarea cols="60"rows="7"name="comments"></textarea>
             </div>
            <div>
            <input type="submit"class="submit"value="送信する">    
                       
   
        </div>        
            </form>
            <?php
            while($row =$stmt->fetch()){
        echo "<div class='kiji'>";
        echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";
            }
            
            ?>
        
            
            <?php
            
            echo "<div class='kiji'>";
            echo "<h3>タイトル</h3>";
            echo "<div class='contents'>";
            echo "記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>";
               
            echo "<div class='handlename'>
                    posted by 通りすがり</div>";
            echo "</div>";
            echo "</div>";
            
            ?>
            
        
       
        </div>
    
      
        
        
        
        
    <div class="right">
                  <h4>人気の記事</h4>
                    <ul class="ab">
                        <li>PHPオススメ本</li>
                        

                        <li>PHP MyAdminの使い方</li>
                        

                        <li>今人気のエディタ Top5</li>
                        

                        <li>HTMLの基礎</li>

                    </ul>

                    <h4>オススメリンク</h4>
                    <ul class="ab"> 
                        <li>インターノウス株式会社</li>
                        
                        <li>XAMPPのダウンロード</li>
                        
                        <li>Ecipseのダウンロード</li>
                        
                        <li>Bracketsのダウンロード</li>
                    </ul>

                    <h4>カテゴリ</h4>
                    <ul class="ab"> 
                        <li>HTML</li>
                        
                        <li>PHP</li>
                        
                        <li>MySQL</li>
                        
                        <li>JabaScript</li>
                    </ul>
            
        
    <div class="push"></div>        
        
</div>
    
        </div>
    <footer>
    copyright internouse | 4each blog is the one which provides A to Z about programming.
        </footer>
    
    
    </body>