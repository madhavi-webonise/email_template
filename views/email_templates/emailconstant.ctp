<div style="margin-top: 20px; ">

<h2><?php __('Email Constants'); ?></h2>
<table cellpadding="15" cellspacing="0" border="1" width="100%">
    <tr style="border: 1px solid #000000; min-height: 40px; height: auto;">
        <td style="border: 1px solid #000000; padding: 5px;"><b><?php echo 'Email Constant'; ?></b></td>
        <td style="border: 1px solid #000000; padding: 5px;"><b><?php echo 'Description'; ?></b></td>
    </tr>
    <?php
    $i = 0;
    foreach ($emailconstnt as $key => $value):
        $class = null;
        if ($i++ % 2 == 0) {
            $class = ' class="altrow"';
        }
    ?>
        <tr <?php echo $class; ?> style="border: 1px solid #000000; min-height: 40px; height: auto;">
            <?php if($key == '[HEADING]' || $key == '[COMHEADING]' || $key == '[VERIHEADING]' || $key == '[FORHEADING]' || $key == '[CONTACTHEADING]') { ?>

            <td colspan="2" style="border: 1px solid #000000; padding: 5px;"><b><?php echo $value; ?></b></td>

            <?php }else { ?>

            <td style="border: 1px solid #000000; padding: 5px;"><?php echo $key; ?></td>
            <td style="border: 1px solid #000000; padding: 5px;"><?php echo $value; ?></td>

            <?php } ?>
        </tr>
    <?php endforeach; ?>
</table>

</div>
