<?php

require 'Text_Parser.php';

?>

<div class="container-fluid">
    <div class="row my-4">
        <?= $parsed->parse()[3]; ?>
    </div>
    <div class="row">
        <div class="col-md-4">
            <table class="table table-striped table-bordered">
                <tr>
                    <th><?= $parsed->tWords(); ?></th>
                </tr>
               
                <?php foreach( $parsed->parse()[0] as $word ) : ?>
                <tr>
                    <td><?= $word; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered">
                <tr>
                    <th><?= $parsed->eWords(); ?></th>
                </tr>
                
                <?php foreach( $parsed->parse()[1] as $word ) : ?>
                <tr>
                    <td><?= $word; ?></td>
                </tr>
                <?php endforeach; ?>  
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered">
                <tr>
                    <th><?= $parsed->tEWords(); ?></th>
                </tr>
                <?php foreach( $parsed->parse()[2] as $word ) : ?>
                <tr>
                    <td><?= $word; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>