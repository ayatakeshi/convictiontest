<?php
  include('../include/head.php');
  include('../include/header.php');
?>

  <main class="l-main">
    <div class="c-pagetitle">
      <h2>
        <span>CONTACT</span>
      </h2>
      <div id="pazzle-01"></div>
      <div id="pazzle-02"></div>
    </div>

    <div class="p-contact">
      <div class="p-contact__container">
        <h2 class="p-confirm__heading">
          下記項目を入力して進んでください。
        </h2>

        <form
          id="contactForm"
          class="js-validation p-contact__form"
          name="contactForm"
          action="/confirm/"
          method="post"
        >
          <div class="p-contact__item">
            <div class="p-contact__labelWrap">
              <label>お名前<span>必須</span></label>
            </div>
            <input
              type="text"
              name="name"
              class=""
              placeholder="山田 太郎"
            />
          </div>

          <div class="p-contact__item">
            <div class="p-contact__labelWrap">
              <label>お名前フリガナ<span>必須</span></label>
            </div>
            <input
              type="text"
              name="phonetic"
              class=""
              placeholder="ヤマダ タロウ"
            />
          </div>

          <div class="p-contact__item">
            <div class="p-contact__labelWrap">
              <label>メールアドレス<span>必須</span></label>
            </div>
            <input
              type="text"
              name="mail"
              class=""
              placeholder="example@xxx.com"
            />
          </div>

          <div class="p-contact__item">
            <div class="p-contact__labelWrap">
              <label>電話番号</label>
            </div>
            <input
              type="text"
              name="phone"
              class=""
              placeholder="0123456789"
            />
          </div>

          <div class="p-contact__item">
            <div class="p-contact__labelWrap">
              <label>お問い合わせ内容</label>
            </div>
            <textarea
              rows="12"
              cols="5"
              name="comments"
              id="comments"
              class="form-control"
              placeholder=""
            ></textarea>
          </div>

          <button
            type="submit"
            name="donate"
            id="submit"
            class="c-iconButton c-iconButton--send p-contact__button"
          >
          NEXT
          </button>
        </form>
      </div>
    </div>
  </main>
  <div class="c-curtain c-curtain--01"></div>
  <div class="c-curtain c-curtain--02"></div>
<?php
  include('../include/footer.php');
?>
