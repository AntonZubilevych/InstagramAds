<?php

/* site/index.html.twig */
class __TwigTemplate_640c4c899e020cea0a054d64ba8890cf33b71aed1813bde9b97a045da99e4d89 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("landing.html.twig", "site/index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "landing.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section id=\"credo\">
        <div class=\"container bg-photo\">
            <div class=\"row\">
                <div class=\"col-4 col-sm-6 d-flex flex-column justify-content-center credo-height\">
                    <div class=\"credo-text\">УСПІХ</div>
                    <div class=\"credo-text\">КЛІЄНТА</div>
                    <div class=\"credo-text\">=</div>
                    <div class=\"credo-text\">МІЙ</div>
                    <div class=\"credo-text\">УСПІХ</div>
                </div>
                <div class=\"col-sm-6 d-none d-sm-block\">
                    <img src=\"img/face_desktop.jpg\" class=\"img-fluid\" alt=\"foto\">
                </div>
            </div>
        </div>
    </section>

    <section id=\"blocks\">
        <div class=\"container\">
            <div class=\"row justify-content-end\">
                <h4 class=\"align-middle\">
                    Я можу Вам допомогти у вирішенні питань, що стосуються:
                </h4>
            </div>

            <div id=\"inner_blocks\" class=\"row justify-content-center \">
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-user-tie\"></i>Спадкування</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-coins\"></i>Пенсії</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-percent\"></i>Кредитів</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-car\"></i>ДТП</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"far fa-bell\"></i>Штрафів</p>
                </div>
                <div id=\"bussines\" class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-briefcase\"></i>Перевірок Бізнесу</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-users\"></i>Сімейних Спорів</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"far fa-building\"></i>Землі</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-industry\"></i>Створення і Діяльності Юридичних Осіб</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-people-carry\"></i>Трудових Спорів</p>
                </div>
            </div>
            <div class=\"row\">
                <a class=\"price\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("price");
        echo "\">*Ціни на послуги</a>
            </div>
        </div>
    </section>
    <section id=\"cv\">
        <div class=\"container\">
            <div class=\"row\">
                <h4 class=\"align-middle\">Про Мене</h4>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <img src=\"img/face.jpg\" class=\"img-fluid foto-ava\" alt=\"foto\">
                </div>
                <div class=\"col-sm-10\">
                    <p class=\"cv-text\">
                        Я займаюся юридичною практикою <span class=\"hidden animated\">11 років</span>.
                        5 років працювала в органах прокуратури.
                        Є <span class=\"hidden animated\">практикуючим</span> адвокатом <span
                                class=\"hidden animated\"> 4 роки.</span>
                        Постійно працюю над підвищенням своєї<span class=\"hidden animated\"> кваліфікації,</span> беру
                        участь у семінарах, тренінгах, форумах.
                        Закінчила Національний юридичний університет імені <span
                                class=\"hidden animated\">Ярослава Мудрого </span>у м. Харкові, де отримала дипломи бакалавра та
                        магістра з <span class=\"hidden animated\">відзнакою.</span>
                        Маю значний <span class=\"hidden animated\">позитивний досвід</span> у представництві клієнтів у <span class=\"hidden animated\">судах</span> у майнових, земельних, кредитних, сімейних, спадкових справах.
                        Завжди докладаю <span class=\"hidden animated\">максимум зусиль</span> для досягнення позитивного результату для клієнта.
                    </p>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 64,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'landing.html.twig' %}



{% block body %}
    <section id=\"credo\">
        <div class=\"container bg-photo\">
            <div class=\"row\">
                <div class=\"col-4 col-sm-6 d-flex flex-column justify-content-center credo-height\">
                    <div class=\"credo-text\">УСПІХ</div>
                    <div class=\"credo-text\">КЛІЄНТА</div>
                    <div class=\"credo-text\">=</div>
                    <div class=\"credo-text\">МІЙ</div>
                    <div class=\"credo-text\">УСПІХ</div>
                </div>
                <div class=\"col-sm-6 d-none d-sm-block\">
                    <img src=\"img/face_desktop.jpg\" class=\"img-fluid\" alt=\"foto\">
                </div>
            </div>
        </div>
    </section>

    <section id=\"blocks\">
        <div class=\"container\">
            <div class=\"row justify-content-end\">
                <h4 class=\"align-middle\">
                    Я можу Вам допомогти у вирішенні питань, що стосуються:
                </h4>
            </div>

            <div id=\"inner_blocks\" class=\"row justify-content-center \">
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-user-tie\"></i>Спадкування</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-coins\"></i>Пенсії</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-percent\"></i>Кредитів</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-car\"></i>ДТП</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"far fa-bell\"></i>Штрафів</p>
                </div>
                <div id=\"bussines\" class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-briefcase\"></i>Перевірок Бізнесу</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-users\"></i>Сімейних Спорів</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"far fa-building\"></i>Землі</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-industry\"></i>Створення і Діяльності Юридичних Осіб</p>
                </div>
                <div class=\"col-md-6 col-12 animated hidden\">
                    <p class=\"text-block\"><i class=\"fas fa-people-carry\"></i>Трудових Спорів</p>
                </div>
            </div>
            <div class=\"row\">
                <a class=\"price\" href=\"{{ path('price')  }}\">*Ціни на послуги</a>
            </div>
        </div>
    </section>
    <section id=\"cv\">
        <div class=\"container\">
            <div class=\"row\">
                <h4 class=\"align-middle\">Про Мене</h4>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <img src=\"img/face.jpg\" class=\"img-fluid foto-ava\" alt=\"foto\">
                </div>
                <div class=\"col-sm-10\">
                    <p class=\"cv-text\">
                        Я займаюся юридичною практикою <span class=\"hidden animated\">11 років</span>.
                        5 років працювала в органах прокуратури.
                        Є <span class=\"hidden animated\">практикуючим</span> адвокатом <span
                                class=\"hidden animated\"> 4 роки.</span>
                        Постійно працюю над підвищенням своєї<span class=\"hidden animated\"> кваліфікації,</span> беру
                        участь у семінарах, тренінгах, форумах.
                        Закінчила Національний юридичний університет імені <span
                                class=\"hidden animated\">Ярослава Мудрого </span>у м. Харкові, де отримала дипломи бакалавра та
                        магістра з <span class=\"hidden animated\">відзнакою.</span>
                        Маю значний <span class=\"hidden animated\">позитивний досвід</span> у представництві клієнтів у <span class=\"hidden animated\">судах</span> у майнових, земельних, кредитних, сімейних, спадкових справах.
                        Завжди докладаю <span class=\"hidden animated\">максимум зусиль</span> для досягнення позитивного результату для клієнта.
                    </p>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "site/index.html.twig", "/home/anton/PhpstormProjects/instagramAds/templates/site/index.html.twig");
    }
}
