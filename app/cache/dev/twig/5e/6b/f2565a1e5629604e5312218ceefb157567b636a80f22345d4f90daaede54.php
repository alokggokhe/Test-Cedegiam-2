<?php

/* MainBundle:Home:index.html.twig */
class __TwigTemplate_5e6bf2565a1e5629604e5312218ceefb157567b636a80f22345d4f90daaede54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Home:index.html.twig", 1);
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
                <h1 class=\"panel-title-form title-login\">Welcome to <strong>Dandelion</strong></h1>
                <a href=\"https://webinar.ucbdandelion.com/admin/\" class=\"btn btn-info btn-lg\" target=\"_blank\" role=\"button\">I am hosting a webinar</a> 
                <a href=\"https://visit.ucbdandelion.com/admin/\" class=\"btn btn-info btn-lg\" target=\"_blank\" role=\"button\">I am hosting a 1:1</a>
            </div>

            <div class=\"panel-form-second-part\">
                <h2 class=\"title-login\">Please <strong>Log In</strong></h2>

                
                <form role=\"form\" method=\"post\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"service\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "html", null, true);
        echo "\" />
                    <input type=\"hidden\" name=\"_flowId\" value=\"loginext-webflow\">
                    <input type=\"hidden\" name=\"errorRedirectUrl\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["error_redirection"]) ? $context["error_redirection"] : $this->getContext($context, "error_redirection")), "html", null, true);
        echo "\"> 
                    ";
        // line 20
        if ((isset($context["display_error"]) ? $context["display_error"] : $this->getContext($context, "display_error"))) {
            // line 21
            echo "                    <div class=\"alert alert-danger\">
                        Invalid email or password
                    </div>
                    ";
        }
        // line 25
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "has", array(0 => "success"), "method")) {
            // line 26
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "get", array(0 => "success"), "method"), 0, array(), "array"), "html", null, true);
            echo "
                    </div>
                    ";
        }
        // line 30
        echo "
                    <div class=\"form-group input-group\">

                        <span class=\"input-group-addon\" id=\"user-id\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAArlBMVEUAAAAzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMAAABErtPcAAAAOHRSTlMASLDn6LVQeoRBTr/NA+36DO77DcLQVomSVcDsxFwJCho9XXNePxssf8j8zIMyEp+kGRzlJdHh8iA6H5cAAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAiklEQVQY043O1xKCQAyF4YNdUXHBil0s2Auoef8nc4Y1s7usF/6X32SSADKnUCyVKzCqUlZNtzp9a2joMjaVtdqMXkehYPQDNdpl7Gk7Hca+fn4gbWg+OgrHYjJFvtkc/7RYrqJovdkq2cV7Xx46HE/njC5XMrrdgUdCuUSKkKye8Gwk0C98va2SD2lYK+UAxSlSAAAAAElFTkSuQmCC\" /></span>
                        <input name=\"login\" type=\"text\" class=\"form-control input-lg\" placeholder=\"User Id\" aria-describedby=\"user-id\">
                    </div>
                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\" id=\"password\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAMAAAAx3e/WAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAzFBMVEUAAAAzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMAAAC85VE4AAAAQnRSTlMASqjs7atOmJ90kDUzjIAOZFsVUNPIXWihlUuZi1kWT5fFUlO9GSvz9jSkqrGpwDK56uXWyv1C/J6ctnN+kuHn5gOG1yK0AAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAKJJREFUGNN9zkcWgkAQRdECRcGcs4IYEcwZFfDvf1FKMHQPeJOqcwfVTRQkiImklKK/0giSf6IAmWwuDxQ+UgRK/iwDlYiqqIVLHY2ImmiFSxtKRB10w6WHfjAHqoahPnqnjyGrE6LpDExzgxbgMsniySKRp2UMrYz1hqWt/50dQ3ufDgwdBaLTmTt/uca9aPIkkc2TTTee7kQPx/W+uY72fAGxJka9z39U3AAAAABJRU5ErkJggg==\" /></span>
                        <input name=\"password\" type=\"password\" class=\"form-control input-lg\" placeholder=\"Password\" aria-describedby=\"user-id\">
                    </div>
                    <div class=\"button-group\">
                       
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6 user-links no-pad\">
                            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("forgotten_password");
        echo "\" title=\"Lost password?\">Lost password?</a><br />
                            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")), "html", null, true);
        echo "\" title=\"Register a account\" target=\"_blank\">Register a account</a>
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6 button-group text-right no-pad\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Enter</button>
                    </div>

                    </div>
                </form>

                </a>
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
        return "MainBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 44,  94 => 43,  79 => 30,  73 => 27,  70 => 26,  67 => 25,  61 => 21,  59 => 20,  55 => 19,  50 => 17,  46 => 16,  31 => 3,  28 => 2,  11 => 1,);
    }
}
