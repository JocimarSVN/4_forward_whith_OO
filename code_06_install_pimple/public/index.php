<?php
    /**
     * Created by Jocimar.
     * User: jocimar
     * Date: 09/02/18
     * Time: 14:57
     * SON:- PHP - Avancando com OO - code_06_install_pimple (Instalando o Pimple)
     */

    require_once "../vendor/autoload.php";

    use Pimple\Container;

    $container = new Container();

/*
    // (container) Pimple criando a instancia de um unico objeto para as consultas (Padrao do Pimple)
    $container['date'] = function ()
    {
        return new \DateTime();
    };

    // Consulta 01
    var_dump ($container['date']);
/var/www/html/projets/4_forward_whith_OO/code_06_install_pimple/public/index.php:51:
object(DateTime)[6]
  public 'date' => string '2018-03-01 17:52:42.000000' (length=26)
  public 'timezone_type' => int 3

/var/www/html/projets/4_forward_whith_OO/code_06_install_pimple/public/index.php:51:
object(DateTime)[6]
  public 'date' => string '2018-03-01 17:52:42.000000' (length=26)
  public 'timezone_type' => int 3
    echo "<br/>";
    echo "<br/>";

    sleep (2);

    // Consulta 02
    var_dump ($container['date']);
*/


    // Pimple criando a instancia de um novo objeto a cada consulta (utilizando o factory)
    $container['date'] = $container->factory(function ()
    {
        return new \DateTime();
    });

    // Consulta 01
    var_dump ($container['date']);

    echo "<br/>";
    echo "<br/>";

    sleep (2);

    // Consulta 02
    var_dump ($container['date']);