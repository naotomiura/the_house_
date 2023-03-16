/*---------- ハンバーガーメニュー ----------*/
const hamburger = document.querySelector(".js_hamburger");
const navigation = document.querySelector(".js_navigation");
const body = document.querySelector(".js_body");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
  navigation.classList.toggle("is-active");
  body.classList.toggle("is-active");
});

/*---------- スライドイン（単体） ----------*/
gsap.from(".js_problem", {
  y: 200,
  autoAlpha: 0,
  duration: 1, //アニメーションの長さ
  ease: "Power4.inOut", //アニメーションの変化率
  scrollTrigger: {
    trigger: ".js_problem-trigger",
    start: "top center",
  },
  stagger: {
    each: 0.6,
    from: "start",
  },
});

// gsap// sectionごとに設定
gsap.fromTo(
  ".top_obsession_js_problem", //アニメーションしたい要素
  {
    //アニメーション前の記入
    y: 20, //アニメーション開始前の位置
    autoAlpha: 0, //アニメーション開始前の状態
  },
  {
    //アニメーション後の記入
    y: 0, //アニメーション後の位置
    autoAlpha: 1, //アニメーション後の状態
    scrollTrigger: {
      trigger: ".m_kv_js_problem", //アニメーションが始まるトリガーとなる要素
      start: "bottom center", //アニメーションが始まる位置を指定
    },
  }
);

gsap.fromTo(
  ".top_works_js_problem", //アニメーションしたい要素
  {
    //アニメーション前の記入
    y: 20, //アニメーション開始前の位置
    autoAlpha: 0, //アニメーション開始前の状態
  },
  {
    //アニメーション後の記入
    y: 0, //アニメーション後の位置
    autoAlpha: 1, //アニメーション後の状態
    scrollTrigger: {
      trigger: ".top_obsession_js_problem", //アニメーションが始まるトリガーとなる要素
      start: "bottom center", //アニメーションが始まる位置を指定
    },
  }
);gsap.fromTo(
  ".top_flow_js_problem", //アニメーションしたい要素
  {
    //アニメーション前の記入
    y: 20, //アニメーション開始前の位置
    autoAlpha: 0, //アニメーション開始前の状態
  },
  {
    //アニメーション後の記入
    y: 0, //アニメーション後の位置
    autoAlpha: 1, //アニメーション後の状態
    scrollTrigger: {
      trigger: ".top_works_js_problem", //アニメーションが始まるトリガーとなる要素
      start: "bottom center", //アニメーションが始まる位置を指定
    },
  }
);

gsap.fromTo(
  ".top_event_js_problem", //アニメーションしたい要素
  {
    //アニメーション前の記入
    y: 20, //アニメーション開始前の位置
    autoAlpha: 0, //アニメーション開始前の状態
  },
  {
    //アニメーション後の記入
    y: 0, //アニメーション後の位置
    autoAlpha: 1, //アニメーション後の状態
    scrollTrigger: {
      trigger: ".top_flow_js_problem", //アニメーションが始まるトリガーとなる要素
      start: "bottom center", //アニメーションが始まる位置を指定
    },
  }
);

const mySwiper = new Swiper('.card01 .swiper', {
  slidesPerView: 1,
  cssMode: true,
  spaceBetween: 24,
  grabCursor: true,
  mousewheel: true,
  keyboard: true,
  pagination: {
    el: '.card01 .swiper-pagination',
    type: 'bullets',
    clickable: true,
  },
  navigation: {
    nextEl: '.card01 .swiper-button-next',
    prevEl: '.card01 .swiper-button-prev',
  },
  breakpoints: {
    600: {
      slidesPerView: 2,
    },
    1025: {
      slidesPerView: 4,
      spaceBetween: 32,
    }
  },
});

// 施工実績詳細ページ
function changeBackground(imageUrl) {
    var elements = document.getElementsByClassName('construction-detail_kv-img-wrap');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundImage = "url('" + imageUrl + "')";
    }
}




document.getElementById('address_auto').addEventListener('click', function(){
    if(zpjAuto) {
        document.getElementById('zip').value = document.getElementById('zipaddr01_000').value.slice(0, 3);
        document.getElementById('zip2').value = document.getElementById('zipaddr01_000').value.slice(3, 7);
        document.getElementById('pref').value = document.getElementById('zipaddr01_001').value;
        document.getElementById('address1').value = document.getElementById('zipaddr01_002').value;
        document.getElementById('address2').value = document.getElementById('zipaddr01_003').value;
    }
});