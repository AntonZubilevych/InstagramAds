<?php

/* template/settings.html.twig */
class __TwigTemplate_e2373eded30ae6a7fdd0835594336ea831ba2cd7b08f8bd434b6952283900240 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "template/settings.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/settings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Template Settings";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"main-content-inner\">
        <div class=\"row\">

            <div class=\"col-lg-8 mt-7\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4 class=\"header-title\">Descriptions <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_template_description_add", ["id" => ($context["id"] ?? null)]), "html", null, true);
        echo "\" ><i class=\"fa fa-plus-circle\"></i></a></h4>
                        <div class=\"single-table\">
                            <div class=\"table-responsive\">
                                <table class=\"table text-center\">
                                    <thead class=\"text-uppercase bg-success\">
                                    <tr class=\"text-white\">
                                        <th scope=\"col\">Title</th>
                                        <th scope=\"col\">Text</th>
                                        <th scope=\"col\">-</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["descriptions"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 25
            echo "                                    <tr>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["description"], "title", []), "html", null, true);
            echo " </td>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["description"], "text", [])), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_include($this->env, $context, "templates_description/_delete_form.html.twig");
            echo "</td>
                                    </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-8 mt-7\">
                <br><br>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4 class=\"header-title\">Template Comments <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_template_comment_add", ["id" => ($context["id"] ?? null)]), "html", null, true);
        echo "\" ><i class=\"fa fa-plus-circle\"></i></a></h4>
                        <div class=\"single-table\">
                            <div class=\"table-responsive\">
                                <table class=\"table text-center\">
                                    <thead class=\"text-uppercase bg-success\">
                                    <tr class=\"text-white\">
                                        <th scope=\"col\">Text</th>
                                        <th scope=\"col\">-</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 56
            echo "                                        <tr>
                                            <th scope=\"row\">";
            // line 57
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [])), "html", null, true);
            echo "</th>
                                            <td>";
            // line 58
            echo twig_include($this->env, $context, "templates_comment/_delete_form.html.twig");
            echo "</td>
                                        </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-8 mt-7\">
                <br><br>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4 class=\"header-title\">Template Info <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_template_info_add", ["id" => ($context["id"] ?? null)]), "html", null, true);
        echo "\" ><i class=\"fa fa-plus-circle\"></i></a></h4>
                        <div class=\"single-table\">
                            <div class=\"table-responsive\">
                                <table class=\"table text-center\">
                                    <thead class=\"text-uppercase bg-success\">
                                    <tr class=\"text-white\">
                                        <th scope=\"col\">Text</th>
                                        <th scope=\"col\">-</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["infos"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 86
            echo "                                        <tr>
                                            <th scope=\"row\">";
            // line 87
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "text", [])), "html", null, true);
            echo "</th>
                                            <td>";
            // line 88
            echo twig_include($this->env, $context, "info/_delete_form.html.twig");
            echo "</td>
                                        </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 91,  263 => 88,  259 => 87,  256 => 86,  239 => 85,  225 => 74,  210 => 61,  193 => 58,  189 => 57,  186 => 56,  169 => 55,  155 => 44,  140 => 31,  123 => 28,  119 => 27,  115 => 26,  112 => 25,  95 => 24,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Template Settings{% endblock %}

{% block body %}
    <div class=\"main-content-inner\">
        <div class=\"row\">

            <div class=\"col-lg-8 mt-7\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4 class=\"header-title\">Descriptions <a href=\"{{ path('admin_template_description_add',{'id' : id}) }}\" ><i class=\"fa fa-plus-circle\"></i></a></h4>
                        <div class=\"single-table\">
                            <div class=\"table-responsive\">
                                <table class=\"table text-center\">
                                    <thead class=\"text-uppercase bg-success\">
                                    <tr class=\"text-white\">
                                        <th scope=\"col\">Title</th>
                                        <th scope=\"col\">Text</th>
                                        <th scope=\"col\">-</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for description in descriptions %}
                                    <tr>
                                        <td>{{description.title}} </td>
                                        <td>{{description.text |truncate}}</td>
                                        <td>{{ include('templates_description/_delete_form.html.twig') }}</td>
                                    </tr>
                                    {% endfor %}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-8 mt-7\">
                <br><br>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4 class=\"header-title\">Template Comments <a href=\"{{ path('admin_template_comment_add' , {'id' : id}) }}\" ><i class=\"fa fa-plus-circle\"></i></a></h4>
                        <div class=\"single-table\">
                            <div class=\"table-responsive\">
                                <table class=\"table text-center\">
                                    <thead class=\"text-uppercase bg-success\">
                                    <tr class=\"text-white\">
                                        <th scope=\"col\">Text</th>
                                        <th scope=\"col\">-</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for comment in comments %}
                                        <tr>
                                            <th scope=\"row\">{{comment.text | truncate}}</th>
                                            <td>{{ include('templates_comment/_delete_form.html.twig') }}</td>
                                        </tr>
                                    {% endfor %}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-8 mt-7\">
                <br><br>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4 class=\"header-title\">Template Info <a href=\"{{ path('admin_template_info_add' , {'id' : id}) }}\" ><i class=\"fa fa-plus-circle\"></i></a></h4>
                        <div class=\"single-table\">
                            <div class=\"table-responsive\">
                                <table class=\"table text-center\">
                                    <thead class=\"text-uppercase bg-success\">
                                    <tr class=\"text-white\">
                                        <th scope=\"col\">Text</th>
                                        <th scope=\"col\">-</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for info in infos %}
                                        <tr>
                                            <th scope=\"row\">{{info.text | truncate}}</th>
                                            <td>{{ include('info/_delete_form.html.twig') }}</td>
                                        </tr>
                                    {% endfor %}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}
", "template/settings.html.twig", "/home/anton/PhpstormProjects/instagramAds/templates/template/settings.html.twig");
    }
}
