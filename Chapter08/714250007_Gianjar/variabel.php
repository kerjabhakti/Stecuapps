    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibeFest 2025 - Electric Vibes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h1>Festival Bandung Lautan Api</h1>
            <p>Feel the Electric Vibes!</p>
            <a href="#tickets" class="cta-button">Get Tickets</a>
        </div>
    </section>

    <!-- Lineup Section -->
    <section id="lineup" class="section">
        <h2>Festival Lineup</h2>
        <div class="tabs">
            <button class="tab-button active" onclick="openTab('day1')">Day 1</button>
            <button class="tab-button" onclick="openTab('day2')">Day 2</button>
            <button class="tab-button" onclick="openTab('day3')">Day 3</button>
        </div>
        <div id="day1" class="tab-content active">
            <ul>
                <li>10:00 AM - The Changcuters</li>
                <li>12:00 PM - Stand Here Alone</li>
            </ul>
        </div>
        <div id="day2" class="tab-content">
            <ul>
                <li>11:00 AM - The Panturras</li>
                <li>1:00 PM - The Panasdalam Bank</li>
            </ul>
        </div>
        <div id="day3" class="tab-content">
            <ul>
                <li>9:00 AM - Superman Is Dead</li>
                <li>11:00 AM - Payung Teduh</li>
            </ul>
        </div>
    </section>

    <!-- Performers Section -->
    <section id="performers" class="section">
        <h2>Performers</h2>
        <div class="performer-cards">
            <div class="card">
                <img src="https://cdn1-production-images-kly.akamaized.net/ItdWVlsqZXXC-02CdtcoVNHOrFo=/640x640/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3277902/original/050357900_1603678279-The_Changcuters_Playlist_Cover.JPG" alt="DJ Neon">
                <h3>The Changcuters</h3>
            </div>
            <div class="card">
                <img src="https://tse3.mm.bing.net/th/id/OIP.Wc1_xJIamyGCwSagPO4N2AHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Electric Beats">
                <h3>The Panturras</h3>
            </div>
            <div class="card">
                <img src="https://images.genius.com/267dcb6ac778c6e6c45de5b3fd579332.959x959x1.jpg" alt="Vibe Masters">
                <h3>Payung Teduh</h3>
            </div>
        </div>
    </section>

    <!-- Tickets Section -->
    <section id="tickets" class="section">
        <h2>Tickets</h2>
        <div class="ticket-options">
            <div class="ticket-card">
                <h3>Early Bird</h3>
                <p>Rp125.000</p>
                <button class="buy-button">Buy Tickets</button>
            </div>
            <div class="ticket-card">
                <h3>Standard</h3>
                <p>Rp250.000</p>
                <button class="buy-button">Buy Tickets</button>
            </div>
            <div class="ticket-card">
                <h3>VIP</h3>
                <p>Rp500.000</p>
                <button class="buy-button">Buy Tickets</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <h3>Follow Us</h3>
        <div class="social-media">
            <a href="https://www.facebook.com/profile.php?id=100013949761142" class="social-link">Facebook</a>
            <a href="https://www.instagram.com/yannnxyz__/" class="social-link">Instagram</a>
        </div>
        <p>&copy; Festival Bandung Lautan Api</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>