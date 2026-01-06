@extends('layouts.app')

@section('content')

<style>
/* ===== GLOBAL ===== */
body{
  margin:0;
  font-family: Arial, sans-serif;
  background:#f5f5f5;
}

/* ===== HERO ===== */
/* ===== HERO (IMPROVED) ===== */
.hero{
  position:relative;
  height:90vh;
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
  color:white;
  overflow:hidden;
}

/* Overlay فاخر */
.hero::after{
  content:"";
  position:absolute;
  inset:0;
  background:linear-gradient(
    to bottom,
    rgba(0,0,0,.45),
    rgba(0,0,0,.25),
    rgba(0,0,0,.55)
  );
  z-index:1;
}

/* صورة الهيرو */
.hero img{
  position:absolute;
  inset:0;
  width:100%;
  height:100%;
  object-fit:cover;
  transition:opacity .6s;
  transform:scale(1.05);
  animation:heroZoom 18s ease-in-out infinite;
}

/* محتوى الهيرو */
.hero-content{
  position:relative;
  z-index:2;
  max-width:800px;
  padding:0 20px;
}

/* العنوان */
.hero h1{
  font-size:56px;
  letter-spacing:3px;
  margin-bottom:12px;
  text-transform:uppercase;
}

/* الوصف */
.hero p{
  font-size:20px;
  letter-spacing:2px;
  opacity:.9;
  margin-bottom:30px;
}

/* زر الحجز */
.btn-primary{
  padding:14px 36px;
  background:transparent;
  color:#fff;
  border:2px solid #fff;
  border-radius:40px;
  text-decoration:none;
  font-weight:bold;
  letter-spacing:2px;
  transition:.4s;
}

.btn-primary:hover{
  background:#fff;
  color:#000;
}

/* حركة الصورة */
@keyframes heroZoom{
  0%{transform:scale(1.05)}
  50%{transform:scale(1.12)}
  100%{transform:scale(1.05)}
}

/* HERO CIRCLES */
.hero-circles{
  position:absolute;
  bottom:20px;
  display:flex;
  gap:12px;
  z-index:3;
}
.circle{
  width:18px;
  height:18px;
  border-radius:50%;
  background:rgba(255,255,255,.7);
  border:2px solid #fff;
  cursor:pointer;
}
.circle.active{
  background:#ff0000cc;
}

/* MOBILE HERO */
@media(max-width:768px){
  .hero h1{
    font-size:34px;
    letter-spacing:2px;
  }

  .hero p{
    font-size:16px;
  }
}

.circle{
  width:18px;height:18px;
  border-radius:50%;
  background:rgba(255,255,255,.7);
  border:2px solid #fff;
  cursor:pointer;
}
.circle.active{background:#ff0000cc}

/* ===== LANGUAGE =====
.lang-dot{
  position:absolute;
  top:20px;right:30px;
  width:18px;height:18px;
  background:#c5b15e;
  border-radius:50%;
  cursor:pointer;
  z-index:10;
} */
.lang-menu{
  position:absolute;
  top:50px;right:30px;
  background:white;
  border-radius:6px;
  display:none;
  flex-direction:column;
  z-index:20;
}
.lang-menu button{
  border:none;
  background:white;
  padding:8px 16px;
  cursor:pointer;
}
.lang-menu button:hover{background:#eee}

/* ===== WELCOME ===== */
.welcome{
  position:relative;
  height:90vh;
  overflow:hidden;
}
.slide{
  position:absolute;
  inset:0;
  width:100%;
  height:100%;
  object-fit:cover;
  opacity:0;
  transition:1s;
}
.slide.active{opacity:1}
.welcome-text{
  position:absolute;
  bottom:10%;
  left:5%;
  max-width:800px;
  font-weight:bold;
}

/* ===== SPLIT SECTIONS (LIKE IMAGE) ===== */
.split-section{
  display:flex;
  align-items:center;
  gap:80px;
  max-width:1600px;
  margin:140px auto;
  padding:0 60px;
}
.split-image img{
  width:100%;
  height:700px;
  object-fit:cover;
  border-radius:20px;
  opacity:0;
  transform:translateY(60px) scale(1.05);
  transition:1.2s ease, transform 0.8s ease;
  box-shadow:0 15px 40px rgba(0,0,0,0.7);
}

.split-section.active img{
  opacity:1;
  transform:translateY(0) scale(1);
}

.split-section:hover img{
  transform:translateY(-10px) scale(1.07);
}

.split-image img{
  width:100%;
  height:700px;
  object-fit:cover;
  border-radius:14px;
  opacity:0;
  transform:translateY(60px) scale(1.05);
  transition:1.2s ease;
}
.split-content{
  flex:1;
  background: linear-gradient(135deg, #e91111d5, #3f3f3f); /* داكن أكثر */
  color:#fff; /* النص يصبح أبيض */
  padding:150px 90px;
  opacity:1;
  transform:none;
  transition:1.2s ease;
  border-radius:20px; /* حواف أكثر فخامة */
  box-shadow:0 15px 50px rgba(0,0,0,0.5); /* ظل ثقيل */
}


.split-content h2{
  letter-spacing:3px;
  margin-bottom:20px;
  text-align:center;
  font-size:24px; /* أكبر */
  text-shadow:0 3px 10px rgba(0,0,0,0.6);
}

.split-content p{
  line-height:1.8;
  font-size:18px;
  text-shadow:0 2px 8px rgba(0,0,0,0.5);
}

/* dishes */
/* فقط للقسم الذي يحتوي على صورة الخلفية */
.split-section.dishes-background {
  position: relative;
  padding: 150px 80px;
  color: #fff;
  overflow: hidden;
  text-align: center;
  border-radius: 20px;
  background: url('{{ asset("images/dishes.png") }}') center/cover no-repeat;
  background-size: cover;
  filter: brightness(0.65); /* تجعل النص أكثر وضوحًا */
}

/* النص فوق الخلفية */
.split-section.dishes-background .split-content {
  position: relative;
  z-index: 2;
  max-width: 800px;
  margin-left:20%;
}

/* نصوص */
.split-section.dishes-background h2 {
  font-size: 28px;
  margin-bottom: 20px;
  text-shadow: 0 3px 15px rgba(0,0,0,0.6);
}

.split-section.dishes-background p {
  font-size: 18px;
  line-height: 1.8;
  text-shadow: 0 2px 10px rgba(0,0,0,0.5);
}

/* تأثير عند المرور */
.split-section.dishes-background:hover {
  transform: scale(1.02);
  transition: transform 0.8s ease;
}

/* MOBILE */
 /* ===== MOBILE HERO & SPLIT SECTIONS ===== */
@media (max-width: 768px) {

  .split-section {
    flex-direction: row;   /* جنب بعض */
    align-items: center;
    gap: 15px;
    padding: 20px;
  }

  .split-image,
  .split-content {
    flex: 1;
  }

  .split-image img {
    height: 220px;
  }

  .split-content {
    padding: 20px;
  }

  .split-content h2 {
    font-size: 18px;
  }

  .split-content p {
    font-size: 13px;
    line-height: 1.5;
  }
}

/* ===== VERY SMALL PHONES ===== */
@media (max-width: 480px) { 
  .split-section {
    flex-direction: column; /* هنا فقط يرجعوا تحت بعض */
  }
  .hero h1 {
    font-size: 24px;
  }

  .hero p {
    font-size: 13px;
  }

  .btn-primary {
    padding: 8px 16px;
    font-size: 12px;
  }

  .split-image img {
    height: 250px;
  }

  .split-content h2 {
    font-size: 18px;
  }

  .split-content p {
    font-size: 12px;
  }

  .dishes-grid {
    gap: 15px;
  }

  .dish-card img {
    height: 180px;
  }

  .dish-content {
    padding: 12px;
  }
}



/* ===== DISHES ===== */
.dishes-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
  gap:30px;
  max-width:1200px;
  margin:auto;
}
.dish-card{
  background:white;
  border-radius:14px;
  overflow:hidden;
  box-shadow:0 15px 30px rgba(0,0,0,.08);
  transition:.4s;
}
.dish-card:hover{transform:translateY(-8px)}
.dish-card img{
  width:100%;
  height:220px;
  object-fit:cover;
}
.dish-content{padding:20px}

/* ===== REVEAL ===== */
.reveal{
  opacity:0;
  transform:translateY(40px);
  transition:.9s;
}
.reveal.active{
  opacity:1;
  transform:none;
}

/* ===== BUTTON ===== */
.btn-primary{
  padding:12px 28px;
  background:#ff1919;
  color:#000;
  border-radius:6px;
  text-decoration:none;
  font-weight:bold;
}
</style>

<!-- HERO -->
<section class="hero reveal">
  <img id="heroMain" src="{{ asset('images/view5.jpeg') }}">
  <div class="hero-content">
    <h1>Valetta Restaurant</h1>
    <p>Authentic Mediterranean Cuisine</p>
    <a class="btn-primary" href="/book">Book Now</a>
  </div>

  <div class="hero-circles">
    <div class="circle active" data-img="{{ asset('images/view5.jpeg') }}"></div>
    <div class="circle" data-img="{{ asset('images/view19.webp') }}"></div>
    <div class="circle" data-img="{{ asset('images/view6.jpeg') }}"></div>
  </div>

  <div class="lang-dot" id="langDot"></div>
  <div class="lang-menu" id="langMenu">
    <button onclick="setLang('en')">EN</button>
    <button onclick="setLang('ru')">RU</button>
  </div>
</section>

<!-- WHAT'S ON -->
<section class="split-section reveal">
  <div class="split-image">
    <img src="{{ asset('images/view5.jpg') }}">
  </div>
  <div class="split-content">
    <h2>WHAT’S ON 🌊</h2>
    <p>
    Добро пожаловать в атмосферу Средиземноморья - в ресторан «Валетта»!
Тёплый свет, аромат свежих трав, оливковое масло первого отжима и вкус, который переносит вас на побережье Мальты. 🇲🇹
 Наш шеф создал меню, в котором сочетаются простота и изысканность - морепродукты, паста и бокал холодного белого вина к каждому блюду.
    </p>
  </div>
</section>
<section class="split-section reveal">
  <div class="split-image">
    <img src="{{ asset('images/view21.webp') }}">
  </div>
 <div class="split-content">
    <h2>WHAT’S ON 🌊</h2>
    <p>
    Каждый гость становится частью истории Valletta.
- Здесь эмоции, смех и живое общение создают атмосферу, в которую хочется возвращаться.
Valletta — это не просто ресторан, это место встреч, вкуса и настроения.
Мы создаём пространство, где каждый ужин превращается в маленькое путешествие: от ароматов свежих трав до солнечного тепла Средиземноморья в каждом блюде☀️
Приходите за моментами, которые хочется проживать медленно и с удовольствием.
  </div>
</section>
<!-- CHEF -->
<section class="split-section reveal">
  <div class="split-image">
    <img src="{{ asset('images/chef.jpg') }}">
  </div>
  <div class="split-content">
    <h2>OUR CHEF</h2>
    <p>
    Знакомьтесь: наш бренд-шеф — Басем Заин 
Он знает, как звучит Средиземное море на вкус 🌊 
Басем — человек, который привёз на московские улицы солнечную атмосферу Мальты.
- Его философия проста: еда — это не просто вкус, это история, настроение и путешествие.
- За плечами у него — 14 открытых проектов, 3 сытых президента и 1 разработанное меню на МКС. 
Когда Басем создавал меню Valletta, он стремился, чтобы каждый гость почувствовал себя как на ужине у старых друзей на побережье — где время останавливается, а всё вокруг пропитано солнцем и ароматами Средиземноморья☀️
    </p>
  </div>
</section>
<!-- DISHES -->
<section class="split-section reveal dishes-background">
  <div class="split-content">
    <h2>Dishes</h2>
    <p>
      Мальта на протяжении истории находилась под властью многих цивилизаций, включая итальянскую, британскую, турецкую и арабскую, каждая из которых оставила свой неповторимый след. Современная мальтийская кухня — это уникальное сочетание средиземноморского солнца и разнообразных традиций. И теперь вы можете попробовать эту кухню впервые в России.
    </p>
    <p>Да, Valletta — единственный мальтийский ресторан в стране.</p>
    <h2>Продолжайте просматривать сайт, чтобы увидеть некоторые из наших самых популярных блюд 👇😋:</h2>
  </div>
</section>

<section class="reveal">
  <h2 id="dishesTitle" style="text-align:center;color:#a30000;margin-bottom:40px;"></h2>
  <div class="dishes-grid">
      <div class="dish-card">
        <img src="{{ asset('images/dish11.jpg') }}">
        <div class="dish-content">
          <h3>Сегодня знакомим вас с одним из самых ярких вкусов Valletta — Midi.
            Если вы любите морепродукты, это блюдо точно попадёт в сердце.
            Midi — это мидии, тушённые в насыщенном томатном соусе, с пармезаном и воздушным муссом из тахины.
            Томат даёт ту самую средиземноморскую кислинку.Пармезан добавляет глубину и мягкость.Тахина раскрывает блюдо тёплым ореховым оттенком.
        </h3>
           <p>В итоге — вкус, в котором встречаются Мальта, Левант и солнце южного побережья.
Эстетично. Насыщенно. И очень Valletta.</p>
        </div>
</div>
        <div class="dish-card">
        <img src="{{ asset('images/dish12.jpg') }}">
        <div class="dish-content">
          <h3>Frott tal-Baħar — салат из мидий, кальмаров и креветок с мятным соусом и воздушным муссом из пармезана.Свежесть, море и нежная сливочность — вот настоящий вкус Мальты, прямо у вас на тарелке. 🥗✨

        </h3>
           <p>В итоге — вкус, в котором встречаются Мальта, Левант и солнце южного побережья.
Эстетично. Насыщенно. И очень Valletta.</p>
        </div>
        </div>
        <div class="dish-card">
        <img src="{{ asset('images/dish13.jpg') }}">
        <div class="dish-content">
          <h3>Hummus — вкус Ближнего Востока в Valletta
Пюре из нута с кунжутной пастой, чесноком, лимонным соком и специями — идеальная закуска, которую подают с домашними лепешками 🥖
Окунай, пробуй, наслаждайся вкусом Средиземноморья!
Знаешь ли ты, что Ливан и Израиль спорят за право называться родиной хумуса? Рекорд принадлежит Ливану: самая большая порция весила 10 452 кг! 😲

        </h3>
           <p>Приходи в Valletta и открой для себя настоящий хумус в уютной атмосфере 💛</p>
        </div>
      </div>
       <div class="dish-card">
        <img src="{{ asset('images/dish14.jpg') }}">
      <div class="dish-content">
          <h3>Karnit — осьминог по-мальтийски
Когда море встречается с вином, рождается легенда вкуса. 🌊
На Мальте осьминога готовят медленно, с терпением и любовью к деталям — и в Valletta мы придерживаемся тех же традиций.
Нежное мясо, ароматное вино и свежие специи — каждый кусочек Karnit рассказывает историю Средиземноморья.

        </h3>
           <p>Попробуй настоящее мальтийское море на тарелке прямо в центре Москвы 💛</p>
        </div>
      </div>
      <div class="dish-card">
        <img src="{{ asset('images/dish15.jpg') }}">
        <div class="dish-content">
          <h3>Секрет идеальной закуски
Иногда гармония — на одной тарелке.
Камамбер — мягкий
Козий сыр — выразительный
Пармезан — насыщенный
Чечил — солоноватый
Инжир — сладкий акцент
Простое сочетание, которое делает вечер особенным.
В Valletta вкус всегда звучит правильно.
        </h3>
           <p>📍 Ждём тебя за атмосферой и идеальной закуской💛</p>
        </div>
      </div>
      <div class="dish-card">
        <img src="{{ asset('images/dishes15.jpg') }}">
        <div class="dish-content">
          <h3>Ftira — хрустящая, ароматная, с любимой начинкой.
        </h3>
           <p> Valletta ждёт вас. 🌿🍽️💛</p>
        </div>
      </div>
      <div class="dish-card">
        <img src="{{ asset('images/dishes17.jpg') }}">
        <div class="dish-content">
          <h3>Gambli — сочные креветки со вкусом Средиземного моря.
Два блюда.
        </h3>
           <p> Valletta ждёт вас. 🌿🍽️💛</p>
        </div>
      </div>
      <div class="dish-card">
        <img src="{{ asset('images/dishes18.jpg') }}">
        <div class="dish-content">
          <h3>Паста — один из самых популярных видов пасты на Мальте, и она известна своим невероятно привлекательным внешним видом. Представьте себе блюдо из пасты, начинённое сыром и мясом, всё это сложено в одну вилку! Результат вас поразит.
        </h3>
           <p> 📍 Ждём тебя за атмосферой и идеальной закуской💛</p>
        </div>
      </div>
  </div>
</section>
<!-- EVENTS -->
<section class="split-section reveal">
  <div class="split-image">
    <img src="{{ asset('images/view8.jpeg') }}">
  </div>
  <div class="split-content">
    <h2>EVENTS & CELEBRATIONS</h2>
    <p>
     Вечера живой музыки в Валлетте
Давайте наполним зал нашими любимыми мелодиями, смехом и аплодисментами, насладимся вкусной едой и напитками и создадим волшебную атмосферу, которую так любит Валлетта, с песнями и танцами 🌿✨
    </p>
  </div>
</section>

<section class="split-section reveal">
  <div class="split-image">
    <img src="{{ asset('images/person.jpg') }}">
  </div>
<div class="split-content">
    <h2>EVENTS & CELEBRATIONS</h2>
    <p>
     Какие у вас планы? Где вы планируете провести мероприятие? День рождения? Свадьба? Или профессиональный тренинг? Мы подготовим площадку в соответствии с вашими пожеланиями, а если вы хотите организовать кинопоказ для себя и своих коллег, это тоже к вашим услугам! Чего вы ждете? Свяжитесь с нами и забронируйте мероприятие в нашем ресторане.🌿✨
   </p>
  </div>
  </section>
<script>
/* HERO SWITCH */
document.querySelectorAll('.circle').forEach(c=>{
  c.onclick=()=>{
    document.querySelectorAll('.circle').forEach(x=>x.classList.remove('active'));
    c.classList.add('active');
    const img=document.getElementById('heroMain');
    img.style.opacity=0;
    setTimeout(()=>{img.src=c.dataset.img;img.style.opacity=1},300);
  }
});

/* REVEAL */
const reveals=document.querySelectorAll('.reveal');
function reveal(){
  const h=window.innerHeight;
  reveals.forEach(r=>{
    if(r.getBoundingClientRect().top<h-120){
      r.classList.add('active');
    }
  });
}
window.addEventListener('scroll',reveal);
reveal();
</script>

@endsection
