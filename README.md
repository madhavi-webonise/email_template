<h2>Background:</h2>

<p>This is a very simple dynamic email template management plugin for CakePHP</p>

<p>Overall functionality is inspired by email content management in code or in cakephp view. This plugin is will help to change email content in admin</p>

<p>The Plugin is an attempt to provide a basic, simple to use method to add new email templates as per requirement dy developer and change the email content by admin or super user for the application as they want. while integrating nicely into CakePHP.</p>

<p>Why use this plugin?
When I was working on my one project there is continues requirement to change email content. for that every time I need to do change in code or in my email view. To make this process easy I wrote this plugin through which we can provide email content editing facility to admin using some constants which we can replace in code with there dynamic values.</p>

<p>While you can create email templates using this plugin and integrate it in code. and give facility to site admin to edit or view the email templates so they can edit content as per requirement.</p>

<h2>Minimal requirement :</h2>

<p>Its required migration plugin in place to create required database table.</p>

<h1>How to use</h1>

<ol>
<li><p>Download (https://github.com/madhavi-webonise/email<em>template/downloads ) or clone (https://github.com/madhavi-webonise/email</em>template ) the code for this plugin .</p></li>
<li><p>Add the email_template folder into your "your-app-path/app/plugins" folder.</p></li>
<li><p>Run the following command in the cake console to create the tables:
@Console/cake Migrations.migration -plugin email_template.</p></li>
<li><p>Now check the email templates list in your application.</p></li>
<li><p>You can add more email templates from "your-app-url/email<em>template/email</em>templates/add".</p></li>
<li><p>you can check Constants list which you can use into email content to replace by real value by clicking "Email Constants" link from add or edit page.</p></li>
<li><p>you can add more constants in "$emailconstants" array from EmailTemplateAppController with blank value. If we didn't provide for any constant in code then it will replace with black and it will not show direct constant in email.</p></li>
<li><p>You can add same constant in "EmailTemplateController" with there one or two lines description Where and why we can use that constant.</p></li>
<li><p>Now In code where you have to use the email template fetch it from database by there slug name and Replace the constants with there valid values to how to do this check "getEmailTemplateAndReplaceConstant" action from "EmailTemplateController".</p></li>
<li><p>Send the email using email templates.</p></li>
</ol>


