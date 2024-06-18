@include('welcome')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0">
            <img src="{{ asset('media/services_img/banner_Empresa_2400x1000px.jpg') }}" alt="" class="img-fluid ">
        </div>
    </div>

    <div class="row custom-grid">
        <div class="row flex-row">
            <div class="col-md-5 order-3">
                <img src="{{ asset('media/services_img/img_quienesomos_1.jpg') }}" alt="Imagen Principal">
            </div>
            <div class="col-md-2 flex-column align-self-center order-2">
                <div class="col-12 mb-4">
                    <img src="{{ asset('media/services_img/img_quienesomos_2.jpg') }}" alt="Imagen Secundaria 1">
                </div>
                <div class="col-12 mb-4">
                    <img src="{{ asset('media/services_img/img_quienesomos_3.jpg') }}" alt="Imagen Secundaria 2">
                </div>
            </div>
            <div class="col-md-5 align-self-center order-1">
                <h2 class="text-shadow">¿QUIÉNES SOMOS?</h2>
                <p class="lh-lg">
                    Somos una empresa 100% mexicana establecida en 1999 con casi 25 años de experiencia en el sector
                    eléctrico y de telecomunicaciones en el estado de Jalisco. <br>
                    Nos dedicamos a la investigación, fabricación, desarrollo e innovación de soluciones a mercados
                    eléctricos, de automatización, construcción y telecomunicaciones eficientes. <br>
                    Basamos nuestro crecimiento en la fortaleza que nos dan nuestros tres pilares principales:
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 department-info">
                <img src="{{ 'media/icons/3.webp' }}" alt="Icono Ingeniería">
                <h3>Departamento de Ingeniería y Desarrollo</h3>
                <p>
                    En el que se invierte año con año un alto porcentaje de las utilidades con el objetivo de permanecer
                    en la vanguardia del desarrollo tecnológico.
                </p>
            </div>
            <div class="col-md-4 department-info">
                <img src="{{ 'media/icons/7.webp' }}" alt="Icono Administrativo">
                <h3>Departamento Administrativo</h3>
                <p>
                    Quienes se encargan del buen manejo y uso eficiente de los recursos de nuestra empresa.
                </p>
            </div>
            <div class="col-md-4 department-info">
                <img src="{{ 'media/icons/6.webp' }}" alt="Icono Comercial">
                <h3>Departamento Comercial</h3>
                <p>
                    Formado por profesionales y especialistas quienes ponen a tu disposición nuestros productos, dan
                    soporte, respaldo y asesoría a todos nuestros distribuidores y canales.
                </p>
            </div>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-5">
            <h1 class="text-secondary text-shadow">¿QUE HACEMOS?</h1>
            <span>Nos dedicamos al desarrollo y fabricación de soluciones integrales para 5 de los sectores más importantes de la industria</span>
        </div>
        <div class="col-7">
            <div id="customHorizontalCarousel" class="custom-horizontal-carousel">
                <div class="custom-horizontal-carousel-inner">
                    <div class="custom-carousel-item">
                        <img src="media/services_img/Refrigeracion.webp" alt="Refrigeracion" class="img-fluid">
                    </div>
                    <div class="custom-carousel-item mx-2">
                        <img src="media/services_img/Telemetriaycontrol.webp" alt="Telemetriaycontrol" class="img-fluid">
                    </div>
                    <div class="custom-carousel-item bg-danger">
                        <span>Elemento 3</span>
                    </div>
                    <div class="custom-carousel-item bg-danger mx-2">
                        <span>Elemento 4</span>
                    </div>
                    <div class="custom-carousel-item bg-danger">
                        <span>Elemento 5</span>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn rounded-1 bg-secondary p-2 mt-1" onclick="prevCustomSlide()" style="background-color: transparent; border: none; padding: 0;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="24" height="24">
                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" fill="black"/>
                    </svg>
                </button>

                <button class="btn rounded-1 bg-secondary p-2 mt-1 ms-1" onclick="nextCustomSlide()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="24" height="24">
                        <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" fill="black"/>
                    </svg>
                </button>


            </div>
        </div>
    </div>
    <div class="row p-5">
        <hr class="border border-primary border-3 opacity-75">
        <div class="col-md-8 ">
            <h3>Diseñamos soluciones innovadoras con respaldo tecnológico que fabricamos cuidando los más estrictos estándares de calidad, entre nuestras líneas de productos contamos con:</h3>
        </div>
            <div class="col-md-6">
                <ul class="custom-list">
                    <li>Sistemas de tierras físicas.</li>
                    <li>Sistemas de pararrayos.</li>
                    <li>Supresores de picos transitorios.</li>
                    <li>Equipos de medición y analizadores de calidad de energía.</li>
                    <li>Equipos de automatización y control.</li>
                    <li>Bancos de capacitores.</li>
                    <li>Filtros de armónicas.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="custom-list">
                    <li>UPS (Uninterruptible Power Supply).</li>
                    <li>Torres arriostradas.</li>
                    <li>Torres de iluminación.</li>
                    <li>Luminarias ahorradoras para uso interior y exterior.</li>
                    <li>Unidades condensadoras de refrigeración.</li>
                    <li>Shelters.</li>
                    <li>Aires acondicionados tipo mochila.</li>
                </ul>
            </div>
    </div>
    <div class="row">
        <div class="parallax"></div>
        <div class="d-flex flex-column flex-md-row justify-content-center p-0">
            <div class="col-12 col-md-4 position-relative">
                <div class="image-container">
                    <img src="{{ 'media/services_img/collage_nosotros.webp' }}" alt=""
                        class="img-fluid h-75 w-100 object-fit-cover">
                    <div class="position-absolute top-50 start-50 translate-middle text-white  p-3 p-md-0">
                        <h1 class="fw-bold fs-1 text-white">MISIÓN</h1>
                        <span class="lh-normal fw-normal text-start">Expandir nuestro mercado de distribución Nacional e
                            Internacional para consolidarnos como fabricantes líderes en el mercado eléctrico, de
                            telecomunicaciones y automatización.
                        </span>
                        <hr class="border border-secondary border-3 opacity-75 rounded-4 mx-5">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 position-relative">
                <div class="image-container">
                    <img src="{{ 'media/services_img/porqueelegirTG2a.jpg' }}" alt=""
                        class="img-fluid h-75 w-100 object-fit-cover">
                    <div class="position-absolute top-50 start-50 translate-middle text-white p-3 p-md-0">
                        <h1 class="fw-bold fs-1 text-white">VISIÓN</h1>
                        <span class="lh-normal fw-normal text-start">Diseñar, fabricar, desarrollar, comercializar
                            equipos y tecnología de calidad para la protección y calidad de energía eléctrica, cubriendo
                            las necesidades de nuestros clientes y del mercado.
                        </span>
                        <hr class="border border-secondary border-3 opacity-75 rounded-4 mx-5">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 position-relative">
                <div class="image-container">
                    <img src="{{ 'media/services_img/collage_nosotros.webp' }}" alt=""
                        class="img-fluid h-75 w-100 object-fit-cover">
                    <div class="position-absolute top-50 start-50 translate-middle text-white p-3">
                        <h1 class="fw-bold fs-1 text-white">VALORES</h1>
                        <span class="fw-semibold">Nos caracterizan nueve valores fundamentales que son:</span>
                        <ul class="lh-sm lh-md-normal fw-normal text-start fs-6">
                            <li>Compromiso</li>
                            <li>Satisfacer las expectativas y necesidades de nuestros clientes.</li>
                            <li>Mejora continua.</li>
                            <li>Calidad</li>
                            <li>Responsabilidad</li>
                            <li>Ética.</li>
                            <li>Desarrollo de personal</li>
                            <li>Trabajo en equipo</li>
                            <li>Responsabilidad ambiental</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax"></div>
    </div>
    <div class="row">
        <div class="col-12 p-0 position-relative">
            <img src="{{ 'media/services_img/Presencia-Internacional.jpg' }}" alt=""
                 class="w-100 h-50 object-fit-cover img-fluid">
            <div class="d-flex align-items-center position-absolute top-0 end-0 h-50 text-white fw-bold p-3" style="max-width: 50%;">
                <div class="text-end me-5">
                    <h1 class="text-white fw-bold text-md-start">COBERTURA</h1>
                    <span class="fs-6 fw-light lh-sm text-start d-block">
                        Con oficinas corporativas, planta de producción en Zapopan, Jalisco, oficinas de atención de CDMX y especialistas técnicos en las principales ciudades del país mediante lo cual damos atención a lo largo y ancho de la república mexicana. <br><br>
                        Contamos con cobertura en todo el país mediante nuestros distribuidores autorizados quienes nos ayudan a llevar nuestras soluciones hasta donde sean requeridos. <br><br>
                        Exportamos nuestras soluciones a más de 12 países del centro y Sudamérica así como a Estados Unidos y Canadá. <br> <br>
                    </span>
                    <h1 class="text-white fw-bold text-md-start ">NUESTRA FILOSOFÍA DE NEGOCIO</h1>
                    <span class="fs-6 fw-light lh-sm text-start  d-block">
                        En Total Ground suministramos productos y servicios de alta calidad elaborados bajo los parámetros de ingeniería más estrictos y avanzados, estamos comprometidos con el cambio permanente que implica innovar, y con la creación de valor que buscamos al ofrecer mejores productos y servicios a nuestros clientes que satisfagan sus necesidades y excedan sus expectativas. <br>
                        ▸ Creamos relaciones de negocio a largo plazo, productivas para ambas partes basadas en la lealtad al canal. <br>
                        ▸ Apoyamos a nuestros canales de distribución quienes facilitan la llegada de nuestros productos al usuario final. <br>
                        ▸ Nos comprometemos a entregar lo mejor de nuestros productos, con el mejor tiempo de entrega al mejor costo.
                    </span>
                </div>
            </div>
        </div>

    </div>

</div>
<script>
            let currentIndex = 0;

        function updateCustomCarousel() {
            const carouselInner = document.querySelector('.custom-horizontal-carousel-inner');
            const itemWidth = document.querySelector('.custom-carousel-item').offsetWidth;
            carouselInner.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
        }

        function prevCustomSlide() {
            if (currentIndex > 0) {
                currentIndex--;
                updateCustomCarousel();
            }
        }

        function nextCustomSlide() {
            const carouselInner = document.querySelector('.custom-horizontal-carousel-inner');
            const totalItems = document.querySelectorAll('.custom-carousel-item').length;
            if (currentIndex < totalItems - 3) {
                currentIndex++;
                updateCustomCarousel();
            } else {
                currentIndex = 0;
                updateCustomCarousel();
            }
        }

        function autoSlide() {
            nextCustomSlide();
        }

        // Automatically move to the next slide every 3 seconds
        setInterval(autoSlide, 3000);
</script>
