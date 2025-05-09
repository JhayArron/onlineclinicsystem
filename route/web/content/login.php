        <!-- Contact Section -->
        <section class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <center>
                    <div class="col-6 col-lg-6">
                        <form action="?view=LOGIN&action=LOGIN" method="POST" class="email-form" data-aos="fade-up"
                            data-aos-delay="500">
                            <div class="row gy-4">
                                <center>
                                    <h1>Online Clinic Systems</h1>
                                </center>
                                <div class="col-md-12">
                                    <input type="email" name="email" class="form-control" placeholder="Account Email"
                                        required="">
                                </div>
                               
                                <div class="col-md-12 position-relative">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="">
                                    <button type="button" class="btn btn-sm  position-absolute top-50 end-0 translate-middle-y me-2" onclick="togglePassword()">
                                        👁️
                                    </button>
                                </div>
                           
                                <div class="col-md-12 text-center">
                                    <input type="submit" name="submit" value="Login"
                                        class="btn btn-primary w-100" style="background-color:#3fbbc0; border:none;">
                                    <hr />
                                    <a href="?view=FORGOT" class="btn btn-primary w-100"
                                        style="background-color:#3fbbc0; border:none;">Forgot Password</a>
                                    <hr />
                                    <a href="?view=REGISTER" class="btn btn-primary w-100"
                                        style="background-color:#3fbbc0; border:none;">Register</a>
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