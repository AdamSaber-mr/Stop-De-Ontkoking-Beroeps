</body>

<script src="js/header.js"></script>
<script>
    const searchButtons = document.querySelectorAll('.search-btn');

    searchButtons.forEach(btn => {
        const container = btn.closest('.search');
        btn.addEventListener('click', () => {
            container.classList.toggle('active');
        });
    });

    document.addEventListener("DOMContentLoaded", () => {
        const account = document.getElementById("account");
        const dropdown = document.getElementById("header_ul");

        account.addEventListener("click", (e) => {
            e.stopPropagation();
            dropdown.classList.toggle("show");
        });

        document.addEventListener("click", (e) => {
            if (!account.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.remove("show");
            }
        });
    });

    function goToCategory(url) {
    window.location.href = url;
    }
</script>

</html>
