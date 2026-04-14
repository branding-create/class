<?php
// includes/footer.php
?>
    <!-- Floating tools -->
    <div class="floating-tools">
        <a href="https://wa.me/1234567890" target="_blank" class="floating-btn whatsapp-btn" aria-label="WhatsApp">
            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.888-.788-1.489-1.761-1.663-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.571-.012c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
        </a>
        <button class="floating-btn chat-btn" id="openChatBtn" aria-label="Chat">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
        </button>
    </div>

    <!-- Chat Popup -->
    <div class="chat-popup" id="chatPopup">
        <div class="chat-header">
            <h4>Aarsh Support</h4>
            <button id="closeChatBtn">&times;</button>
        </div>
        <div class="chat-body">
            <p>Welcome to Aarsh Institute! How can we help you today?</p>
        </div>
        <div class="chat-footer">
            <input type="text" placeholder="Type a message...">
            <button>Send</button>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-col">
                <a href="/pandey/index.php" class="footer-logo">
                    <img src="/pandey/assets/img/logo.png" alt="Aarsh Institute Logo" style="height: 60px; max-width: 100%; border-radius: 8px;">
                </a>
                <p>Transforming your future with premium offline classes and study materials.</p>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#centers">Offline Centers</a></li>
                    <li><a href="#testimonials">Results</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact</h4>
                <ul>
                    <li>Email: info@aarshinstitute.com</li>
                    <li>Phone: +91 123 456 7890</li>
                    <li>Address: 123 Education Hub, Knowledge Park</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#">FB</a>
                    <a href="#">IG</a>
                    <a href="#">YT</a>
                    <a href="#">X</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom container">
            <p>&copy; <?php echo date('Y'); ?> Aarsh Institute. All rights reserved.</p>
        </div>
    </footer>

    <!-- GSAP & Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Main JS -->
    <script src="/pandey/assets/js/main.js"></script>
</body>
</html>