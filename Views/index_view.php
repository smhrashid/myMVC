<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php

class IndexView {

    function __construct() {
        ?>
        <form action="<?= $_SERVER['REQUEST_URI'] ?>insert"  method="post">
            <label for="fname">amount :</label><br>
            <input type="number" name="amount"><br>
            <label for="lname">buyer</label><br>
            <input type="text" maxlength="20" name="buyer"><br>
            <label for="lname">receipt_id</label><br>
            <input type="text" name="receipt_id"><br>
            <label for="fname">items</label><br>
            <textarea type="text" name="items" cols="30" rows="10"></textarea><br>
            <label for="lname">buyer_email</label><br>
            <input type="email" name="buyer_email"><br>
            <label for="lname">buyer_ip</label><br>
            <input type="text" name="buyer_ip"><br>
            <label for="lname">note</label><br>
            <textarea name="note" id="word_count" cols="30" rows="10"></textarea>
            <br>
            Total word count: <span id="display_count">0</span> words. Words left: <span id="word_left">30</span>
            <br><label for="lname">city</label><br>
            <input type="text" name="city" onkeydown="return /[a-z, ]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}" onfocus="if (this.value == '') {this.value = '';}"/><br>
            <label for="fname">phone</label><br>
            <input type="tel" name="phone"><br>
            <label for="lname">entry_by</label><br>
            <input type="number" name="entry_by"><br>

            <input type="submit" value="Submit">
        </form> 
        <?php
    }

}
?>
<script>
    $(document).ready(function () {
        $("#word_count").on('keyup', function () {
            var words = 0;

            if ((this.value.match(/\S+/g)) != null) {
                words = this.value.match(/\S+/g).length;
            }

            if (words > 30) {
                // Split the string on first 200 words and rejoin on spaces
                var trimmed = $(this).val().split(/\s+/, 30).join(" ");
                // Add a space at the end to make sure more typing creates new words
                $(this).val(trimmed + " ");
            } else {
                $('#display_count').text(words);
                $('#word_left').text(30 - words);
            }
        });
    });
</script>