<!-- front-page.php -->
<?php get_header(); ?>

<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/GT-Hero-Takeover-Mediatrice-in-Rwanda.png');">
    <div class="overlay">
        <div class="hero-content">
            <h1>Give directly to families in 4 Rwandan villages today.</h1>
            <p>Give now to help lift 650 Rwandan families out of extreme poverty.</p>
            <div class="donation-section">
                <div class="donation-card">
                    <div class="progress-bar">
                        <span class="progress-text">
                            <strong>$385,073</strong> raised of $500,000
                            <button class="info-btn" aria-label="More Info">i</button>
                        </span>
                        <div class="bar">
                            <div class="filled" style="width: 77%;"></div>
                        </div>
                    </div>
                    <div class="buttons">
                        <button>$40</button>
                        <button>$100</button>
                        <button>$500</button>
                        <button>Other</button>
                    </div>
                    <button class="donate-now">Give $100 now</button>
                    <div>
                    <span class="progress-text">Select another program</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>