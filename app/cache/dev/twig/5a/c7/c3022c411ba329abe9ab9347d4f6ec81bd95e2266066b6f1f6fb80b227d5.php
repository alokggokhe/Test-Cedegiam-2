<?php

/* MainBundle:Confirm:confirm.html.twig */
class __TwigTemplate_5ac7c3022c411ba329abe9ab9347d4f6ec81bd95e2266066b6f1f6fb80b227d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Confirm:confirm.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<section id=\"panel\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"panel-first-part\">
\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" id=\"logout\">Log out</a>
\t\t\t\t<h1 class=\"panel-title-form title-confirm\">Thank you <strong>Dr. ";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</strong></h1>
\t\t\t</div>
\t\t\t<div class=\"panel-second-part\">
\t\t\t\t<h2><strong>Confirmation for your call</strong></h2>
\t\t\t\t<p>A confirmation email has been sent across to you at the email address you provided with all details about this appointment along with a calendar invite for your conference.</p>
\t\t\t\t<p>At the date and time of the appointment, a UCB Medical Specialist will call you on the phone number you have specified and will ask you to join into a web presentation he/she will be conducting.</p>
\t\t\t\t<p>You will simply need to click the link in the invite and enter the secured access code that he/she will be providing to you over the phone.</p>
\t\t\t\t<p>We hope the presentation is helpful and wish you a great rest of your day. You can now close this window. </p>
\t\t\t</div>
\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Confirm:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
