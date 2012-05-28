<?php ?>
<section class="grid_12">
    <div class="block-border">
        <form class="block-content form" id="table_form" method="post" action="">
            <h1>Email Templates View</h1>
            <table class="table sortable no-margin" cellspacing="0" width="100%" style="margin-left: 0.33em; margin-bottom:-0.67em; ">
                <?php $i = 0;
                    $class = ' class="altrow"'; ?>

                    <tr>
                        <td align="left" width="20%" valign="top"><?php __('Email From Name'); ?></td>
                        <td class="padleft" width="80%" ><?php echo $emailManagement['EmailTemplate']['from_name']; ?></td>
                    </tr>

                    <tr>
                        <td align="left" width="20%" valign="top" ><?php __('Email From Email'); ?></td>
                        <td class="padleft" width="80%" ><?php echo $emailManagement['EmailTemplate']['from_email']; ?></td>
                    </tr>

                    <tr>
                        <td align="left" width="20%" valign="top" ><?php __('Email Subject'); ?></td>
                        <td class="padleft" width="80%" ><?php echo $emailManagement['EmailTemplate']['email_subject']; ?></td>
                    </tr>

                    <tr>
                        <td align="left" width="20%" valign="top" ><?php __('Email Body Text'); ?></td>
                        <td class="padleft" width="80%" ><?php echo $emailManagement['EmailTemplate']['email_body']; ?></td>
                    </tr>

                    <tr>
                        <td align="left" width="20%" valign="top" ><?php __('Is Active'); ?></td>
                        <td class="padleft" width="80%" ><?php echo $emailManagement['EmailTemplate']['is_active']; ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td colspan="2" class="actions" style="text-align: left">

                            <?php
                            echo $this->Html->link(__('Edit', true), array('action' => 'edit', $emailManagement['EmailTemplate']['id']), array('class' => 'big-button', 'title' => 'Edit'));
                            echo $this->Html->link(__('Back', true), 'javascript:;', array('onclick' => 'javascript:history.go(-1);', 'class' => 'big-button', 'title' => 'Back'));
                            ?>
                        </td>
                    </tr>
                </table>
        </form>
    </div>
</section>

