<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate | WASMaN</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/donate.css') }}">
</head>
<body>
@include('components.heading')

<main class="donate-page">
<section class="donate-hero">
    <div class="donate-hero-content">
        <span class="donate-kicker"><span></span> SUPPORT OUR MISSION</span>
        <h1>Donate to <strong>WASMaN</strong></h1>
        <p>Your support helps us advance women in aquatic science and management, strengthen research and capacity development, engage communities and promote sustainable aquatic resource management.</p>
        <a href="#ways-to-donate" class="hero-btn"><i class="fa-solid fa-heart"></i> Donate Now</a>
    </div>
    <div class="hero-wave" aria-hidden="true">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none"><path d="M0,52 C190,115 330,8 540,55 C755,105 910,22 1100,62 C1260,95 1350,62 1440,38 L1440,120 L0,120 Z"/></svg>
    </div>
</section>

<section class="donate-methods" id="ways-to-donate">
    <div class="section-heading">
        <div class="wave-mark">~</div>
        <h2>Ways to <span>Donate</span></h2>
        <p>You can support our work through either of the following payment methods.</p>
    </div>

    <div class="payment-grid">
        <article class="payment-card telecel-card">
            <div class="payment-logo-wrap">
                <img class="payment-logo telecel-logo"
                     src="https://web.antcellular.com/assets/telecel-B1FsgEfn.png"
                     alt="Telecel logo"
                     loading="lazy">
            </div>
            <div class="payment-content">
                <span class="payment-label">MOBILE MONEY</span>
                <h3>Telecel Cash</h3>
                <p>Send your donation to:</p>
                <div class="payment-value">0504386885
                <button type="button" class="copy-button" data-copy="+233503634684"><i class="fa-regular fa-copy"></i><span>Copy Number</span></button>
            </div>
        </article>

        <article class="payment-card bank-card">
            <div class="payment-logo-wrap">
                <img class="payment-logo zenith-logo"
                     src="{{ asset('pics_vids/zenith.png') }}"
                     alt="Zenith Bank logo"
                     loading="lazy">
            </div>
            <div class="payment-content">
                <span class="payment-label">BANK TRANSFER</span>
                <h3>Zenith Bank</h3>
                <p>Account number for donations:</p>
                <div class="payment-value">6011428347</div>
                <button type="button" class="copy-button" data-copy="5421830000220509"><i class="fa-regular fa-copy"></i><span>Copy Account Number</span></button>
            </div>
        </article>
    </div>

    <div class="support-message">
        <div class="support-heart"><i class="fa-solid fa-heart"></i></div>
        <div><h3>Your Support Makes a Difference</h3><p>Every contribution, big or small, helps WASMaN strengthen research, create opportunities, support communities and advance sustainable aquatic resource management.</p></div>
    </div>

    <div class="impact-strip">
        <div class="impact-item">
            <span class="impact-icon"><i class="fa-solid fa-microscope"></i></span>
            <div>
                <strong>Research &amp; Scientific</strong>
                <span>Innovation</span>
            </div>
        </div>

        <div class="impact-item">
            <span class="impact-icon"><i class="fa-solid fa-graduation-cap"></i></span>
            <div>
                <strong>Capacity Building</strong>
                <span>&amp; Mentorship</span>
            </div>
        </div>

        <div class="impact-item">
            <span class="impact-icon"><i class="fa-solid fa-bullhorn"></i></span>
            <div>
                <strong>Policy &amp;</strong>
                <span>Advocacy</span>
            </div>
        </div>

        <div class="impact-item">
            <span class="impact-icon"><i class="fa-solid fa-people-group"></i></span>
            <div>
                <strong>Collaboration &amp;</strong>
                <span>Network</span>
            </div>
        </div>
    </div>

    <div class="payment-safety">
        <i class="fa-solid fa-shield-heart"></i>
        <p><strong>Please verify before sending.</strong> Confirm the recipient details shown by Telecel Cash or your bank before completing a transaction. WASMaN will never ask for your PIN or banking password.</p>
    </div>
</section>

<section class="donation-contact">
    <div>
        <span>NEED ASSISTANCE?</span>
        <h2>Have a Question About Your Donation?</h2>
        <p>Contact WASMaN if you need assistance or would like to discuss institutional sponsorship or other forms of support.</p>
        <a href="mailto:info@wasman.org"><i class="fa-solid fa-envelope"></i> info@wasman.org</a>
    </div>
</section>
</main>

<script>
document.querySelectorAll('.copy-button').forEach(function(button){
    button.addEventListener('click', async function(){
        const text = button.querySelector('span');
        const icon = button.querySelector('i');
        const original = text.textContent;
        try {
            await navigator.clipboard.writeText(button.dataset.copy);
            text.textContent = 'Copied';
            icon.className = 'fa-solid fa-circle-check';
            button.classList.add('copied');
            setTimeout(function(){
                text.textContent = original;
                icon.className = 'fa-regular fa-copy';
                button.classList.remove('copied');
            },1800);
        } catch(e) {
            text.textContent = 'Copy manually';
            setTimeout(function(){ text.textContent = original; },1800);
        }
    });
});
</script>
</body>
</html>
