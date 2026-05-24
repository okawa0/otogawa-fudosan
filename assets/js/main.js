const PROPERTIES = [{
        type: "戸建て",
        title: "中央町ひかり台 中古戸建て 4DK",
        addr: "岡崎市中央町ひかり台",
        price: 1320,
        layout: "4DK",
        area: "建物98㎡／土地180㎡",
        year: "築22年"
      },
      {
        type: "戸建て",
        title: "中央町ひかり台 中古戸建て 2LDK",
        addr: "岡崎市中央町ひかり台",
        price: 2950,
        layout: "2LDK",
        area: "建物85㎡／土地150㎡",
        year: "築8年"
      },
      {
        type: "土地",
        title: "中央町さくら台 売土地",
        addr: "岡崎市中央町さくら台",
        price: 1300,
        layout: "-",
        area: "土地220㎡",
        year: "-"
      },
      {
        type: "土地",
        title: "中央町みどり台 売土地",
        addr: "岡崎市中央町みどり台",
        price: 1780,
        layout: "-",
        area: "土地280㎡",
        year: "-"
      },
      {
        type: "土地",
        title: "中央町ひかり台 売土地（広め）",
        addr: "岡崎市中央町ひかり台",
        price: 4000,
        layout: "-",
        area: "土地512.39㎡",
        year: "-"
      },
      {
        type: "戸建て",
        title: "緑町 中古戸建て 3LDK",
        addr: "岡崎市緑町",
        price: 1980,
        layout: "3LDK",
        area: "建物92㎡／土地165㎡",
        year: "築15年"
      },
      {
        type: "賃貸",
        title: "中央町 賃貸アパート 2DK",
        addr: "岡崎市中央町",
        price: 6.8,
        layout: "2DK",
        area: "45㎡",
        year: "築12年",
        rent: true
      },
      {
        type: "賃貸",
        title: "岡崎市内 貸事務所",
        addr: "岡崎市内",
        price: 18,
        layout: "事務所",
        area: "80㎡",
        year: "-",
        rent: true
      },
      {
        type: "賃貸",
        title: "中央町 月極駐車場",
        addr: "岡崎市中央町",
        price: 0.8,
        layout: "駐車場",
        area: "1台分",
        year: "-",
        rent: true
      },
      {
        type: "戸建て",
        title: "岡崎市北部 新築戸建て 4LDK",
        addr: "岡崎市北部",
        price: 3680,
        layout: "4LDK",
        area: "建物105㎡／土地180㎡",
        year: "新築"
      },
    ];

    function priceLabel(p) {
      if (p.rent) return p.price.toLocaleString() + '<span class="property__price-unit">万円/月</span>';
      return p.price.toLocaleString() + '<span class="property__price-unit">万円</span>';
    }

    function tagClass(t) {
      if (t === "土地") return "property__tag--land";
      if (t === "賃貸") return "property__tag--rent";
      return "";
    }

    function renderProperty(p, container) {
      const div = document.createElement("article");
      div.className = "property";
      div.innerHTML = `
    <div class="property__img">
      <span class="property__tag ${tagClass(p.type)}">${p.type}</span>
      <span class="property__img-icon">○</span>
    </div>
    <div class="property__body">
      <h4 class="property__title">${p.title}</h4>
      <div class="property__addr">${p.addr}</div>
      <div class="property__price">${priceLabel(p)}</div>
      <div class="property__spec">
        <div class="property__spec-item">間取<strong class="property__spec-value">${p.layout}</strong></div>
        <div class="property__spec-item">面積<strong class="property__spec-value" style="font-size:11px">${p.area.split('／')[0]}</strong></div>
        <div class="property__spec-item">築年<strong class="property__spec-value">${p.year}</strong></div>
      </div>
      <div class="property__actions">
        <a href="tel:0000000000" class="property__action-link property__tel-btn">電話する</a>
        <a href="#" class="property__action-link property__mail-btn" onclick="navTo('contact');return false">メール</a>
      </div>
    </div>
  `;
      container.appendChild(div);
    }

    function renderFeatured() {
      const c = document.getElementById("featured-list");
      c.innerHTML = "";
      PROPERTIES.slice(0, 4).forEach(p => renderProperty(p, c));
    }

    function filterProperties() {
      const t = document.getElementById("f-type").value;
      const pmax = document.getElementById("f-price").value;
      const k = document.getElementById("f-key").value.trim();
      const c = document.getElementById("property-list");
      c.innerHTML = "";
      let n = 0;
      PROPERTIES.forEach(p => {
        if (t && p.type !== t) return;
        if (pmax && !p.rent && p.price > parseInt(pmax)) return;
        if (k && !(p.title.includes(k) || p.addr.includes(k))) return;
        renderProperty(p, c);
        n++;
      });
      document.getElementById("f-result").textContent = n + "件 該当しました";
      if (n === 0) c.innerHTML = '<p style="padding:40px;background:var(--paper-light);border:1px solid var(--line);text-align:center;color:var(--muted)">該当する物件がありませんでした。条件を変えて再度お試しください。</p>';
    }

    function heroSearch() {
      document.getElementById("f-type").value = document.getElementById("hero-type").value;
      document.getElementById("f-price").value = document.getElementById("hero-price").value;
      document.getElementById("f-key").value = document.getElementById("hero-key").value;
      navTo("properties");
      filterProperties();
    }

    function navTo(id) {
      document.querySelectorAll(".section").forEach(s => s.classList.remove("active"));
      const tgt = document.getElementById("sec-" + id);
      if (tgt) tgt.classList.add("active");
      document.querySelectorAll(".site-nav__link").forEach(a => a.classList.remove("active"));
      const navA = document.querySelector('.site-nav__link[data-sec="' + id + '"]');
      if (navA) navA.classList.add("active");
      window.scrollTo({
        top: 0,
        behavior: "instant"
      });
      if (id === "properties") filterProperties();
    }

    document.addEventListener("click", function(e) {
      const a = e.target.closest("[data-sec]");
      if (a) {
        e.preventDefault();
        navTo(a.dataset.sec);
      }
    });

    function toggleFaq(el) {
      el.parentElement.classList.toggle("faq-item--open");
    }

    function submitForm(e) {
      e.preventDefault();
      const r = document.getElementById("submit-result");
      r.classList.add("submit-result--show");
      r.textContent = "✓ お問い合わせを受け付けました。2営業日以内にご返信いたします。お急ぎの場合は 000-0000-0000 までお電話ください。";
      e.target.reset();
      r.scrollIntoView({
        behavior: "smooth",
        block: "center"
      });
      return false;
    }

    const CHAT_TREE = {
      root: {
        msg: "ご質問の種類をお選びください。",
        opts: [{
            label: "物件を探したい",
            goto: "property"
          },
          {
            label: "物件を売りたい・査定",
            goto: "sell"
          },
          {
            label: "営業時間・店舗情報",
            goto: "info"
          },
          {
            label: "仲介手数料について",
            goto: "fee"
          },
          {
            label: "土地活用・解体の相談",
            goto: "land"
          },
          {
            label: "その他のお問い合わせ",
            goto: "other"
          },
        ]
      },
      property: {
        msg: "物件の種別をお選びください。",
        opts: [{
            label: "戸建て・土地（購入）",
            action: () => {
              navTo("properties");
              document.getElementById("f-type").value = "戸建て";
              filterProperties();
              toggleChat();
            }
          },
          {
            label: "賃貸物件",
            action: () => {
              navTo("properties");
              document.getElementById("f-type").value = "賃貸";
              filterProperties();
              toggleChat();
            }
          },
          {
            label: "全物件を見る",
            action: () => {
              navTo("properties");
              toggleChat();
            }
          },
        ]
      },
      sell: {
        msg: "売却査定は無料です。机上査定なら最短当日〜2営業日で結果をお知らせします。詳しくはお問い合わせフォームからご連絡ください。",
        opts: [{
            label: "お問い合わせフォームへ",
            action: () => {
              navTo("contact");
              toggleChat();
            }
          },
          {
            label: "電話で相談する",
            action: () => {
              location.href = "tel:0000000000";
            }
          },
        ]
      },
      info: {
        msg: "営業時間：9:00〜18:00／定休日：水曜日（土日祝も予約で対応可）／所在地：愛知県岡崎市中央1-2-3／TEL：000-0000-0000",
        opts: [{
            label: "会社概要を見る",
            action: () => {
              navTo("company");
              toggleChat();
            }
          },
          {
            label: "電話する",
            action: () => {
              location.href = "tel:0000000000";
            }
          },
        ]
      },
      fee: {
        msg: "売買仲介手数料は宅建業法上限（価格400万円超で価格×3%＋6万円＋消費税）まで。賃貸は賃料1ヶ月分＋消費税まで。",
        opts: [{
          label: "よくある質問を見る",
          action: () => {
            navTo("faq");
            toggleChat();
          }
        }, ]
      },
      land: {
        msg: "土地活用は駐車場・賃貸住宅・売却・福祉施設用地など多様にご提案します。建物解体・塗装も自社対応です。ご相談は無料です。",
        opts: [{
            label: "サービス内容を見る",
            action: () => {
              navTo("services");
              toggleChat();
            }
          },
          {
            label: "問い合わせフォームへ",
            action: () => {
              navTo("contact");
              toggleChat();
            }
          },
        ]
      },
      other: {
        msg: "お問い合わせフォーム、またはお電話で承ります。",
        opts: [{
            label: "問い合わせフォームへ",
            action: () => {
              navTo("contact");
              toggleChat();
            }
          },
          {
            label: "電話する",
            action: () => {
              location.href = "tel:0000000000";
            }
          },
        ]
      },
    };

    function renderChat(node) {
      const body = document.getElementById("chat-body");
      body.innerHTML = "";
      const p = document.createElement("p");
      p.textContent = CHAT_TREE[node].msg;
      body.appendChild(p);
      const opts = document.createElement("div");
      opts.className = "chatbot__opts";
      CHAT_TREE[node].opts.forEach(o => {
        const b = document.createElement("button");
        b.textContent = "▶ " + o.label;
        b.onclick = () => {
          if (o.action) o.action();
          else if (o.goto) renderChat(o.goto);
        };
        opts.appendChild(b);
      });
      body.appendChild(opts);
      if (node !== "root") {
        const back = document.createElement("a");
        back.className = "chatbot__back";
        back.textContent = "← 最初に戻る";
        back.onclick = (e) => {
          e.preventDefault();
          renderChat("root");
        };
        body.appendChild(back);
      }
    }

    function toggleChat() {
      const c = document.getElementById("chatbot");
      c.classList.toggle("chatbot--open");
      if (c.classList.contains("chatbot--open")) renderChat("root");
    }

    renderFeatured();