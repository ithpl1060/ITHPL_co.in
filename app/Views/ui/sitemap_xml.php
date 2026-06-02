<?= '<?xml version="1.0" encoding="UTF-8"?>' . "\n" ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url() ?></loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?= base_url('home') ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= base_url('about-us') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('services') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= base_url('solutions') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= base_url('apple') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('apple-enterprises') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('apple-smart-epp') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('apple-tco-calc') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('sustainability') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('ewaste-management') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('hpforbusiness') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('blogs') ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('contact-us') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('shipping-policy') ?></loc>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?= base_url('terms-and-conditions') ?></loc>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?= base_url('privacy-policy') ?></loc>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?= base_url('refund-policy') ?></loc>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?= base_url('sitemap') ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>

    <?php if(!empty($blogs)): ?>
        <?php foreach($blogs as $blog): ?>
            <?php if ($blog['status'] == 'publish' || $blog['status'] == 'Published'): ?>
            <url>
                <loc><?= base_url('blog/' . $blog['slug']) ?></loc>
                <changefreq>monthly</changefreq>
                <priority>0.6</priority>
            </url>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</urlset>
