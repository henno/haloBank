<?php

class accounts extends Controller
{

    function index()
    {

        $this->accounts = get_all("SELECT * FROM account");

    }

    function view()
    {
        $account_id = $this->params[0];
        $this->account = get_first("SELECT * FROM account WHERE account_id = '{$account_id}'");
    }

    function edit()
    {
        $account_id = $this->params[0];
        $this->account = get_first("SELECT * FROM account WHERE account_id = '{$account_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('account', $data);
    }

    function ajax_delete()
    {
        exit( q("DELETE FROM account WHERE account_id = '{$_POST['account_id']}'") ? 'Ok' : 'Fail' );
    }

}