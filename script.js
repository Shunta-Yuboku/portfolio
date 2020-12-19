$(function(){
  $('h1').fadeIn(1500);
  
  // 作品にマウスホバーした時のイベント
  // $('.work-illust').hover(function(){
  //   $(this).find('.black').fadeIn();
  // },
  // function(){
  //   $(this).find('.black').fadeOut();
  // });

  // headerのメニューをクリックした時のスクロール
  $('li').click(function(){
    // クリックした方のid名を取得
    const scrollTarget = $(this).attr('href');
    // そのid要素のtop座標を取得
    const offsetTop = $(scrollTarget).offset().top;
    // headerの高さを取得
    const adjust = -$('header').height();
    // topからその位置までスクロール
    $('html, body').animate({
      scrollTop: offsetTop + adjust
    },300);
    return false;
  });

  // menu-iconをクリックした時のアニメーション
  $('.menu-icon').click(function(){
    if($('.menu').hasClass('open')){
      $('.menu').slideUp();
      $('.menu').removeClass('open');
    }
    else{
      $('.menu').slideDown();
      $('.menu').addClass('open');
    }
  });

  // スクロールによって表示させるアニメーション
  $(window).scroll(function(){
    $('.fade-off').each(function(){
      // 要素のtop座標を取得
      var imgPos=$(this).offset().top;
      // 画面のスクロール位置(スクロール量を取得)
      var scroll=$(window).scrollTop();
      // window高さを取得
      var windowHeight=$(window).height();

      if(scroll>imgPos-windowHeight+windowHeight/5){
        $(this).addClass("fade-on");
      }
      else {
        $(this).removeClass("fade-on");
      }
    });
  });

  // フェードインする文字列
  var $allMsg=$('#TITLE');
  var $wordList=$('#TITLE').html().split("");
  $('#TITLE').html("");
  $.each($wordList, function(idx,elem){
    var newEL=$("<span/>").text(elem).css({opacity:0});
    newEL.appendTo($allMsg);
    newEL.delay(idx*50);
    newEL.animate({opacity:1},1000);
  });

  var myfunc = function(){
 
    var mydiv = document.getElementById("mydiv");
    mydiv.innerHTML = "<h3>h3タグに変更しました</h3>";

  }

  // 作品をクリックした時のポップアップ画像表示
  $('.work-illust-area').click(function(){
    // 下の文でsrcを取得
    var src=$(this).find('.reproduction').attr('src');
    // 取得したsrcを代入
    $('.popup-img').attr('src',src);

    $('.blackbg').fadeIn();
    $('.whitebg').fadeIn();
    // $('.popup-img-explanation').fadeIn();
  });

  // closeボタンを押した時の表示
  $('.close-btn').click(function(){
    $('.blackbg').fadeOut();
    $('.whitebg').fadeOut();
    // $('.popup-img-explanation').fadeOut();
  });

});