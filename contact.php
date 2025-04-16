<?php include 'navbar.php';  ?>
<!-- Header Area End -->
<!-- Banner Area Start -->
<!-- <div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>     -->
<!-- Banner Area End -->
<!-- Contact Start -->
<div class="map-area">
    <!-- google-map-area start -->
    <div class="google-map-area">
        <!--  Map Section -->
        <!-- <div id="contacts" class="map-area">
                    <div id="googleMap" style="width:100%;height:440px;"></div>
                </div> -->
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1924.2962863151222!2d80.62751820000001!3d16.439629000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35f1fb13be7ea7%3A0xb09ef427706a576!2sMEDENG%20JUNIOR%20COLLEGE!5e0!3m2!1sen!2sin!4v1643276233840!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.708409613567!2d80.62751817581305!3d16.439629029414245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35f1fb13be7ea7%3A0xb09ef427706a576!2sMEDENG%20JUNIOR%20COLLEGE!5e0!3m2!1sen!2sin!4v1706509223130!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<div class="contact-area pt-50 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 pt-95">
                <div class="contact-contents text-center">
                    <div class="single-contact mb-65">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill mt-3" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                            </svg>
                        </div>
                        <div class="contact-add">
                            <h3>Email Address</h3>
                            <p>medengcolleges@gmail.com</p>
                        </div>
                    </div>
                    <div class="single-contact mb-65">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill mt-3" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                        </div>
                        <div class="contact-add">
                            <h3>Phone Number</h3>
                            <p>+91 9492381111</p>
                            <p>91 9705345099</p>
                        </div>
                    </div>
                    <div class="single-contact">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill mt-3" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg>
                        </div>
                        <div class="contact-add">
                            <h3>Office Address</h3>
                            <p>VIJAYAWADA</p>
                            <p>VISAKHAPATNAM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="reply-area">
                    <!-- <h3 class="text-danger">Contact </h3> -->
                    <h3>Get in Touch</h3>
                    <!-- <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut the is lder of human happinescias unde omnis iste natus error sit volptatem </p> -->
                    <form action="contactMail.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <p> First Name</p>
                                <input type="text" name="first" required>
                            </div>
                            <div class="col-md-12">
                                <p> Last Name</p>
                                <input type="text" name="last" required>
                            </div>
                            <div class="col-md-12">
                                <p>Email</p>
                                <input type="mail" name="email" required>
                            </div>
                            <div class="col-md-12">
                                <p>Phone Number</p>
                                <input type="number" name="number" required>
                            </div>
                            <div class="col-md-12">
                                <p>Subject</p>
                                <input type="text" name="subject" required>
                                <p>Message</p>
                                <textarea name="message" cols="15" rows="10"></textarea>
                            </div>
                        </div>
                        <button class="reply-btn mb-5" name="button" type="submit"><span>send message</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<!-- Subscribe Start -->
<!-- <div class="subscribe-area pt-60 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="subscribe-content section-title text-center">
                            <h2>subscribe our newsletter</h2>
                            <p>I must explain to you how all this mistaken idea </p>
                        </div>
                        <div class="newsletter-form mc_embed_signup">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form"> 
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button> 
                                </div>    
                            </form>
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div> 
                                <div class="mailchimp-success"></div> 
                                <div class="mailchimp-error"></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Subscribe End -->

<!-- <button  id="open-pdf">

        <div class="loader">

            <div>
                <ul>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                </ul>
            </div><span class="neet_paper"><strong style="color:red">Neet Physics Paper</strong> </span>
      
        </div>

    </button> -->

<script>
    document.getElementById('open-pdf').addEventListener('click', function() {
        var pdfUrl = 'img/NEET PHYSICS PAPER WITH SOLUTIONS.pdf'; // Path to your PDF file
        window.open(pdfUrl, '_blank'); // Open PDF in new tab

        // Optional: If you want to embed the PDF in the current page as well
        var pdfContainer = document.getElementById('pdf-container');
        pdfContainer.innerHTML = ''; // Clear any previous PDF content

        // Create a <embed> element to display the PDF
        var embed = document.createElement('embed');
        embed.src = pdfUrl;
        embed.type = 'application/pdf';
        embed.width = '100%';
        embed.height = '100%';

        // Append the <embed> element to the container
        pdfContainer.appendChild(embed);
    });
</script>

<?php include 'footer.php';  ?>
