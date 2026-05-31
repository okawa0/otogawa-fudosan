    function filterProperties() {
      const t = document.getElementById("f-type").value;
      const pmax = document.getElementById("f-price").value;
      const k = document.getElementById("f-key").value.trim();
      const c = document.getElementById("property-list");
      let n = 0;
      let empty = c.querySelector(".property-empty");
      const cards = c.querySelectorAll(".property");

      if (!empty) {
        empty = document.createElement("p");
        empty.className = "property-empty";
        empty.textContent = "該当する物件がありませんでした。条件を変えて再度お試しください。";
        empty.hidden = true;
        c.appendChild(empty);
      }

      cards.forEach(card => {
        const type = card.dataset.type || "";
        const title = card.dataset.title || "";
        const address = card.dataset.address || "";
        const price = parseFloat(card.dataset.price || "0");
        const isRent = card.dataset.rent === "1";
        let visible = true;

        if (t && type !== t) visible = false;
        if (pmax && !isRent && price > parseInt(pmax, 10)) visible = false;
        if (k && !(title.includes(k) || address.includes(k))) visible = false;

        card.hidden = !visible;
        if (!visible) return;
        n++;
      });

      document.getElementById("f-result").textContent = n + "件 該当しました";

      empty.hidden = n !== 0;
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

    filterProperties();
