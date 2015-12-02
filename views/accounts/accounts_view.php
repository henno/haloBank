<h1>Account '<?= $account['account_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th>Account ID</th>
        <td><?= $account['account_id'] ?></td>
    </tr>

    <tr>
        <th>Account name</th>
        <td><?= $account['account_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<? if ($auth->is_admin): ?>
    <form action="accounts/edit/<?= $account['account_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                Edit
            </button>
        </div>
    </form>
<? endif; ?>