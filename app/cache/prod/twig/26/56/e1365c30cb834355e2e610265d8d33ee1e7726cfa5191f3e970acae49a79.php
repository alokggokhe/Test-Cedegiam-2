<?php

/* MainBundle:Option:option.html.twig */
class __TwigTemplate_2656e1365c30cb834355e2e610265d8d33ee1e7726cfa5191f3e970acae49a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Option:option.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <section id=\"panel\">
        <div class=\"panel\">

            <div class=\"panel-form-first-part\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" id=\"logout\">Log out</a>
                <h1 class=\"panel-title-form\">Welcome back to your personal<br /> Dandelion Space, <strong>Dr. ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</strong></h1>
            </div>

            <nav class=\"panel-form-second-part\">
                <h2 class=\"title-option\"><strong>Option page</strong></h2>
                <h3>Please select a service we can help you with.</h3>
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("invitation");
        echo "\" title=\"\" class=\"\">
                    <div class=\"block-button\">
                        <div class=\"row\">
                            <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/images/option_receiveinfo.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\">
                                <strong>I would like</strong> to receive 1:1 Medical Information From  A UCB Medical Specialist
                            </div>
                        </div>

                    </div>
                </a>
                <a href=\"https://visit.ucbdandelion.com/index2.php";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["webinar_params"]) ? $context["webinar_params"] : null), "html", null, true);
        echo "\" title=\"Visit - UCB Dandelion\">
                    <div class=\"block-button\">
                        <div class=\"row\">
                            <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/images/option_11_now.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-9 col-sm-9 col-md-8 col-lg-8\">
                                <strong>I have an appointment</strong> for a 1:1 remote presentation <strong>now</strong>
                            </div>
                        </div>
                    </div>
                </a>
                <a href=\"https://webinar.ucbdandelion.com/index2.php";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["webinar_params"]) ? $context["webinar_params"] : null), "html", null, true);
        echo "\" title=\"Webinar - UCB Dandelion\">
                    <div class=\"block-button\">
                        <div class=\"row\">
                            <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/images/option_webinar_now.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-xs-9 col-sm-9 col-md-8 col-lg-8\">
                                <strong>I have an appointment</strong> For a Webinar Presentation <strong>now</strong>
                            </div>
                        </div>
                    </div>
                </a>
            </nav>


            <div class=\"row footer\">
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><a href=\"https://visit.ucbdandelion.com/custom/img/150112_Legal%20Policy_UCBDandelion.pdf\" title=\"Privacy Policy\" target=\"_blank\">Privacy Policy</a></div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Option:option.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 43,  87 => 39,  76 => 31,  69 => 27,  57 => 18,  50 => 14,  41 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
