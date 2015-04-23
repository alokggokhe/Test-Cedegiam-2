<?php

/* MainBundle:ForgottenPassword:forgotten.html.twig */
class __TwigTemplate_179d06b6a75e33381aba2f7b51d28515269d1bb6995b3e6ea00f05d12cb1cacc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:ForgottenPassword:forgotten.html.twig", 1);
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

            <div class=\"panel-form-first-part full\">
                <h1 class=\"panel-title-form\">You have lost your <strong>password</strong>?</h1>
                
            </div>

            <div class=\"panel-form-second-part forgotten\">
                <p>We can send you a link to reset your<br /> password</p>
                
                <form role=\"form\" method=\"post\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\">
                    ";
        // line 15
        $context["error"] = false;
        // line 16
        echo "
                    ";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "has", array(0 => "error"), "method")) {
            // line 18
            echo "                        ";
            $context["error"] = true;
            // line 19
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "get", array(0 => "error"), "method"), 0, array(), "array"), "html", null, true);
            echo "
                    </div>
                    ";
        }
        // line 23
        echo "
                   <div><label>Please enter your email address:</label></div>
                        
                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\" id=\"email\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAUCAMAAACknt2MAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA21BMVEUAAAAzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMAAABl0QiVAAAAR3RSTlMAaNnu7dxyUV2f6s7R5aKX52b7cdiZlPohrLMp75b+qR1Y4ehhFaD993AEkAtn8cYzN8zUPivAjoOKhd1US9YOCOyYZHXygOZvM8EAAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAsUlEQVQoz7XJaVsBURyG8TtTlsRYsrQRw9iiEC1Uijzf/xuZC3Np6Lz0vDjX+d8/OAlZ1un+rLMwRGRYlJjO44f9IqEktlKkM3uS5VI58ipA8eovXN/Are48KpXvoVL1walB3W2sSWq2oN3ZSO4Buj3vsyHp8Qn6A2n4DKPxOvkkvQCvb97zvg070mTqdT4+dUhS+Wvm7q4A6duRiQI7Atkm+sE1UZKKieawSPz+s9SSFVA/cxWI280lAAAAAElFTkSuQmCC\" /></span>
                        <input name=\"email\" type=\"text\" class=\"form-control input-lg";
        // line 28
        echo ((((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) && twig_length_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))))) ? (" error") : (""));
        echo "\" placeholder=\"Email address\" aria-describedby=\"email\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\">
                    </div>
                    
                    <div class=\"row button-group text-right\">
                        <a class=\"btn btn-default btn-lg\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">CANCEL</a>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-submit\">Enter</button>
                    </div>

                </form>
            </div>

            <div class=\"row footer\">
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><a href=\"https://visit.ucbdandelion.com/custom/img/150112_Legal%20Policy_UCBDandelion.pdf\" title=\"Privacy Policy\" target=\"_blank\">Privacy Policy</a></div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:ForgottenPassword:forgotten.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  74 => 28,  67 => 23,  61 => 20,  58 => 19,  55 => 18,  53 => 17,  50 => 16,  48 => 15,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }
}
