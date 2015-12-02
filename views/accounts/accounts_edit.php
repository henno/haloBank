<? if (!$auth->is_admin): ?>
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert">×</button>
        You are not an administrator.
    </div>
    <? exit(); endif; ?>
<h1>account '<?= $account['account_name'] ?>'</h1>
<form id="form" method="post">
    <table class="table table-bordered">
        <tr>
            <th>accountname</th>
            <td><input type="text" name="data[account_name]" value="<?= $account['account_name'] ?>"/></td>
        </tr>
    </table>
</form>

<!-- BUTTONS -->
<div class="pull-right">

    <!-- CANCEL -->
    <button class="btn btn-default"
            onclick="window.location.href = 'accounts/view/<?= $account['account_id'] ?>/<?= $account['accountname'] ?>'">
        Cancel
    </button>

    <!-- DELETE -->
    <button class="btn btn-danger" onclick="delete_account(<?= $account['account_id'] ?>)">
        Delete
    </button>

    <!-- SAVE -->
    <button class="btn btn-primary" onclick="$('#form').submit()">
        Save
    </button>

</div>
<!-- END BUTTONS -->

<!-- JAVASCRIPT
==============================================================================-->
<script type="application/javascript">
    function delete_account() {
        $.post('<?=BASE_URL?>accounts/delete', {account_id: <?= $account['account_id'] ?>}, function (response) {
            if(response == 'Ok'){
                window.location.href = '<?=BASE_URL?>accounts';
            }
        })
    }
</script>