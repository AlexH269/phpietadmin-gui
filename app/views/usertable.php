<div class="workspacedirect">
    <div class="container">
        <div class="panel panel-default">
            <ol class='panel-heading breadcrumb'>
                <li class='active'>Users</li>
            </ol>

            <div class="table-responsive">
                <table id="addusertable" class="table table-striped searchabletable">
                    <thead>
                    <tr>
                        <th class="col-md-5">Username</th>
                        <th class="col-md-5">Password</th>
                        <th class="col-md-1"><a href="#" id="adduserrowbutton"><span class="glyphicon glyphicon-plus glyphicon-20" aria-hidden="true"></span></a></th>
                        <th class="col-md-1"></th>
                    </tr>
                    </thead>
                    <tbody id="addusertablebody">
                    <?php if (is_array($data)) { ?>
                        <?php foreach ($data as $row) { ?>
                            <tr>
                                <td hidden class="id"><?php echo htmlspecialchars($row['id']); ?></td>
                                <td class="col-md-5"><?php echo htmlspecialchars($row['username']); ?></td>
                                <td class="col-md-5"><span class="passwordfield"><span class="passwordfieldplaceholder"><i>Show</i></span><span class="password" hidden><?php echo htmlspecialchars($row['password']); ?></span></span></td>
                                <td class="col-md-1"><a href="#" class="deleteuserrow"><span class="glyphicon glyphicon-trash glyphicon-20" aria-hidden="true"></span></a></td>
                                <td class="col-md-1"></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        require(['common'], function () {
            require(['pages/usertable'], function (methods) {
                methods.add_event_handler_passwordfield1();
                methods.add_event_handler_passwordfield2();
                methods.add_event_handler_adduserrowbutton1();
                methods.add_event_handler_deleteuserrow();
                methods.add_event_handler_adduserrowbutton2();
            });
        });
    </script>
</div>