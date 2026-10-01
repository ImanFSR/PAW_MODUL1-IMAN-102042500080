<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Bar Navigasi -->
    <header class="app-header">
        <div class="logo-mark">CIA STORE</div>
        <nav class="menu-nav">
            <a href="#">Portal</a>
            <a href="#inventory" class="active-nav">Katalog</a>
            <a href="#">Garansi</a>
        </nav>
    </header>

    <!-- Hero / Showcase Area -->
    <section class="spotlight">
        <div class="spotlight-card">
            <div class="tag-live">SYS.ONLINE // 2026</div>
            <h1 class="headline">Simple Tech Store.</h1>
            <p class="tagline">Temukan berbagai perangkat dan aksesoris teknologi untuk kebutuhanmu.</p>
            <a href="#inventory" class="btn-spotlight">Eksplorasi Katalog &darr;</a>
        </div>
    </section>

    <!-- Bagian Inventori / Katalog -->
    <main class="inventory-section" id="inventory">
        <div class="inventory-bar">
            <div class="bar-info">
                <span class="prefix">// INVENTORY</span>
                <h2>Katalog Produk</h2>
            </div>
            <!-- Counter dinamis PHP -->
            <div class="stat-pill">
                DATA COUNT: <strong><?= $totalKoleksi; ?> ITEM</strong>
            </div>
        </div>

        <div class="grid-deck">
            <?php foreach ($katalogGadget as $gear): ?>
                <?php
                    // Logika Challenge Diskon 10% jika harga >= 1.000.000
                    $syaratDiskon = $gear['harga'] >= 1000000;
                    $potonganDiskon = 0.10;
                    $hargaFinal = $syaratDiskon 
                        ? $gear['harga'] - ($gear['harga'] * $potonganDiskon) 
                        : $gear['harga'];
                ?>
                <article class="deck-card">
                    <div class="card-meta">
                        <span class="meta-tag"><?= $gear['kategori']; ?></span>
                        
                        <!-- Logika Stok PHP -->
                        <?php if ($gear['stok'] > 0): ?>
                            <span class="indicator live">Tersedia</span>
                        <?php else: ?>
                            <span class="indicator void">Stok Habis</span>
                        <?php endif; ?>
                    </div>

                    <h3 class="item-name"><?= $gear['nama']; ?></h3>

                    <!-- Tampilan Harga & Tag Diskon -->
                    <div class="price-wrap">
                        <?php if ($syaratDiskon): ?>
                            <div class="promo-strip">
                                <span class="old-price">Rp <?= number_format($gear['harga'], 0, ',', '.'); ?></span>
                                <span class="disc-label">SAVE 10%</span>
                            </div>
                        <?php endif; ?>
                        <div class="current-price">Rp <?= number_format($hargaFinal, 0, ',', '.'); ?></div>
                    </div>

                    <div class="stock-badge">
                        Units Left: <span><?= $gear['stok']; ?></span>
                    </div>

                    <!-- Tombol Aksi Beli / Disabled -->
                    <div class="action-footer">
                        <?php if ($gear['stok'] > 0): ?>
                            <button class="trigger-btn active-state" type="button">Beli Sekarang</button>
                        <?php else: ?>
                            <button class="trigger-btn locked-state" type="button" disabled>Stok Habis</button>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Footer -->
    <footer class="system-footer">
        <p>Terminal Cia Store &bull; Hak Cipta &copy; <?= date('Y'); ?>. Built with Native PHP.</p>
    </footer>

</body>
</html>