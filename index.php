<?php
?><!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Katalog NAP - Portal firm z wizytówkami</title>
    <style>
      :root {
        color-scheme: light;
        --bg: #f5f7fb;
        --text: #101828;
        --muted: #475467;
        --card: #ffffff;
        --accent: #2563eb;
        --accent-soft: rgba(37, 99, 235, 0.12);
        --border: #e4e7ec;
      }

      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        font-family: "Inter", "Segoe UI", system-ui, -apple-system, sans-serif;
        background: var(--bg);
        color: var(--text);
        line-height: 1.6;
      }

      a {
        color: inherit;
        text-decoration: none;
      }

      header {
        background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
        color: #fff;
        padding: 56px 20px 80px;
      }

      .container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
      }

      .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 24px;
      }

      .brand {
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 700;
        font-size: 1.25rem;
      }

      .brand-mark {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.2);
        display: grid;
        place-items: center;
        font-weight: 700;
      }

      .header-grid {
        display: grid;
        gap: 28px;
        margin-top: 48px;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        align-items: center;
      }

      .header-text h1 {
        font-size: clamp(2rem, 3.2vw, 3.2rem);
        margin-bottom: 16px;
      }

      .header-text p {
        color: rgba(255, 255, 255, 0.85);
        font-size: 1.05rem;
        margin-bottom: 24px;
      }

      .button-group {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
      }

      .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 22px;
        border-radius: 999px;
        font-weight: 600;
        border: 1px solid transparent;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }

      .button.primary {
        background: #fff;
        color: #1d4ed8;
        box-shadow: 0 12px 24px rgba(15, 23, 42, 0.2);
      }

      .button.secondary {
        border-color: rgba(255, 255, 255, 0.5);
        color: #fff;
      }

      .button:hover {
        transform: translateY(-2px);
      }

      .search-card {
        background: #fff;
        border-radius: 20px;
        padding: 24px;
        box-shadow: 0 20px 40px rgba(15, 23, 42, 0.15);
      }

      .search-card h3 {
        margin-bottom: 12px;
        font-size: 1.2rem;
      }

      .search-row {
        display: grid;
        gap: 12px;
        grid-template-columns: 1fr 1fr;
      }

      .search-row input,
      .search-row select,
      .form-grid input,
      .form-grid select,
      .form-grid textarea {
        width: 100%;
        padding: 12px 14px;
        border-radius: 12px;
        border: 1px solid var(--border);
        font-size: 0.95rem;
      }

      .search-row button {
        grid-column: span 2;
        padding: 12px;
        border-radius: 12px;
        border: none;
        background: var(--accent);
        color: #fff;
        font-weight: 600;
      }

      main {
        padding: 60px 0 80px;
      }

      .section-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
      }

      .section-title h2 {
        font-size: 1.8rem;
      }

      .pill {
        background: var(--accent-soft);
        color: var(--accent);
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 0.9rem;
        font-weight: 600;
      }

      .cards-grid {
        display: grid;
        gap: 20px;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      }

      .card {
        background: var(--card);
        border: 1px solid var(--border);
        border-radius: 16px;
        padding: 20px;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.06);
      }

      .card h4 {
        margin-bottom: 8px;
        font-size: 1.1rem;
      }

      .card p {
        color: var(--muted);
        font-size: 0.95rem;
      }

      .card-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 16px;
      }

      .meta {
        background: #f3f4f6;
        padding: 4px 10px;
        border-radius: 999px;
        font-size: 0.8rem;
        color: var(--muted);
      }

      .features {
        display: grid;
        gap: 20px;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      }

      .feature {
        background: #fff;
        border-radius: 16px;
        padding: 20px;
        border: 1px solid var(--border);
      }

      .feature strong {
        display: block;
        font-size: 1.05rem;
        margin-bottom: 8px;
      }

      .listing {
        display: grid;
        gap: 16px;
      }

      .listing-item {
        display: grid;
        gap: 12px;
        grid-template-columns: 60px 1fr auto;
        align-items: center;
        padding: 16px;
        border-radius: 16px;
        background: #fff;
        border: 1px solid var(--border);
      }

      .listing-icon {
        width: 60px;
        height: 60px;
        border-radius: 14px;
        background: var(--accent-soft);
        color: var(--accent);
        display: grid;
        place-items: center;
        font-weight: 700;
        font-size: 1rem;
      }

      .listing-item h5 {
        margin-bottom: 4px;
      }

      .listing-item span {
        color: var(--muted);
        font-size: 0.9rem;
      }

      .listing-item a {
        color: var(--accent);
        font-weight: 600;
      }

      .form-card {
        background: #fff;
        padding: 24px;
        border-radius: 16px;
        border: 1px solid var(--border);
      }

      .form-grid {
        display: grid;
        gap: 16px;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      }

      textarea {
        resize: vertical;
        min-height: 120px;
      }

      .form-actions {
        margin-top: 20px;
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
      }

      footer {
        background: #0f172a;
        color: #e2e8f0;
        padding: 30px 20px;
      }

      footer .footer-grid {
        display: grid;
        gap: 20px;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      }

      footer a {
        color: #cbd5f5;
      }

      @media (max-width: 720px) {
        .search-row {
          grid-template-columns: 1fr;
        }

        .search-row button {
          grid-column: span 1;
        }

        .listing-item {
          grid-template-columns: 1fr;
          text-align: left;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="top-bar">
          <div class="brand">
            <div class="brand-mark">NAP</div>
            Katalog NAP
          </div>
          <nav class="button-group">
            <a class="button secondary" href="#kategorie">Kategorie</a>
            <a class="button secondary" href="#firmy">Firmy</a>
            <a class="button secondary" href="#dodaj">Dodaj wpis</a>
          </nav>
        </div>

        <div class="header-grid">
          <div class="header-text">
            <h1>Nowoczesny katalog NAP dla lokalnych firm</h1>
            <p>
              Uporządkuj dane Name, Address, Phone w jednym miejscu. Wyszukuj firmy po branży,
              lokalizacji oraz ocenach, a następnie dodawaj własne wizytówki zgodne z Google
              Business Profile.
            </p>
            <div class="button-group">
              <a class="button primary" href="#dodaj">Dodaj firmę</a>
              <a class="button secondary" href="#korzysci">Poznaj korzyści</a>
            </div>
          </div>
          <div class="search-card">
            <h3>Szukaj w katalogu</h3>
            <p>Wpisz nazwę firmy lub lokalizację, aby znaleźć aktualne dane NAP.</p>
            <div class="search-row">
              <input type="text" placeholder="Nazwa firmy lub usługi" />
              <select>
                <option>Cała Polska</option>
                <option>Warszawa</option>
                <option>Kraków</option>
                <option>Wrocław</option>
                <option>Poznań</option>
              </select>
              <button type="button">Szukaj</button>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="container" id="kategorie">
        <div class="section-title">
          <h2>Najpopularniejsze kategorie</h2>
          <span class="pill">Aktualizowane codziennie</span>
        </div>
        <div class="cards-grid">
          <div class="card">
            <h4>Gastronomia</h4>
            <p>Restauracje, kawiarnie, catering z kompletnymi danymi kontaktowymi.</p>
            <div class="card-meta">
              <span class="meta">1480 wpisów</span>
              <span class="meta">Ocena 4.6</span>
            </div>
          </div>
          <div class="card">
            <h4>Usługi lokalne</h4>
            <p>Hydraulicy, elektrycy i serwisy mobilne z szybkim dojazdem.</p>
            <div class="card-meta">
              <span class="meta">920 wpisów</span>
              <span class="meta">24/7</span>
            </div>
          </div>
          <div class="card">
            <h4>Zdrowie i uroda</h4>
            <p>Salony kosmetyczne, medycyna, fitness i wellness.</p>
            <div class="card-meta">
              <span class="meta">620 wpisów</span>
              <span class="meta">Premium</span>
            </div>
          </div>
          <div class="card">
            <h4>Technologia</h4>
            <p>Software house, agencje marketingowe i IT z portfolio.</p>
            <div class="card-meta">
              <span class="meta">410 wpisów</span>
              <span class="meta">B2B</span>
            </div>
          </div>
        </div>
      </section>

      <section class="container" id="korzysci" style="margin-top: 56px;">
        <div class="section-title">
          <h2>Dlaczego Katalog NAP?</h2>
          <span class="pill">Dane spójne = lepsze SEO</span>
        </div>
        <div class="features">
          <div class="feature">
            <strong>Zweryfikowane wpisy</strong>
            <p>Każda wizytówka przechodzi kontrolę spójności danych NAP.</p>
          </div>
          <div class="feature">
            <strong>Widoczność w mapach</strong>
            <p>Łączymy dane z mapami, aby zwiększyć lokalną widoczność firm.</p>
          </div>
          <div class="feature">
            <strong>Raporty i statystyki</strong>
            <p>Właściciele widzą liczbę odsłon, zapytań i kliknięć.</p>
          </div>
          <div class="feature">
            <strong>Wsparcie lokalne</strong>
            <p>Dedykowane wskazówki SEO dla firm działających regionalnie.</p>
          </div>
        </div>
      </section>

      <section class="container" id="firmy" style="margin-top: 56px;">
        <div class="section-title">
          <h2>Wyróżnione wizytówki</h2>
          <span class="pill">Top firmy tygodnia</span>
        </div>
        <div class="listing">
          <div class="listing-item">
            <div class="listing-icon">LM</div>
            <div>
              <h5>Lokalny Market</h5>
              <span>Warszawa, ul. Słoneczna 12 • tel. 22 234 55 12</span>
            </div>
            <a href="#">Zobacz profil</a>
          </div>
          <div class="listing-item">
            <div class="listing-icon">HS</div>
            <div>
              <h5>Harmonia Studio</h5>
              <span>Kraków, ul. Długa 21 • tel. 12 555 81 20</span>
            </div>
            <a href="#">Zobacz profil</a>
          </div>
          <div class="listing-item">
            <div class="listing-icon">AT</div>
            <div>
              <h5>AutoTech Serwis</h5>
              <span>Wrocław, ul. Rzemieślnicza 9 • tel. 71 808 77 10</span>
            </div>
            <a href="#">Zobacz profil</a>
          </div>
        </div>
      </section>

      <section class="container" id="dodaj" style="margin-top: 56px;">
        <div class="section-title">
          <h2>Dodaj firmę do katalogu</h2>
          <span class="pill">Wpis w 2 minuty</span>
        </div>
        <div class="form-card">
          <form>
            <div class="form-grid">
              <input type="text" placeholder="Nazwa firmy" />
              <input type="text" placeholder="Branża" />
              <input type="text" placeholder="Adres" />
              <input type="text" placeholder="Miasto" />
              <input type="tel" placeholder="Telefon" />
              <input type="email" placeholder="Email kontaktowy" />
              <select>
                <option>Wybierz pakiet</option>
                <option>Bezpłatny</option>
                <option>Premium</option>
                <option>VIP z audytem NAP</option>
              </select>
              <input type="url" placeholder="Strona www" />
              <textarea placeholder="Krótki opis działalności"></textarea>
            </div>
            <div class="form-actions">
              <button class="button primary" type="submit">Wyślij zgłoszenie</button>
              <button class="button secondary" type="reset">Wyczyść formularz</button>
            </div>
          </form>
        </div>
      </section>
    </main>

    <footer>
      <div class="container footer-grid">
        <div>
          <strong>Katalog NAP</strong>
          <p>Spójne dane firm w jednym miejscu.</p>
        </div>
        <div>
          <p><strong>Kontakt</strong></p>
          <p>kontakt@katalognap.pl</p>
          <p>+48 500 200 100</p>
        </div>
        <div>
          <p><strong>Strefa wiedzy</strong></p>
          <p><a href="#">Jak dbać o NAP</a></p>
          <p><a href="#">Regulamin</a></p>
        </div>
      </div>
    </footer>
  </body>
</html>
