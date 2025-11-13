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
    // $(document).ajaxError(async function (event, xhr, settings) {
    //     const errMsg = xhr.responseJSON?.message?.toLowerCase() || "";
    //     if (xhr.status === 401 || errMsg.includes("token required") || errMsg.includes("unauthorized")) {
    //         const oldToken = localStorage.getItem("token");
    //         if (!oldToken) return logout();
    //         try {
    //             const refreshRes = await $.ajax({
    //                 url:  window.API_BASE_URL + "/customer/auth/refresh",
    //                 type: "POST",
    //                 headers: {
    //                     "Authorization": "Bearer " + oldToken,
    //                     "Accept": "application/json"
    //                 }
    //             });

    //             if (refreshRes.success && refreshRes.token) {
    //                 localStorage.setItem("token", refreshRes.token);
    //                 settings.headers = settings.headers || {};
    //                 settings.headers["Authorization"] = "Bearer " + refreshRes.token;
    //                 $.ajax(settings);
    //             } else {
    //                 logout();
    //             }

    //         } catch (refreshError) {
    //             console.log("Refresh token failed");
    //             logout();
    //         }
    //     }
    // });

    // function logout() {
    //     localStorage.removeItem("token");
    //     localStorage.removeItem("customer_id");
    //     localStorage.removeItem("user");
    //     sessionStorage.setItem("auth_error", "Session expired. Please login again.");
    //     window.location.href = "/customer/login";
    // }
</script>