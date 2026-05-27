<?php
$pageTitle = 'Home';
require_once __DIR__ . '/includes/header.php';
$featured = getProducts(['featured' => true, 'limit' => 4]);
?>
<section class="hero">
    <div class="hero-copy">
        <span class="hero-pill">Digital Products</span>
        <h1>Launch a premium digital storefront with elegant checkout and fast downloads.</h1>
        <p>Sell templates, software, and digital assets with a polished website experience designed for creators and small businesses.</p>
        <div class="hero-actions">
            <a href="<?= BASE_URL ?>products.php" class="button">Explore Products</a>
            <a href="<?= BASE_URL ?>contact.php" class="button button-secondary">Contact Support</a>
        </div>
    </div>
    <div class="hero-visual">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80" alt="Digital marketplace">
    </div>
</section>

<section class="section">
    <div class="section-title">Featured Products</div>
    <div class="card-grid">
        <?php if (empty($featured)): ?>
            <div class="card card-body">No products available yet.</div>
        <?php endif; ?>
        <?php foreach ($featured as $product): ?>
            <article class="card">
                <img class="product-image" src="<?= sanitize($product['image_url']) ?>" alt="<?= sanitize($product['title']) ?>">
                <div class="card-body">
                    <h3 class="card-title"><?= sanitize($product['title']) ?></h3>
                    <div class="card-meta"><span><?= sanitize($product['category']) ?></span><span><?= CURRENCY . number_format($product['price'], 2) ?></span></div>
                    <p style="color: var(--muted);"><?= sanitize(substr($product['description'], 0, 100)) ?>…</p>
                </div>
                <div class="card-footer">
                    <a href="<?= BASE_URL ?>product.php?id=<?= $product['id'] ?>" class="button">View</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section">
    <div class="section-title">Why Choose YBT Digital?</div>
    <p class="section-intro">Our platform was created to give digital sellers a modern storefront, smooth checkout, and fast delivery—without compromising a polished professional brand.</p>
    <div class="card-grid">
        <div class="feature-card"><h3>Fast checkout</h3><p>Secure payment flows optimized for digital product purchases and conversion.</p></div>
        <div class="feature-card"><h3>Download access</h3><p>Instant, secure access to downloads with order records and receipts.</p></div>
        <div class="feature-card"><h3>Admin control</h3><p>Manage products, coupons, orders, and support right from one dashboard.</p></div>
    </div>
</section>

<section class="section">
    <div class="section-title">Customer Stories</div>
    <div class="card-grid">
        <div class="feature-card"><p>“A beautiful, modern store for our digital products. Mobile UX feels like an instant app.”</p></div>
        <div class="feature-card"><p>“Easy setup and the checkout flow is polished. Great for selling templates and downloads.”</p></div>
        <div class="feature-card"><p>“The admin dashboard gives us quick control over orders, coupons, and product access.”</p></div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php';
