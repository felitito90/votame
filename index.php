<?php

include("db.php")

?>

<?php

include("includes/header.php")

?>

<div class="container p-3">
    <div class="raw">
        <div class="card card-body">
            <form action="save_vote.php" name="vote_info" method="POST">
                <div class="form-group">
                    <input name="face" id="face" rows="1" class="for-control" placeholder="cara">
                </div>

                <div class="form-group">
                    <input name="lips" id="" rows="1" class="for-control" placeholder="labios">
                </div>

                <div class="form-group">
                    <input name="boobs" id="" rows="1" class="for-control" placeholder="tetas">
                </div>

                <div class="form-group">
                    <input name="pussy" id="" rows="1" class="for-control" placeholder="vagina">
                </div>

                <div class="form-group">
                    <input name="booty" id="" rows="1" class="for-control" placeholder="culo">
                </div>

                <div class="form-group">
                    <input name="legs" id="" rows="1" class="for-control" placeholder="piernas">
                </div>

                <div class="form-group">
                    <input name="foots" id="" rows="1" class="for-control" placeholder="pies">
                </div>

                <input type="submit" value="Enviar" class="form-group btn btn-info">
            </form>
        </div>
    </div>
</div>

<?php
include("includes/footer.php")
?>