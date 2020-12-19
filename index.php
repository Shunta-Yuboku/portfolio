<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shunta's Portfolio</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="responsive.css">
  <script src="https://kit.fontawesome.com/30e05fe11e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
  <!-- ポップアップ画像 -->
  <div class="blackbg"></div>
  <div class="whitebg">
    <div class="whitebg-inner">
      <div class="close-btn"><i class="fas fa-times"></i></div>
      <div class="popup-img-area">
        <img class="popup-img" src="" alt="">
      </div>
    </div>
  </div>
  <!-- <div class="popup-img-explanation white">
    <p></p>
  </div> -->

  <!-- header -->
  <header>
      <div class="header-right">
        <ul class="row">
          <li href='#HOME'>HANAOKA</li>
          <li href='#ABOUT'>ABOUT</li>
          <li href='#SKILLS'>SKILLS</li>
          <li href='#SERVICES'>SERVICES</li>
          <li href='#WORKS'>WORKS</li>
          <li href='#CONTACT'>CONTACT</li>
          <div class="menu-icon">
            <i class="fas fa-bars"></i>
          </div>
        </ul>
        <div class="clear"></div>
      </div>
    </header>
        <div class="menu">
          <div class="container">
            <li href='#HOME'>HOME</li>
            <li href='#ABOUT'>ABOUT</li>
            <li href='#SKILLS'>SKILLS</li>
            <li href='#SERVICES'>SERVICES</li>
            <li href='#WORKS'>WORKS</li>
            <li href='#CONTACT'>CONTACT</li>
          </div>
        </div> 

  <!-- HOME -->
  <div class="home-wrapper wrapper" id="HOME">
    <div class="main-title">
      <h1 class="white" id='TITLE'>WELCOME TO MY PORTFOLIO !</h1>
    </div>
  </div>

  <!-- ABOUT -->
  <div class="about-wrapper wrapper" id="ABOUT">
    <div class="container">
      <div class="about row">
        <div class="about-left">
          <div class="image">
            <img src="file/Screenshot_20200510-164942.png">
          </div> 
        </div>
        <div class="about-right">
          <h2>ABOUT ME</h2>
          <h3>しゅんた</h3>
          <p class="text">1996年生まれ富山県出身<br>バレーボールと温泉巡りをこよなく愛しています。<br><br>お客様に満足いただけるWEBサイトを精一杯作らせていただきます！</p>
        </div>
      </div>
    </div>
  </div>

  <!-- SKILLS -->
  <div class="skills-wrapper wrapper" id="SKILLS">
    <div class="container">
      <h2 class="title white">WEB SKILL</h2>
      <div class="skills row">
        <div class="skill fade-off">
          <h3 class="white">HTML5/CSS3</h3>
          <div class="illust">
            <i class="fas fa-code skill-icon"></i>
          </div>
          <p class="text white">WEB上にテキストの表示が可能です。また、作成したページをお洒落に装飾することもできます。</p>  
        </div>
        <div class="skill fade-off">
          <h3 class="white">JavaScript/jQuery</h3>
          <div class="illust">
            <i class="fab fa-js skill-icon"></i>
          </div>
          <p class="text white">アニメーションを加えることで動的なサイトを作成することができます。</p>
        </div>
        <div class="skill fade-off">
          <h3 class="white">PHP</h3>
          <div class="illust">
            <i class="fab fa-php skill-icon"></i>
          </div>
          <p class="text white">Webサイトに会員登録、ログインページの構築、お問い合わせフォームの設置が可能です。</p>
        </div>
        <div class="skill fade-off">
          <h3 class="white">WordPress</h3>
          <div class="illust">
            <i class="fab fa-wordpress skill-icon"></i>
          </div>
          <p class="text white">世界中で広く利用されているWordPressを用いてお客様の個人ブログやコーポレートサイトの作成ができます。また、既存サイトのWordPress化やテーマの変更などもお任せください。</p>
        </div>
      </div>  
    </div>
  </div>

  <!-- SERVICES -->
  <div class="services-wrapper wrapper" id="SERVICES">
    <div class="container">
      <h2 class="title">SERVICES</h2>
        <div class="services fade-off">
          <div class="service row">
            <div class="service-left service-illust">
              <div class="image2">
                <img src="file/macbookFTHG1236_TP_V4.jpg" alt="">
              </div>
            </div>
            <div class="service-right service-text">
              <h3>HTML・CSSコーディング</h3>
              <p class="text">お客様から頂いたデザインカンプに忠実なコーディングをいたします。<br>また、お好みのモバイルデバイスに適したレスポンシブ対応もいたします。</p>
            </div>
          </div>
        </div>
        <div class="services fade-off">
          <div class="service row row2">
            <div class="service-left service-text">
              <h3>LP(ランディングページ)/HP(ホームページ)制作</h3>
              <p class="text">LPおよびHPの作成を承ります。<br>デザイン込みでの注文も承ります。<br>お客様の方で挿入したい画像やイラストがございましたらご契約の際にいただきます。もし、ないようでしたらこちらでフリー画像を使用して作成させていただきます。</p>
            </div>
            <div class="service-right service-illust">
              <div class="image2">
                <img src="file/noteIMGL0060_TP_V4.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <!-- WORKS -->
  <div class="works-wrapper wrapper" id="WORKS">
    <div class="container">
      <h2 class="title white">WORKS</h2>
      <p class="title-text white">過去の制作実績をご紹介します。</p>
      <div class="works row">
        <!-- 以下に作品追加 -->
        <div class="work fade-off">
          <h3 class="white work-title">iSara模写</h3>
          <div class="work-illust-area">
            <!-- 下記に作品 -->
            <img class="none reproduction" src="./file/iSara.png" alt="">
            <!-- 下記に作品のトプ画 -->
            <img src="./file/iSara-top.png" alt="">
          </div>
          <p class="text2 white">参考: <a class="work-name white" href="https://isara.life/">isara.life</a></p>
          <div class="comment">
            <p class="white comment-content text2">
            ＜使用スキル＞
            <br>
            HTML/CSS/JavaScript(jQuery)
            </p>
            <p class="white comment-content text2">
            ＜制作期間＞
            <br>
            2週間
            </p>
            <p class="white comment-content text2">
            ＜一言＞
            <br>
            初めての模写作品です。ボリュームが多かったので大変でしたがスキルを付けられたと思います。
            </p>
          </div>
        </div>
        <!-- ここまで -->
        <!-- 以下に作品追加 -->
        <div class="work fade-off">
          <h3 class="white work-title">アトリエガタガタ模写</h3>
          <div class="work-illust-area">
            <!-- 下記に作品 -->
            <img class="none reproduction" src="./file/Atelier-gatagata.png" alt="">
            <!-- 下記に作品のトプ画 -->
            <img src="./file/Atelier-gatagata-top.png" alt="">
          </div>
          <p class="text2 white">参考: <a class="work-name white" href="https://gt-gt.org/">アトリエガタガタ</a></p>
          <div class="comment">
            <p class="white comment-content text2">
            ＜使用スキル＞
            <br>
            HTML/CSS/JavaScript(jQuery)
            </p>
            <p class="white comment-content text2">
            ＜制作期間＞
            <br>
            1週間
            </p>
            <p class="white comment-content text2">
            ＜一言＞
            <br>
            模写作品です。デザインが可愛くて好きです。
            </p>
          </div>
        </div>
        <!-- ここまで -->
        <!-- 以下に作品追加 -->
        <div class="work fade-off">
          <h3 class="white work-title">株式会社イッシュウ様 LP制作</h3>
          <div class="work-illust-area">
            <!-- 以下に作品 -->
            <img class="none reproduction" src="./file/ish-shu.png" alt="">
            <!-- 以下に作品のトプ画 -->
            <img src="./file/ish-shu-top.png" alt="">
          </div>
          <p class="text2 white">企業HP: <a class="work-name white" href="https://www.ishshu.com/">株式会社イッシュウ</a></p>
          <div class="comment">
            <p class="white comment-content text2">
            ＜使用スキル＞
            <br>
            HTML/CSS/Photoshop
            </p>
            <p class="white comment-content text2">
            ＜制作期間＞
            <br>
            3週間
            </p>
            <p class="white comment-content text2">
            ＜一言＞
            <br>
            LP制作を承りました。コーディングおよびデザインを担当させていただきました。
            </p>
          </div>
        </div>
        <!-- ここまで -->
        <!-- 以下に作品追加 -->
        <div class="work fade-off">
          <h3 class="white work-title">ふろぶろぐ</h3>
          <div class="work-illust-area">
            <!-- 以下に作品 -->
            <img class="none reproduction" src="./file/Huroblog.png" alt="">
            <!-- 以下に作品のトプ画 -->
            <img src="./file/Huroblog-top.png" alt="">
          </div>
          <p class="text2 white">HP: <a class="work-name white" href="https://shunta-yuboku.com">ふろぶろぐ</a></p>
          <div class="comment">
            <p class="white comment-content text2">
            ＜使用スキル＞
            <br>
            WordPress
            </p>
            <p class="white comment-content text2">
            ＜制作期間＞
            <br>
            2週間
            </p>
            <p class="white comment-content text2">
            ＜一言＞
            <br>
            WordPressで自作テーマ「ふろぶろぐ」を作りました。入浴施設のレビューや人生について語ります。
            </p>
          </div>
        </div>
        <!-- ここまで -->
      </div>
    </div>
  </div>

  <!-- CONTACT -->
  <div class="contact-wrapper wrapper" id="CONTACT">
    <div class="container">
      <h2> CONTACT</h2>
      <p class="title-text">ご連絡の際は以下のフォームをご記入の上<br>"確認"ボタンを押してください。</p>
      <form action="mail.php" method="post">
        <div class="form-box">
          <label class="text form-name" for="">お名前</label><span class="red">（必須）</span><br>
          <input type="text" name="お名前"  placeholder="Your Name">
        </div>
        <div class="form-box">
          <label class="text form-name" for="">メールアドレス（半角）</label><span class="red">（必須）</span><br>
          <input type="email" name="メールアドレス（半角）"  placeholder="Your Email">
        </div>
        <div class="form-box">
          <label class="text form-name" for="">お問い合わせ内容</label><span class="red">（必須）</span><br>
          <textarea name="お問い合わせ内容" rows="5" cols="30" placeholder="messages..."></textarea>
        </div>
        <!-- <div class="btn-box">
          <button class="submit-btn text" type="submit" name="submit" class="btn btn-info ">Submit</button>
        </div> -->
        <div class="button-wrapper">
          <input class="button" type="submit" value="　 確認 　" />　<input class="button" type="reset" value="リセット" />
        </div>
      </form>
    </div>
  </div>

  <!-- footer -->
  <footer>
    <p class="text3">©2020/Shunta Yuboku/All Right Reserved</p>
  </footer>

  <script type="text/javascript" src="script.js"></script>
</body>
</html>