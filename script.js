// script.js (jQuery利用)

$(document).ready(function(){
	$('.hamburger-menu').on('click', function() {
	  $(this).toggleClass('active');
	  $('.sp-nav').fadeToggle(300);
	});
  
	// メニュー項目をクリックしたらメニューを閉じる
	$('.sp-nav ul li a').on('click', function(){
	  $('.hamburger-menu').removeClass('active');
	  $('.sp-nav').fadeOut(300);
	});
  });
  
  //スクロール時フェードイン
$(document).ready(function(){
	$(window).scroll(function(){
	  $('.fade-in').each(function(){
		const targetPosition = $(this).offset().top;
		const scroll = $(window).scrollTop();
		const windowHeight = $(window).height();
  
		if (scroll > targetPosition - windowHeight + 100){
		  $(this).addClass('active');
		}
	  });
	});
  });
  
  $(document).ready(function() {
	const makers = {
	  '国産': ['トヨタ', '日産', 'ホンダ'],
	  '輸入': ['BMW', 'メルセデス・ベンツ', 'フォルクスワーゲン']
	};
  
	const carModels = {
	  'トヨタ': ['カローラ', 'プリウス', 'クラウン'],
	  '日産': ['ノート', 'セレナ', 'スカイライン'],
	  'ホンダ': ['フィット', 'アコード', 'シビック'],
	  'BMW': ['3シリーズ', '5シリーズ', 'X5'],
	  'メルセデス・ベンツ': ['Cクラス', 'Eクラス', 'Sクラス'],
	  'フォルクスワーゲン': ['ゴルフ', 'ポロ', 'パサート']
	};
  
	const servicePrices = {
	  '洗車': 2000,
	  'オイル交換': 5000,
	  'タイヤ交換': 8000
	};
  
	// STEP2とSTEP3を最初は無効化
	$('#manufacturer, #model, input[name="services"], #calculatePrice').prop('disabled', true);
  
	// STEP1: 国産・輸入車の選択
	$('input[name="car_origin"]').change(function() {
	  const origin = $('input[name="car_origin"]:checked').val();
	  const manufacturerList = makers[origin] || [];
	  const $manufacturerSelect = $('#manufacturer');
  
	  $manufacturerSelect.empty().append('<option value="">選択してください</option>');
	  manufacturerList.forEach(function(maker) {
		$manufacturerSelect.append(`<option value="${maker}">${maker}</option>`);
	  });
  
	  $('#manufacturer').prop('disabled', false);
	  $('#model').empty().append('<option value="">選択してください</option>').prop('disabled', true);
	  $('input[name="services"], #calculatePrice').prop('disabled', true);
	});
  
	// STEP1: メーカー選択
	$('#manufacturer').change(function() {
	  const manufacturer = $(this).val();
	  const models = carModels[manufacturer] || [];
	  const $modelSelect = $('#model');
  
	  $modelSelect.empty().append('<option value="">選択してください</option>');
	  models.forEach(function(model) {
		$modelSelect.append(`<option value="${model}">${model}</option>`);
	  });
  
	  $('#model').prop('disabled', false);
	  $('input[name="services"], #calculatePrice').prop('disabled', true);
	});
  
	// STEP1: 車種選択
	$('#model').change(function() {
	  const model = $(this).val();
	  if(model !== '') {
		$('input[name="services"], #calculatePrice').prop('disabled', false);
	  } else {
		$('input[name="services"], #calculatePrice').prop('disabled', true);
	  }
	});
  
	// STEP3: 料金計算ボタン
	$('#calculatePrice').click(function() {
	  let totalPrice = 0;
	  $('input[name="services"]:checked').each(function() {
		const service = $(this).val();
		totalPrice += servicePrices[service] || 0;
	  });
  
	  $('#totalPrice').val(`¥${totalPrice.toLocaleString()}`);
	});
  });
  
  
  // お問い合わせフォームのバリデーション
document.addEventListener('DOMContentLoaded', function () {
	const form = document.getElementById('contactForm');
	if (!form) return;
	form.addEventListener('submit', function (event) {
	  // 必須項目のチェック
	  const requiredFields = document.querySelectorAll('#contactForm [required]');
	  let isValid = true;
	  requiredFields.forEach(function (field) {
		if (!field.value.trim()) {
		  isValid = false;
		  field.classList.add('error');
		} else {
		  field.classList.remove('error');
		}
	  });
  
	  // メールアドレスの形式チェック
	  const emailField = document.getElementById('email');
	  const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
	  if (!emailPattern.test(emailField.value.trim())) {
		isValid = false;
		emailField.classList.add('error');
	  } else {
		emailField.classList.remove('error');
	  }
  
	  if (!isValid) {
		event.preventDefault();
		alert('入力内容に誤りがあります。各項目をご確認ください。');
	  }
	});
  });
  
  document.addEventListener("DOMContentLoaded", function() {
	const galleryItems = document.querySelectorAll('.gallery-item');
  
	function checkScroll() {
	  const triggerBottom = window.innerHeight * 0.9;
  
	  galleryItems.forEach(item => {
		const itemTop = item.getBoundingClientRect().top;
  
		if(itemTop < triggerBottom) {
		  item.classList.add('show');
		}
	  });
	}
  
	window.addEventListener('scroll', checkScroll);
	checkScroll();
  });

// ローディング画面の制御
window.addEventListener('load', function() {
  const loader = document.getElementById('page-loader');
  if (!loader) return;
  loader.classList.add('fade-out');
  setTimeout(() => {
    loader.style.display = 'none';
  }, 800);
});
// 万一window.loadが発火しなくても4秒後に消す
setTimeout(() => {
  const loader = document.getElementById('page-loader');
  if (loader && loader.style.display !== 'none') {
    loader.classList.add('fade-out');
    setTimeout(() => { loader.style.display = 'none'; }, 800);
  }
}, 4000);


