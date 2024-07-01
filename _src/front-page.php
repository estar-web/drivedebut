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
      <h2 class="p-flow__title js-in-view fade-in-up"><span>教習の流れ</span></h2>
      <div class="p-flow__contents">
        <video class="p-flow__movie" src="<?php echo get_template_directory_uri(); ?>/assets/images/movie-flow.mp4" controls width="600" height="400"></video>
        <p class="p-flow__time js-in-view fade-in-up">
          <span class="p-flow__time--label">初回教習（1.5時間）</span>①9:00～ ②11:00～ ③13:00～ ④15:00～ ⑤17:00～
        </p>
        <div class="p-flow__wrap js-in-view fade-in-up">
          <?php
          $flow_items = [
            [
              'head' => '東武東上線　鶴ヶ島駅で待ち合わせ',
              'img' => 'picture-flow1.webp',
              'text' => '&emsp;待ち合わせ時間は9:00、11:00、13:00、15:00、17:00から選びご予約下さい。<br><br>&emsp;東武東上線鶴ヶ島駅改札出口でお待ちしております。目印は黄色の名札です。'
            ],
            [
              'head' => 'いよいよ教習スタート！',
              'img' => 'picture-flow2.webp',
              'text' => '&emsp;初回は教習車での講習です。<br><br>&emsp;東武東上線鶴ヶ島駅改札出口でお待ちしております。目印は黄色の名札です。'
            ],
            [
              'head' => '次回に向けてカウンセリング',
              'img' => 'picture-flow3.webp',
              'text' => '&emsp;おひとりおひとり運転の目的は違うもの。<br>&emsp;そしてどんな練習が必要かも人それぞれ。<br><br>&emsp;お客様のお話から適切な教習のゴールやプランをご提案いたします。<br><br>&emsp;もちろん「自信がついた！」ということであれば初回教習のみでもOK。嬉しい限りです。'
            ],
          ];
          $step = 1;
          foreach ($flow_items as $item) :
          ?>
            <div class="p-flow__item">
              <hgroup class="p-flow__head">
                <p class="p-flow__step">STEP <?php echo $step; ?></p>
                <h3 class="p-flow__lead"><?php echo $item['head']; ?></h3>
              </hgroup>
              <figure class="p-flow__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $item['img']; ?>" alt="写真：インストラクターの写真" width="214" height="160" loading="lazy" decoding="async">
              </figure>
              <div class="p-flow__body">
                <p class="p-flow__text">
                  <?php echo $item['text']; ?>
                </p>
              </div>
            </div>
          <?php
            $step++;
          endforeach;
          ?>
        </div>

        <p class="p-flow__time js-in-view fade-in-up">
          <span class="p-flow__time--label">２回目以降</span>
        </p>
        <div class="p-flow__wrap js-in-view fade-in-up">
          <?php
          $flow_items = [
            [
              'head' => 'インストラクターと待ち合わせ',
              'img' => 'picture-flow4.webp',
              'text' => '&emsp;　「出張教習コース」の場合はインストラクターがお客様のご自宅などご希望の場所に伺います。<br><br>&emsp;「鶴ヶ島駅発教習車コース」の場合は東武東上線鶴ヶ島駅で待ち合わせです。'
            ],
            [
              'head' => 'さあ、教習スタート！',
              'img' => 'picture-flow5.webp',
              'text' => '&emsp;初回教習時のカウンセリングの際に決定したプランをもとに教習を行います。<br><br>&emsp;駐車の練習や高速教習、ガソリンの入れ方など教習内容はさまざまなことができます。'
            ],
            [
              'head' => 'お疲れ様でした',
              'img' => 'picture-flow6.webp',
              'text' => '&emsp;きっとあなたは運転に自信がついているはず。<br><br>&emsp;運転の怖さが楽しさに変わっているのでは？'
            ],
          ];
          $step = 1;
          foreach ($flow_items as $item) :
          ?>
            <div class="p-flow__item">
              <hgroup class="p-flow__head">
                <p class="p-flow__step">STEP <?php echo $step; ?></p>
                <h3 class="p-flow__lead"><?php echo $item['head']; ?></h3>
              </hgroup>
              <figure class="p-flow__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $item['img']; ?>" alt="写真：インストラクターの写真" width="214" height="160" loading="lazy" decoding="async">
              </figure>
              <div class="p-flow__body">
                <p class="p-flow__text">
                  <?php echo $item['text']; ?>
                </p>
              </div>
            </div>
          <?php
            $step++;
          endforeach;
          ?>
        </div>
        <div class="p-flow__map js-in-view fade-in-up">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3230.4099652787604!2d139.4211490772867!3d35.93693987250597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018d7168086c603%3A0xb04638166d5063e6!2z6ba044O25bO26aeF!5e0!3m2!1sja!2sjp!4v1719241799872!5m2!1sja!2sjp" width="355" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="p-flowBenefit js-in-view fade-in-up">
          <h3 class="p-flowBenefit__head">
            <p class="p-flowBenefit__head--sub">お客様特典</p>
            <p class="p-Benefit__head--main"><span>困ったときのアフターフォロー</span></p>
          </h3>
          <p class="p-flowBenefit__text">
            &emsp;教習を終えておひとりで運転していると色々疑問やお困りごとがでてくるのではないでしょうか。<br>
            <br>
            &emsp;「レンタカーやカーシェアリングってどうやって利用するの？」<br>
            &emsp;「車検って何が必要なの？」などなど。<br>
            <br>
            &emsp;そんなときはお気軽にLINEで質問や相談してください。<br>
            <br>
            &emsp;できる限りアドバイスいたします。<br>
          </p>
          <p class="p-flowBenefit__attention">
            ※問題の解決を補償するものではありません。<br>
            ※事故など緊急の際はまず救急と警察にご連絡を。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="p-customer">
    <div class="l-inner p-customer__inner">
      <h2 class="p-customer__title c-title js-in-view fade-in-up">お客様の声</h2>
      <div class="p-customer__wrapper">
        <figure class="p-customer__img js-in-view fade-in-up">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-customer1.webp" alt="写真：お客様1" width="940" height="705" loading="lazy" decoding="async">
        </figure>
        <figure class="p-customer__img js-in-view fade-in-up">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-customer2.webp" alt="写真：お客様2" width="940" height="705" loading="lazy" decoding="async">
        </figure>
        <figure class="p-customer__img js-in-view fade-in-up">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-customer3.webp" alt="写真：お客様3" width="940" height="705" loading="lazy" decoding="async">
        </figure>
        <figure class="p-customer__img js-in-view fade-in-up">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-customer4.webp" alt="写真：お客様4" width="940" height="705" loading="lazy" decoding="async">
        </figure>
      </div>
    </div>
    <div class="p-customer__letters js-in-view fade-in-up">
      <figure class="p-customer__letter">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-customer5.webp" alt="写真：お客様5" width="427" height="240" loading="lazy" decoding="async">
      </figure>
      <figure class="p-customer__letter">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-customer6.webp" alt="写真：お客様6" width="427" height="240" loading="lazy" decoding="async">
      </figure>
      <figure class="p-customer__letter">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-customer7.webp" alt="写真：お客様7" width="427" height="240" loading="lazy" decoding="async">
      </figure>
    </div>
    <div class="l-inner p-customer__inner">
      <div class="p-customerOrigin js-in-view fade-in-up">
        <h2 class="p-customerOrigin__head">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deco-customer.webp" alt="アイコン：地球" width="25" height="25" loading="lazy" decoding="async">
          <p>おかげさまでたくさんのお客様にご利用いただいています</p>
        </h2>
        <div class="p-customerOrigin__body">
          <?php $fields = CFS()->get('origin');
          foreach ($fields as $field) :
          ?>
            <div class="p-customerOrigin__item">
              <p class="p-customerOrigin__territory"><?php echo $field['territory'] ?></p>
              <p class="p-customerOrigin__city">
                <?php
                $cities = $field['city_group'];
                if ($cities) {
                  $first = true;
                  foreach ($field['city_group'] as $city) {
                    if ($first) {
                      echo $city['city'];
                      $first = false;
                    } else {
                      echo '・' . $city['city'];
                    }
                  }
                }
                ?>
              </p>
            </div>
          <?php endforeach; ?>
          <p class="p-customerOrigin__appeal">
            <span class="p-customerOrigin__appeal--strong">20代～70代</span>のお客様にお越しいただいています！
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="p-instructor">
    <div class="l-inner p-instructor__inner">
      <h2 class="p-instructor__title c-title js-in-view fade-in-up">インストラクター紹介</h2>
      <div class="p-instructor__contents js-in-view fade-in-up">
        <p class="p-instructor__name">伊東&nbsp;孝&emsp;<span class="p-instructor__name--eg">Ito Takashi</span></p>
        <figure class="p-instructor__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-instructor.webp" alt="写真：伊東孝" width="700" height="700" loading="lazy" decoding="async">
        </figure>
        <p class="p-instructor__desc">
          &emsp;埼玉県の自動車教習所で約20年勤める。すべての教習と技能検定の資格を取得。また、カウンセラーの資格も持ち教習生に寄り添った教習を行っていた。資格といえばなぜか整体師、"ほめる達人検定２級"といった資格も持っている。趣味はクライミング、愛犬と遊ぶことなど。
        </p>
        <a href="https://www.instagram.com/drivedebut/" class="p-instructor__link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.webp" alt="アイコン：Instagram" width="40" height="40" loading="lazy" decoding="async">
        </a>
        <div class="p-instructorMessage js-in-view fade-in-up">
          <figure class="p-instructorMessage__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deco-flower.webp" alt="画像：花" width="290" height="140" loading="lazy" decoding="async">
          </figure>
          <div class="p-instructorMessage__body">
            <p class="p-instructorMessage__text">&emsp;まずは免許取得おめでとうございます。<br>
              <br>
              初めて免許証を受け取ったとき、「これで車の運転ができる！」って嬉しかったですよね。<br>
              <br>
              &emsp;でも同時に「自分ひとりで運転して大丈夫かな･･･？」という不安もあったのではないでしょうか。<br>
              <br>
              &emsp;まずは近場で練習！と思っても、<br>
              <br>
              &emsp;「もしぶつけてしまったら･･･。万が一事故にでもなったらどうしよう･･･」<br>
              <br>
              &emsp;なかなか一歩が踏み出せない。<br>
              <br>
              &emsp;かくいう私は免許を取って初めて運転したとき、発進し始めて１００メートルでぶつけてしまいました。<br>
              <br>
              &emsp;車も心もヘコみました（笑）<br>
              <br>
              <br>
              このサイトを見てくださっているあなたにはそんな思いはして欲しくない。<br>
              <br>
              &emsp;そんな想いから、あなたがゆとりある安全運転ができるように、そして私がそのサポートができるようにこのサービスをつくりました。<br>
              <br>
              <br>
              「運転を、あなたの日常に」、生活の一部にできるようにお手伝いさせて下さい。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-reserve">
    <div class="l-inner p-reserve__inner">
      <div class="p-reserve__announce js-in-view fade-in-up">
        <h2 class="p-reserve__title">ご予約</h2>
        <div class="p-reserve__contents">
          <ul class="p-reserve__list">
            <li class="p-reserve__item">ご予約は<span class="p-reserve__item--accent">ネット予約</span>が便利です。下のボタンからお進み下さい。</li>
            <li class="p-reserve__item"><span class="p-reserve__item--accent">お電話でのご予約</span>も受け付けております。ただし教習中などでお電話に出られない場合もございます。その際は留守番電話にお名前とお電話番号をお願いします。後ほどご連絡差し上げます。</li>
            <li class="p-reserve__item" data-list="strong">初回教習は、<span class="p-reserve__item--accent" data-list="marker">①9:00～ ②11:00～ ③13:00～ ④15:00～ ⑤17:00～</span>です。</li>
          </ul>
        </div>
      </div>
      <div class="p-reserve__info js-in-view fade-in-up">
        <div class="p-reserve__body">
          <div class="p-reserve__tel">
            <svg id="レイヤー_1" class="p-reserve__icon" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
              <defs>
                <style>
                  .cls-1 {
                    fill: #666;
                  }

                  .cls-2 {
                    fill: #e6e6e6;
                  }

                  .cls-3 {
                    fill: none;
                    stroke: #666;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    stroke-width: 2.16px;
                  }
                </style>
              </defs>
              <title>ic_tel</title>
              <path class="cls-1" d="M2.5,2.67H31.94A2.1,2.1,0,0,1,34,4.77V55.23a2.1,2.1,0,0,1-2.1,2.1H2.5a2.1,2.1,0,0,1-2.1-2.1V4.77A2.1,2.1,0,0,1,2.5,2.67ZM13,6.87h0a.63.63,0,0,0,.63.63H20.8a.63.63,0,0,0,.63-.63h0a.63.63,0,0,0-.63-.63H13.65A.63.63,0,0,0,13,6.87Zm1.05,46.26A3.15,3.15,0,1,0,17.22,50,3.15,3.15,0,0,0,14.07,53.13Z" />
              <rect id="path-3" class="cls-2" x="4.61" y="11.08" width="25.23" height="37.85" rx="0.42" ry="0.42" />
              <path class="cls-3" d="M39.42,33.74a5.29,5.29,0,0,0,0-7.48" />
              <path class="cls-3" d="M46.26,37.48a10.58,10.58,0,0,0,0-15" />
              <path class="cls-3" d="M52.32,45a21.16,21.16,0,0,0,0-29.93" />
            </svg>
            <div class="p-reserve__text">
              <p>電話でお問い合わせ・予約</p>
              <a href="tel:080-2165-8576">080-2165-8576</a>
            </div>
          </div>
        </div>
        <div class="p-reserve__btn">
          <a href="" class="p-reserve__link" target="_blank">便利なネット予約はコチラ</a>
        </div>
      </div>
      <div class="p-reservePrivacy js-in-view fade-in-up">
        <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="p-reservePrivacy__link">利用規約・プライバシーポリシー</a>
      </div>
    </div>
  </section>
  <hr class="c-border js-in-view fade-in-up" />
</main>
<?php get_footer(); ?>