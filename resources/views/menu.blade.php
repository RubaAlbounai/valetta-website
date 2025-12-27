@extends('layouts.app')

@section('content')
<style>
.menu-section {
    padding: 80px 20px;
    max-width: 1200px;
    margin: auto;
}

.menu-title {
    text-align: center;
    margin-bottom: 40px;
    color: var(--burgundy);
    font-size: 40px;
}

/* ===== ACCORDION ===== */
.menu-accordion {
    max-width: 900px;
    margin: auto;
}

.menu-category {
    background: white;
    border-radius: 12px;
    margin-bottom: 18px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    overflow: hidden;
}

.menu-category h2 {
    margin: 0;
    padding: 18px 22px;
    background: #8b1e1e;
    color: white;
    cursor: pointer;
    font-size: 22px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.menu-category h2 span {
    transition: transform 0.3s;
}

.menu-category.active h2 span {
    transform: rotate(180deg);
}

.menu-items {
    display: none;
    padding: 15px 22px;
}

.menu-category.active .menu-items {
    display: block;
}

.menu-item {
    display: flex;
    justify-content: space-between;
    gap: 15px;
    padding: 12px 0;
    border-bottom: 1px dashed #ddd;
}

.menu-item:last-child {
    border-bottom: none;
}

.menu-item strong {
    font-size: 16px;
}

.menu-item p {
    margin: 5px 0 0;
    color: #555;
    font-size: 14px;
}

.menu-item span {
    font-weight: bold;
    white-space: nowrap;
}

@media (max-width: 768px) {
    .menu-item {
        flex-direction: column;
    }
}
</style>

<div class="menu-section">
<h1 class="menu-title">Our Menu :</h1>

<div class="menu-accordion">

<!-- ===== DRINKS (RU) ===== -->

<div class="menu-category">
<h2 onclick="toggleMenu(this)">Кофе <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Кофе на песке с кардамоном</strong><span>€450</span></div>
<div class="menu-item"><strong>Эспрессо</strong><span>€350</span></div>
<div class="menu-item"><strong>Американо</strong><span>€350</span></div>
<div class="menu-item"><strong>Флэт уайт</strong><span>€450</span></div>
<div class="menu-item"><strong>Капучино</strong><span>€350 / €450</span></div>
<div class="menu-item"><strong>Латте</strong><span>€400 / €450</span></div>
<div class="menu-item"><strong>Раф</strong><span>€400 / €450</span></div>
</div>
</div>

<div class="menu-category">
<h2 onclick="toggleMenu(this)">Не кофе <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Какао</strong><span>€400 / €450</span></div>
<div class="menu-item"><strong>Матча</strong><span>€400 / €450</span></div>
</div>
</div>

<div class="menu-category">
<h2 onclick="toggleMenu(this)">Чай <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Зелёный чай</strong><span>€650</span></div>
<div class="menu-item"><strong>Чёрный чай</strong><span>€650</span></div>
<div class="menu-item"><strong>Чай с облепихой</strong><span>€650</span></div>
<div class="menu-item"><strong>Нежный облепиховый чай</strong><span>€420 / €650</span></div>
<div class="menu-item"><strong>Какао-чай</strong><span>€650</span></div>
<div class="menu-item"><strong>Зимний чай</strong><span>€650</span></div>
</div>
</div>

<div class="menu-category">
<h2 onclick="toggleMenu(this)">Напитки <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Вода Байкал</strong><span>€250</span></div>
<div class="menu-item"><strong>Кока-Кола</strong><span>€350</span></div>
<div class="menu-item"><strong>Пиво</strong><span>€520</span></div>
</div>
</div>

<div class="menu-category">
<h2 onclick="toggleMenu(this)">Лимонады <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Манго – маракуйя</strong><span>€400 / €800</span></div>
<div class="menu-item"><strong>Лаванда</strong><span>€400 / €800</span></div>
<div class="menu-item"><strong>Kinnie</strong><span>€400 / €800</span></div>
<div class="menu-item"><strong>Свежевыжатый апельсиновый сок</strong><span>€450</span></div>
</div>
</div>

<!-- ===== FOOD ===== -->

<div class="menu-category">
<h2 onclick="toggleMenu(this)">Завтраки <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Pastizzi</strong><span>€750</span></div>
<div class="menu-item"><strong>Shakshuka</strong><span>€700</span></div>
<div class="menu-item"><strong>Ftira</strong><span>€700</span></div>
<div class="menu-item"><strong>Hobz biz-zejt</strong><span>€700</span></div>
<div class="menu-item"><strong>Maltese Omelette</strong><span>€700</span></div>
</div>
</div>

<div class="menu-category">
<h2 onclick="toggleMenu(this)">Холодные закуски <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Jbeina</strong><span>€850</span></div>
<div class="menu-item"><strong>Zebbug mimli</strong><span>€850</span></div>
<div class="menu-item"><strong>Bzar</strong><span>€850</span></div>
<div class="menu-item"><strong>Hummus</strong><span>€750</span></div>
<div class="menu-item"><strong>Maltese platter</strong><span>€1800</span></div>
<div class="menu-item"><strong>Babaganoush</strong><span>€850</span></div>
<div class="menu-item"><strong>Gbon</strong><span>€1150</span></div>
</div>
</div>

<div class="menu-category">
<h2 onclick="toggleMenu(this)">Салаты <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Fazola</strong><span>€950</span></div>
<div class="menu-item"><strong>Alioli</strong><span>€850</span></div>
<div class="menu-item"><strong>Tabuli</strong><span>€850</span></div>
<div class="menu-item"><strong>Vegetable</strong><span>€850</span></div>
<div class="menu-item"><strong>Frott tal-bahar</strong><span>€950</span></div>
</div>
</div>

<div class="menu-category">
<h2 onclick="toggleMenu(this)">Горячие закуски <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Midi</strong><span>€1200</span></div>
<div class="menu-item"><strong>Gambli</strong><span>€990</span></div>
<div class="menu-item"><strong>Patata L-forn</strong><span>€850</span></div>
<div class="menu-item"><strong>Halloumi</strong><span>€850</span></div>
<div class="menu-item"><strong>Schnitzel</strong><span>€890</span></div>
<div class="menu-item"><strong>Falafel</strong><span>€850</span></div>
</div>
</div>
<div class="menu-category">
<h2 onclick="toggleMenu(this)">Горячие блюда <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Timpana</strong><span>€1100</span></div>
<div class="menu-item"><strong>Pappardelle frutti di mare</strong><span>€1200</span></div>
<div class="menu-item"><strong>Fenkata</strong><span>€1200</span></div>
<div class="menu-item"><strong>Laham</strong><span>€1200</span></div>
<div class="menu-item"><strong>Lambuka</strong><span>€1200</span></div>
<div class="menu-item"><strong>Kapotata</strong><span>€950</span></div>
<div class="menu-item"><strong>Kuskus</strong><span>€950</span></div>
<div class="menu-item"><strong>Karnit</strong><span>€1200</span></div>
<div class="menu-item"><strong>Pappardelle with rabbit</strong><span>€1200</span></div>
</div>
</div>

<div class="menu-category">
<h2 onclick="toggleMenu(this)">Супы <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item">
  <strong>Kuskus</strong>
  <span>€520</span>
</div>
<div class="menu-item">
  <strong>Aljotta</strong>
  <span>€580</span>
</div>
</div>
</div>


<div class="menu-category">
<h2 onclick="toggleMenu(this)">Десерты <span>▼</span></h2>
<div class="menu-items">
<div class="menu-item"><strong>Imaret</strong><span>€620</span></div>
<div class="menu-item"><strong>Pignolata</strong><span>€620</span></div>
<div class="menu-item"><strong>Injir panna cotta</strong><span>€620</span></div>
<div class="menu-item"><strong>Cheesecake all’arancia</strong><span>€620</span></div>
<div class="menu-item"><strong>Ice cream</strong><span>€200</span></div>
</div>
</div>

</div>
</div>

<script>
function toggleMenu(el) {
    el.parentElement.classList.toggle('active');
}
</script>
@endsection
