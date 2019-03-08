<?php

/* _header.html.twig */
class __TwigTemplate_9ac497bb09d4e55d942be451409f27337eb311e8346081c64b6d41c9ae234816 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 1
        echo "<div class=\"header-area\">
    <div class=\"row align-items-center\">
        <!-- nav and search button -->
        <div class=\"col-md-6 col-sm-8 clearfix\">
            <div class=\"nav-btn pull-left\">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class=\"search-box pull-left\">
                <form action=\"#\">
                    <input type=\"text\" name=\"search\" placeholder=\"Search Order...\" required=\"\">
                    <i class=\"ti-search\"></i>
                </form>
            </div>
        </div>
        <!-- profile info & task notification -->
        <div class=\"col-md-6 col-sm-4 clearfix\">
            <ul class=\"notification-area pull-right\">
                <li id=\"full-view\"><i class=\"ti-fullscreen\"></i></li>
                <li id=\"full-view-exit\"><i class=\"ti-zoom-out\"></i></li>
                <li class=\"settings-btn\">
                    <i class=\"ti-settings\"></i>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class=\"page-title-area\">
    <div class=\"row align-items-center\">
        <div class=\"col-sm-6\">
            <div class=\"breadcrumbs-area clearfix\">
                <h4 class=\"page-title pull-left\">Dashboard</h4>
                <ul class=\"breadcrumbs pull-left\">
                    <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a></li>
                </ul>
            </div>
        </div>
        <div class=\"col-sm-6 clearfix\">
            <div class=\"user-profile pull-right\">
                <img class=\"avatar user-thumb\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/author/avatar.png"), "html", null, true);
        echo "\" alt=\"avatar\">
                <h4 class=\"user-name dropdown-toggle\" data-toggle=\"dropdown\">Kumkum Rai <i class=\"fa fa-angle-down\"></i></h4>
                <div class=\"dropdown-menu\">

                    <a class=\"dropdown-item\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 45,  74 => 41,  65 => 35,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header-area\">
    <div class=\"row align-items-center\">
        <!-- nav and search button -->
        <div class=\"col-md-6 col-sm-8 clearfix\">
            <div class=\"nav-btn pull-left\">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class=\"search-box pull-left\">
                <form action=\"#\">
                    <input type=\"text\" name=\"search\" placeholder=\"Search Order...\" required=\"\">
                    <i class=\"ti-search\"></i>
                </form>
            </div>
        </div>
        <!-- profile info & task notification -->
        <div class=\"col-md-6 col-sm-4 clearfix\">
            <ul class=\"notification-area pull-right\">
                <li id=\"full-view\"><i class=\"ti-fullscreen\"></i></li>
                <li id=\"full-view-exit\"><i class=\"ti-zoom-out\"></i></li>
                <li class=\"settings-btn\">
                    <i class=\"ti-settings\"></i>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class=\"page-title-area\">
    <div class=\"row align-items-center\">
        <div class=\"col-sm-6\">
            <div class=\"breadcrumbs-area clearfix\">
                <h4 class=\"page-title pull-left\">Dashboard</h4>
                <ul class=\"breadcrumbs pull-left\">
                    <li><a href=\"{{ path('index') }}\">Home</a></li>
                </ul>
            </div>
        </div>
        <div class=\"col-sm-6 clearfix\">
            <div class=\"user-profile pull-right\">
                <img class=\"avatar user-thumb\" src=\"{{ asset('assets/images/author/avatar.png') }}\" alt=\"avatar\">
                <h4 class=\"user-name dropdown-toggle\" data-toggle=\"dropdown\">Kumkum Rai <i class=\"fa fa-angle-down\"></i></h4>
                <div class=\"dropdown-menu\">

                    <a class=\"dropdown-item\" href=\"{{ path('app_login') }}\">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
", "_header.html.twig", "/home/anton/PhpstormProjects/instagramAds/templates/_header.html.twig");
    }
}
