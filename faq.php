<?php include("includes/header.php"); ?>


<!-- Header -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');





    .accordion-item {
        background-color: #FFFFFF;
        /* White background for items */
        border: 1px solid #E0E0E0;
        /* Light border */
        border-radius: 8px;
        margin-bottom: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        /* Softer shadow */
    }

    .accordion-header {
        background-color: #6C63FF;
        /* Soft purple */
        color: #FFFFFF;
        /* White text */
        padding: 15px;
        font-size: 18px;
        border: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 8px 8px 0 0;
        transition: background-color 0.3s ease;
    }

    .accordion-header:hover {
        background-color: #5753C9;
        /* Darker shade of purple */
    }

    .accordion-content {
        background-color: #FAFAFA;
        /* Very light grey for content */
        overflow: hidden;
        padding: 0 15px;
        max-height: 0;
        transition: max-height 0.3s ease;
    }

    .accordion-content p {
        margin: 15px 0;
        line-height: 1.5;
    }

    .icon {
        transition: transform 0.3s ease;
    }

    .active .icon {
        transform: rotate(45deg);
    }
</style>

<div class="page-content">
    <div class="dz-bnr-inr style-1 text-center">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>FAQ'S</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ'S</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
        <img class="bg-shape1" src="images/home-banner/shape1.png" alt="">
        <img class="bg-shape2" src="images/home-banner/shape1.png" alt="">
        <img class="bg-shape3" src="images/home-banner/shape3.png" alt="">
        <img class="bg-shape4" src="images/home-banner/shape3.png" alt="">
    </div>
</div>

<section>
    <div class="container">

        <section style="margin-bottom:8rem; margin-top:6rem;">
            <div class="container">
                <h2 class="mt-4 mb-4" style="text-align:center">FAQ'S</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="accordion-container">
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    What is FinoForex?<span class="icon">+</span>
                                </button>
                                <div class="accordion-content">
                                    <p>FinoForex is a leading financial services company that provides a sophisticated
                                        trading platform, including the popular MetaTrader 5 (MT5) for both mobile and
                                        Windows.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    What are the key features of MT5 mobile and MT5 Windows offered by FinoForex? <span
                                        class="icon">+</span>
                                </button>
                                <div class="accordion-content">
                                    <p>Both MT5 mobile and MT5 Windows platforms provided by FinoForex offer advanced
                                        charting tools, real-time market quotes, multiple order types, technical
                                        analysis tools, and a user-friendly interface.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    Can I access my FinoForex account on multiple devices using MT5? <span
                                        class="icon">+</span>
                                </button>
                                <div class="accordion-content">
                                    <p>Yes, you can access your FinoForex trading account on multiple devices seamlessly
                                        through MT5, ensuring flexibility and convenience.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    What financial instruments are available for trading on FinoForex's MT5
                                    platform?<span class="icon">+</span>
                                </button>
                                <div class="accordion-content">
                                    <p>FinoForex offers a wide range of financial instruments, including forex pairs,
                                        commodities, indices, and cryptocurrencies for trading on the MT5 platform.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    Is there a demo account available for testing the platform?<span
                                        class="icon">+</span>
                                </button>
                                <div class="accordion-content">
                                    <p>Yes, FinoForex provides a demo account for users to practice and familiarize
                                        themselves with the MT5 platform before engaging in live trading.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="accordion-container">
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    How secure is my personal and financial information on FinoForex?<span
                                        class="icon">+</span>
                                </button>
                                <div class="accordion-content">
                                    <p>FinoForex employs advanced security measures, including encryption protocols, to
                                        ensure the confidentiality and security of your personal and financial
                                        information.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    What are the deposit and withdrawal options available? <span class="icon">+</span>
                                </button>
                                <div class="accordion-content">
                                    <p>FinoForex offers a variety of deposit and withdrawal options, including bank
                                        transfers, credit/debit cards, and electronic payment methods. The specific
                                        options may vary based on your location.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    Is customer support available, and how can I reach them?<span class="icon">+</span>
                                </button>
                                <div class="accordion-content">
                                    <p>Yes, FinoForex provides customer support through various channels, such as live
                                        chat, email, and phone. You can find the contact details on their official
                                        website.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    Does FinoForex provide educational resources for traders?<span class="icon">+</span>
                                </button>
                                <div class="accordion-content">
                                    <p>FinoForex is committed to empowering its traders. They may offer educational
                                        resources, including tutorials, webinars, and market analysis, to enhance the
                                        trading knowledge of their users.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    What are the system requirements for running MT5 Windows on my computer? <span
                                        class="icon">+</span>
                                </button>
                                <div class="accordion-content">
                                    <p>
                                        Remember to check FinoForex's official website or contact their customer support
                                        for the most accurate and up-to-date information.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>
</section>
<script>
    document.querySelectorAll('.accordion-header').forEach(button => {
        button.addEventListener('click', () => {
            const accordionContent = button.nextElementSibling;

            button.classList.toggle('active');

            if (button.classList.contains('active')) {
                accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
            } else {
                accordionContent.style.maxHeight = 0;
            }

            // Close other open accordion items
            document.querySelectorAll('.accordion-header').forEach(otherButton => {
                if (otherButton !== button) {
                    otherButton.classList.remove('active');
                    otherButton.nextElementSibling.style.maxHeight = 0;
                }
            });
        });
    });

</script>


<?php include("includes/footer.php"); ?>