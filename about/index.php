<?php
  include('../include/head.php');
  include('../include/header.php');
?>

  <main class="l-main">
    <div class="c-pagetitle pagetitle">
      <h2>
        <span>ABOUT US</span>
      </h2>
      <div id="pazzle-01"></div>
      <div id="pazzle-02"></div>
    </div>

    <div class="p-memeber">
      <div class="p-memeber__container">
        <div class="c-heading">
          <h2 class="c-heading__title">MEMBER</h2>
          <p class="c-heading__text">私たちの仲間</p>
        </div>

        <ul class="p-memeber__list js-slick-member">
          <li class="p-memeber__item">
            <p class="p-memeber__imageWrap">
              <img
                data-src="/assets/images/about/img_01.png"
                class="lazyload"
                alt="バックエンドエンジニア"
              />
            </p>
            <dl class="p-memeber__content">
              <dt>バックエンド<br class="is-sp">エンジニア</dt>
              <dd>
                自分の気持ちを大切に進みたい道へ進んでください。理想の働き方が出きます。
              </dd>
            </dl>
          </li>

          <li class="p-memeber__item">
            <p class="p-memeber__imageWrap">
              <img
                data-src="/assets/images/about/img_02.png"
                class="lazyload"
                alt="フロントエンドエンジニア"
              />
            </p>
            <dl class="p-memeber__content">
              <dt>フロントエンド<br class="is-sp">エンジニア</dt>
              <dd>
                WEBデザインを習得中です。<br>
                新しいことに挑戦することを応援してくれる会社です。
              </dd>
            </dl>
          </li>

          <li class="p-memeber__item">
            <p class="p-memeber__imageWrap">
              <img
                data-src="/assets/images/about/img_03.png"
                class="lazyload"
                alt="バックエンドエンジニア"
              />
            </p>
            <dl class="p-memeber__content">
              <dt>営業・<br class="is-sp">バックオフィス</dt>
              <dd>
                新卒で入社しました。あたたかい環境で、成長できていると実感しています。
              </dd>
            </dl>
          </li>
        </ul>
      </div>
    </div>

    <div class="p-company">
      <div class="p-company__container">
        <div class="c-heading">
          <h2 class="c-heading__title">COMPANY</h2>
          <p class="c-heading__text">会社概要</p>
        </div>

        <div class="p-company__inner">
          <div>
            <dl class="p-company__item">
              <dt>会社名</dt>
              <dd>株式会社CONVICTION</dd>
            </dl>
            <dl class="p-company__item">
              <dt>代表者</dt>
              <dd>森村有希央</dd>
            </dl>
            <dl class="p-company__item">
              <dt>所在地</dt>
              <dd>
                東京都渋谷区神南1-20-2<br  />第一清水ビル4F
              </dd>
            </dl>
            <dl class="p-company__item">
              <dt>設立</dt>
              <dd>2020年3月</dd>
            </dl>
            <dl class="p-company__item">
              <dt>資本金</dt>
              <dd>300万円</dd>
            </dl>
            <dl class="p-company__item">
              <dt>事業内容</dt>
              <dd>SES/受託開発</dd>
            </dl>
            <dl class="p-company__item">
              <dt>電話番号</dt>
              <dd><a href="tel:03-6260-8700">03-6260-8700</a></dd>
            </dl>
          </div>

          <div class="p-company__map">
            <iframe
              data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6109633676056!2d139.69799021744387!3d35.661955500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca88ae1bdff%3A0x6a162b1b76d106f!2z44CSMTUwLTAwNDEg5p2x5Lqs6YO95riL6LC35Yy656We5Y2X77yR5LiB55uu77yS77yQ4oiS77ySIOa4heawtOODk-ODqyA0Zg!5e0!3m2!1sja!2sjp!4v1667015530617!5m2!1sja!2sjp"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              class="lazyload"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="p-leadContact">
      <div class="p-leadContact__container">
        <h3 class="p-leadContact__heading">
          資料請求、ご質問などは下記のボタンからお進みください。
        </h3>
        <a
          href="/contact/"
          class="c-iconButton c-iconButton--contact p-leadContact__button"
          >CONTACT</a
        >
      </div>
    </div>
  </main>
  <div class="c-curtain c-curtain--01"></div>
  <div class="c-curtain c-curtain--02"></div>

<?php
  include('../include/footer.php');
?>

