<?php require 'partials/header.php'; ?>

   <?php $accounts = accounts_view(); ?>
        <div class="row accountsView">
            <div class="col-10 offset-1">
                <h3 class="display-4 text-center my-5">Accounts</h3>
                <div class="row">
                    <div class="col-10 offset-1">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Deposit</th>
                                    <th>Credit card</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($accounts as $account): ?>
                                <tr>
                                    <td><?php echo $account['id']; ?></td>
                                    <td><?php echo $account['name']; ?></td>
                                    <td><?php echo $account['deposit']; ?></td>
                                    <td><?php echo $account['credit_card']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      
     
      
<?php require 'partials/footer.php'; ?>
  