<?php require 'partials/header.php'; ?>


<div class="row userAddAccount">
            <div class="col-10 offset-1">
                <h3 class="display-4 text-center my-5">Add account</h3>
                <div class="row">
                    <div class="col-10 offset-1">
                        <form action="add_account.php" method="post">
                        <input type="text" name="id" class="form-control" placeholder="id"><br>
                        <input type="text" name="name" class="form-control" placeholder="name"><br>
                        <input type="text" name="deposit" class="form-control" placeholder="deposit"><br>
                        <input type="text" name="credit_card" class="form-control" placeholder="credit card"><br>
                        <button type="submit" name="submit" class="btn btn-success mb-3 mx-auto d-block">Save</button>
                        </form>
                     
                        <h2 class="message"></h2>
                    </div>
                    </div>
                </div>
            </div>




<?php require 'partials/footer.php'; ?>
