
    @component('componets.formulario',[
            'formdata'=>array(
                    'form'=>'form',
                    'boton'=>'boton'
                    )
            ,
            'elementos'=>array(
                    'nombre'=>array(
                            'name'=>'nombre2',
                            'type'=>'date',
                            'Va1'=>'resquired:true'
                    )
            )])
    @endcomponent
    <br>
    <form id="form">
            campo
            <input>
            campo
            <input>
            campo
            <input>
            <input type=""
    </form>
    <br>
    <button id="boton">guarda</button> 