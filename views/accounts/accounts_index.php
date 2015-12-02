<h1>Account information</h1>
<h3>Accounts</h3>
<ul class="list-group">
    <? if (!empty($accounts)): ?>
        <table class="table table-bordered">
            <tr>

                <th>Account name</th>
                <th>Balance</th>
                <th>Funds available</th>
                <th>Reserved</th>
                <th>Last transaction</th>

            </tr>
            <? foreach ($accounts as $account):?>
                <tr>
                    <td>
                        <a href="accounts/<?= $account['account_id'] ?>/<?= $account['account_name'] ?>"><?= $account['account_name'] ?></a>
                    </td>
                    <td>
                        <?= $account['account_balance'] ?>
                    </td>
                    <td>
                        <?= $account['account_funds_available'] ?>
                    </td>
                    <td>
                        <?= $account['account_reserved'] ?>
                    </td>
                    <td>
                        <?= $account['account_last_transaction'] ?>
                    </td>
                </tr>
            <? endforeach ?>
        </table>
    <? endif ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3>Add new account</h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><input type="text" name="data[account_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit">Add</button>
    </form>
    <?php endif; ?>
