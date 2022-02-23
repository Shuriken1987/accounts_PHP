<?php require 'partials/header.php'; ?>

<?php $accounts = accounts_view(); ?>

<div class="row editDeleteView">
    <div class="col-10 offset-1">
        <h3 class="display-4 text-center my-5">Edit / Delete </h3>
        <div class="row">
            <div class="col-10 offset-1">
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Deposit</th>
                        <th>Credit card</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody id="editTbody">
                    <?php foreach ($accounts as $account): ?>
                        <tr>
                            <td><?php echo $account['id']; ?></td>
                            <td><?php echo $account['name']; ?></td>
                            <td><?php echo $account['deposit']; ?></td>
                            <td><?php echo $account['credit_card']; ?></td>
                            <td class="text-center">
                                <a href="delete_account.php?del_acc=<?php echo $account['id']; ?>"
                                   class="btn btn-sm btn-danger mx-3">Delete</a>
                                <a href="update_view.php?edit_acc=<?php echo $account['id']; ?>" class="btn btn-sm btn-warning"
                                   type="submit">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>
