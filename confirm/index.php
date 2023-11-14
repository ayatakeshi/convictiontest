<?php
$name = $_POST['name'];
$phonetic = $_POST['phonetic'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];
?>


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

    <div class="p-confirm">
      <div class="p-confirm__container">
        <h2 class="p-confirm__heading">
          入力内容を確認後、下記ボタンにて送信してください。
        </h2>

        <form
          id="contactForm"
          action="/thanks/"
          method="post"
        >
            <input type="hidden" name="name" value="<?=$name?>">
            <input type="hidden" name="phonetic" value="<?=$phonetic?>">
            <input type="hidden" name="mail" value="<?=$mail?>">
            <input type="hidden" name="phone" value="<?=$phone?>">
            <input type="hidden" name="comments" value="<?=$comments?>">

          <div class="p-confirm__list">
            <div class="p-confirm__item">
              <div class="p-confirm__labelWrap">
                <label>お名前<span>必須</span></label>
              </div>
              <div class="p-confirm__text">
                <?=$name?>
              </div>
            </div>

            <div class="p-confirm__item">
              <div class="p-confirm__labelWrap">
                <label>お名前フリガナ<span>必須</span></label>
              </div>
              <div class="p-confirm__text">
                <?=$phonetic?>
              </div>
            </div>

            <div class="p-confirm__item">
              <div class="p-confirm__labelWrap">
                <label>メールアドレス<span>必須</span></label>
              </div>
              <div class="p-confirm__text">
                <?=$mail?>
              </div>
            </div>

            <div class="p-confirm__item">
              <div class="p-confirm__labelWrap">
                <label>電話番号</label>
              </div>
              <div class="p-confirm__text">
                <?=$phone?>
              </div>
            </div>

            <div class="p-confirm__item">
              <div class="p-confirm__labelWrap">
                <label>お問い合わせ内容</label>
              </div>
              <div class="p-confirm__text">
                <?=$comments?>
              </div>
            </div>
          </div>

          <div class="p-confirm__buttonList">

            <a
              href="#" onclick="window.history.back(); return false;"
              class="c-iconButton p-confirm__button p-confirm__button--return"
            >
              RETURN
            </a>
            <button
              type="submit"
              name="donate"
              id="submit"
              class="c-iconButton c-iconButton--send p-confirm__button"
            >
              SEND
            </button>
          </form>
        </div>
      </div>
    </div>
  </main>

<?php
  include('../include/footer.php');
?>
