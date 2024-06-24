<?php get_header(); ?>
<main id="main">
  <div class="p-fv">
    <div class="p-fv__inner">
      <div class="p-fv__contents">
        <h2 class="p-fv__lead">
          <span class="p-fv__lead--1st">運転を、</span>
          <span class="p-fv__lead--2nd">あなたの日常に</span>
        </h2>
      </div>
    </div>
  </div>
  <div class="p-banner">
    <div class="p-banner__contents p-contents">
      <figure class="p-banner__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="画像：ロゴ" width="50" height="34" loading="lazy" decoding="async">
      </figure>
      <h2 class="p-banner__head"><span class="p-banner__head--strong">ドライブデビュー</span>&emsp;Drive Debut</h2>
    </div>
  </div>
  <section class="p-recommend">
    <div class="p-recommend__inner l-inner">
      <h2 class="p-recommend__title">運転ビギナー＆ペーパードライバーのための教習所</h2>
      <div class="p-recommend__contents p-contents">
        <h3 class="p-recommend__lead">こんな方にオススメです</h3>
        <ul class="p-recommend__list">
          <li class="p-recommend__item">いきなり車を運転するのはこわい。<br>だから親にとなりに乗ってもらったけどケンカになっちゃった！</li>
          <li class="p-recommend__item">子どもをつれて自転車や電車って大変！<br>でももう何年も運転していないし･･･どうしよう？</li>
          <li class="p-recommend__item">買い物しすぎた～！<br>レンタカーやカーシェアが使えればいいんだろうけど、どうやって借りるの？？</li>
          <li class="p-recommend__item">旅行ではいつも友達の運転に頼ってばかり。<br>申し訳ないと思いつつも自分で運転する自信がない･･･</li>
          <li class="p-recommend__item">就職が決まった♪<br>でも面接で「車の運転があるからね～」って･･･<br>教習所以来運転してないけど大丈夫かな･･･</li>
          <li class="p-recommend__item">もし運転中トラブルがあったらどうしよう？<br>パンクしたら？あおり運転にあったら？<br>誰に相談すればいい･･･？</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="p-intro">
    <div class="l-inner">
      <div class="p-intro__contents p-contents">
        <h2 class="c-title js-in-view fade-in-up">「運転」があなたの生活の一部になります</h2>
        <div class="p-introFeature js-in-view fade-in-up">
          <ul class="p-introFeature__list">
            <li class="p-introFeature__item">インストラクターは<span class="p-introFeature__item--accent">約20年</span>教習指導員をしていた教習のエキスパート！</li>
            <li class="p-introFeature__item">初回教習4,500円！不安がある方も気軽に練習を始められます。</li>
            <li class="p-introFeature__item"><span class="p-introFeature__item--accent">お客様自身の車で</span>教習を受けられます（もちろん教習車でも可能です）。※</li>
            <li class="p-introFeature__item"><span class="p-introFeature__item--accent">アフターフォロー</span>あり。教習終了後もLINEで質問・相談が可能です。</li>
          </ul>
          <p class="p-introFeature__attention">※初回は教習車での教習になります。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="p-voice js-in-view fade-in-up">
    <div class="l-inner p-voice__inner">
      <div class="p-voice__contents p-contents">
        <ul class="p-voice__list">
          <?php
          $voice_item = [
            [
              "img" => "picture-intro1.webp",
              "text" => "生活道路での運転ができるようになり、娘の幼稚園の送り迎えが楽になりました！<br>
                今までは自転車だったので時間はかかるし雨だと大変でしたが、今ではそのストレスが減りました！<br>
                また、家族で外食したときに夫がお酒を飲めるようになりました。",
            ],
            [
              "img" => "picture-intro2.webp",
              "text" => "キャンプが趣味なんですが、荷物の量を気にしなくてよくなったし、途中に温泉やお土産屋さんに寄り道できるようになりました！<br>
                また、駅から遠いお店にも行けるようになりました。<br>
                今度は夜の都心や横浜あたりをひとりでドライブしてみたいです！<br>
                それから友達や家族を乗せて温泉旅行もしてみたい！",
            ],
          ];
          // while ($loop < 3) {
          foreach ($voice_item as $item) {
          ?>
            <li class="p-voice__item">
              <p class="p-voice__label">VOICE</p>
              <figure class="p-voice__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $item["img"]; ?>" alt="アイコン：女性のイラスト" width="150" height="150" loading="lazy" decoding="async">
              </figure>
              <p class="p-voice__text">
                <?php echo $item["text"]; ?>
              </p>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </section>
  <section class="p-message js-in-view fade-in-up">
    <div class="p-message__contents p-contents">
      <figure class="p-message__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-message.webp" alt="写真：教習の様子" width="368" height="276" loading="lazy" decoding="async">
      </figure>
      <div class="p-message__body">
        <p class="p-message__text">
          &emsp;<span class="p-message__text--marker">「ドライブデビュー」</span>のHPをご覧いただきありがとうございます。<br>
          <br>
          &emsp;当スクールは <span class="p-message__text--accent">「免許は取得したけどもう少し運転練習したい」</span>という方のための教習所です。<br>
          <br>
          &emsp;<span class="p-message__text--accent">免許を取って間もない方</span>もしばらく運転していなかった<span class="p-message__text--accent">ペーパードライバーの方</span>も、ぜひお声がけください。<br>
          <br>
          &emsp;車の運転が生活の一部にできるようにお手伝いいたします。
        </p>
      </div>
    </div>
  </section>
  <section class="p-price js-in-view fade-in-up">
    <div class="p-price__inner l-inner">
      <h2 class="p-price__title c-title js-in-view fade-in-up">初回教習&nbsp<span class="p-price__title--accent">4,500円！</span></h2>
      <div class="p-price__contents p-contents">
        <div class="p-price__desc js-in-view fade-in-up">
          <h3 class="p-price__lead">お試し価格&emsp;<span class="p-price__lead--accent">4,500円</span>&nbsp<span class="p-price__title--small">（税込）</h3>
          <ul class="p-price_list">
            <li class="p-price__item">初回教習は<span class="p-price__item--accent">1.5時間</span>。東武東上線<span class="p-price__item--accent">鶴ヶ島駅</span>で待ち合わせ。</li>
            <li class="p-price__item">待ち合わせ時刻は　①9:00～②11:00～③13:00～④15:00～⑤17:00～</li>
            <li class="p-price__item">教習車で自動車の装置の説明を受けてから、いざ運転！</li>
            <li class="p-price__item">お一人一回限り。</li>
          </ul>
        </div>
        <div class="p-pricePay js-in-view fade-in-up">
          <h4 class="p-pricePay__head">各種クレジットカード等が使えます。</h4>
          <figure class="p-pricePay__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-price.webp" alt="画像：支払い方法一覧" width="940" height="142" loading="lazy" decoding="async">
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section class="p-flow">
    <div class="l-inner p-flow__inner">
      <h2 class="p-flow__title">教習の流れ</h2>
      <div class="p-flow__contents">
        <p class="p-flow__time">
          <span class="p-flow__time--label">初回教習（1.5時間）</span>①9:00～ ②11:00～ ③13:00～ ④15:00～ ⑤17:00～
        </p>
        <div class="p-flow__wrap">
          <div class="p-flow__item">
            <p class="p-flow__step">STEP 1</p>
            <h3 class="p-flow__head">東武東上線　鶴ヶ島駅で待ち合わせ</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>