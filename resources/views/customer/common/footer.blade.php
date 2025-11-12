<script src="/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/backend/assets/libs/feather-icons/feather.min.js"></script>
<script src="/backend/assets/js/plugins.init.js"></script>
<script src="/backend/assets/js/app.js"></script>
<script>
    $(document).ready(function () {
        const savedUser = localStorage.getItem("user");
        if (savedUser) {
            const user = JSON.parse(savedUser);
            $(".fullname").text(user.full_name || "");
        }
    });
    $(document).ajaxError(function (event, xhr) {
        if (xhr.status === 401 || xhr.responseJSON?.message?.toLowerCase().includes("token required")) {

            // Clear stored auth data
            localStorage.removeItem("token");
            localStorage.removeItem("customer_id");
            localStorage.removeItem("user");

            // Optional: Save message to show after redirect
            sessionStorage.setItem("auth_error", "Session expired. Please login again.");

            // Redirect to login page
            window.location.href = "/customer/login";
        }
    });
</script>