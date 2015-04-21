<div class="page-header">
    <h1><?php echo $titulo['title']; ?></h1>
</div>

<div class="row">

    <div class="col-lg-8">


        <table class="display" style="width: 800px;">
            <thead>
            <tr>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Login</th>
            </tr>
            </thead>
            <?php foreach ($data as $array) { ?>
                <tbody>
                <tr>
                    <td><?php echo $array->nome; ?></td>
                    <td style="width: 210px;"><?php echo $array->login; ?></td>
                    <td><?php echo $array->email; ?></td>
                </tr>
                </tbody>

            <?php
            }
            ?>

        </table>
    </div>
</div>

<a class="btn btn-md btn-success" href="<?php echo DIR ?>">
    <?php echo core\language::show('back_home', 'welcome') ?>
</a>