<?php
  include('../include/head.php');
  include('../include/header.php');
?>

  <main class="l-main" id="aibou">
    <div class="c-pagetitle">
      <h2>
        <span>相棒 <br><i>あなただけのAIコンシェルジュ</i></span>
      </h2>
      <div id="pazzle-01"></div>
      <div id="pazzle-02"></div>
    </div>

    <div class="p-action">
      <div class="p-action__container">
        <ul class="p-action__list">
          <li id="01" class="p-action__item js-fadeIn">
            <p class="p-action__itemTitle">
              <span>相棒とは？</span>
            </p>
            <p class="p-action__imageWrap">
              <img
                src="/assets/images/aibou/img-01.png"
                alt="相棒とは？"
              />
            </p>
            <dl class="p-action__content">
              <dt class="is-pc">
              <span>相棒とは？</span>
              </dt>
              <dd>
                相棒とは、あなただけのChatGPTを管理するツールです。<br>あなただけの相棒を作成して、あなた好みに育成して、チャットで質問できます。
              </dd>
            </dl>
          </li>

          <li id="02" class="p-action__item js-fadeIn">
            <p class="p-action__itemTitle">
              <span>相棒にできること</span>
            </p>
            <p class="p-action__imageWrap">
              <img
                src="/assets/images/aibou/img-02.png"
                alt="相棒にできること"
              />
            </p>
            <dl class="p-action__content">
              <dt class="is-pc">
                <span>相棒にできること</span>
              </dt>
              <dd>
              どんな情報でも覚えさせることができます。<br>育成した相棒をチャットで質問したら答えてくれます。<br>あなたが覚えさせたいことアップデートし、相棒を育成しよう。
              </dd>
            </dl>
          </li>
        </ul>
      </div>
    </div>

    <div class="p-leadContact">
      <div class="p-leadContact__container">
        <h3 class="p-leadContact__heading">
          相棒についてのご質問などは下記のボタンからお進みください。
        </h3>
        <a
          class="c-btn__aibou"
          href="https://lin.ee/GFTBlIaQ"
          target="_blank">
          <img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0">
        </a>

        <div class="p-sns__icon">
          <a href="https://twitter.com/bot742577051755" target="_blank">
            <img src="../assets/images/aibou/icon-twitter.svg" alt="相棒 twitter SVG"/>
          </a>
          <a href="https://www.tiktok.com/@ai_aibou?is_from_webapp=1&sender_device=pc" target="_blank">
            <img src="../assets/images/aibou/icon-tiktok.svg" alt="相棒 tiktok SVG"/>
          </a>
        </div>
      </div>
    </div>




  </main>
  <div class="c-curtain c-curtain--01"></div>
  <div class="c-curtain c-curtain--02"></div>

<?php
  include('../include/footer.php');
?>