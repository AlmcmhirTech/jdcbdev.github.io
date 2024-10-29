<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Accounts</h4>
            </div>
        </div>
    </div>

    <div class="modal-container"></div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-accounts" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../classes/account.class.php';
                                session_start();
                                $accountObj = new Account();

                                // Fetch user data
                                $accounts = $accountObj->fetchAccounts();

                                foreach ($accounts as $account) {
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($account['first_name']) ?></td>
                                        <td><?= htmlspecialchars($account['last_name']) ?></td>
                                        <td><?= htmlspecialchars($account['username']) ?></td>
                                        <td><?= htmlspecialchars($account['role']) ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
