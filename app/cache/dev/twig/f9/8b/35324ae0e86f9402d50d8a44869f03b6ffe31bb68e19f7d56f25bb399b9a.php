<?php

/* MainBundle:PrivacyPolicy:privacy_policy.html.twig */
class __TwigTemplate_f98b35324ae0e86f9402d50d8a44869f03b6ffe31bb68e19f7d56f25bb399b9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:PrivacyPolicy:privacy_policy.html.twig", 1);
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
        echo "    <section id=\"panel\">
        <div class=\"panel\">
            <div class=\"panel-first-part\">
                <h1 class=\"panel-title-form title-confirmation\">Privacy Policy</strong></h1>
                <img src=\"\" alt=\"\">
            </div>
            <div class=\"panel-second-part\">
                <h2><strong>Lorem Ipsum</strong></h2>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.</p>
                <p>Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.</p>
                <p>Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:PrivacyPolicy:privacy_policy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
