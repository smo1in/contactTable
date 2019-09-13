<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Phone book</title>
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</head>

<body>
    <div class="page-wrapper">
        <nav>
            <div class="nav-wrapper teal">
                <a class="brand-logo center">Contacts</a>
            </div>
        </nav>
        <div class="card">
            <div class="container">
                <div class="card-content">
                    <table class="centered">
                        <thead class>
                            <tr>
                                <th><i class="material-icons">person</i>
                                    <h5>First Name</h5>
                                </th>
                                <th><i class="material-icons">people</i>
                                    <h5>Second Name</h5>
                                </th>
                                <th><i class="material-icons">contact_mail</i>
                                    <h5>Email</h5>
                                </th>
                                <th><i class="material-icons">edit</i>
                                    <h5>Edit</h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="input-field inline">
                                        <input id="new_first_name" type="text" require>
                                        <label for="new_first_name"> Add New First Name</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-field inline">
                                        <input id="new_last_name" type="text" require>
                                        <label for="new_last_name">Add New Second Name</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-field inline">
                                        <input id="new_email" type="email" require>
                                        <label for="new_email">New Email</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="waves-effect waves-light btn-floating btn-large" id="add_contact">
                                        <i class="material-icons">add</i></a>
                                </td>
                            </tr>
                            <?php foreach ($contacts as $contactItem) : ?>
                                <tr>
                                    <td>
                                        <div class="input-fieldx">
                                            <input type="text" id="first_name<?php echo $contactItem['id']; ?>" value=<?php echo $contactItem['first_name']; ?> />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-fieldx">
                                            <input type="text" id="last_name<?php echo $contactItem['id']; ?>" value=<?php echo $contactItem['last_name']; ?> />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-fieldx">
                                            <input type="text" id="email<?php echo $contactItem['id']; ?>" value=<?php echo $contactItem['email']; ?> />
                                        </div>
                                    </td>

                                    <td>
                                        <div class="buttons">
                                            <div class="waves-effect waves-light  btn-edt" data-file="<?php echo $contactItem['id']; ?>">
                                                <a class="btn"><i class="material-icons">edit</i></a>
                                            </div>
                                            <div class="waves-effect waves-light btn-del" data-file="<?php echo $contactItem['id']; ?>">
                                                <a class="btn"><i class="material-icons">delete</i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <script src="/js/main.js"></script>
</body>