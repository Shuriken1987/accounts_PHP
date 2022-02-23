<?php require 'partials/header.php'; ?>
 <?php $edited_account = edit_account_view(); ?>
<div class="row userEdit">
    <div class="col-10 offset-1">
        <h3 class="display-4 text-center my-5">Edit account</h3>
        <div class="row">
            <div class="col-10 offset-1">
                <form action="update.php" method="post">
                    <input name="id" type="text" class="form-control" value="<?php echo $edited_account['id']; ?>"><br>
                    <input name="name" type="text" class="form-control"
                           value="<?php echo $edited_account['name']; ?>"><br>
                    <input name="deposit" type="text" class="form-control"
                           value="<?php echo $edited_account['deposit']; ?>"><br>
                    <input name="credit_card" type="text" class="form-control"
                           value="<?php echo $edited_account['credit_card']; ?>"><br>
                        <button type="submit" class="btn btn-warning mb-3 mx-auto d-block">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>
