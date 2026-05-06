    </main>

    <!-- Footer -->
    <footer id="footer" class="bg-gray-950 text-white pt-12 sm:pt-16 md:pt-24 pb-8 sm:pb-12">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 md:px-8 lg:px-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 sm:gap-12 md:gap-16 mb-12 sm:mb-16 md:mb-20">
                <div class="sm:col-span-2 lg:col-span-1">
                    <div class="flex items-center gap-2 mb-4 sm:mb-6">
                        <a href="<?php echo htmlspecialchars($base_path); ?>/" class="inline-flex items-center hover:opacity-90 transition-opacity">
                            <img src="<?php echo htmlspecialchars($base_path); ?>/assets/images/funtime-logo.jpg" alt="Fun Time Sports & Entertainment" class="h-10 md:h-12 w-auto rounded-md" />
                        </a>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-6 sm:mb-8 text-sm sm:text-base">
                        We create experiences. Leading the way in interactive entertainment manufacturing and electronics development from Bangalore.
                    </p>
                    <div class="flex flex-wrap gap-3 sm:gap-4">
                        <a href="https://www.linkedin.com/company/funtime-india/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-brand-primary hover:border-brand-primary transition-all" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/funtimeindiaofficial/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-brand-primary hover:border-brand-primary transition-all" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@FuntimeIndia_Official" target="_blank" rel="noopener noreferrer" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-brand-primary hover:border-brand-primary transition-all" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.facebook.com/funtimeindiaofficial" target="_blank" rel="noopener noreferrer" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-brand-primary hover:border-brand-primary transition-all" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-base sm:text-lg font-bold mb-4 sm:mb-8">Quick Links</h4>
                    <ul class="space-y-3 sm:space-y-4 text-gray-400 font-medium text-sm sm:text-base">
                        <li><a href="<?php echo htmlspecialchars($base_path); ?>/" class="hover:text-brand-primary transition-colors">Home</a></li>
                        <li><a href="<?php echo htmlspecialchars($base_path); ?>/products" class="hover:text-brand-primary transition-colors">Our Products</a></li>
                        <li><a href="<?php echo htmlspecialchars($base_path); ?>/about" class="hover:text-brand-primary transition-colors">About Us</a></li>
                        <li><a href="<?php echo htmlspecialchars($base_path); ?>/manufacturing" class="hover:text-brand-primary transition-colors">Manufacturing Unit</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-base sm:text-lg font-bold mb-4 sm:mb-8">Support</h4>
                    <ul class="space-y-3 sm:space-y-4 text-gray-400 font-medium text-sm sm:text-base">
                        <li><a href="<?php echo htmlspecialchars($base_path); ?>/partner" class="hover:text-brand-primary transition-colors">Partner With Us</a></li>
                        <li><a href="<?php echo htmlspecialchars($base_path); ?>/contact" class="hover:text-brand-primary transition-colors">Contact Support</a></li>
                        <li><a href="<?php echo htmlspecialchars($base_path); ?>/terms-and-conditions" class="hover:text-brand-primary transition-colors">Terms & Conditions</a></li>
                        <li><a href="<?php echo htmlspecialchars($base_path); ?>/privacy-policy" class="hover:text-brand-primary transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-base sm:text-lg font-bold mb-4 sm:mb-8">Contact</h4>
                    <ul class="space-y-4 sm:space-y-6 text-gray-400 text-sm sm:text-base">
                        <li class="flex items-baseline gap-3 sm:gap-4">
                            <i class="fa-solid fa-location-dot text-brand-primary mt-1 shrink-0"></i>
                            <span>FUNTIME, Bommasandra Jigani Link Road, Bommasandra Industrial Area, Bangalore 560105 Karnataka</span>
                        </li>
                        <li class="flex items-baseline gap-3 sm:gap-4">
                            <i class="fa-solid fa-phone text-brand-primary shrink-0"></i>
                            <span>+91 89047 39796 <br> +91 96861 81553</span>
                        </li>
                        <li class="flex items-baseline gap-3 sm:gap-4">
                            <i class="fa-solid fa-envelope text-brand-primary shrink-0"></i>
                            <span>contact@funtimeindia.in</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 sm:pt-12 border-t border-white/10 flex flex-col sm:flex-row justify-center items-center gap-4 text-gray-500 text-xs sm:text-sm text-center">
                <p>&copy; <span id="copyright-year"></span> Funtime Entertainment Pvt Ltd. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php
    $whatsapp_number = '918904739796';
    $whatsapp_message = 'Hi Funtime team, I am interested in your arcade game machines. Please share details.';
    $whatsapp_url = 'https://wa.me/' . $whatsapp_number . '?text=' . rawurlencode($whatsapp_message);
    ?>
    <a
        href="<?php echo htmlspecialchars($whatsapp_url); ?>"
        class="whatsapp-float"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat with us on WhatsApp"
    >
        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
    </a>

    <script src="<?php echo htmlspecialchars($base_path); ?>/assets/js/main.js"></script>
</body>
</html>
