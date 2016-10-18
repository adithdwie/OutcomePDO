<script>
    function post(event) {
        event.preventDefault();
        document.getElementById("my_form").submit();
    }
</script>
<form action="action.php" method="post" id="my_form" style="display: none;">
    <input type="hidden" name="key" value="val" />
</form>
<a href="#" onclick="post()">click me!</a>