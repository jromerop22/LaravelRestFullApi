## PRUEBA DESARROLLO PHP 

1. Realice un servicio con estándar rest full api, con el cual se pueda realizar la administración de una aplicación de calificación de películas y series, al estilo IMDB, el servicio debe cumplir con las siguientes características : 

- **Agregar nuevas series/películas.
- **Editar / eliminar series/películas.
- **Calificar series/películas.
- **Buscar series/películas por nombre o categoría.
- **Listar las series/películas más recientes.
- **Listar las series/películas mejor calificadas.
 

Para realizar estos servicios puede usar php puro o un framework si así lo desea, asimismo puede utilizar la base de datos que desee.
Cada servicio debe contar con sus respectivas pruebas unitarias.
La prueba debe estar en algún repositorio de versiones público, como GITLAB, GITHUB o el que desee. 

Puntos extras (Plus)  para la prueba:

Utilizar Firebase para alguna de las funcionalidades.
Implementar los servicios bajo el paradigma de microservicios.
Implementar Integración Continua para automatizar el testing y deployment de los servicios.
Mostrar los resultados de los servicios en una página web.

## Modelo Datos
![Modelo de bae de datos](https://github.com/jromerop22/LaravelRestFullApi/blob/master/postman/bdf.png)

## Routing
+--------+----------+----------------------------+------+------------------------------------------------------------+--------------+
| Domain | Method   | URI                        | Name | Action                                                     | Middleware   |
+--------+----------+----------------------------+------+------------------------------------------------------------+--------------+
|        | PUT      | Api/Calificar/{id}         |      | App\Http\Controllers\ContenidosController@Calificar        | web          |
|        | POST     | Api/Crear                  |      | App\Http\Controllers\ContenidosController@Crear            | web          |
|        | PUT      | Api/Editar/{id}            |      | App\Http\Controllers\ContenidosController@Editar           | web          |
|        | DELETE   | Api/Eliminar/{idcontenido} |      | App\Http\Controllers\ContenidosController@Eliminar         | web          |
|        | GET|HEAD | Api/ListarCategoria/{id}   |      | App\Http\Controllers\ContenidosController@ListarCategoria  | web          |
|        | GET|HEAD | Api/ListarNombre/{nombre}  |      | App\Http\Controllers\ContenidosController@ListarNombre     | web          |
|        | GET|HEAD | Api/ListarRecientes        |      | App\Http\Controllers\ContenidosController@ListarRecientes  | web          |
|        | GET|HEAD | Api/MejorCalificacion      |      | App\Http\Controllers\ContenidosController@ListarCalificada | web          |
|        | GET|HEAD | api/user                   |      | Closure                                                    | api,auth:api |
|        | GET|HEAD | categorias                 |      | App\Http\Controllers\TestController@selectCategorias       | web          |
|        | GET|HEAD | contenidos                 |      | App\Http\Controllers\TestController@selectContenido        | web          |
|        | GET|HEAD | home                       |      | Illuminate\Routing\ViewController                          | web          |
|        | GET|HEAD | tipos                      |      | App\Http\Controllers\TestController@selectTipoContenido    | web          |
+--------+----------+----------------------------+------+------------------------------------------------------------+---------


## prueba
en la carpeta postman se encuntra un archivo prueba.postman_collection que puede ser importado para probar las rutas


## Documentacion
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
