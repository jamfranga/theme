<?php

namespace App\View\Components;

use App\Models\Noticia;
use Carbon\Carbon;
use Illuminate\View\Component;

class NoticiaForm extends Component
{
    /**
     * Create a new component instance.
     *@param \App\Models\Noticia
     * @return void
     */

    private $noticia;

    public function __construct($noticia = null)
    {
        

        if (is_null($noticia)){
            $noticia=Noticia::make([
                'titulo' => '',
                'resumen' => '',
                'texto' =>  '',
                'fecha_noticia' => Carbon::now(),

            ]);
        }
        $this->noticia=$noticia;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'noticia' => $this->noticia,
        ];
        return view('components.noticia-form',$params);
    }
}
