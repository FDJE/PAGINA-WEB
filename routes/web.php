<?php

use App\Http\Livewire\Admin\AdminAddAlianceComponent;
use App\Http\Livewire\Admin\AdminAddEventoComponent;
use App\Http\Livewire\Admin\AdminAddNoticeComponent;
use App\Http\Livewire\Admin\AdminAddProyectComponent;
use App\Http\Livewire\Admin\AdminAddSliderComponent;
use App\Http\Livewire\Admin\AdminAlianzasComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditAlianzaComponent;
use App\Http\Livewire\Admin\AdminEditEventoComponent;
use App\Http\Livewire\Admin\AdminEditNoticeComponent;
use App\Http\Livewire\Admin\AdminEditProyectComponent;
use App\Http\Livewire\Admin\AdminEditSliderComponent;
use App\Http\Livewire\Admin\AdminEventosComponent;
use App\Http\Livewire\Admin\AdminMensajesComponent;
use App\Http\Livewire\Admin\AdminNoticiasComponent;
use App\Http\Livewire\Admin\AdminProyectosComponent;
use App\Http\Livewire\Admin\AdminSliderComponent;
//add
use App\Http\Livewire\Admin\AdminEducacionComponent;
use App\Http\Livewire\Admin\AdminAddEducacionComponent;
use App\Http\Livewire\Admin\AdminEditEducacionComponent;
use App\Http\Livewire\Admin\HistoriComponents\HistoriCreateComponent;
use App\Http\Livewire\Admin\HistoriComponents\HistoriIndexComponent;
use App\Http\Livewire\Contactos\EncuentranosComponent;
use App\Http\Livewire\Contactos\FormulariosComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\DetailsNoticeComponent;
use App\Http\Livewire\Educacion\ActividadesFisicasYDeporteComponent;
use App\Http\Livewire\Educacion\GuiaParaPacientesYFamiliasComponent;
use App\Http\Livewire\Educacion\HiperglucemiaComponent;
use App\Http\Livewire\Educacion\HipoglucemiaComponent;
use App\Http\Livewire\Educacion\InsulinasComponent;
use App\Http\Livewire\Educacion\NutricionComponent;
use App\Http\Livewire\Educacion\PsicologiaComponent;
use App\Http\Livewire\Educacion\QueEsLaDiabetesComponent;
use App\Http\Livewire\Educacion\TiposDeDiabetesComponent;
use App\Http\Livewire\GaleriaComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Nosotros\ActividadesDeLaFHJEComponent;
use App\Http\Livewire\Nosotros\HistoriaComponent;
use App\Http\Livewire\Nosotros\LeccionesAprendidasEnElTrabajoComunitarioComponent;
use App\Http\Livewire\Nosotros\MisionVisionObjetivosComponent;
use App\Http\Livewire\Nosotros\PrincipiosDeTrabajoComponent;
use App\Http\Livewire\Nosotros\TransparenciaInstitucionalComponent;
use App\Http\Livewire\Servicios\AssesoriaNutricionalComponent;
use App\Http\Livewire\Servicios\ComunidadComponent;
use App\Http\Livewire\Servicios\RecursosParaDescargarComponent;
use App\Http\Livewire\Servicios\VentaDeInsumosComponent;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


//HOME
Route::get('/', HomeComponent::class);

//NOSOTROS
Route::get('historia', HistoriaComponent::class);
Route::get('mision-vision-objetivos', MisionVisionObjetivosComponent::class);
Route::get('principios-de-trabajo', PrincipiosDeTrabajoComponent::class);
Route::get('actividades-de-la-fdje', ActividadesDeLaFHJEComponent::class);
Route::get('lecciones-aprendidas-en-el-trabajo-comunitario', LeccionesAprendidasEnElTrabajoComunitarioComponent::class);
Route::get('transparencia-institucional', TransparenciaInstitucionalComponent::class);

//EDUCACION
Route::get('que-es-la-diabetes', QueEsLaDiabetesComponent::class);
Route::get('guia-para-pacientes-y-familias', GuiaParaPacientesYFamiliasComponent::class);
Route::get('tipos-de-diabetes', TiposDeDiabetesComponent::class);
Route::get('hipoglucemia', HipoglucemiaComponent::class);
Route::get('hiperglucemia', HiperglucemiaComponent::class);
Route::get('insulinas', InsulinasComponent::class);
Route::get('nutricion', NutricionComponent::class);
Route::get('actividades-fisicas-y-deporte', ActividadesFisicasYDeporteComponent::class);
Route::get('psicologia', PsicologiaComponent::class);

//SERVICIOS
Route::get('assesoria-nutricional', AssesoriaNutricionalComponent::class);
Route::get('recursos-para-descargar', RecursosParaDescargarComponent::class);
Route::get('venta-de-insumos', VentaDeInsumosComponent::class);
Route::get('comunidad', ComunidadComponent::class);

//CONTACTOS
Route::get('encuentranos', EncuentranosComponent::class);
Route::get('formularios', FormulariosComponent::class);

//GALERIA
Route::get('galeria', GaleriaComponent::class);

//DETALLES
Route::get('/eventos/{slug}', DetailsComponent::class)->name('eventos.details');
Route::get('/noticias/{slug}', DetailsNoticeComponent::class)->name('noticias.details');

//For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){

    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    //histori
    Route::prefix('/admin/dashboard')->group(function(){
         Route::get('', AdminDashboardComponent::class)->name('admin.dashboard');
         Route::prefix('/histori')->group(function(){
            Route::get('',HistoriIndexComponent::class)->name('admin.dashboard.histori-components.histori-index-componen');
            Route::get('/create',HistoriCreateComponent::class)->name('admin.dashboard.histori-components.histori-create-componen');
         });
    });

    Route::get('/admin/slider', AdminSliderComponent::class)->name('admin.slider');
    Route::get('/admin/slider/add', AdminAddSliderComponent::class)->name('admin.addslider');
    Route::get('/admin/slider/edit/{sliders_image}', AdminEditSliderComponent::class)->name('admin.editslider');

    Route::get('/admin/eventos', AdminEventosComponent::class)->name('admin.eventos');
    Route::get('/admin/eventos/add', AdminAddEventoComponent::class)->name('admin.addevent');
    Route::get('/admin/eventos/edit/{eventos_slug}', AdminEditEventoComponent::class)->name('admin.editevent');

    Route::get('/admin/noticias', AdminNoticiasComponent::class)->name('admin.noticias');
    Route::get('/admin/noticias/add', AdminAddNoticeComponent::class)->name('admin.addnotice');
    Route::get('/admin/noticias/edit/{noticias_slug}', AdminEditNoticeComponent::class)->name('admin.editnotice');


    Route::get('/admin/proyectos', AdminProyectosComponent::class)->name('admin.proyectos');
    Route::get('/admin/proyectos/add', AdminAddProyectComponent::class)->name('admin.addproject');
    Route::get('/admin/proyectos/edit/{proyectos_name}', AdminEditProyectComponent::class)->name('admin.editproject');


    Route::get('/admin/alianzas', AdminAlianzasComponent::class)->name('admin.alianzas');
    Route::get('/admin/alianzas/add', AdminAddAlianceComponent::class)->name('admin.addaliance');
    Route::get('/admin/alianzas/edit/{alianzas_name}', AdminEditAlianzaComponent::class)->name('admin.editaliance');


    Route::get('/admin/mensajes', AdminMensajesComponent::class)->name('admin.mensajes');
    // add
    Route::get('/admin/educacion', AdminEducacionComponent::class)->name('admin.educacion');
    Route::get('/admin/educacion/add', AdminAddEducacionComponent::class)->name('admin.addedu');
    Route::get('/admin/educacion/edit/{eventos_slug}', AdminEditEducacionComponent::class)->name('admin.editedu');


}) ;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
