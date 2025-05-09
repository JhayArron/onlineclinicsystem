        <!-- Contact Section -->
        <section class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <center>
                    <div class="col-6 col-lg-6">
                        <form action="?view=ADMINLOGIN&action=ADMINLOGIN" method="post" class="email-form" data-aos="fade-up"
                            data-aos-delay="500">
                            <div class="row gy-4">
                                <center>
                                    <h1>Online Clinic Systems | Admin</h1>
                                </center>
                                <div class="col-md-12">
                                    <input type="text" name="email" class="form-control" placeholder="Account Email"
                                        required="">
                                </div>

                                <div class="col-md-12 position-relative">
    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="">
    <button type="button" class="btn btn-sm btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2" onclick="togglePassword()">
        👁️
    </button>
</div>


                                <div class="col-md-12 text-center">
                                    <input type="submit" type="submit" name="submit" value="Login"
                                        class="btn btn-primary w-100" style="background-color:#3fbbc0; border:none;">
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </center>
            </div>

        </section><!-- /Contact Section -->

        <script>
function togglePassword() {
    const passwordInput = document.getElementById("password");
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
}
</script>