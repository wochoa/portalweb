<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class Paginaweb extends Controller
{
    public function menus()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $iddireccionweb=$portalesweb;//id de pagina web

        $menus=DB::table('menus')->where(['iddirecciones_web'=>$iddireccionweb,'activo_menu'=>1])->orderBy('idmenus','ASC')->get();
        
        $datsubmenu=DB::table('submenu')->join('menus','submenu.idmenus','=','menus.idmenus')->where(['activo_submenu'=>1,'iddirecciones_web'=>$iddireccionweb])->select('submenu.idsubmenu','submenu.nom_submenu','submenu.link_submenu','submenu.archivo','submenu.idpagina','submenu.ico_submenu','submenu.idmenus')->orderBy('submenu.idmenus','ASC')->get();

        
        return response()->json(['menus'=>$menus,'submenus'=>$datsubmenu], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
        
    }
    public function convocatorias()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $iddireccionweb=$portalesweb;//id de pagina web

        $proceso=DB::table('cas_proceso_seleccion')->where('iddireccionweb',$iddireccionweb)->orderBy('id_proc_sel_cas','DESC')->get();
        $i=1;
        $archivos=DB::table('archivo_sel_cas')->join('cas_proceso_seleccion','archivo_sel_cas.id_proceso_selec','=','cas_proceso_seleccion.id_proc_sel_cas')->where('iddireccionweb',$iddireccionweb)->select('idarchivo_sel_cas','nom_archivo','url_archivo','archivo_sinurl','etapa','id_proceso_selec')->orderBy('idarchivo_sel_cas','ASC')->get();
        foreach($proceso as $itemproc)
        {
            $final=[];
            $entrevista=[];
            $curricular=[];
            $inscripcion=[];

            for($j=0;$j<Count($archivos);$j++)
            {
                if($itemproc->id_proc_sel_cas==$archivos[$j]->id_proceso_selec)
                {
                    if($archivos[$j]->etapa=='FINAL'){
                        $final[]=array('nom_archivo'=>$archivos[$j]->nom_archivo,'url_archivo'=>$archivos[$j]->url_archivo);
                    }
                    if($archivos[$j]->etapa=='ENTREVISTA'){
                        $entrevista[]=array('nom_archivo'=>$archivos[$j]->nom_archivo,'url_archivo'=>$archivos[$j]->url_archivo);
                    }
                    if($archivos[$j]->etapa=='CURRICULAR'){
                        $curricular[]=array('nom_archivo'=>$archivos[$j]->nom_archivo,'url_archivo'=>$archivos[$j]->url_archivo);
                    }
                    if($archivos[$j]->etapa=='INSCRIPCION'){
                        $inscripcion[]=array('nom_archivo'=>$archivos[$j]->nom_archivo,'url_archivo'=>$archivos[$j]->url_archivo);
                    }
                }
                //$detalles=array('inscripcion'=>$inscripcion,'curricular'=>$curricular,'entrevista'=>$entrevista,'final'=>$final);
               

            }
                $detalles=array('inscripcion'=>$inscripcion,'curricular'=>$curricular,'entrevista'=>$entrevista,'final'=>$final);

                $fechaini=$itemproc->proc_sel_cas_fecha_inicio;
                $fechains=$itemproc->cas_proc_sel_fecha_fin_inscripcion;
                $fechafin=$itemproc->proc_sel_cas_fecha_termino;
                $fecharesul=$itemproc->cas_proc_sel_fecha_resultados;

                $fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
                //para concluido el proceso fechaactual>fecharesultado
                if($fecha_actual>strtotime($fecharesul)){$colofondo='background:#ffe5e5;';$espan='badge bg-danger';$texto='CONCLUIDO';}
                 //para en proceso fechaactual>fechains y fechaactual<fechafin
                 if($fecha_actual>strtotime($fechains) and $fecha_actual<strtotime($fechafin)){$colofondo='background:#f7d097;';$espan='badge bg-warning';$texto='EN PROCESO';}
                 //para en proceso fechaactual>fechains y fechaactual<fechafin
                 if(($fecha_actual>strtotime($fechaini) or $fecha_actual<=strtotime($fechaini) ) and $fecha_actual<strtotime($fechains)){$colofondo='background:#c0e0d3;'; $espan='badge bg-success';$texto='NUEVO';}

                

            $newDatos[]=['idproceso'=>$itemproc->id_proc_sel_cas,'nom_proceso'=>$itemproc->proc_sel_cas_descripcion,'ini_insc'=>$itemproc->proc_sel_cas_fecha_inicio,'color_fondo'=>$colofondo,'span'=>$espan,'texto'=>$texto,'fin_insc'=>$itemproc->cas_proc_sel_fecha_fin_inscripcion,'fecha_res'=>$itemproc->cas_proc_sel_fecha_resultados,'detalle'=>$detalles];
        }

       

        return response()->json(['convocatorias'=>$newDatos]);
    }
    public function noticiasini()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $iddireccionweb=$portalesweb;//id de pagina web
        $publicacion=DB::table('noticias')->where(['activo'=>1,'iddirecciones_web'=>$iddireccionweb])->orderBy('idnoticias','DESC')->limit(8)->get();
        for($i=0;$i<count($publicacion);$i++)
        {
            $imagen=substr($publicacion[$i]->img1,7);
            $datos[]=array('idnoticias'=>$publicacion[$i]->idnoticias,'titulo'=>$publicacion[$i]->titulo,'contenido'=>$publicacion[$i]->contenido,'img1'=>$imagen,'fecha'=>$publicacion[$i]->fechapubli);
        }
        return response()->json(['noticias'=>$datos]);
    }
}
