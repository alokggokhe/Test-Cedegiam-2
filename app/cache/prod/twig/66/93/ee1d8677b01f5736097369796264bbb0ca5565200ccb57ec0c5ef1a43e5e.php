<?php

/* AdminBundle:Msl:index.html.twig */
class __TwigTemplate_6693ee1d8677b01f5736097369796264bbb0ca5565200ccb57ec0c5ef1a43e5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "AdminBundle:Msl:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'modulestylesheets' => array($this, 'block_modulestylesheets'),
            'modulejavascripts' => array($this, 'block_modulejavascripts'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Topic and MSL | Dandelion
";
    }

    // line 7
    public function block_modulestylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/css/topic.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 11
    public function block_modulejavascripts($context, array $blocks = array())
    {
        // line 12
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/topic_msl.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "\t<div class=\"row\">
\t\t<div class=\"col-sm-4\">
\t\t\t<form name=\"frm_topic\" id=\"frm_topic\" method=\"post\" action=\"\" role=\"form\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 header-bg-text\">
\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t<span><i class=\"fa fa-list fa-2x icon-white-color\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-10 padding-left-25px\">
\t\t\t\t\t\t\t<div class=\"first-text-header\">Topic</div>
\t\t\t\t\t\t\t<div class=\"second-text-header\">add and update</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row-gap\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-9 padding-right-0px\">
\t\t\t\t\t\t\t<input type=\"type\" name=\"txt_topic\" id=\"txt_topic\" value=\"\" class=\"form-control input-lg\" placeholder=\"New Here\" maxlength=\"32\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t\t<div class=\"button-group text-right\" title=\"ADD\" id=\"topic_add\">
\t\t\t\t\t\t\t\t<button type=\"button\" name=\"btn_topic\" id=\"btn_topic\" class=\"btn btn-primary btn-lg common-button width-100-per\">+</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row-gap\"></div>
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<tbody id=\"table_topic_list\" class=\"\"></tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</form>\t
\t\t</div>
\t\t<div class=\"col-sm-1\"></div>
\t\t<div class=\"col-sm-7\">
\t\t\t<form name=\"frm_msl\" id=\"frm_msl\" method=\"post\" action=\"\" role=\"form\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 header-bg-text\">
\t\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t\t<span><i class=\"fa fa-user fa-2x icon-white-color\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-11 padding-left-25px\">
\t\t\t\t\t\t\t<div class=\"first-text-header\">MSL</div>
\t\t\t\t\t\t\t<div class=\"second-text-header\">add, update and delete</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row-gap\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-3 padding-right-0px\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"txt_first_name\" id=\"txt_first_name\" value=\"\" class=\"form-control input-lg\" placeholder=\"First Name\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-3 padding-right-0px\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"txt_last_name\" id=\"txt_last_name\" value=\"\" class=\"form-control input-lg\" placeholder=\"Last Name\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-4 padding-right-0px\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"txt_email\" id=\"txt_email\" value=\"\" class=\"form-control input-lg\" placeholder=\"Email\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t<div class=\"button-group text-right\" title=\"ADD\" id=\"msl_add\">
\t\t\t\t\t\t\t\t<button type=\"button\" name=\"btn_msl\" id=\"btn_msl\" class=\"btn btn-primary btn-lg common-button width-100-per\">+</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row-gap\"></div>
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<tr class=\"table-tr-even\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tFirst Name 1
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tEmail 1
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\ttopic 1, topic 1, 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-center\" title=\"Edit\">
\t\t\t\t\t\t\t\t<span class=\"pull-right\"><i class=\"fa fa-pencil cursor-pointer\"></i></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"table-tr-odd\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tFirst Name 1
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tEmail 1
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\ttopic 1, topic 1, 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-center\" title=\"Edit\">
\t\t\t\t\t\t\t\t<span class=\"pull-right\"><i class=\"fa fa-pencil cursor-pointer\"></i></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"table-tr-even\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tFirst Name 1
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tEmail 1
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\ttopic 1, topic 1, 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-center\" title=\"Edit\">
\t\t\t\t\t\t\t\t<span class=\"pull-right\"><i class=\"fa fa-pencil cursor-pointer\"></i></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"table-tr-odd\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tFirst Name 1
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tEmail 1
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\ttopic 1, topic 1, 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-center\" title=\"Edit\">
\t\t\t\t\t\t\t\t<span class=\"pull-right\"><i class=\"fa fa-pencil cursor-pointer\"></i></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</form>\t
\t\t</div>
\t</div>

\t<!-- topic edit popup -->
\t<div class=\"modal fade bs-example-modal-sm\" id=\"popupEditTopic\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"popupEditTopicLabel\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
\t\t<div class=\"modal-dialog modal-sm\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"popupEditTopicLabel\">Edit Topic</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\"> 
\t\t\t\t\t\t<div class=\"edit-topic-alert-msg hide\">
\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t<a aria-hidden=\"true\" data-dismiss=\"alert\" href=\"#\" class=\"close\"></a>
\t\t\t\t\t\t\t\t<span class=\"response edit-topic-response-msg\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form name=\"frm_edit_topic\" id=\"frm_edit_topic\" method=\"post\" action=\"\" role=\"form\">
\t\t\t\t\t\t\t<input type=\"type\" name=\"txt_edit_topic\" id=\"txt_edit_topic\" value=\"\" class=\"form-control input-lg\" placeholder=\"Enter topic here\" maxlength=\"32\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"hid_topic_id\" id=\"hid_topic_id\" value=\"\">
\t\t\t\t\t\t</form>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-standard btn_edit_topic\" title=\"Save\">Save</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-standard\" data-dismiss=\"modal\" title=\"Close\">Close</button>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Msl:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  59 => 15,  52 => 12,  49 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
