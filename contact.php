<?php
$page_title = 'Contact Arcade Machine Suppliers India | Funtime';
$meta_description = 'Get in touch with leading arcade machine suppliers in India for business inquiries and partnerships.';
$current_page = 'contact';
include __DIR__ . '/includes/header.php';
?>

<section class="relative min-h-[220px] sm:min-h-[260px] flex items-center pt-20 bg-brand-secondary text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,_#FF4D00_0,_transparent_55%),radial-gradient(circle_at_bottom,_#00D1FF_0,_transparent_55%)]"></div>
    <div class="relative max-w-[1440px] mx-auto px-4 sm:px-6 md:px-8 lg:px-12 w-full py-8 sm:py-10">
        <div class="max-w-3xl">
            <span class="text-brand-primary font-bold tracking-[0.2em] uppercase text-xs sm:text-sm mb-3 sm:mb-4 block">Get In Touch</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold">Contact Funtime India</h1>
            <p class="text-white/80 mt-3 sm:mt-4 text-sm sm:text-base md:text-lg max-w-2xl">
                Reach our Bangalore team for product enquiries, partnerships, or support. We’ll help you engineer the right experience for your venue.
            </p>
        </div>
    </div>
</section>

<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 md:px-8 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            <!-- Left: contact details -->
            <div class="order-2 lg:order-1 space-y-6">
                <div class="bg-gray-50 rounded-2xl sm:rounded-3xl p-6 sm:pt-7 sm:pb-7 md:p-8 shadow-sm border border-gray-100">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-brand-secondary mb-4 sm:mb-5">Visit Our Facility</h2>
                    <p class="text-gray-600 leading-relaxed">
                        FUNTIME, Bommasandra Jigani Link Road,<br>
                        Bommasandra Industrial Area,<br>
                        Bangalore 560105, Karnataka, India.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                    <div class="bg-white rounded-2xl border border-gray-100 p-5 sm:p-6 shadow-sm flex flex-col gap-3">
                        <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-brand-primary/10 text-brand-primary">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-[0.18em] mb-1">Phone</h3>
                            <a href="tel:+918904739796" class="block text-brand-secondary font-semibold hover:text-brand-primary transition-colors text-sm sm:text-base">+91 89047 39796</a>
                            <a href="tel:+919686181553" class="block text-brand-secondary font-semibold hover:text-brand-primary transition-colors text-sm sm:text-base mt-0.5">+91 96861 81553</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl border border-gray-100 p-5 sm:p-6 shadow-sm flex flex-col gap-3">
                        <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-brand-primary/10 text-brand-primary">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-[0.18em] mb-1">Email</h3>
                            <a href="mailto:contact@funtimeindia.in" class="block text-brand-secondary font-semibold hover:text-brand-primary transition-colors text-sm sm:text-base">
                                contact@funtimeindia.in
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl sm:rounded-3xl p-5 sm:p-6 md:p-7 border border-dashed border-brand-primary/40">
                    <p class="text-sm sm:text-base text-gray-700">
                        Planning a new game zone, upgrading an existing floor, or looking for a custom installation?
                        <span class="font-semibold text-brand-primary">Share your project details when you contact us</span> and our team will recommend the ideal product mix.
                    </p>
                </div>
            </div>

            <!-- Right: enquiry form -->
            <div class="order-1 lg:order-2 space-y-6">
                <div class="rounded-2xl sm:rounded-3xl shadow-xl border border-gray-100 bg-white p-5 sm:p-6 md:p-8">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-brand-secondary mb-2">Send an Enquiry</h2>
                    <p class="text-sm sm:text-base text-gray-600 mb-5 sm:mb-6">Fill out the form and our team will get back to you shortly.</p>

                    <form id="contact-form" class="space-y-4" method="post" action="<?php echo htmlspecialchars($base_path); ?>/contact" novalidate>
                        <div>
                            <label for="name" class="block text-sm font-semibold text-brand-secondary mb-1.5">Name</label>
                            <input id="name" name="name" type="text" class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm sm:text-base placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary transition-colors" placeholder="e.g. Rahul Sharma">
                            <p class="contact-error text-xs text-red-600 mt-1.5 hidden"></p>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-brand-secondary mb-1.5">Email</label>
                            <input id="email" name="email" type="email" class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm sm:text-base placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary transition-colors" placeholder="e.g. rahul@email.com">
                            <p class="contact-error text-xs text-red-600 mt-1.5 hidden"></p>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-brand-secondary mb-1.5">Phone</label>
                            <input id="phone" name="phone" type="tel" class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm sm:text-base placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary transition-colors" placeholder="e.g. +91 89047 39796">
                            <p class="contact-error text-xs text-red-600 mt-1.5 hidden"></p>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-semibold text-brand-secondary mb-1.5">Subject</label>
                            <input id="subject" name="subject" type="text" class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm sm:text-base placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary transition-colors" placeholder="e.g. Need arcade setup for mall">
                            <p class="contact-error text-xs text-red-600 mt-1.5 hidden"></p>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-brand-secondary mb-1.5">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm sm:text-base placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-primary/40 focus:border-brand-primary transition-colors resize-y" placeholder="Tell us about your requirement, location, and timeline..."></textarea>
                            <p class="contact-error text-xs text-red-600 mt-1.5 hidden"></p>
                        </div>

                        <button type="submit" class="w-full inline-flex items-center justify-center rounded-xl bg-brand-primary text-white px-5 py-3.5 text-sm sm:text-base font-bold hover:bg-brand-secondary transition-colors">
                            Submit Enquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-8 sm:mt-10 md:mt-12 rounded-2xl sm:rounded-3xl overflow-hidden shadow-xl border border-gray-100 bg-gray-900/5">
            <div class="aspect-[4/3] sm:aspect-video w-full">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4228.399429975256!2d77.62255979999999!3d12.9003464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14de5217e40f%3A0xf7ea7928a321f1a7!2sBommanahalli%20Rd%2C%20Maruthi%20Layout%2C%20Begur%2C%20Bengaluru%2C%20Karnataka!5e1!3m2!1sen!2sin!4v1773040583722!5m2!1sen!2sin"
                    width="100%"
                    height="100%"
                    style="border:0; min-height: 280px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Funtime office location on Google Maps">
                </iframe>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
