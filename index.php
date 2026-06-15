<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>乙川不動産株式会社｜愛知県岡崎市の不動産売買・賃貸・土地活用</title>
  <meta name="description" content="愛知県岡崎市中央の地域密着型不動産。不動産売買・賃貸仲介・物件管理・土地活用・建物解体・外壁塗装まで、岡崎の暮らしを一貫してサポートします。宅建免許 愛知県知事(0)第00000号。">
  <meta name="robots" content="index,follow">
  <link rel="icon" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/favicon1.ico?v=1'); ?>" type="image/ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="topbar">
    <div class="wrap">
      <div class="topbar__biz">営業時間 9:00–18:00　<strong class="topbar__biz-highlight">定休日</strong>　水曜日（土日祝もご予約で対応可）</div>
      <div class="topbar__tel">
        <span class="topbar__tel-label">お電話でのお問い合わせ</span>
        <a href="tel:0000000000" class="topbar__tel-link">000-0000-0000</a>
      </div>
    </div>
  </div>

  <header class="site-header">
    <div class="wrap">
      <a href="#" class="logo" data-sec="home">
        <div class="logo__mark">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="乙川不動産ロゴ">
        </div>
        <div class="logo__text">
          <div class="logo__name">乙川不動産</div>
          <div class="logo__sub">OTOGAWA REAL ESTATE</div>
        </div>
      </a>
      <a href="#" class="cta-header" data-sec="contact">無料相談・査定</a>
    </div>
  </header>

  <nav class="site-nav">
    <ul class="site-nav__list">
      <li class="site-nav__item"><a href="#" data-sec="home" class="site-nav__link active">ホーム</a></li>
      <li class="site-nav__item"><a href="#" data-sec="properties" class="site-nav__link">物件検索</a></li>
      <li class="site-nav__item"><a href="#" data-sec="services" class="site-nav__link">サービス内容</a></li>
      <li class="site-nav__item"><a href="#" data-sec="company" class="site-nav__link">会社概要</a></li>
      <li class="site-nav__item"><a href="#" data-sec="staff" class="site-nav__link">スタッフ紹介</a></li>
      <li class="site-nav__item"><a href="#" data-sec="reviews" class="site-nav__link">お客様の声</a></li>
      <li class="site-nav__item"><a href="#" data-sec="faq" class="site-nav__link">よくある質問</a></li>
      <li class="site-nav__item"><a href="#" data-sec="contact" class="site-nav__link">お問い合わせ</a></li>
    </ul>
  </nav>

  <main>

    <section class="section active" id="sec-home">

      <div class="hero">
        <picture class="hero__bg">
          <source media="(max-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero-sp.webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-pc.webp" alt="岡崎の風景" loading="eager" fetchpriority="high">
        </picture>
        <div class="wrap">
          <div class="hero__content">
            <div class="hero__eyebrow">愛知県岡崎市・地域密着 三十余年</div>
            <h2 class="hero__title">
              岡崎の<span class="hero__accent">土地</span>と<span class="hero__accent">暮らし</span>を、<br>
              一貫してお任せください。
              <span class="hero__small">— 売買・賃貸・土地活用・解体まで —</span>
            </h2>
            <p class="hero__lead">
              岡崎市中央を拠点に、地域の不動産取引をきめ細やかにサポート。売買仲介から賃貸管理、土地活用のご提案、建物解体・外壁塗装まで、ワンストップで対応する地域密着型不動産会社です。
            </p>
            <div class="hero__actions">
              <a href="#" class="btn btn-primary" data-sec="contact">無料相談はこちら</a>
              <a href="#" class="btn btn-ghost" data-sec="properties">物件を探す</a>
            </div>
            <div class="hero__meta">
              <div class="hero__meta-item">取扱物件数<strong class="hero__meta-value">120件超</strong></div>
              <div class="hero__meta-item">免許番号<strong class="hero__meta-value">愛知県知事(0)</strong></div>
              <div class="hero__meta-item">得意エリア<strong class="hero__meta-value">中央・緑町</strong></div>
            </div>
          </div>
          <div class="hero__search">
            <h3 class="hero__search-title">かんたん物件検索</h3>
            <div class="hero__search-sub">条件を選ぶだけで、すぐに該当物件が表示されます</div>
            <label class="hero__search-label">物件種別</label>
            <select id="hero-type" class="hero__search-select">
              <option value="">すべての種別</option>
              <option value="戸建て">戸建て</option>
              <option value="土地">土地</option>
              <option value="賃貸">賃貸</option>
            </select>
            <label class="hero__search-label">価格帯（売買のみ）</label>
            <select id="hero-price" class="hero__search-select">
              <option value="">指定なし</option>
              <option value="1500">1,500万円以下</option>
              <option value="3000">3,000万円以下</option>
              <option value="5000">5,000万円以下</option>
              <option value="99999">5,000万円超</option>
            </select>
            <label class="hero__search-label">キーワード（地名など）</label>
            <input type="text" id="hero-key" class="hero__search-input" placeholder="例：中央町">
            <button class="hero__search-btn" onclick="heroSearch()">この条件で物件を見る</button>
          </div>
        </div>
      </div>

      <div class="wrap">

        <div class="sec-head">
          <div class="sec-head__eyebrow">OUR STRENGTHS</div>
          <h2 class="sec-head__title">選ばれる三つの理由</h2>
          <div class="sec-head__deco"><span class="sec-head__deco-diamond"></span></div>
        </div>

        <div class="strengths">
          <div class="strength">
            <div class="strength__num">壱</div>
            <h3 class="strength__title">岡崎市北部に強い<br>地域密着の情報網</h3>
            <p class="strength__text">中央町・緑町・北部エリアの物件と相場、周辺環境を熟知。地元での営業歴が長く、市場に出る前の物件情報もご紹介可能です。</p>
          </div>
          <div class="strength">
            <div class="strength__num">弐</div>
            <h3 class="strength__title">売買から解体・塗装まで<br>ワンストップ対応</h3>
            <p class="strength__text">不動産仲介に加え、古家解体・外壁塗装・土地活用提案まで自社で完結。複数業者を探す手間とコストが省けます。</p>
          </div>
          <div class="strength">
            <div class="strength__num">参</div>
            <h3 class="strength__title">福祉・医療施設用地の<br>仲介実績</h3>
            <p class="strength__text">障害児施設・グループホーム・クリニック等の用地仲介に注力。用途地域の確認から建築可能性調査まで一貫サポート。</p>
          </div>
        </div>

        <div class="sec-head">
          <div class="sec-head__eyebrow">FEATURED PROPERTIES</div>
          <h2 class="sec-head__title">新着・おすすめ物件</h2>
          <div class="sec-head__deco"><span class="sec-head__deco-diamond"></span></div>
        </div>

        <div class="property-grid" id="featured-list">
          <?php
          $featured_properties = new WP_Query(
            array(
              'post_type'      => 'property',
              'posts_per_page' => 4,
              'meta_query'     => array(
                array(
                  'key'     => '_property_featured',
                  'value'   => '1',
                  'compare' => '=',
                ),
              ),
            )
          );

          if ( $featured_properties->have_posts() ) :
            while ( $featured_properties->have_posts() ) :
              $featured_properties->the_post();
              sample_fudosan_render_property_card( get_the_ID() );
            endwhile;
            wp_reset_postdata();
          else :
            ?>
            <p class="property-empty">おすすめ物件は現在準備中です。</p>
          <?php endif; ?>
        </div>

        <div style="text-align:center;margin:24px 0 48px">
          <a href="#" class="btn btn-primary" data-sec="properties">すべての物件を見る →</a>
        </div>

      </div>
    </section>

    <section class="section" id="sec-properties">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">PROPERTY SEARCH</div>
          <h2 class="sec-head__title">物件検索</h2>
          <div class="sec-head__deco"><span class="sec-head__deco-diamond"></span></div>
        </div>

        <div class="filter-bar">
          <div class="filter-bar__field">
            <label class="filter-bar__label">物件種別</label>
            <select id="f-type" class="filter-bar__select">
              <option value="">すべて</option>
              <option value="戸建て">戸建て</option>
              <option value="土地">土地</option>
              <option value="賃貸">賃貸</option>
            </select>
          </div>
          <div class="filter-bar__field">
            <label class="filter-bar__label">価格上限（売買）</label>
            <select id="f-price" class="filter-bar__select">
              <option value="">指定なし</option>
              <option value="1500">1,500万円以下</option>
              <option value="3000">3,000万円以下</option>
              <option value="5000">5,000万円以下</option>
              <option value="99999">5,000万円超</option>
            </select>
          </div>
          <div class="filter-bar__field">
            <label class="filter-bar__label">キーワード</label>
            <input type="text" id="f-key" class="filter-bar__input" placeholder="例：中央町">
          </div>
          <button class="filter-bar__btn" onclick="filterProperties()">絞り込む</button>
        </div>
        <div class="filter-bar__result" id="f-result"></div>

        <div class="property-grid" id="property-list">
          <?php
          $properties = new WP_Query(
            array(
              'post_type'      => 'property',
              'posts_per_page' => -1,
            )
          );

          if ( $properties->have_posts() ) :
            while ( $properties->have_posts() ) :
              $properties->the_post();
              sample_fudosan_render_property_card( get_the_ID() );
            endwhile;
            wp_reset_postdata();
          else :
            ?>
            <p class="property-empty">掲載中の物件は現在準備中です。</p>
          <?php endif; ?>
        </div>

        <p style="font-size:12px;color:var(--muted);margin:16px 0">
          ※ 掲載物件は一例です。最新情報は <a href="tel:0000000000" style="color:var(--shu);text-decoration:underline">000-0000-0000</a> までお問い合わせください。<br>
          ※ 価格は税込表示。仲介手数料は別途必要となります。
        </p>
      </div>
    </section>

    <section class="section" id="sec-services">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">SERVICES</div>
          <h2 class="sec-head__title">サービス内容</h2>
          <div class="sec-head__deco"><span class="sec-head__deco-diamond"></span></div>
        </div>

        <div class="services">
          <div class="service">
            <div class="service__head"><span class="service__label">SERVICE 01</span></div>
            <h3 class="service__title">不動産売買仲介</h3>
            <p class="service__text">戸建て・土地・マンションの売却および購入をサポート。査定・市場調査・広告出稿・契約手続きまで一貫対応します。<strong>査定は無料</strong>です。</p>
            <ul class="service__list">
              <li class="service__list-item">無料査定（机上査定／訪問査定）</li>
              <li class="service__list-item">媒介契約（一般・専任・専属専任）に対応</li>
              <li class="service__list-item">住宅ローン提携金融機関のご紹介</li>
              <li class="service__list-item">引渡し後のアフターフォロー</li>
            </ul>
          </div>
          <div class="service">
            <div class="service__head"><span class="service__label">SERVICE 02</span></div>
            <h3 class="service__title">賃貸仲介・物件管理</h3>
            <p class="service__text">住居用・事業用の賃貸物件のお部屋探しと、オーナー様向けの物件管理を行います。広告出稿による集客サポートも実施。</p>
            <ul class="service__list">
              <li class="service__list-item">住居・事務所・倉庫・店舗・駐車場の仲介</li>
              <li class="service__list-item">入居者募集・広告出稿による集客</li>
              <li class="service__list-item">家賃集金・滞納対応・契約更新事務</li>
              <li class="service__list-item">建物の維持管理・清掃手配</li>
            </ul>
          </div>
          <div class="service">
            <div class="service__head"><span class="service__label">SERVICE 03</span></div>
            <h3 class="service__title">土地活用・コンサルティング</h3>
            <p class="service__text">遊休地・相続地のご活用方法をご提案。立地条件と需要分析を踏まえた最適なプランをご提示します。<strong>ご相談は無料</strong>です。</p>
            <ul class="service__list">
              <li class="service__list-item">賃貸住宅・アパート建設プラン</li>
              <li class="service__list-item">駐車場経営（月極・コインパーキング）</li>
              <li class="service__list-item">事業用地としての売却・賃貸</li>
              <li class="service__list-item">福祉・医療施設用地としての活用</li>
            </ul>
          </div>
          <div class="service">
            <div class="service__head"><span class="service__label">SERVICE 04</span></div>
            <h3 class="service__title">建物解体・外壁塗装</h3>
            <p class="service__text">古家付き土地の解体、住宅の外壁塗装まで自社で対応。仲介から工事まで窓口を一本化でき、手続きがスムーズです。</p>
            <ul class="service__list">
              <li class="service__list-item">木造・鉄骨造・RC造の解体工事</li>
              <li class="service__list-item">アスベスト調査・適正処理</li>
              <li class="service__list-item">外壁塗装・屋根塗装の見積もり</li>
              <li class="service__list-item">解体後の整地・売却までサポート</li>
            </ul>
          </div>
        </div>

        <div class="process">
          <h3 class="process__title">ご売却の流れ</h3>
          <div class="process__steps">
            <div class="step">
              <div class="step__circle">1</div>
              <h4 class="step__title">お問い合わせ</h4>
              <p class="step__text">電話・メール・ご来店（無料）</p>
            </div>
            <div class="step">
              <div class="step__circle">2</div>
              <h4 class="step__title">物件査定</h4>
              <p class="step__text">机上または訪問査定</p>
            </div>
            <div class="step">
              <div class="step__circle">3</div>
              <h4 class="step__title">媒介契約</h4>
              <p class="step__text">査定価格にご納得後</p>
            </div>
            <div class="step">
              <div class="step__circle">4</div>
              <h4 class="step__title">販売活動</h4>
              <p class="step__text">広告掲載・購入希望者紹介</p>
            </div>
            <div class="step">
              <div class="step__circle">5</div>
              <h4 class="step__title">売買契約</h4>
              <p class="step__text">条件交渉・重要事項説明</p>
            </div>
            <div class="step">
              <div class="step__circle">6</div>
              <h4 class="step__title">決済・引渡し</h4>
              <p class="step__text">残代金受領・物件引渡し</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="section" id="sec-company">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">COMPANY PROFILE</div>
          <h2 class="sec-head__title">会社概要</h2>
          <div class="sec-head__deco"><span class="sec-head__deco-diamond"></span></div>
        </div>

        <div class="company-grid">
          <div class="company__info">
            <dl class="company__info-table">
              <dt class="company__info-term">商号</dt>
              <dd class="company__info-desc">乙川不動産株式会社</dd>
              <dt class="company__info-term">所在地</dt>
              <dd class="company__info-desc">〒000-0000<br>愛知県岡崎市中央1丁目2番地3</dd>
              <dt class="company__info-term">代表者</dt>
              <dd class="company__info-desc">代表取締役　田中 太郎<br>取締役社長　佐藤 花子<br>役員　鈴木 一郎</dd>
              <dt class="company__info-term">電話番号</dt>
              <dd class="company__info-desc"><a href="tel:0000000000" style="color:var(--shu);text-decoration:underline">000-0000-0000</a></dd>
              <dt class="company__info-term">FAX</dt>
              <dd class="company__info-desc">000-0000-0001</dd>
              <dt class="company__info-term">営業時間</dt>
              <dd class="company__info-desc">9:00 – 18:00</dd>
              <dt class="company__info-term">定休日</dt>
              <dd class="company__info-desc">水曜日（土日祝もご予約で対応）</dd>
              <dt class="company__info-term">事業内容</dt>
              <dd class="company__info-desc">不動産売買・賃貸仲介・物件管理／土地活用提案／建物解体・外壁塗装／福祉・医療施設用地仲介</dd>
              <dt class="company__info-term">免許番号</dt>
              <dd class="company__info-desc">宅地建物取引業<br>愛知県知事 (0) 第00000号</dd>
              <dt class="company__info-term">所属団体</dt>
              <dd class="company__info-desc">(公社)愛知県宅地建物取引業協会 愛知支部</dd>
              <dt class="company__info-term">取扱エリア</dt>
              <dd class="company__info-desc">愛知県岡崎市全域<br>（特に中央町・緑町・北部エリア）</dd>
              <dt class="company__info-term">グループ会社</dt>
              <dd class="company__info-desc">関連会社A<br>関連会社B<br>関連会社C</dd>
              <dt class="company__info-term">建設業許可</dt>
              <dd class="company__info-desc">愛知県知事 許可（0）第00000号</dd>
            </dl>
          </div>
          <div class="company__side">
            <div class="company__card">
              <h4 class="company__card-title">代表ごあいさつ</h4>
              <p class="company__card-text">当社は岡崎の地で長年にわたり、皆さまの「住まい」と「土地」のご相談をお受けしてまいりました。地域に根を下ろすからこそ見える物件の良さ、相場の機微、そして暮らしの文脈。一件一件のご縁を大切に、これからも誠実に向き合ってまいります。</p>
              <p style="margin-top:14px;text-align:right;font-family:var(--serif);font-size:15px;color:var(--gold-light)">代表取締役　田中 太郎</p>
            </div>
            <div class="company__map-card">
              <div class="company__map-placeholder">岡崎市中央 — Google Maps</div>
              <div class="company__map-text">
                <strong class="company__map-label">最寄駅</strong><br>
                名鉄「岡崎中央駅」より車で約15分／JR「岡崎駅」より車で約20分<br>
                <strong style="display:inline-block;margin-top:8px">駐車場</strong> 来客用スペースあり<br>
                <a href="https://www.google.com/maps/search/?api=1&amp;query=sample-city" target="_blank" rel="noopener" style="color:var(--shu);text-decoration:underline;display:inline-block;margin-top:8px;font-size:12px">→ Googleマップで見る</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="sec-staff">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">OUR TEAM</div>
          <h2 class="sec-head__title">スタッフ紹介</h2>
          <div class="sec-head__deco"><span class="sec-head__deco-diamond"></span></div>
        </div>

        <div class="staff-grid">
          <div class="staff-card">
            <img class="staff-card__avatar" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/ceo.webp'); ?>" alt="田中 太郎">
            <div class="staff-card__name">田中 太郎</div>
            <div class="staff-card__role">代表取締役</div>
            <p class="staff-card__text">創業以来、岡崎の不動産取引に携わってまいりました。土地活用と相続対策が得意分野です。</p>
          </div>
          <div class="staff-card">
            <div class="staff-card__avatar">花</div>
            <div class="staff-card__name">佐藤 花子</div>
            <div class="staff-card__role">取締役社長</div>
            <p class="staff-card__text">会社の経営を支え、お客様が安心してご相談いただける環境づくりに尽力しております。</p>
          </div>
          <div class="staff-card">
            <div class="staff-card__avatar">一</div>
            <div class="staff-card__name">鈴木 一郎</div>
            <div class="staff-card__role">役員 / 専任宅地建物取引士</div>
            <p class="staff-card__text">賃貸物件のご紹介、契約手続き、入居後のサポートまで担当。お気軽にご相談ください。</p>
          </div>
          <div class="staff-card">
            <div class="staff-card__avatar">管</div>
            <div class="staff-card__name">管理担当</div>
            <div class="staff-card__role">物件管理 / 工務担当</div>
            <p class="staff-card__text">賃貸管理、解体工事、塗装工事の窓口を担当。建物の維持管理についてご相談ください。</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="sec-reviews">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">CUSTOMER VOICES</div>
          <h2 class="sec-head__title">お客様の声</h2>
          <div class="sec-head__deco"><span class="sec-head__deco-diamond"></span></div>
        </div>

        <div class="review-grid">
          <div class="review">
            <p class="review__text">相続した実家の売却で相談しました。古家付きだったため解体も含めて一括で対応してもらえ、別々の業者を探す手間が省けました。査定額も近隣相場と乖離がなく、納得して任せられました。</p>
            <div class="review__who"><strong class="review__who-name">岡崎市内 60代男性</strong>　戸建て売却・解体</div>
          </div>
          <div class="review">
            <p class="review__text">グループホーム用地を探していて、用途地域や周辺環境まで丁寧に調査してくれました。建築会社との連携もスムーズで、計画通りに開設できました。</p>
            <div class="review__who"><strong class="review__who-name">医療法人 担当者様</strong>　施設用地仲介</div>
          </div>
          <div class="review">
            <p class="review__text">初めての一人暮らしで賃貸を契約。希望条件が細かかったのですが、何件も内見に付き合ってくださり、納得のいく物件に決まりました。</p>
            <div class="review__who"><strong class="review__who-name">岡崎市内 20代女性</strong>　賃貸契約</div>
          </div>
          <div class="review">
            <p class="review__text">親から相続した土地の活用方法を相談。駐車場経営と売却の両方の試算を出してもらえて、家族でじっくり判断できました。押しつけがましさが無く、相談しやすかったです。</p>
            <div class="review__who"><strong class="review__who-name">岡崎市内 50代女性</strong>　土地活用相談</div>
          </div>
        </div>

        <p style="font-size:12px;color:var(--muted);margin:0 0 24px">※ 個人情報保護のため、お客様情報の一部を抜粋・改変して掲載しています。</p>
      </div>
    </section>

    <section class="section" id="sec-faq">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">FREQUENTLY ASKED</div>
          <h2 class="sec-head__title">よくある質問</h2>
          <div class="sec-head__deco"><span class="sec-head__deco-diamond"></span></div>
        </div>

        <div class="faq-list">
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>査定にお金はかかりますか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">いいえ、査定は無料です。机上査定・訪問査定どちらも料金はかかりません。査定後に媒介契約をするかどうかはお客様の自由です。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>査定にはどれくらい時間がかかりますか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">机上査定（簡易査定）は最短当日〜2営業日、訪問査定は現地確認後3〜5営業日程度で結果をお伝えします。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>仲介手数料はいくらですか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">宅建業法で定められた上限額を頂戴しています。売買価格400万円超の場合、（売買価格×3%＋6万円）＋消費税が上限となります。賃貸の場合は賃料1ヶ月分（＋消費税）が上限です。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>遠方に住んでいますが、岡崎の物件を売却できますか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">もちろん可能です。書類のやり取りは郵送・電子契約に対応しております。決済時のみご来店いただくか、司法書士への委任で対応できます。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>古家付きの土地を売りたいのですが、解体してから売るべきですか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">物件の状態と買主の希望次第です。解体費用や税金（特定空家・更地の固定資産税等）も考慮して、最適なご提案をいたします。当社で解体工事まで一括対応も可能です。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>賃貸を借りるとき、初期費用はどれくらい必要ですか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">一般的には家賃の4〜5ヶ月分（敷金・礼金・前家賃・仲介手数料・火災保険等）が目安です。物件によって異なりますので、個別にご案内いたします。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>福祉施設用地を探していますが対応できますか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">はい、障害児施設・グループホーム・クリニック等の用地仲介に注力しています。用途地域・接道・建築可能性の調査までサポートします。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>水曜定休とのことですが、水曜に相談したい場合は？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">事前にご予約いただければ水曜日や夜間でも対応可能です。お電話またはお問い合わせフォームからご連絡ください。</div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="sec-contact">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">CONTACT US</div>
          <h2 class="sec-head__title">お問い合わせ</h2>
          <div class="sec-head__deco"><span class="sec-head__deco-diamond"></span></div>
        </div>

        <div class="contact-grid">
          <div class="contact__side">
            <h3 class="contact__side-title">お急ぎの方は<br>お電話が確実です</h3>
            <p style="font-size:13.5px;color:#333;line-height:1.85">物件のお問い合わせ・査定のご依頼・ご来店のご予約など、お気軽にどうぞ。</p>
            <div class="contact__big-tel">
              <span class="contact__tel-label">TEL</span>
              <a href="tel:0000000000" class="contact__tel-link"><strong class="contact__tel-number">000-0000-0000</strong></a>
            </div>
            <div class="contact__hours">
              <strong class="contact__hours-label">受付時間</strong>　9:00 – 18:00<br>
              <strong class="contact__hours-label">定休日</strong>　水曜日<br>
              （土日祝もご予約で対応可）
            </div>
          </div>

          <div class="contact__form">
            <h3 class="contact__form-title">メールでのお問い合わせ</h3>
            <p class="contact__lead">必要事項をご記入のうえ送信してください。<strong>2営業日以内</strong>にご返信いたします。</p>

            <form onsubmit="return submitForm(event)">
              <div class="form-row">
                <label class="form-row__label">お問い合わせ種別<span class="form-row__req">*</span></label>
                <select name="type" class="form-row__select" required>
                  <option value="">選択してください</option>
                  <option>物件購入の相談</option>
                  <option>物件売却の相談（査定希望）</option>
                  <option>賃貸物件の相談</option>
                  <option>土地活用の相談</option>
                  <option>福祉・医療施設用地の相談</option>
                  <option>解体・塗装の相談</option>
                  <option>その他</option>
                </select>
              </div>
              <div class="form-row">
                <label class="form-row__label">お名前<span class="form-row__req">*</span></label>
                <input type="text" name="name" class="form-row__input" required placeholder="例：田中 太郎">
              </div>
              <div class="form-row">
                <label class="form-row__label">電話番号<span class="form-row__req">*</span></label>
                <input type="tel" name="tel" class="form-row__input" required placeholder="例：000-0000-0000">
              </div>
              <div class="form-row">
                <label class="form-row__label">メールアドレス</label>
                <input type="email" name="email" class="form-row__input" placeholder="例：example@example.com">
              </div>
              <div class="form-row">
                <label class="form-row__label">ご希望の連絡方法</label>
                <div class="form-row__radio-group">
                  <label class="form-row__radio-label"><input type="radio" name="contact" value="tel" checked>電話</label>
                  <label class="form-row__radio-label"><input type="radio" name="contact" value="mail">メール</label>
                  <label class="form-row__radio-label"><input type="radio" name="contact" value="any">どちらでも</label>
                </div>
              </div>
              <div class="form-row">
                <label class="form-row__label">ご相談内容<span class="form-row__req">*</span></label>
                <textarea name="message" class="form-row__textarea" required placeholder="物件の所在地・ご予算・ご希望条件など、できるだけ具体的にお書きください。"></textarea>
              </div>
              <div class="form-privacy">
                <label><input type="checkbox" required> <a href="#" class="form-privacy__link" data-sec="legal">プライバシーポリシー</a>に同意する<span class="form-row__req">*</span></label>
              </div>
              <button type="submit" class="form-submit">送信する</button>
              <div id="submit-result" class="submit-result"></div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="sec-legal">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">LEGAL NOTICE</div>
          <h2 class="sec-head__title">特定商取引法に基づく表記・プライバシーポリシー</h2>
          <div class="sec-head__deco"><span class="sec-head__deco-diamond"></span></div>
        </div>

        <div class="legal-section">
          <h3 class="legal-section__subtitle">特定商取引法に基づく表記</h3>
          <div class="legal-table">
            <dl class="legal-table__table">
              <dt class="legal-table__term">事業者名</dt>
              <dd class="legal-table__desc">乙川不動産株式会社</dd>
              <dt class="legal-table__term">代表者</dt>
              <dd class="legal-table__desc">代表取締役 田中 太郎</dd>
              <dt class="legal-table__term">所在地</dt>
              <dd class="legal-table__desc">〒000-0000 愛知県岡崎市中央1丁目2番地3</dd>
              <dt class="legal-table__term">電話番号</dt>
              <dd class="legal-table__desc">000-0000-0000（受付時間 9:00–18:00／水曜定休）</dd>
              <dt class="legal-table__term">免許番号</dt>
              <dd class="legal-table__desc">宅地建物取引業 愛知県知事(0)第00000号</dd>
              <dt class="legal-table__term">所属団体</dt>
              <dd class="legal-table__desc">(公社)愛知県宅地建物取引業協会 愛知支部</dd>
              <dt class="legal-table__term">仲介手数料</dt>
              <dd class="legal-table__desc">宅建業法で定められた上限額の範囲内（売買：価格400万円超で価格×3%＋6万円＋消費税が上限／賃貸：賃料1ヶ月分＋消費税が上限）</dd>
              <dt class="legal-table__term">支払方法</dt>
              <dd class="legal-table__desc">銀行振込（売買契約成立時・決済時に分割してお支払い）</dd>
              <dt class="legal-table__term">キャンセル</dt>
              <dd class="legal-table__desc">媒介契約解除に関しては媒介契約書の規定に従います</dd>
            </dl>
          </div>

          <h3 class="legal-section__subtitle">プライバシーポリシー</h3>
          <p class="legal-section__text">乙川不動産株式会社（以下「当社」）は、個人情報保護法等の関連法令を遵守し、お客様の個人情報を以下の方針で取り扱います。</p>
          <ol class="legal-section__list">
            <li class="legal-section__list-item"><strong>取得・利用目的</strong>：物件のご紹介・契約手続き・アフターサービス・お問い合わせ対応のために必要な範囲で利用します。</li>
            <li class="legal-section__list-item"><strong>第三者提供</strong>：法令に基づく場合または契約履行に必要な場合（金融機関・司法書士等）を除き、第三者に提供しません。</li>
            <li class="legal-section__list-item"><strong>安全管理</strong>：個人情報への不正アクセス・紛失・改ざん等を防止するため、必要かつ適切な安全管理措置を講じます。</li>
            <li class="legal-section__list-item"><strong>開示・訂正・削除</strong>：ご本人からの請求があった場合、合理的な範囲で速やかに対応します。</li>
            <li class="legal-section__list-item"><strong>お問い合わせ窓口</strong>：個人情報に関するお問い合わせは 000-0000-0000 までご連絡ください。</li>
          </ol>

          <h3 class="legal-section__subtitle">免責事項</h3>
          <p class="legal-section__text">当サイトに掲載されている物件情報・価格は、取引状況により予告なく変更・削除される場合があります。最新情報は必ず当社までご確認ください。当サイトの利用により生じたいかなる損害についても、当社は責任を負いかねます。</p>
          <p class="legal-section__text">当サイトの内容（文章・画像・データ）の無断転載・複製を禁じます。</p>
        </div>
      </div>
    </section>

  </main>

  <button class="chat-toggle" onclick="toggleChat()">💬 ご質問はこちら</button>
  <div class="chatbot" id="chatbot">
    <div class="chatbot__header">
      <strong>かんたん質問ナビ</strong>
      <button class="chatbot__close" onclick="toggleChat()" aria-label="閉じる">×</button>
    </div>
    <div class="chatbot__body" id="chat-body"></div>
  </div>

  <footer class="site-footer">
    <div class="wrap">
      <div class="footer__grid">
        <div class="footer__brand">
          <a href="#" class="logo" data-sec="home">
            <div class="logo__mark">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="乙川不動産ロゴ">
            </div>
            <div class="logo__text">
              <div class="logo__name">乙川不動産</div>
              <div class="logo__sub">OTOGAWA REAL ESTATE</div>
            </div>
          </a>
          <p class="footer__brand-text">〒000-0000<br>愛知県岡崎市中央1丁目2番地3<br>TEL: 000-0000-0000<br>FAX: 000-0000-0001</p>
          <p class="footer__brand-text" style="margin-top:6px">営業時間 9:00–18:00／水曜定休</p>
          <div class="footer__license">
            宅地建物取引業<br>
            愛知県知事 (0) 第00000号
          </div>
        </div>
        <div class="footer__nav">
          <h4 class="footer__nav-heading">取扱業務</h4>
          <ul class="footer__nav-list">
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="services">不動産売買仲介</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="services">賃貸仲介・物件管理</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="services">土地活用提案</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="services">建物解体・塗装</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="services">福祉・医療用地</a></li>
          </ul>
        </div>
        <div class="footer__nav">
          <h4 class="footer__nav-heading">サイトメニュー</h4>
          <ul class="footer__nav-list">
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="home">ホーム</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="properties">物件検索</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="company">会社概要</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="staff">スタッフ紹介</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="reviews">お客様の声</a></li>
          </ul>
        </div>
        <div class="footer__nav">
          <h4 class="footer__nav-heading">サポート</h4>
          <ul class="footer__nav-list">
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="faq">よくある質問</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="contact">お問い合わせ</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="legal">特商法表記</a></li>
            <li class="footer__nav-item"><a href="#" class="footer__nav-link" data-sec="legal">プライバシーポリシー</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__copy">© 乙川不動産株式会社 All Rights Reserved.</div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>
