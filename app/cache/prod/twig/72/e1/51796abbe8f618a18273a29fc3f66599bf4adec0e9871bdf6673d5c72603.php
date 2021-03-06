<?php

/* MainBundle:Mail:hcp.html.twig */
class __TwigTemplate_72e151796abbe8f618a18273a29fc3f66599bf4adec0e9871bdf6673d5c72603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W4C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\"/>
    <title>Your request for UCB MSL remote presentation appointment</title>
    <style type=\"text/css\">
        /* EMBEDDED CSS
        Android Mail doesn't support \"class\" declarations outside of a media query so use inline CSS as a rule.
        More info: Http://www.emailonacid.com/blog/the_android_mail_app_and_css_class_declarations/ */
        .footer { color: rgb(168,168,168)!important; font-size: 8pt;}

        /****** EMAIL CLIENT BUG FIXES - BEST NOT TO CHANGE THESE ********/
        /* Forces Hotmail to display emails at full width. */
        .ExternalClass {width:100%;}
        /* Forces Hotmail to display normal line spacing. */
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
        /* Prevents Webkit and Windows Mobile platforms from changing default font sizes. */
        body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
        /* Resets all body margins and padding to \"0\" for good measure. */
        body {margin:0; padding:0;}
        /* Resolves webkit padding issue. */
        table {border-spacing:0; border:0;}
        /* Resolves the Outlook 2007, 2010, and Gmail td padding issue. */
        table td {border-collapse:collapse; border:0; width: 65px;}
        table tr {height: 35px; border:0;}
        /****** END BUG FIXES ********/
        /****** RESETTING DEFAULTS, IT IS BEST TO OVERWRITE THESE STYLES INLINE ********/

        /* This sets a clean slate for all clients EXCEPT Gmail.
        From there it forces you to do all of your spacing inline during the development process.
        Be sure to stick to margins because paragraph padding is not supported by Outlook 2007/2010.
        Remember: Hotmail does not support \"margin\" nor the \"margin-top\" properties.
        Stick to \"margin-bottom\", \"margin-left\", \"margin-right\" in order to control spacing.
        It also wise to set the inline top-margin to \"0\" for consistancy in Gmail for every inline instance
        of a paragraph tag. */
        p {margin:0; padding:0; margin-bottom:0;}

        /* This CSS will overwrite Hotmails default CSS and make your headings appear consistant with Gmail.
        From there, you can override with inline CSS if needed. */
        h1, h2, h3, h4, h5, h6 {color:#333333; line-height:100%;}
        h2 {font-size:18px; padding:45px 0 0 0;}
        p {font-size:14px; color:#333333;}
        a{color:#1d4e99;}
        a:visited{color:#1d4e99}
        a:hover{color:#1d4e99}


        /****** END RESETTING DEFAULTS ********/

        /* Target mobile devices. */
        /* @media only screen and (max-device-width: 639px) { */
        @media only screen and (max-width: 639px) {
            /* Hide elements at smaller screen sizes (!important needed to override inline CSS). */
            body[yahoo] .hide {display:none !important;}
            /* Adjust table widths at smaller screen sizes. */
            body[yahoo] .table {width:600px !important;}
            body[yahoo] .header-left{width:600px !important; font-size: 14px !important;}
            body[yahoo] .header-right{width:600px !important; font-size: 14px !important;}
            /* Resize image at smaller screen sizes. */
            body[yahoo] .visu_principal{width: 600px !important;height: 528px !important;}
            body[yahoo] .resiseheader{width: 600px !important;height: 4px !important;}
            /* textes and center. */
            body[yahoo] .baseline{font-size: 14px !important;}
            body[yahoo] .mentions{font-size: 10px !important;}
            body[yahoo] .marge_tableau{ margin:20px 16px 0px 16px !important;}

    </style>
</head>
<body style=\" color:#0070c0; background-color:#f0f0f0 !important; font-family:Helvetica,sans-serif; font-size:12pt; line-height:1.2; text-align: justify; padding-top:45px; padding-bottom:45px;\" alink=\"#333333\" link=\"#333333\" bgcolor=\"#E2E2E2\" text=\"#333333\" yahoo=\"fix\">
<!--//8 colonnes et 8 lignes-->
<div id=\"body_style\" style=\"width:100%;height:100%;padding:0;margin:0;\">

    <table width=\"600\"  class=\"table\" style=\"margin:auto;\">
        <tr><td>
                <p style=\"text-align:right;\"><img src=\"https://www.ucbdandelion.com/bundles/main/images/ucb_logo.jpg\"></p>
            </td></tr>
    </table>

    <table width=\"600\" class=\"table\" style=\"margin:auto; background:#FFFFFF; border:1px solid #bebebe; -moz-border-radius:5px; border-radius:5px;\">

        <!--entete -->
        <tr  style=\" font-family:Helvetica,sans-serif; font-size:12pt; line-height:1.2; text-align: left;  alink=\"#333333\" link=\"#333333\" bgcolor=\"#1c4f9e\" text=\"#FFFFFF\" yahoo=\"fix\">
        <td colspan=\"8\" style=\"color:#FFFFFF !important; padding:10px 0 0 20px; text-align: left !important;\">
            <p style=\"color:#FFFFFF !important;\" yahoo=\"fix\">
                <b>Thank</b> you for requesting an appointment!
            </p>
        </td>
        </tr>
        <tr  style=\" color:#0070c0; font-family:Helvetica,sans-serif; font-size:12pt; line-height:1.2; text-align: left; background-image: url('https://www.ucbdandelion.com/bundles/main/images/bg-newsletter-part1.jpg'); background-repeat:no-repeat;\" alink=\"#333333\" link=\"#333333\"  text=\"#333333\" yahoo=\"fix\"> <td colspan=\"8\" height=\"64\"></td></tr>

        <tr  style=\" color:#0070c0; font-family:Helvetica,sans-serif; font-size:12pt; line-height:1.2; text-align: left; background-image: url('https://www.ucbdandelion.com/bundles/main/images/bg-newsletter-part2.jpg');; background-repeat:no-repeat; padding:0 0 0 0; \" alink=\"#333333\" link=\"#333333\"  text=\"#333333\" yahoo=\"fix\">
            <td colspan=\"8\">
                <h2 style=\"padding:0 0 0 20px;\">Your request for UCB MSL remote presentation <br />appointment</h2></td>
        </tr>
        <!--entete -->
        <tr></tr>

        <tr>
            <td colspan=\"8\">
                <p  style=\"padding:0 20px; line-height:1.4;\"><br />
                    Dear Dr. ";
        // line 102
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "
                </p>

                <p  style=\"padding:0 20px; line-height:1.4;\">You have requested a call back and we are pleased to confirm that a UCB specialist will be calling you at the phone number you have provided, on ";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
        echo ", per your request, to answer the question you have posed: </p>
                <p  style=\"padding:0 20px; line-height:1.4;\">";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["question"]) ? $context["question"] : null), "html", null, true);
        echo "</p>
                <p  style=\"padding:0 20px; line-height:1.4;\"><br />
                    At the date and time of your appointment please simply click the below link:<br />
                    <a href=\"http://www.ucbdandelion.com\">http://www.ucbdandelion.com</a> </p>
                <p  style=\"padding:0 20px; line-height:1.4;\"><br />
                    The UCB specialist who will be calling you will then provide you with the secured access code to the presentation. There is nothing you will need to install to your device and once your UCB MSL has provided you with the access code, you will instantly get access to the meeting room where he/ she will be sharing material during your phone conversation. </p>
                <p  style=\"padding:0 20px; line-height:1.4;\"><br />
                    We wish you a great online meeting and thank you ever so much for using the Dandelion platform. </p>
                <p  style=\"padding:0 20px; line-height:1.4;\"><br />
                    Kindest regards, the UCB team. </p>
            </td>
        </tr>
        <!--end showcase-->

        <!-- titre partie 1 -->
        <!-- text partie 1 -->
        <tr>
            <td colspan=\"8\">
                <p></p>
            </td>
        </tr>
        <!-- end partie 1 -->


    </table>

</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Mail:hcp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 106,  128 => 105,  122 => 102,  19 => 1,);
    }
}
