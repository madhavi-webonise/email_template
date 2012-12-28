<?php ?>
<div class="block-border">
    <form class="block-content form" id="table_form" method="post" action="">
        <h1>Email Templates Listing</h1>
        <table class="table no-margin" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th scope="col" style="width: 60px !important;">
                        <?php echo ('Id'); ?>
                    </th>
                    <th scope="col">
                        <?php echo ('Email Template Name'); ?>
                    </th>
                    <th scope="col">
                        <?php echo ('From Name'); ?>
                    </th>
                    <th scope="col">
                        <?php __('Email Subject'); ?>
                    </th>
                    <th scope="col">
                        <?php __('Slug'); ?>
                    </th>
                    <th scope="col">
                        <?php __('Active'); ?>
                    </th>
                    <th scope="col" class="table-actions">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $i = 0;
                foreach ($emailManagements as $emailManagement):
                    $class = null;
                    if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                    }
                    ?>
                    <tr>
                        <td class="th table-check-cell"><?php echo $i; ?></td>
                        <td><?php echo $emailManagement['EmailTemplate']['email_template_name']; ?></td>
                        <td><?php echo $emailManagement['EmailTemplate']['from_name']; ?></td>
                        <td><?php echo $emailManagement['EmailTemplate']['email_subject']; ?></td>
                        <td><?php echo $emailManagement['EmailTemplate']['slug']; ?></td>
                        <td><?php echo $emailManagement['EmailTemplate']['is_active']; ?></td>
                        <td class="table-actions">
                            <?php
                            echo $this->Html->link($this->Html->image('new_theme/icons/fugue/magnifier.png', array('alt' => 'View', 'width' => "16", 'height' => "16")), array('action' => 'view', $emailManagement['EmailTemplate']['id']), array('class' => 'with-tip', 'title' => 'View', 'escape' => false));
                            echo $this->Html->link($this->Html->image('new_theme/icons/fugue/pencil.png', array('alt' => 'Edit', 'width' => "16", 'height' => "16")), array('action' => 'edit', $emailManagement['EmailTemplate']['id']), array('class' => 'with-tip', 'title' => 'Edit', 'escape' => false));
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </form>
</div>
