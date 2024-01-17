<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head
  prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo get_ogp_type();?>: http://ogp.me/ns/<?php echo get_ogp_type();?>#">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.defer = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer',
      '<?php echo get_vars('site', 'gtm');?>'
    );
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo('charset');?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe
      src="https://www.googletagmanager.com/ns.html?id=<?php echo get_vars('site', 'gtm');?>"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <header class="c-header c-header--top u-bg-qua">
    <button type="button" class="o-box o-box--button o-box--square-button o-box--menu-btn u-mr-s" aria-label="menu open"
      aria-controls="sidebar" aria-expanded="false">
      <span class="c-menu-bars"></span>
    </button>
    <a href="<?php echo home_url('/');?>"
      class="o-icon-parent o-icon-parent--center o-icon-parent--gap-s c-header-link">
      <svg class="o-icon c-display-l" width="670" height="403" viewBox="0 0 670 403" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M586.221 268.039L502.504 402.075L418.733 268.039H586.221Z" fill="#69AEE0" />
        <path d="M334.996 402.075L418.744 268.029L502.492 402.075H334.996Z" fill="#70B1E1" />
        <path d="M418.723 268.039L334.996 402.075L251.246 268.039H418.723Z" fill="#92CAEF" />
        <path d="M167.497 402.075L251.245 268.029L334.993 402.075H167.497Z" fill="#92CAEF" />
        <path d="M0 402.075L83.7487 268.039L167.497 402.085L0 402.075Z" fill="#7EBAE6" />
        <path d="M670 134.035L586.252 268.039L502.491 134.035H670Z" fill="#85C1EB" />
        <path d="M418.743 268.039L502.481 134.035L586.218 268.039H418.743Z" fill="#7EBAE6" />
        <path d="M502.492 134.035L418.744 268.039L334.996 134.035H502.492Z" fill="#7BB8E5" />
        <path d="M251.246 268.039L334.996 134.035L418.723 268.039H251.246Z" fill="#85C1EB" />
        <path d="M334.993 134.035L251.245 268.039L167.497 134.035H334.993Z" fill="#73B2E2" />
        <path d="M83.749 268.039L167.498 134.035L251.225 268.039H83.749Z" fill="#67A0D3" />
        <path d="M502.491 134.035L586.231 0L669.989 134.045L502.491 134.035Z" fill="#99D2F3" />
        <path d="M334.996 134.035L418.744 0L502.492 134.045L334.996 134.035Z" fill="#82BEE9" />
        <path d="M167.497 134.035L251.245 0L334.993 134.045L167.497 134.035Z" fill="#73B2E2" />
        <path d="M251.225 0L167.498 134.035L83.749 0H251.225Z" fill="#65A5DA" />
      </svg>
      <span class="c-display-m u-font-logo u-flex-shrink-none">BLUE B NOSE</span>
    </a>
    <div class="o-cluster u-pc-only u-block-right">
      <a class="c-header-link c-header-link--icon" href="#" target="_blank" rel="noopener" aria-label="電話でお問い合わせ">
        <svg class="o-icon c-display-m" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M320 0H64C37.49 0 16 21.49 16 48v416C16 490.5 37.49 512 64 512h256c26.51 0 48-21.49 48-48v-416C368 21.49 346.5 0 320 0zM192 464c-17.75 0-32-14.25-32-32s14.25-32 32-32s32 14.25 32 32S209.8 464 192 464z"
            fill="currentColor"></path>
        </svg>
      </a>
      <a class="c-header-link c-header-link--icon"
        href="<?php echo home_url('/inquiry/');?>"
        target="_blank" rel="noopener" aria-label="メールでお問い合わせ">
        <svg class="o-icon c-display-m" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"
            fill="currentColor"></path>
        </svg>
      </a>
    </div>
  </header>
  <div class="c-sidebar u-bg-qua" id="sidebar" aria-hidden="true" tabindex="-1">
    <div class="c-header">
      <button type="button" class="o-box o-box--button o-box--square-button o-box--menu-btn u-mr-s"
        aria-label="menu open" aria-controls="sidebar" aria-expanded="false">
        <span class="c-menu-bars"></span>
      </button>
      <a href="<?php echo home_url('/');?>"
        class="o-icon-parent o-icon-parent--center o-icon-parent--gap-s c-header-link">
        <svg class="o-icon c-display-l" width="670" height="403" viewBox="0 0 670 403" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M586.221 268.039L502.504 402.075L418.733 268.039H586.221Z" fill="#69AEE0" />
          <path d="M334.996 402.075L418.744 268.029L502.492 402.075H334.996Z" fill="#70B1E1" />
          <path d="M418.723 268.039L334.996 402.075L251.246 268.039H418.723Z" fill="#92CAEF" />
          <path d="M167.497 402.075L251.245 268.029L334.993 402.075H167.497Z" fill="#92CAEF" />
          <path d="M0 402.075L83.7487 268.039L167.497 402.085L0 402.075Z" fill="#7EBAE6" />
          <path d="M670 134.035L586.252 268.039L502.491 134.035H670Z" fill="#85C1EB" />
          <path d="M418.743 268.039L502.481 134.035L586.218 268.039H418.743Z" fill="#7EBAE6" />
          <path d="M502.492 134.035L418.744 268.039L334.996 134.035H502.492Z" fill="#7BB8E5" />
          <path d="M251.246 268.039L334.996 134.035L418.723 268.039H251.246Z" fill="#85C1EB" />
          <path d="M334.993 134.035L251.245 268.039L167.497 134.035H334.993Z" fill="#73B2E2" />
          <path d="M83.749 268.039L167.498 134.035L251.225 268.039H83.749Z" fill="#67A0D3" />
          <path d="M502.491 134.035L586.231 0L669.989 134.045L502.491 134.035Z" fill="#99D2F3" />
          <path d="M334.996 134.035L418.744 0L502.492 134.045L334.996 134.035Z" fill="#82BEE9" />
          <path d="M167.497 134.035L251.245 0L334.993 134.045L167.497 134.035Z" fill="#73B2E2" />
          <path d="M251.225 0L167.498 134.035L83.749 0H251.225Z" fill="#65A5DA" />
        </svg>
        <span class="c-display-m u-font-logo u-flex-shrink-none">BLUE B NOSE</span>
      </a>
    </div>
    <nav class="o-stack u-mb-m">
      <a class="o-icon-parent o-icon-parent--center c-gnav-link"
        href="<?php echo home_url('/');?>">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
          <path
            d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"
            fill="currentColor"></path>
        </svg>
        <span class="u-text-weight-b c-content-l">ホーム</span>
      </a>
      <a class="o-icon-parent o-icon-parent--center c-gnav-link"
        href="<?php echo home_url('/service/');?>">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M0 144v288C0 457.6 22.41 480 48 480H96V96H48C22.41 96 0 118.4 0 144zM336 0h-160C150.4 0 128 22.41 128 48V480h256V48C384 22.41 361.6 0 336 0zM336 96h-160V48h160V96zM464 96H416v384h48c25.59 0 48-22.41 48-48v-288C512 118.4 489.6 96 464 96z"
            fill="currentColor"></path>
        </svg>
        <span class="u-text-weight-b c-content-l">業務案内</span>
      </a>
      <a class="o-icon-parent o-icon-parent--center c-gnav-link"
        href="<?php echo home_url('/price/');?>">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M159.1 198.3L261.4 46.25C271.2 31.54 291 27.57 305.8 37.37C320.5 47.18 324.4 67.04 314.6 81.75L219.8 223.1H272C289.7 223.1 304 238.3 304 255.1C304 273.7 289.7 287.1 272 287.1H192V319.1H272C289.7 319.1 304 334.3 304 352C304 369.7 289.7 384 272 384H192V448C192 465.7 177.7 480 159.1 480C142.3 480 127.1 465.7 127.1 448V384H47.1C30.33 384 15.1 369.7 15.1 352C15.1 334.3 30.33 319.1 47.1 319.1H127.1V287.1H47.1C30.33 287.1 15.1 273.7 15.1 255.1C15.1 238.3 30.33 223.1 47.1 223.1H100.2L5.374 81.75C-4.429 67.04-.456 47.18 14.25 37.37C28.95 27.57 48.82 31.54 58.62 46.25L159.1 198.3z"
            fill="currentColor"></path>
        </svg>
        <span class="u-text-weight-b c-content-l">料金案内</span>
      </a>
      <a class="o-icon-parent o-icon-parent--center c-gnav-link"
        href="<?php echo home_url('/faq/');?>">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M204.3 32.01H96c-52.94 0-96 43.06-96 96c0 17.67 14.31 31.1 32 31.1s32-14.32 32-31.1c0-17.64 14.34-32 32-32h108.3C232.8 96.01 256 119.2 256 147.8c0 19.72-10.97 37.47-30.5 47.33L127.8 252.4C117.1 258.2 112 268.7 112 280v40c0 17.67 14.31 31.99 32 31.99s32-14.32 32-31.99V298.3L256 251.3c39.47-19.75 64-59.42 64-103.5C320 83.95 268.1 32.01 204.3 32.01zM144 400c-22.09 0-40 17.91-40 40s17.91 39.1 40 39.1s40-17.9 40-39.1S166.1 400 144 400z"
            fill="currentColor"></path>
        </svg>
        <span class="u-text-weight-b c-content-l">よくあるご質問</span>
      </a>
      <a class="o-icon-parent o-icon-parent--center c-gnav-link"
        href="<?php echo home_url('/office/');?>">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M336 0C362.5 0 384 21.49 384 48V464C384 490.5 362.5 512 336 512H240V432C240 405.5 218.5 384 192 384C165.5 384 144 405.5 144 432V512H48C21.49 512 0 490.5 0 464V48C0 21.49 21.49 0 48 0H336zM64 272C64 280.8 71.16 288 80 288H112C120.8 288 128 280.8 128 272V240C128 231.2 120.8 224 112 224H80C71.16 224 64 231.2 64 240V272zM176 224C167.2 224 160 231.2 160 240V272C160 280.8 167.2 288 176 288H208C216.8 288 224 280.8 224 272V240C224 231.2 216.8 224 208 224H176zM256 272C256 280.8 263.2 288 272 288H304C312.8 288 320 280.8 320 272V240C320 231.2 312.8 224 304 224H272C263.2 224 256 231.2 256 240V272zM80 96C71.16 96 64 103.2 64 112V144C64 152.8 71.16 160 80 160H112C120.8 160 128 152.8 128 144V112C128 103.2 120.8 96 112 96H80zM160 144C160 152.8 167.2 160 176 160H208C216.8 160 224 152.8 224 144V112C224 103.2 216.8 96 208 96H176C167.2 96 160 103.2 160 112V144zM272 96C263.2 96 256 103.2 256 112V144C256 152.8 263.2 160 272 160H304C312.8 160 320 152.8 320 144V112C320 103.2 312.8 96 304 96H272z"
            fill="currentColor"></path>
        </svg>
        <span class="u-text-weight-b c-content-l">事務所情報</span>
      </a>
      <a class="o-icon-parent o-icon-parent--center c-gnav-link"
        href="<?php echo home_url('/recruit/');?>">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z"
            fill="currentColor"></path>
        </svg>
        <span class="u-text-weight-b c-content-l">採用情報</span>
      </a>
    </nav>
    <ul class="o-stack u-mb-m">
      <li><a
          href="<?php echo home_url('/terms/');?>"
          class="c-gnav-link c-content-m u-text-weight-m">サイト規約</a></li>
      <li><a
          href="<?php echo home_url('/privacy-policy/');?>"
          class="c-gnav-link c-content-m u-text-weight-m">プライバシーポリシー</a></li>
      <li><a
          href="<?php echo home_url('/inquiry/');?>"
          class="c-gnav-link c-content-m u-text-weight-m">お問い合わせ</a></li>
    </ul>
    <div class="c-sidebar-bottom u-pb-2xl">
      <h3 class="c-display-s u-text-weight-m u-font-en-con">Follow Us</h3>
      <div class="o-cluster u-mb-m">
        <a class="c-sns-link c-display-m"
          href="<?php echo get_vars('sns', 'fb');?>"
          target="_blank" rel="noopener" aria-label="Goto Facebook">
          <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
              fill="currentColor"></path>
          </svg>
        </a>
        <a class="c-sns-link c-display-m"
          href="<?php echo get_vars('sns', 'tw');?>"
          target="_blank" rel="noopener" aria-label="Goto Twitter">
          <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
              fill="currentColor"></path>
          </svg>
        </a>
        <a class="c-sns-link c-display-m"
          href="<?php echo get_vars('sns', 'instagram');?>"
          target="_blank" rel="noopener" aria-label="Goto Instagram">
          <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path
              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
              fill="currentColor"></path>
          </svg>
        </a>
      </div>
      <div class="o-stack u-mb-l">
        <a href="<?php echo home_url('/');?>"
          class="o-icon-parent o-icon-parent--center u-max-item u-hover-item u-mb-l">
          <svg class="o-icon c-display-s" width="670" height="403" viewBox="0 0 670 403" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M586.221 268.039L502.504 402.075L418.733 268.039H586.221Z" fill="#69AEE0"></path>
            <path d="M334.996 402.075L418.744 268.029L502.492 402.075H334.996Z" fill="#70B1E1"></path>
            <path d="M418.723 268.039L334.996 402.075L251.246 268.039H418.723Z" fill="#92CAEF"></path>
            <path d="M167.497 402.075L251.245 268.029L334.993 402.075H167.497Z" fill="#92CAEF"></path>
            <path d="M0 402.075L83.7487 268.039L167.497 402.085L0 402.075Z" fill="#7EBAE6"></path>
            <path d="M670 134.035L586.252 268.039L502.491 134.035H670Z" fill="#85C1EB"></path>
            <path d="M418.743 268.039L502.481 134.035L586.218 268.039H418.743Z" fill="#7EBAE6"></path>
            <path d="M502.492 134.035L418.744 268.039L334.996 134.035H502.492Z" fill="#7BB8E5"></path>
            <path d="M251.246 268.039L334.996 134.035L418.723 268.039H251.246Z" fill="#85C1EB"></path>
            <path d="M334.993 134.035L251.245 268.039L167.497 134.035H334.993Z" fill="#73B2E2"></path>
            <path d="M83.749 268.039L167.498 134.035L251.225 268.039H83.749Z" fill="#67A0D3"></path>
            <path d="M502.491 134.035L586.231 0L669.989 134.045L502.491 134.035Z" fill="#99D2F3"></path>
            <path d="M334.996 134.035L418.744 0L502.492 134.045L334.996 134.035Z" fill="#82BEE9"></path>
            <path d="M167.497 134.035L251.245 0L334.993 134.045L167.497 134.035Z" fill="#73B2E2"></path>
            <path d="M251.225 0L167.498 134.035L83.749 0H251.225Z" fill="#65A5DA"></path>
          </svg>
          <span class="c-display-xs u-font-logo u-flex-shrink-none">BLUE B NOSE</span>
        </a>
        <dl class="o-sidebar o-sidebar--gap-one u-mb-s">
          <dt class="o-sidebar__address-heading c-suppl-l u-text-weight-b">所在地</dt>
          <dd class="o-sidebar__address-detail c-suppl-l">
            〒<span
              class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span><br /><?php echo get_vars('company', 'address');?>
          </dd>
        </dl>
        <dl class="o-sidebar o-sidebar--gap-one u-mb-s">
          <dt class="o-sidebar__address-heading c-suppl-l u-text-weight-b">アクセス</dt>
          <dd class="o-sidebar__address-detail c-suppl-l">
            <?php echo get_vars('company', 'access');?>
          </dd>
        </dl>
        <dl class="o-sidebar o-sidebar--gap-one u-mb-s">
          <dt class="o-sidebar__address-heading c-suppl-l u-text-weight-b">営業時間</dt>
          <dd class="o-sidebar__address-detail c-suppl-l">
            <span
              class="u-font-en-con"><?php echo get_vars('company', 'open');?>&nbsp;-&nbsp;<?php echo get_vars('company', 'close');?></span>
          </dd>
        </dl>
        <dl class="o-sidebar o-sidebar--gap-one">
          <dt class="o-sidebar__address-heading c-suppl-l u-text-weight-b">定休日</dt>
          <dd class="o-sidebar__address-detail c-suppl-l">
            <?php echo get_vars('company', 'dayoff');?>
          </dd>
        </dl>
      </div>
      <p class="c-suppl-m u-font-en-con">
        <?php echo get_vars('site', 'copyright');?>
      </p>
    </div>
  </div>
  <div class="c-sidebar-bg"></div>
  <main>