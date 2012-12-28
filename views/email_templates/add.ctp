<?php
echo $this->Html->css(array('/email_template/css/colorbox/colorbox'));
echo $this->Html->script(array('/email_template/js/jquery-1.6.2.min','/email/js/colorbox/jquery.colorbox'));
echo $this->Javascript->link('/email_template/js/ckeditor/ckeditor', false);
?>
<script type="text/javascript" >
    jQuery(function(){
        $(".emailConstants").live("click",function(){
            $.colorbox({href:"/email_template/email_templates/emailconstant", transition:"elastic", height:"550px", width:"600px"});
        });
    })

</script>
<section class="grid_12">
    <div class="block-border">
        <?php echo $this->Form->create('EmailTemplate', array('class' => 'block-content form', 'id' => 'table_form', 'inputDefaults' => array('div' => false, 'label' => false))); ?>
        <h1><?php __('Add Email Content'); ?></h1>
        <table class="table sortable no-margin" cellspacing="0" width="100%" style="margin-left: 0.33em; margin-bottom:-0.67em; ">
            <tr>
                <td colspan="2" align="right" style="text-align: right;"><?php echo $this->Html->link(__('Email Constants', true), 'javascript:;', array('class' => 'emailConstants')); ?></td>
            </tr>
            <tr style="height: 30px;">
                <td align="left" width="20%" valign="top"><?php echo __('Email Template name '); ?></td>
                <td class="" width="80%"><?php echo $this->Form->input('email_template_name', array('value' => $this->data['EmailTemplate']['email_template_name'], 'class' => 'field')); ?>
                </td>
            </tr>
            <tr>
                <td align="left" width="20%" valign="top"><?php echo __('Email From Name '); ?></td>
                <td class="" width="80%"><?php echo $this->Form->input('from_name', array('id' => 'from_name', 'class' => 'field')); ?></td>
            </tr>
            <tr>
                <td align="left" width="20%" valign="top"><?php echo __('Email From Email '); ?></td>
                <td class="" width="80%"><?php echo $this->Form->input('from_email', array('id' => 'from_email', 'class' => 'field')); ?></td>
            </tr>
            <tr>
                <td align="left" width="20%" valign="top"><?php echo __('Email Subject '); ?></td>
                <td class="" width="80%"><?php echo $this->Form->input('email_subject', array('id' => 'email_subject', 'class' => 'field')); ?></td>
            </tr>
            <tr>
                <td align="left" width="20%" valign="top"><?php echo __('Email Body Text '); ?></td>
                <td class="" width="80%">
                    <?php echo $this->Form->textarea('email_body', array('label' => false, 'id' => 'ckeditor_text')); //,'class'=>'ckeditor'?>
                    <?php //echo $this->element('ckeditor', array('name' => 'email_body', 'id' => 'email_body', 'description' => $this->data['EmailTemplate']['email_body']));?>
                </td>
            </tr>
            <tr>
                <td align="left" width="20%"><?php echo __('Active '); ?></td>
                <td class="" width="80%">
                    <?php
                    $options = array('1' => 'Yes', '0' => 'No');
                    $attributes = array('legend' => false, 'label' => false, 'value' => '1');

                    echo $this->Form->radio('is_active', $options, $attributes);
                    ?>

                </td>
            </tr>
            <tr>
                <td align="left" width="20%">&nbsp;</td>
                <td class="" width="80%" align="left">
                    <?php
                    echo $this->Form->submit(__('Save', true), array('div' => false, 'title' => 'Edit', 'class' => 'formbtn3'));

                    echo $html->link(__('Cancel', true), 'javascript:;', array('onclick' => 'javascript:history.go(-1);', 'class' => '', 'title' => 'Back'));
                    ?>

                </td>
            </tr>
        </table>
        <?php echo $this->Form->end(); ?>
    </div>
</section>
<script type="text/javascript">

    //var siteurl = '<?php //echo FULL_BASE_URL;    ?>';
    //<![CDATA[

    // This call can be placed at any point after the
    // <textarea>, or inside a <head><script> in a
    // window.onload event handler.

    // Replace the <textarea id="editor"> with an CKEditor
    // instance, using default configurations.
    CKEDITOR.replace( 'ckeditor_text',
    {
        filebrowserBrowseUrl : '<?php echo FULL_BASE_URL; ?>/email_template/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : '<?php echo FULL_BASE_URL; ?>/email_template/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : '<?php echo FULL_BASE_URL; ?>/email_template/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : '<?php echo FULL_BASE_URL; ?>/email_template/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : '<?php echo FULL_BASE_URL; ?>/email_template/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : '<?php echo FULL_BASE_URL; ?>/email_template/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    }
);

    //]]>
</script>
