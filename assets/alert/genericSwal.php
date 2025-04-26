<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
        if (!empty($_GET['message'])) {
            if(!empty($_GET['reason'])) {
                if ($_GET['message'] == 'success') {
                        echo '
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                Swal.fire({
                                    icon: "success",
                                    title: "Submission request has been submitted",
                                    text: ""
                                });
                            });
                        </script>';
                } else {
                    switch($_GET['reason'])
                    {
                        case "402":
                            echo '
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    Swal.fire({
                                        icon: "error",
                                        title: "An error occurred",
                                        text: "Email Already Used"
                                    });
                                });
                            </script>';
                        break;
                        default :
                            echo '
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    Swal.fire({
                                        icon: "error",
                                        title: "An error occurred",
                                        text: ""
                                    });
                                });
                            </script>';
                        break;
                    }
                }
            }
            else
            {
                if ($_GET['message'] == 'success') {
                        echo '
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                Swal.fire({
                                    icon: "success",
                                    title: "Submission request has been submitted",
                                    text: ""
                                });
                            });
                        </script>';
                } else {
                        echo '
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                Swal.fire({
                                    icon: "error",
                                    title: "An error occurred",
                                    text: ""
                                });
                            });
                        </script>';
                }
            }
        }
    ?>

    </script>
