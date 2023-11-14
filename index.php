<?php
  include('./include/head.php');
  include('./include/header.php');
?>

<div class="p-mv">
  <div class="js-slick-mv p-mv__slick">
    <div class="p-mv__item p-mv__item--01"></div>
    <div class="p-mv__item p-mv__item--02"></div>
    <div class="p-mv__item p-mv__item--03"></div>
    <!-- <div class="p-mv__item p-mv__item--04"></div> -->
  </div>
  <div class="p-mv__inner">
    <p class="p-mv__message">
      <img src="/assets/images/home/message.png" alt="" width="1273" height="328">
    </p>

    <a href="/contact/" class="c-iconButton c-iconButton--contact p-mv__button"
      >CONTACT</a
    >
  </div>
</div>

<main id="top" class="js-fadeIn">
  <section class="p-homeMessage">
    <div class="p-homeMessage__container">
      <div class="c-heading js-fadeIn">
        <h2 class="c-heading__title">POLICY</h2>
      </div>

      <dl class="p-homeMessage__content js-fadeIn">
        <dt>いつまでも続く<br class="is-sp" />暖かい居場所を作ります。</dt>
        <dd>
          人の温もりを感じる介護業界に<br class="is-sp" />
          テクノロジーで貢献します。<br />
          仲間と作った温もりある環境を未来へ繋げます。
        </dd>
      </dl>
    </div>
  </section>

  <section class="p-homeBusiness">
    <div class="p-homeBusiness__container">
      <div class="c-heading js-fadeIn">
        <h2 class="c-heading__title">BUSINESS</h2>
        <p class="c-heading__text">事業紹介</p>
      </div>

      <ul class="p-homeBusiness__list">
        <li class="p-homeBusiness__item js-fadeIn">
          <a href="/business/index.php#01">
            <img
              data-src="/assets/images/home/img_01.png"
              class="lazyload"
              alt="システムエンジニアリングサービス（SES事業部）"
            />
            <p class="p-homeBusiness__title">
            システムエンジニアリング<br>サービス（SES事業部）
            </p>
          </a>
        </li>

        <li class="p-homeBusiness__item js-fadeIn">
          <a href="/business/index.php#02">
            <img
              data-src="/assets/images/home/img_02.png"
              class="lazyload"
              alt="SE受託開発"
            />
            <p class="p-homeBusiness__title">SE受託開発</p>
          </a>
        </li>

        <li class="p-homeBusiness__item js-fadeIn">
          <a href="/business/index.php#03">
            <img
              data-src="/assets/images/home/img_03.png"
              class="lazyload"
              alt="プログラミング学習支援サービス"
            />
            <p class="p-homeBusiness__title">プログラミング<br>学習支援サービス</p>
          </a>
        </li>
      </ul>
      <a href="/business/" class="c-button p-homeBusiness__button js-fadeIn"
        >MORE</a
      >
    </div>
  </section>

  <section class="p-homeSection p-homeSection--about">
    <div class="p-homeSection__container">
      <div class="c-heading js-fadeIn">
        <h2 class="c-heading__title">ABOUT US</h2>
        <p class="c-heading__text">会社紹介</p>
      </div>

      <div class="p-homeSection__inner js-fadeIn">
        <p class="p-homeSection__imageWrap">
          <img
            data-src="/assets/images/home/img_04.png"
            class="lazyload"
            alt="私たちの理念"
            width="928"
            height="648"
          />
        </p>
        <div class="p-homeSection__contentWrap">
          <dl class="p-homeSection__content">
            <dt>私たちの理念</dt>
            <dd>
              繋がる人々の目標を会社の「目標」にします。<br />
              必ず力になれるという「気持ち」で向き合います。<br />
              一歩ずつ進むあなたの「居場所」になれるよう、<br class="is-sp" />
              充実した環境を社員全員で作ります。
            </dd>
          </dl>
          <a href="./about/" class="c-button p-homeSection__button">MORE</a>
        </div>
      </div>
    </div>
  </section>

  <section class="p-homeSection p-homeSection--join">
    <div class="p-homeSection__container">
      <div class="c-heading js-fadeIn">
        <h2 class="c-heading__title">JOIN US</h2>
        <p class="c-heading__text">採用情報</p>
      </div>

      <div class="p-homeSection__inner js-fadeIn">
        <p class="p-homeSection__imageWrap">
          <img
            data-src="/assets/images/home/img_05.png"
            class="lazyload c-shadow"
            alt="あなたの居場所"
            width="928"
            height="648"
            style="border-radius:4px;"
          />
        </p>
        <div class="p-homeSection__contentWrap">
          <dl class="p-homeSection__content">
            <dt>あなたの居場所</dt>
            <dd>
              ゼロから始める一歩を共に進んでいきたい！<br />
              働くあなたを全力でサポートします。
            </dd>
          </dl>
          <a href="./join/" class="c-button p-homeSection__button">MORE</a>
        </div>
      </div>
    </div>
  </section>

  <section class="p-homeSection p-homeSection--contact">
    <div class="p-homeSection__container">
      <div class="c-heading js-fadeIn">
        <h2 class="c-heading__title">CONTACT</h2>
        <p class="c-heading__text">お問い合わせ</p>
      </div>

      <div class="p-homeSection__inner js-fadeIn">
        <p class="p-homeSection__imageWrap">
          <img
            data-src="/assets/images/home/img_06.png"
            class="lazyload c-shadow"
            alt=""
            style="border-radius:4px;"
          />
        </p>
        <div class="p-homeSection__contentWrap">
          <dl class="p-homeSection__content">
            <dt>私たちと繋がる</dt>
            <dd>
              資料請求、ご質問などは下記のボタンから<br/>
              お進みください。
            </dd>
          </dl>
          <a
            href="/contact/"
            class="c-iconButton c-iconButton--contact p-homeSection__button p-homeSection__contactButton"
            >CONTACT</a
          >
        </div>
      </div>
    </div>
  </section>

  <div class="p-pazzle">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</main>
<div class="c-curtain c-curtain--01 c-curtain--blue"></div>
<div class="c-curtain c-curtain--02 c-curtain--blue"></div>

<?php
  include('./include/footer.php');
?>

