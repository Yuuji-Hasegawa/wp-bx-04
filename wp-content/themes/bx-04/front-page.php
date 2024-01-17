<?php get_header();?>
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
      <div class="c-puton c-puton--filter">
        <picture class="o-frame o-frame--switch-l">
          <source type="image/avif"
            srcset="<?php echo get_template_directory_uri();?>/img/hero.avif" />
          <source type="image/webp"
            srcset="<?php echo get_template_directory_uri();?>/img/hero.webp" />
          <img
            src="<?php echo get_template_directory_uri();?>/img/hero.png"
            decoding="async" width="100%" height="100%" fetchpriority="high" alt="" />
        </picture>
        <div class="c-puton__inner o-cover">
          <h1 class="c-hero-copy o-cover__middle">
            <span class="c-display-m u-text-weight-b">ビジネスをもっと青く</span>
            <span class="c-display-l u-font-logo">BLUE B NOSE</span>
          </h1>
        </div>
      </div>
    </div>
    <!-- // Slide -->
    <div class="swiper-slide">
      <div class="c-puton c-puton--filter">
        <picture class="o-frame o-frame--switch-l">
          <source type="image/avif"
            srcset="<?php echo get_template_directory_uri();?>/img/slider-img03.avif" />
          <source type="image/webp"
            srcset="<?php echo get_template_directory_uri();?>/img/slider-img03.webp" />
          <img
            src="<?php echo get_template_directory_uri();?>/img/slider-img03.jpg"
            width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
        </picture>
        <div class="c-puton__inner o-cover">
          <div class="c-hero-copy o-cover__middle">
            <span class="c-display-m u-text-weight-b u-mb-l">メンバーのご紹介</span>
            <a href="<?php echo home_url('/office/#staff');?>"
              class="o-box o-box--button o-box--rect-button o-box--ghost-button u-max-item u-block-center">
              <span class="o-icon-parent o-icon-parent--center c-display-s">
                <span class="u-font-en-con">Office</span>
                <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                  <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
                  <path
                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                    fill="currentColor"></path>
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- // Slide -->
    <div class="swiper-slide">
      <div class="c-puton c-puton--filter">
        <picture class="o-frame o-frame--switch-l">
          <source type="image/avif"
            srcset="<?php echo get_template_directory_uri();?>/img/slider-img02.avif" />
          <source type="image/webp"
            srcset="<?php echo get_template_directory_uri();?>/img/slider-img02.webp" />
          <img
            src="<?php echo get_template_directory_uri();?>/img/slider-img02.jpg"
            width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
        </picture>
        <div class="c-puton__inner o-cover">
          <div class="c-hero-copy o-cover__middle">
            <span class="c-display-m u-text-weight-b u-mb-l">JR大阪駅 徒歩n分</span>
            <a href="<?php echo home_url('/office#access');?>"
              class="o-box o-box--button o-box--rect-button o-box--ghost-button u-max-item u-block-center">
              <span class="o-icon-parent o-icon-parent--center c-display-s">
                <span class="u-font-en-con">Access</span>
                <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                  <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
                  <path
                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                    fill="currentColor"></path>
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- // Slide -->
    <!-- // Slides -->
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
<!-- // Slider -->
<div class="o-box o-box--transparent u-bg-qua u-pb-2xl">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b">事務所概要</h2>
    <dl class="o-sidebar o-sidebar--table">
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">所在地</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
        〒<span
          class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span>
        <?php echo get_vars('company', 'address');?>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">営業時間</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
        <span
          class="u-font-en-con"><?php echo get_vars('company', 'open');?>&nbsp;-&nbsp;<?php echo get_vars('company', 'close');?></span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">定休日</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
        <?php echo get_vars('company', 'dayoff');?>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">主な業務内容</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
        <?php echo get_service_list();?>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">免許・資格</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
        <?php echo get_license_list();?>
      </dd>
    </dl>
    <h3 class="c-ter-heading u-text-center u-text-weight-b">お電話でのご相談</h3>
    <a href="#" class="o-icon-parent o-icon-parent--text-center c-tel-link c-display-l u-full-width u-mb-s"
      target="_blank" rel="noopener">
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
        <path
          d="M320 0H64C37.49 0 16 21.49 16 48v416C16 490.5 37.49 512 64 512h256c26.51 0 48-21.49 48-48v-416C368 21.49 346.5 0 320 0zM192 464c-17.75 0-32-14.25-32-32s14.25-32 32-32s32 14.25 32 32S209.8 464 192 464z"
          fill="currentColor"></path>
      </svg>
      <span
        class="u-font-en-con u-text-weight-b"><?php echo get_vars('company', 'tel');?></span>
    </a>
    <p class="c-content-l u-text-center">受付時間&nbsp;<span
        class="u-font-en-con"><?php echo get_vars('company', 'open');?>~<?php echo get_vars('company', 'close');?>
    </p>
  </div>
</div>
<div class="o-frame o-frame--no-color">
  <iframe class="c-lazy-map" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
    data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.970528685342!2d135.49183357574483!3d34.70592327291773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68e5570e51f%3A0xb0e6e493c405c979!2z44CSNTMwLTAwMTEg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy65aSn5rex55S677yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1704696233017!5m2!1sja!2sjp"
    width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade" title="Google Maps"></iframe>
</div>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl">
  <h2 class="c-sec-heading u-text-center u-text-weight-b">サービス</h2>
  <ul class="o-switcher u-mb-xl">
    <li>
      <a class="c-puton c-puton--filter c-service-link"
        href="<?php echo home_url('/service#service01');?>">
        <picture class="o-frame o-frame--switch-r">
          <source type="image/avif"
            srcset="<?php echo get_template_directory_uri();?>/img/service-img01.avif" />
          <source type="image/webp"
            srcset="<?php echo get_template_directory_uri();?>/img/service-img01.webp" />
          <img
            src="<?php echo get_template_directory_uri();?>/img/service-img01.jpg"
            width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
        </picture>
        <div class="c-puton__inner o-cover">
          <div class="o-cover__middle u-pr-m u-pl-m">
            <span class="o-stack o-stack--m">
              <h3 class="c-display-s u-text-weight-b u-text-center">ダミーサービス</h3>
              <span class="c-content-l">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</span>
              <span
                class="o-box o-box--button o-box--rect-button o-box--ghost-button u-max-item u-block-center">詳しくはこちら</span>
            </span>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a class="c-puton c-puton--filter c-service-link"
        href="<?php echo home_url('/service#service02');?>">
        <picture class="o-frame o-frame--switch-r">
          <source type="image/avif"
            srcset="<?php echo get_template_directory_uri();?>/img/service-img02.avif" />
          <source type="image/webp"
            srcset="<?php echo get_template_directory_uri();?>/img/service-img02.webp" />
          <img
            src="<?php echo get_template_directory_uri();?>/img/service-img02.jpg"
            width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
        </picture>
        <div class="c-puton__inner o-cover">
          <div class="o-cover__middle u-pr-m u-pl-m">
            <span class="o-stack o-stack--m">
              <h3 class="c-display-s u-text-weight-b u-text-center">ダミーサービス</h3>
              <span class="c-content-l">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</span>
              <span
                class="o-box o-box--button o-box--rect-button o-box--ghost-button u-max-item u-block-center">詳しくはこちら</span>
            </span>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a class="c-puton c-puton--filter c-service-link"
        href="<?php echo home_url('/service#service03');?>">
        <picture class="o-frame o-frame--switch-r">
          <source type="image/avif"
            srcset="<?php echo get_template_directory_uri();?>/img/service-img03.avif" />
          <source type="image/webp"
            srcset="<?php echo get_template_directory_uri();?>/img/service-img03.webp" />
          <img
            src="<?php echo get_template_directory_uri();?>/img/service-img03.jpg"
            width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
        </picture>
        <div class="c-puton__inner o-cover">
          <div class="o-cover__middle u-pr-m u-pl-m">
            <span class="o-stack o-stack--m">
              <h3 class="c-display-s u-text-weight-b u-text-center">ダミーサービス</h3>
              <span class="c-content-l">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</span>
              <span
                class="o-box o-box--button o-box--rect-button o-box--ghost-button u-max-item u-block-center">詳しくはこちら</span>
            </span>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a class="c-puton c-puton--filter c-service-link"
        href="<?php echo home_url('/service#service04');?>">
        <picture class="o-frame o-frame--switch-r">
          <source type="image/avif"
            srcset="<?php echo get_template_directory_uri();?>/img/service-img04.avif" />
          <source type="image/webp"
            srcset="<?php echo get_template_directory_uri();?>/img/service-img04.webp" />
          <img
            src="<?php echo get_template_directory_uri();?>/img/service-img04.jpg"
            width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
        </picture>
        <div class="c-puton__inner o-cover">
          <div class="o-cover__middle u-pr-m u-pl-m">
            <span class="o-stack o-stack--m">
              <h3 class="c-display-s u-text-weight-b u-text-center">ダミーサービス</h3>
              <span class="c-content-l">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</span>
              <span
                class="o-box o-box--button o-box--rect-button o-box--ghost-button u-max-item u-block-center">詳しくはこちら</span>
            </span>
          </div>
        </div>
      </a>
    </li>
  </ul>
  <div class="o-cluster o-cluster--center">
    <a class="o-box o-box--button o-box--rect-button o-box--primary-button o-icon-parent"
      href="<?php echo home_url('/service/');?>">
      業務案内
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
        <path
          d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
          fill="currentColor"></path>
      </svg>
    </a>
    <a class="o-box o-box--button o-box--rect-button o-box--primary-button o-icon-parent"
      href="<?php echo home_url('/price/');?>">
      料金案内
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
        <path
          d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
          fill="currentColor"></path>
      </svg>
    </a>
  </div>
</div>
<div class="o-box o-box--transparent u-bg-qua u-pb-2xl">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en">お知らせ</h2>
    <?php echo get_front_news();?>
  </div>
</div>
<div class="o-box o-box--transparent u-pb-2xl u-bg-primary">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b">よくあるご質問</h2>
    <div class="o-stack o-stack--m u-mb-xl">
      <details class="c-faq o-box o-box--post u-bg-qua u-pt-m u-pb-m u-pl-m u-pr-m">
        <summary class="c-faq__q">
          <span class="c-display-2xs u-text-weight-b">ダミー質問1</span>
          <span class="o-icon-parent o-icon-parent--faq">
            <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"
                fill="currentColor"></path>
            </svg>
          </span>
        </summary>
        <p class="c-faq__a c-content-l u-pt-s u-pb-s">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </p>
      </details>
      <details class="c-faq o-box o-box--post u-bg-qua u-pt-m u-pb-m u-pl-m u-pr-m">
        <summary class="c-faq__q">
          <span class="c-display-2xs u-text-weight-b">ダミー質問1</span>
          <span class="o-icon-parent o-icon-parent--faq">
            <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"
                fill="currentColor"></path>
            </svg>
          </span>
        </summary>
        <p class="c-faq__a c-content-l u-pt-s u-pb-s">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </p>
      </details>
      <details class="c-faq o-box o-box--post u-bg-qua u-pt-m u-pb-m u-pl-m u-pr-m">
        <summary class="c-faq__q">
          <span class="c-display-2xs u-text-weight-b">ダミー質問1</span>
          <span class="o-icon-parent o-icon-parent--faq">
            <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"
                fill="currentColor"></path>
            </svg>
          </span>
        </summary>
        <p class="c-faq__a c-content-l u-pt-s u-pb-s">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </p>
      </details>
      <details class="c-faq o-box o-box--post u-bg-qua u-pt-m u-pb-m u-pl-m u-pr-m">
        <summary class="c-faq__q">
          <span class="c-display-2xs u-text-weight-b">ダミー質問1</span>
          <span class="o-icon-parent o-icon-parent--faq">
            <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"
                fill="currentColor"></path>
            </svg>
          </span>
        </summary>
        <p class="c-faq__a c-content-l u-pt-s u-pb-s">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </p>
      </details>
      <details class="c-faq o-box o-box--post u-bg-qua u-pt-m u-pb-m u-pl-m u-pr-m">
        <summary class="c-faq__q">
          <span class="c-display-2xs u-text-weight-b">ダミー質問1</span>
          <span class="o-icon-parent o-icon-parent--faq">
            <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"
                fill="currentColor"></path>
            </svg>
          </span>
        </summary>
        <p class="c-faq__a c-content-l u-pt-s u-pb-s">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </p>
      </details>
    </div>
    <div class="u-text-center">
      <a class="o-box o-box--button o-box--rect-button o-box--ghost-button o-icon-parent"
        href="<?php echo home_url('/faq/');?>">
        FAQ一覧
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
          <path
            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
            fill="currentColor"></path>
        </svg>
      </a>
    </div>
  </div>
</div>
<div class="o-center u-pb-2xl">
  <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en">What's New</h2>
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri u-mb-xl">
    <?php while (have_posts()): the_post();?>
    <li>
      <a href="<?php the_permalink();?>"
        class="o-box o-stack c-link-card u-bg-qua">
        <?php echo get_thumb();?>
        <span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m"
              datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
            <?php echo get_loop_cat();?>
          </span>
          <span
            class="c-content-l u-text-trim u-text-trim--two-line u-text-weight-b"><?php the_title();?></span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m"><?php echo get_views_count();?></span>回表示・読了見込<span
              class="u-font-en-con u-text-weight-m"><?php echo get_readtime();?></span>分
          </span>
        </span>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">記事はまだありません。</p>
  <?php endif;?>
  <div class="u-text-center">
    <a class="o-box o-box--button o-box--rect-button o-box--primary-button o-icon-parent"
      href="<?php echo home_url('/blog/');?>">
      コンテンツ一覧
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
        <path
          d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
          fill="currentColor"></path>
      </svg>
    </a>
  </div>
</div>
<?php get_footer();?>